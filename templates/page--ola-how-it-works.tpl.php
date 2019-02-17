<?php if (isset($page['header'])) : ?>
  <?php include_once( drupal_get_path('module','sample_module') . '/templates/ola_header.php'); ?>
<?php endif; ?>

<div id="mainContent" role="main" tabindex="0" class="body-info page-content">
    <h1 class="page-title show-for-sr">How It Works</h1>
      
    <section id="benefits-list" class="copyBlock copyBlock--twoColumnGrid">
      <header class="sectionHeader sectionHeader--centerAlign">
        <h2>Open Learning <span class="nobr">Works For You</span></h2>
      </header>
      <div class="copyBlock__node">
        <h3>Fill in the gaps.</h3>
        <p>Need science courses for medical school? Business or humanities credits for graduate studies? OLA’s course offerings are designed to set you up for success by building a strong foundation for further education.</p>
      </div>
      <div class="copyBlock__node">
        <h3>Learn from real professors.</h3>
        <p>The OLA offers all the benefits of a Doane education, experienced right where you are. Having access to Doane’s top professors means you always have the support you need to succeed.</p>
      </div>
      <div class="copyBlock__node">
        <h3>Learn faster.</h3>
        <p>OLA provides full courses in condensed, 8-week, terms. You learn the same material on a shorter timeline, so you can get it done and move on to your next step.</p>
      </div>
      <div class="copyBlock__node">
        <h3>Decide when you begin.</h3>
        <p>Each eight week course is offered five times a year, so you can learn whenever it works for you.</p>
      </div>
      <div class="copyBlock__node">
        <h3>Start without the hassle.</h3>
        <p>There's no application required to enroll in OLA courses. Just fill out the registration and payment details, and you’re ready for class.</p>
      </div>
      <div class="copyBlock__node">
        <h3>Take your credits with you.</h3>
        <p>OLA credits have been accepted at major learning institutions across the country, included top Ivy League schools. Wherever you’re headed, OLA can help get you there.</p>
      </div>
    </section>
      
      <section id="how-it-works" class="featureBlock featureBlock--twoColumn featureBlock--alternatingColumns">
        <header class="sectionHeader sectionHeader--centerAlign">
          <h2>How Open Learning Works</h2>
        </header>
      
        <article class="featureBlock__node">
          <div class="featureBlock__media">
            <img src="/<?php echo drupal_get_path('module','sample_module'); ?>/assets/img/illustrations/illustration_checkRegistrar.svg"
              width="270"
              height="270"
            />
          </div>
          <div class="featureBlock__details">
            <h3 class="featureBlock__title large"><span class="subhead">Step 1. </span>Check with <span class="nobr">Your Registrar</span></h3>
            <div class="featureBlock__copy">
              <p>OLA credits are accepted at most institutions across the country. Before enrolling, check to confirm with your institution that your course will transfer.</p>
            </div>
          </div>
        </article>
      
        <article class="featureBlock__node">
          <div class="featureBlock__media">
            <div class="featureBlock__media--wrapper">
              <img src="/<?php echo drupal_get_path('module','sample_module'); ?>/assets/img/illustrations/illustration_registerCourse.svg"
                width="270"
                height="270"
              />
            </div>
          </div>
          <div class="featureBlock__details">
            <h3 class="featureBlock__title large"><span class="subhead">Step 2. </span>Register for <span class="nobr">Your Course</span></h3>
            <div class="featureBlock__copy">
              <p>You don’t need to submit an application or a transcript to enroll in OLA courses. Simply fill out your registration and payment details and you’re ready to begin.</p>
            </div>
          </div>
        </article>
      
        <article class="featureBlock__node">
          <div class="featureBlock__media">
              <div class="featureBlock__media--wrapper">
                <img src="/<?php echo drupal_get_path('module','sample_module'); ?>/assets/img/illustrations/illustration_getDetails.svg"
                  width="270"
                  height="270"
                />
          </div>
          </div>
          <div class="featureBlock__details">
            <h3 class="featureBlock__title large"><span class="subhead">Step 3. </span>Get All <span class="nobr">the Details</span></h3>
            <div class="featureBlock__copy">
              <p>Once your registration is complete, you’ll receive information regarding textbooks, computer and email access, WebAdvisor, and Blackboard—everything you need to complete your OLA coursework.</p>
            </div>
          </div>
        </article>
      
        <article class="featureBlock__node">
          <div class="featureBlock__media">
              <div class="featureBlock__media--wrapper">
                <img src="/<?php echo drupal_get_path('module','sample_module'); ?>/assets/img/illustrations/illustration_finishIn8.svg"
                  width="270"
                  height="270"
                />
          </div>
          </div>
          <div class="featureBlock__details">
            <h3 class="featureBlock__title large"><span class="subhead">Step 4. </span>Finish in <span class="nobr">8 Weeks</span></h3>
            <div class="featureBlock__copy">
              <p>OLA courses are entirely online&mdash;even labs&mdash;and you complete weekly assignments at your own pace. Meet the deadlines, earn the credits, and round out your education.</p>
            </div>
          </div>
        </article>
        
        <article class="featureBlock__node">
          <div class="featureBlock__media">
              <div class="featureBlock__media--wrapper">
                <img src="/<?php echo drupal_get_path('module','sample_module'); ?>/assets/img/illustrations/illustration_transferCredits.svg"
                  width="270"
                  height="270"
                />
          </div>
          </div>
          <div class="featureBlock__details">
            <h3 class="featureBlock__title large"><span class="subhead">Step 5. </span>Transfer <span class="nobr">Your Credits</span></h3>
            <div class="featureBlock__copy">
              <p>You can choose to release your OLA grades to your institution as early as 30 days prior to final grades being posted.</p>
            </div>
          </div>
        </article>
      </section>
      
      <section id="faqs" class="faq faq--twoColumns">
        <header class="sectionHeader">
            <h2><span class="subhead">You Have Questions</span><br/>We Have Answers:</h2>
        </header>
        <article class="faq__content">
          <ul class="accordion faq__accordian is-active" data-accordion data-multi-expand="true" data-allow-all-closed="true">
            <li class="accordion-item faq__accordionItem" data-accordion-item>
              <a href="#" class="accordion-title faq__accordionTitle"><h3>Are these courses regionally accredited?</h3></a>
              <div class="accordion-content faq__accordionContent" data-tab-content>
                <p>Yes, Open Learning Academy courses are accredited through the <a href="https://www.hlcommission.org/" target="_blank">Higher Learning Commission</a>.</p>
              </div>
            </li>
            <li class="accordion-item faq__accordionItem" data-accordion-item>
              <a href="#" class="accordion-title faq__accordionTitle"><h3>Is it possible to <em>only</em> take a 1-credit lab without taking the entire course?</h3></a>
              <div class="accordion-content faq__accordionContent" data-tab-content>
                <p>No. At this time, all labs are integrated into the course which makes them four credit courses. Three-credit courses do not include a lab.</p>
              </div>
            </li>
            <li class="accordion-item faq__accordionItem" data-accordion-item>
              <a href="#" class="accordion-title faq__accordionTitle"><h3>Is federal financial aid available for Open Learning Academy courses?</h3></a>
              <div class="accordion-content faq__accordionContent" data-tab-content>
                <p>No, federal financial aid is not available for students who take these courses.</p>
              </div>
            </li>
            <li class="accordion-item faq__accordionItem" data-accordion-item>
              <a href="#" class="accordion-title faq__accordionTitle"><h3>Can students use Military Assistance/GI Bill to pay for courses?</h3></a>
              <div class="accordion-content faq__accordionContent" data-tab-content>
                <p>Yes, students can use Military Assistance/GI Bill to pay for courses. Veterans will have to apply for their benefits through the VONAPP and select Doane University. If benefits were used before, it is considered a "transfer of institution". Once Doane is listed, you will receive certification of eligibility for benefits that you can now use. Once you send the certification to Doane, your benefits will be activated in the Doane system. Sometimes students are paid directly and sometimes Doane is paid directly. If the VA pays the school directly, your bill will be deferred. If the VA makes a partial payment or if you receive funds directly, a bill will generated and sent to you. If less than 1/3 of the cost of the course is covered by your VA benefits, you must pay for the course in advance.</p>
              </div>
            </li>
            <li class="accordion-item faq__accordionItem" data-accordion-item>
              <a href="#" class="accordion-title faq__accordionTitle"><h3>Are payment plans available for these courses?</h3></a>
              <div class="accordion-content faq__accordionContent" data-tab-content>
                <p>No, due to the accelerated, non-degree seeking nature of these course, payment plans are not available for Open Learning Academy courses.</p>
              </div>
            </li> 
            <li class="accordion-item faq__accordionItem" data-accordion-item>
              <a href="#" class="accordion-title faq__accordionTitle"><h3>What is the refund policy?</h3></a>
              <div class="accordion-content faq__accordionContent" data-tab-content>
                <p>Student who choose to drop their course are eligible for a refund of their tuition through the first week of the term.</p>
                <ul>
                  <li>100% up until the first day of class</li>
                  <li>40% first week</li>
                  <li>$0 after first week</li>
                </ul>
              </div>
            </li>
            <li class="accordion-item faq__accordionItem" data-accordion-item>
              <a href="#" class="accordion-title faq__accordionTitle"><h3>Will I receive a Form 1098-T for these courses?</h3></a>
              <div class="accordion-content faq__accordionContent" data-tab-content>
                <p>No, the IRS does not require universities to provide Form 1098-T documents for non-degree seeking courses. Learn more about college credit requirements at <a href="https://www.irs.gov/credits-deductions/individuals/education-credits-questions-and-answers" target="_blank">IRS.gov</a>.</p>
              </div>
            </li>    
            </ul>
        </article>
      </section>
      
      <section class="cta cta--pushLeftLarge">
        <div class="cta__content">
          <div class="cta__copy">
            <h2>Have More Questions?</h2>
          </div>
          <div class="cta__action">
            <a class="button xlarge button__chat uppercase" href="/open-learning/contact">Contact an Advisor<i></i></a>
          </div>
        </div>
      </section>
      </div>

<?php if (isset($page['footer'])) : ?>
  <?php include_once( drupal_get_path('module','sample_module') . '/templates/ola_footer.php'); ?>
<?php endif; ?>