<?php render($content['metatags']); ?>
<?php if (isset($page['header'])) : ?>
	<?php	include_once( drupal_get_path('module','sample_module') . '/templates/ola_header.php'); ?>
<?php endif; ?>

<?php if (isset($page['content'])) : ?>
  <?php
  //Custom Metatags require $page['content'] and
  // $content['metatags'].
    render($page['content']);
    render($content['metatags']);

    function simplify_course_includes_array ( $arr ) {
      $includes_arr_simplified = array();

      for ($i=0; $i < count( $arr ); $i++) { 
        $included_item = $arr[$i]['value'];
        array_push($includes_arr_simplified, $included_item);
      }

      return $includes_arr_simplified;
    }

    function build_course_includes_list ( $includes ) {
      for ($i = 0; $i < count( $includes ) ; $i++) { 

        if ( $includes[$i] == 'Lectures'){
          $icon = '<img src ="/' . drupal_get_path('module','sample_module') . '/assets/img/icons/icon_lectures.svg" class="inject-me" width="18" height="18" alt="illustration of a person talking."/>';
        } else if ( $includes[$i] == 'Labs' ){
          $icon = '<img src ="/' . drupal_get_path('module','sample_module') . '/assets/img/icons/icon_labs.svg" class="inject-me" width="18" height="18" alt="illustration of a beaker."/>';
        }

        $list_item = '<li>' . $icon . ' ' . $includes[$i] . '</li>';

        echo $list_item;
      }
    }

    function print_related_courses ( $tid ) {
      $view = views_get_view('online_courses');
      $view -> set_display('related_course_block');
      $view -> set_arguments( array(
        render( $tid )
      ) );
      $view_output = $view -> preview();
      print $view_output;
    }

    $module_path = drupal_get_path('module','sample_module');
		$course_icon = $node->field_ola_icon['und'][0]['safe_value'];
		$course_icon_alt = $node->field_ola_icon_alt['und'][0]['safe_value']; // Probably not needed longterm.
		$course_id = $node->field_ola_course_id['und'][0]['safe_value'];
		$course_subject_tid = $node->field_ola_course_subject['und'][0]['tid'];
		$course_subject_term = taxonomy_term_load( $course_subject_tid );
		$course_subject = $course_subject_term->field_ola_filter_class['und'][0]['safe_value'];
		$credit_hours = $node->field_ola_credit_hours['und'][0]['value'];
		$course_fees = $node->field_ola_fees['und'][0]['value'];
		$course_includes = simplify_course_includes_array( $node->field_ola_course_includes['und'] );
		$required_materials = $node->field_ola_required_materials['und'][0]['safe_value'];
    $how_it_works_block = ( in_array('Labs', $course_includes) ? 'courseDescription_how_it_works_labs.tpl.php' : 'courseDescription_how_it_works.tpl.php');

    $enrollment_term_view = views_get_view('open_learning_enrollment_terms');
    $enrollment_term_view->set_display('current_enrollment_term');
    $enrollment_term_view->pre_execute();
    $enrollment_term_view->execute();
    $enrollment_term_view->render();

    $enrollment_term_start = $enrollment_term_view->field['field_ola_term_start_date']->last_render_text;
    $enrollment_term_register = substr($enrollment_term_view->field['field_ola_enroll_by_date']->last_render_text, -0, -6);

    function build_academic_calender_view($tid){
      $academic_calendar_view = views_get_view('open_learning_enrollment_terms');
      $academic_calendar_view->set_display('upcoming_term_list');
      $academic_calendar_view->set_arguments(array($tid));
      $academic_calendar_view->pre_execute();
      $academic_calendar_view->execute();

      return $academic_calendar_view->render();
    }

    function get_current_next_academic_year($current_year){
      $academic_year_vocab = taxonomy_vocabulary_machine_name_load('academic_year');
      $academic_years_arr = taxonomy_get_tree($academic_year_vocab->vid);
      $current_terms_arr = array();
      for ($i=0; $i < count($academic_years_arr); $i++) { 
        if ( $academic_years_arr[$i]->name == $current_year || $academic_years_arr[$i]->name == $current_year - 1) {
          $academic_year_view = build_academic_calender_view( $academic_years_arr[$i]->tid );
          array_push($current_terms_arr, $academic_year_view);
        }
      }
      return $current_terms_arr;
    }
    function print_upcoming_term_arr($arr){
      for ($i=0; $i < count($arr) ; $i++) { 
        print $arr[$i];
      }
    }

	?>
    <div id="mainContent" role="main" tabindex="0" class="body-info page-content">
    	<?php if ($logged_in) : ?>
        <?php print render($tabs); ?>
      <?php endif; ?>
      <section id="course-information" class="courseInformation">
        <article class="courseInformation__primary">
          <header class="courseInformation__primary__header">
            <div class="courseInformation__primary__header__icon">
              <div class="courseInformation__primary__header__iconWrapper">
                <?php echo $course_icon; ?>
              </div>
              </div>
              <div class="courseInformation__primary__header__title">
                <h1><?php echo $node->title; ?></h1>
                <ul class="courseInformation__primary__header__meta no-bullet horizontal-list">
                  <li>Course ID: <strong><?php echo $course_id ?></strong></li>
                  <li>Subject: <strong><?php echo $course_subject; ?></strong></li>
                </ul>
              </div>
          </header>
          <div class="courseInformation__primary__contentWrapper">
            <div class="courseInformation__primary__courseContent">
              <?php echo $node->body['und'][0]['safe_value']; ?>
            </div>
            <div class="courseInformation__primary__courseAddOns">
              <div class="courseInformation__primary__courseAddOns--column">
                <h2>Courses Include</h2>
                <ul class="courseInformation__courseIncludes no-bullet horizontal-list">
                  <?php build_course_includes_list( $course_includes ); ?>
                </ul>
              </div>
            </div>
            <div class="courseInformation__socialShare show-for-large">
              <?php include_once( drupal_get_path('module','sample_module') . '/templates/blocks/courseDescription_social_share_menu.tpl.php'); ?>
            </div>
          </div>
        </article>
        <aside class="courseInformation__secondary">
          <div class="courseInformation__secondary__costDetails">
          <div class="pricingTable__wrapper">
            <table class="courseInformation__costBreakdown pricingTable">
              <tbody>
                <tr>
                  <td class="column__icon">
                    <img src="/<?php echo $module_path; ?>/assets/img/icons/icon_PlusFlag.svg" class="inject-me" width="24" height="24"/>
                  </td>
                  <td class="column__header">
                    Credits
                  </td>
                  <td class="column__content">
                    <?php echo $credit_hours; ?>
                  </td>
                </tr>
                <tr>
                  <td class="column__icon">
                    <img src="/<?php echo $module_path; ?>/assets/img/icons/icon_PlusFlag.svg" class="inject-me" width="24" height="24"/>
                  </td>
                  <td class="column__header">
                    Tuition
                  </td>
                  <td class="column__content">
                    $376 <span class="note">per Credit Hour</span>
                  </td>
                </tr>
