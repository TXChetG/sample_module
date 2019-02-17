<?php if (isset($page['header'])) : ?>
  <?php include_once( drupal_get_path('module','sample_module') . '/templates/ola_header.php'); ?>
<?php endif; ?>

<style>
  .programCard {display:none;}
</style>

<script>
  //Implement YouTube JS API for frontpage video
  //Load API Asynchronously
  var yt_api_tag = document.createElement('script');
  yt_api_tag.id = 'youtube-js-api';
  yt_api_tag.src = 'https://www.youtube.com/iframe_api';
  var firstScriptTag = document.getElementsByTagName('script')[0];
  firstScriptTag.parentNode.insertBefore(yt_api_tag, firstScriptTag);
  //Player instance and control functions
  var player;
  function onYouTubeIframeAPIReady() {
    player = new YT.Player('heroVideo__embed', {
      events: {
        'onReady' : readyPlayerOne,
      }
    });
  }

  function readyPlayerOne(e) {
    console.log('YT API is Go.');
  }
</script>

<div id="mainContent" role="main" tabindex="0" class="body-info page-content">
  <?php if ($logged_in) : ?>
    <?php print render($tabs); ?>
  <?php endif; ?>
  <section class="heroBanner heroBanner--headerHero">
    <div class="heroBanner__content">
      <div class="heroBanner__headline">
        <h1 class="displayHeadline"><span class="nobr">Real Support</span> <br/>for <span class="nobr">Real Ambition</span></h1>
      </div>
      <div class="heroBanner__copy">
        <p>The Open Learning Academy is here to set you up for success with the courses you need for the life you want. Earn your credit. <span class="nobr">Pursue your dreams.</span> <strong>THRIVE!</strong></p>
      </div>
      <!-- <div class="heroBanner__actions">
        <button class="button reverse large icon icon--right uppercase" data-open="heroVideo">
          Discover Open Learning
          <img src="/<?php echo drupal_get_path('module','sample_module'); ?>/assets/img/icons/icon_VideoPlay.svg" class="inject-me"/>
        </button>
        <div class="large reveal reveal__videoWrapper" id="heroVideo" data-reveal>
          <div class="responsive-embed widescreen">
            <iframe id="heroVideo__embed" width="560" height="315" src="https://www.youtube.com/embed/LYv4nzr1UMw?enablejsapi=1" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
          <button class="close-button" data-close aria-label="Close modal" type="button">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
      </div> -->
    </div>
  
    <?php echo views_embed_view( 'proof_points_v2', 'proof_points_ola_home' ); ?>
  
    <img src='/<?php echo drupal_get_path('module','sample_module'); ?>/assets/img/bg-hero_mask.svg' class="inject-me heroBanner__mask"/>
  </section>
  
  <section id="homepage-program-filter" class="programCardFilter__block">
      <header class="sectionHeader sectionHeader--centerAlign">
      <h2>Find Your Course</h2>
    </header>
  
    <div class="programCardFilter__menuWrapper">
        <button class="programCardFilter__categorySelectToggle button" type="button" data-toggle="programCardFilter__menu--mobile">Select a Course Category</button>
        
      <ul class="programCardFilter__menu" data-position="bottom" data-alignment="center" id="programCardFilter__menu--mobile" data-dropdown data-auto-focus="true">
        <li><a class="programCardFilter__menuButton" data-filter="all"><div class="menu-icon__wrapper"><img src="/<?php echo drupal_get_path('module','sample_module'); ?>/assets/img/icons/icon_cardMenu_ViewAll.svg" width="54" height="54" class="inject-me programCardFilter__menuIcon"></div> <span>All Courses</span></a></li>
        <li><a class="programCardFilter__menuButton" data-filter="biological-sciences"><div class="menu-icon__wrapper"><img src="/<?php echo drupal_get_path('module','sample_module'); ?>/assets/img/icons/icon_cardMenu_BiologicalScience.svg" width="54" height="54" class="inject-me programCardFilter__menuIcon"></div> <span>Biological<span class="hide-for-medium">&nbsp;</span><span class="show-for-medium"><br /></span>Sciences</span></a></li>
        <li><a class="programCardFilter__menuButton" data-filter="business"><div class="menu-icon__wrapper"><img src="/<?php echo drupal_get_path('module','sample_module'); ?>/assets/img/icons/icon_cardMenu_Business.svg" width="54" height="54" class="inject-me programCardFilter__menuIcon"></div> <span>Business</span></a></li>
        <li><a class="programCardFilter__menuButton" data-filter="humanities"><div class="menu-icon__wrapper"><img src="/<?php echo drupal_get_path('module','sample_module'); ?>/assets/img/icons/icon_cardMenu_Humanities.svg" width="54" height="54" class="inject-me programCardFilter__menuIcon"></div> <span>Humanities</span></a></li>
        <li><a class="programCardFilter__menuButton" data-filter="human-sciences"><div class="menu-icon__wrapper"><img src="/<?php echo drupal_get_path('module','sample_module'); ?>/assets/img/icons/icon_cardMenu_HumanSciences.svg" width="54" height="54" class="inject-me programCardFilter__menuIcon"></div> <span>Human<span class="hide-for-medium">&nbsp;</span><span class="show-for-medium"><br /></span>Sciences</span></a></li>
        <li><a class="programCardFilter__menuButton" data-filter="mathematics"><div class="menu-icon__wrapper"><img src="/<?php echo drupal_get_path('module','sample_module'); ?>/assets/img/icons/icon_cardMenu_Mathematics.svg" width="54" height="54" class="inject-me programCardFilter__menuIcon"></div> <span>Mathematics</span></a></li>
        <li><a class="programCardFilter__menuButton" data-filter="physical-sciences"><div class="menu-icon__wrapper"><img src="/<?php echo drupal_get_path('module','sample_module'); ?>/assets/img/icons/icon_cardMenu_PhysicalSciences.svg" width="54" height="54" class="inject-me programCardFilter__menuIcon"></div> <span>Physical<span class="hide-for-medium">&nbsp;</span><span class="show-for-medium"><br /></span>Sciences</span></a></li>
      </ul>
    </div>

    <?php echo views_embed_view( 'online_courses', 'all_online_courses' ); ?>

  
    <div class="programCardFilter__actions">
      <div class="programCardFilter__actions--wrapper">
        <button type="button" id="course_list_more" class="button pill secondary uppercase">More Courses
        </button>
  
        <div class="loader loader--secondary hide" title="0" data-loading-end>
            <svg version="1.1" id="loader-1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
              width="40.5px" height="40.5px" viewBox="0 0 40 40" enable-background="new 0 0 40 40" xml:space="preserve">
            <path opacity="0.2" fill="#000" d="M20.201,5.169c-8.254,0-14.946,6.692-14.946,14.946c0,8.255,6.692,14.946,14.946,14.946
              s14.946-6.691,14.946-14.946C35.146,11.861,28.455,5.169,20.201,5.169z M20.201,31.749c-6.425,0-11.634-5.208-11.634-11.634
              c0-6.425,5.209-11.634,11.634-11.634c6.425,0,11.633,5.209,11.633,11.634C31.834,26.541,26.626,31.749,20.201,31.749z"/>
            <path fill="#000" d="M26.013,10.047l1.654-2.866c-2.198-1.272-4.743-2.012-7.466-2.012h0v3.312h0
              C22.32,8.481,24.301,9.057,26.013,10.047z">
              <animateTransform attributeType="xml"
                attributeName="transform"
                type="rotate"
                from="0 20 20"
                to="360 20 20"
                dur="0.75s"
                repeatCount="indefinite"/>
              </path>
            </svg>
          </div>
      </div>
    </div>
  </section>
  
  <?php echo views_embed_view( 'Testimonials', 'testimonials_ola_home' ); ?>
  
  <section class="copyBlock copyBlock--full copyBlock--twoColumnImage">
    <div class="copyBlock__column copyBlock__column--media">
      <img class="image--accentLeft" src="/<?php echo drupal_get_path('module','sample_module'); ?>/assets/img/DoaneCampus_flyover_x2.jpg" width="580" height="466" alt="Photo of Doane University"/>
    </div>
    <div class="copyBlock__column copyBlock__column--text">
      <h3 class="headingSmall">Experience the Doane Difference, Wherever You Are</h3>
      <p class="lead">A fully accredited institution. A history of distinction spanning more than 140 years. Recognition of excellence from The Princeton Review, Forbes, Washington Monthly, and U.S. News and World Report. Doane University has a lot to offer students—and the Open Learning Academy means you can experience the benefits from anywhere. And because OLA credits are accepted by universities across the country (including top Ivy League schools), your education can get you where you want to go.</p>
      <a class="button" href="/open-learning/about-us">About Open Learning Academy</a>
    </div>
  </section>
  
  <section class="cta">
    <div class="cta__content">
      <div class="cta__copy">
        <h2>Not Sure if<br/>Open Learning Academy<br/>is Right for You?</h2>
      </div>
      <div class="cta__action">
        <a class="button xlarge button__chat uppercase" href="/open-learning/contact">Contact an Advisor<i></i></a>
      </div>
    </div>
  </section>
  
  </div>

  <script>
    jQuery(document).ready(function($){

      var callback_set_visible_class = function (element, visible){
        // if ( visible ){
        //   $(element).removeClass('programCard--hidden').addClass('programCard--visible');
        // } else {
        //   $(element).removeClass('programCard--visible').addClass('programCard--hidden');
        // }
      };

      var callback_set_display_prop = function(element){
        var width = window.innerWidth;
        var displayProp = 'flex';
        if ( width >= 1024 ){
          displayProp = 'grid'
        }
        $(element).css({
            'display': displayProp
          });
      };

      //Hide all but 12 Courses on Load
      var hide_extra_courses_on_load = function ( course_list_wrapper ){
        var course_list = jQuery( course_list_wrapper ).children();

        for ( var i = course_list.length; i > 1; i--){
          Foundation.Motion.animateOut( course_list[i], 'scale-out-down', callback_set_display_prop(course_list[i]));
        }
        return course_list;
      }

      //Show 12 Courses on Load
      var show_initial_courses_on_load = function ( course_list_wrapper ){
        var course_list = jQuery( course_list_wrapper ).children();

        for ( var i = 0; i < 12; i++){
          //jQuery( course_list[i] ).fadeOut();
          Foundation.Motion.animateIn( course_list[i], 'scale-in-up', callback_set_display_prop(course_list[i]));
        }
        return course_list;
      }

      //Show next 12 courses on button click
      var show_next_12_courses = function( course_list_wrapper, courses ){
        var courses_visible = jQuery( course_list_wrapper ).children( ':visible' );
        var visible_length = courses_visible.length;

        if ( visible_length < courses.length ){
          for ( var i = visible_length; i <= visible_length + 12; i++ ){
            //jQuery( courses[i] ).fadeIn();
            Foundation.Motion.animateIn( courses[i], 'scale-in-up', callback_set_display_prop(courses[i]));
          }
        } else {
          jQuery('#course_list_more').hide();
        }           
      }

      //var courses = hide_extra_courses_on_load('.programCardWrapper');
      var courses = show_initial_courses_on_load('.programCardWrapper');     

      jQuery('#course_list_more').click( function(){
        show_next_12_courses('.programCardWrapper', courses);
      } );

      jQuery(window).resize(function(){
        console.log(window.innerWidth);
        callback_set_display_prop('.programCard:visible');
      });

    });
  </script>

<?php if (isset($page['footer'])) : ?>
  <?php include_once( drupal_get_path('module','sample_module') . '/templates/ola_footer.php'); ?>
<?php endif; ?>