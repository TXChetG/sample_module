<?php if (isset($page['header'])) : ?>
  <?php include_once( drupal_get_path('module','sample_module') . '/templates/ola_header.php'); ?>
<?php endif; ?>

<div id="mainContent" role="main" tabindex="0" class="body-info page-content">      
  <section class="heroBanner heroBanner--headerHero">
      <div class="heroBanner__content heroBanner__content--alignLeft-null">
          <div class="heroBanner__headline">
          <h1 class="displayHeadline"><span class="subhead">Open Learning Academy</span><br/>Opening Doors<br/>to Opportunity</h1>
          </div>
          <div class="heroBanner__copy heroBanner__copy--small">
              <p>Doane’s Open Learning Academy was first created for healthcare professionals seeking to fill in gaps in their transcripts in order to further their education and advance their careers. Over time, it became more and more evident that students in a wide variety of disciplines could benefit from OLA courses. So we expanded our course offerings to include not only science but also business, humanities, and math classes. Now our students can advance in just about any field—and because OLA courses are completely online, our students never have to put their lives on hold to do it.</p>
          </div>
      </div>
  
      <img src='/<?php echo drupal_get_path('module','sample_module'); ?>/assets/img/bg-hero_mask.svg' class="inject-me heroBanner__mask"/>
  </section>
  
  <section id="about-doane" class="copyBlock copyBlock--twoColumnImage copyBlock--twoColumnImage--medium">
      <header class="sectionHeader sectionHeader--centerAlign">
          <h2>The Difference is Doane</h2>
      </header>
      <div class="copyBlock__column copyBlock__column--media">
          <img class="image--accentLeft" src="/<?php echo drupal_get_path('module','sample_module'); ?>/assets/img/DoaneCampus_flyover2.jpg" width="580" height="466" alt="Photo of Doane University"/>
      </div>
      <div class="copyBlock__column copyBlock__column--text">
          <p class="lead">
          Innovation, connection, and quality education firmly rooted in real-world preparation—these values are held in high esteem at Doane University. For more than 140 years, we’ve been achieving excellence in a broad range of academic fields while equipping students with everything needed for success and leadership, all while continually pushing boundaries forward and finding new ways to empower individuals. Now we’ve expanded our impact across the country—thanks to the Open Learning Academy, everyone can experience the Doane Difference.
          </p>
      </div>
  </section>
  
  <?php echo views_embed_view( 'proof_points_v2', 'proof_points_ola_about_us' ); ?>
  
  <section id="staff-listing" class="staffCard staffCard__block">
      <header class="sectionHeader sectionHeader--centerAlign">
          <h2>Meet Our Staff</h2>
          <div class="sectionHeader__intro">
              <p class="lead">
              As an Open Learning Academy student, you’ll have access to a team of real professionals who make it their priority to help you succeed. The same individuals who administer the program and develop the courses are available to guide and support you in your learning.
              </p>
          </div>
      </header>
      <?php echo views_embed_view( 'people_glossary', 'person_directory_ola_staff' ); ?>
      <?php echo views_embed_view( 'people_glossary', 'person_directory_ola_faculty' ); ?>  
  </section>

  <section class="cta">
      <div class="cta__content">
          <div class="cta__copy">
          <h2>Is Doane University<br>Right for You?</h2>
          </div>
          <div class="cta__action">
          <a class="button xlarge button__chat uppercase" href="https://doane.edu">Discover the Difference<i></i></a>
          </div>
      </div>
  </section>
</div>

<?php if (isset($page['footer'])) : ?>
  <?php include_once( drupal_get_path('module','sample_module') . '/templates/ola_footer.php'); ?>
<?php endif; ?>