<?php
  if( !empty($course_fees) ){
    echo <<<EOD
<tr>
  <td class="column__icon">
    <img src="/$module_path/assets/img/icons/icon_PlusFlag.svg" class="inject-me" width="24" height="24"/>
  </td>
  <td class="column__header">
    Fees
  </td>
  <td class="column__content">
    &dollar;$course_fees <span class="note">per Credit Hour</span>
  </td>
</tr>
EOD;
  }
?>
              </tbody>
            </table>
            </div>
          <div class="courseInformation__secondary__costNote">
            <p>Beginning with term 19/HPMY, starting May 20, 2019, tuition rates will increase to $384 per credit hour.</p>
          </div>
          </div>

          <div class="courseInformation__secondary__termDetails">
            <h2><span class="subheader">Term Begins</span><br/><span class="show-for-medium-only">&nbsp;</span><?php echo $enrollment_term_start; ?></h2>
          </div>
          <div class="courseInformation__secondary__actions">
            <a class="button uppercase xlarge" href="/open-learning/get-started">Enroll Today</a>
            <p class="note no-spacing"><em>Enroll by <?php echo $enrollment_term_register ?> to reserve your place <span class="nobr">in the upcoming term.</span></em></p> 
        <button type="button" data-toggle="termSchedulePopover" class="button small underline" >View Term Schedule</a>
          </div>
        </aside>

        <div class="dropdown-pane dropdown__popover"
          id="termSchedulePopover"
          data-dropdown 
          data-position="top"
          data-alignment="center"
          data-v-offset="20"
          data-auto-focus="true"
          data-close-on-click="true"
          date-animate="fade-in fade-out"
        >
          <?php print_upcoming_term_arr(get_current_next_academic_year(date('Y'))); ?>
          
        </div>
        
        <div class="courseInformation__socialShare hide-for-large">
          <?php include_once( $module_path . '/templates/blocks/courseDescription_social_share_menu.tpl.php'); ?>
        </div>
      </section>
      
      <!-- <?php 
      // include_once( $module_path . '/templates/blocks/' . $how_it_works_block ); 
      ?> -->

        <section id="related-programs" class="programCard__block">
          <header class="sectionHeader sectionHeader--centerAlign">
            <h2>Related Courses</h2>
          </header>
          <?php
            print_related_courses ( $course_subject_tid );
          ?>
        </section>
        <section class="cta">
          <div class="cta__content">
            <div class="cta__copy">
              <h2>Have a Question<br/>About This Course?</h2>
            </div>
            <div class="cta__action">
              <a class="button xlarge button__chat uppercase" href="/open-learning/contact">Contact an Advisor<i></i></a>
            </div>
          </div>
        </section>
    </div>
<?php endif; ?>  

<?php if (isset($page['footer'])) : ?>
	<?php	include_once( drupal_get_path('module','sample_module') . '/templates/ola_footer.php'); ?>
<?php endif; ?>