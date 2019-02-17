<?php if (isset($page['header'])) : ?>
  <?php include_once( drupal_get_path('module','sample_module') . '/templates/ola_header.php'); ?>
<?php endif; ?>

<div id="mainContent" role="main" tabindex="0" class="body-info page-content">
      <section id="getting-started" class="copyBlock copyBlock--singleColumn">
          <header class="sectionHeader">
              <h2>Getting Started is Easy</h2>
              <div class="sectionHeader__intro">
                  <p class="lead">
                  No application is required to begin your studies with the Open Learning Academy. Just follow these steps to complete your OLA course registration, and you’ll be ready to start.
                  </p>
              </div>
          </header>
          <div class="copyBlock__column">
              <ul class="iconList iconList--featureList">
                  <li>
                      <div class="iconList__icon">
                          <img src="/<?php echo drupal_get_path('module','sample_module'); ?>/assets/img/icons/GetStarted_app-window-next.svg" width="64" class="inject-me"/>
                      </div>
                      <div class="iconList__content">
                              Visit Doane’s <a href="https://dcweb.doane.edu/WebAdvisor/WebAdvisor?type=M&constituency=WBCE&pid=CORE-WBCE&TOKENIDX=7536745730">WebAdvisor Portal</a> and click “Select Classes”
                      </div>
                  </li>
                  <li>
                      <div class="iconList__icon">
                          <img src="/<?php echo drupal_get_path('module','sample_module'); ?>/assets/img/icons/GetStarted_check-square.svg" width="64" class="inject-me"/>
                      </div>
                      <div class="iconList__content">
                              Check the box next to the courses you want to take and click “Submit”
                      </div>
                  </li>
                  <li>
                      <div class="iconList__icon">
                          <img src="/<?php echo drupal_get_path('module','sample_module'); ?>/assets/img/icons/GetStarted_user.svg" width="64" class="inject-me"/>
                      </div>
                      <div class="iconList__content">
                              Fill out your personal information
                      </div>
                  </li>
                  <li>
                      <div class="iconList__icon">
                          <img src="/<?php echo drupal_get_path('module','sample_module'); ?>/assets/img/icons/GetStarted_payment-options.svg" width="64" class="inject-me"/>
                      </div>
                      <div class="iconList__content">
                          Submit your payment information
                          <ul>
                              <li class="smallerText--1">Credit Card payments will incur a non-refundable convenience fee of 2.7%</li>
                              <li class="smallerText--1">e-Check payments will incur a non-refundable convenience fee of $1</li>
                          </ul>
                      </div>
                  </li>
                  <li>
                      <div class="iconList__icon">
                          <img src="/<?php echo drupal_get_path('module','sample_module'); ?>/assets/img/icons/GetStarted_button-click.svg" width="64" class="inject-me"/>
                      </div>
                      <div class="iconList__content">
                              Click “Continue” on the payment verification screen to receive the receipt for your payment.
                      </div>
                  </li>
              </ul>
              
              <a class="button large elementMarginTopXLarge" href="https://dcweb.doane.edu/WebAdvisor/WebAdvisor?type=M&constituency=WBCE&pid=CORE-WBCE&TOKENIDX=7536745730">Enroll Today</a>
          </div>
      </section>
      
      </div>

<?php if (isset($page['footer'])) : ?>
  <?php include_once( drupal_get_path('module','sample_module') . '/templates/ola_footer.php'); ?>
<?php endif; ?>