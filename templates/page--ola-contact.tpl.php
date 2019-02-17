<?php if (isset($page['header'])) : ?>
	<?php include_once( drupal_get_path('module','sample_module') . '/templates/ola_header.php'); ?>
<?php endif; ?>

<div id="mainContent" role="main" tabindex="0" class="body-info page-content">
			
			<section id="contact-advisor" class="contactForm__wrapper">
					<header class="sectionHeader">
							<h2><span class="subhead">Contact an Advisor</span><br/>We’re Here to Help</h2>
					</header>
			
					<form data-abide novalidate class="contactForm__form">
							<p class="lead">
								Doane advisors are here to answer any questions you may have and to help you navigate your Open Learning Academy enrollment. And once you’re registered, you’ll be assigned a personal advisor to assist with anything you might need to succeed. Fill out and submit the form below to contact an advisor today.
							</p>
							<div data-abide-error class="contactForm__alert callout alert" style="display: none;">
									<p><i class="fi-alert"></i> There are some errors in your form.</p>
							</div>
							<div class="contactForm__formRow contactForm__formRow--2Column">
									<div class="contactForm__formCell formInput--floatingLabel">
											<input id="contactFirstNameInput" type="text" aria-describedby="contactFirstNameLabel" aria-errormessage="contactFirstNameError" required pattern="alpha" name="f_name">
											<label id="contactFirstNameLabel" for="contactFirstNameInput">First Name</label>
											<span id="contactFirstNameError" role="alert" class="form-error">
													Enter your first name.
											</span>
									</div>
									
									<div class="contactForm__formCell formInput--floatingLabel">
											<input id="contactLastNameInput" type="text" aria-describedby="contactLastNameLabel" aria-errormessage="contactLastNameError" required pattern="alpha" name="l_name">
											<label id="contactLastNameLabel" for="contactLastNameInput">Last Name</label>
											<span id="contactLastNameError" role="alert" class="form-error">
													Enter your last name.
											</span>
									</div>
							</div>
							
							<div class="contactForm__formRow contactForm__formRow--2Column">
									<div class="contactForm__formCell formInput--floatingLabel">
											<input id="contactEmailInput" type="email" aria-describedby="contactEmailLabel" aria-errormessage="contactEmailError" required pattern="email" name="email">
											<label id="contactEmailLabel" for="contactEmailInput">Email</label>
											<span id="contactEmailError" role="alert" class="form-error">
													Enter a valid email.
											</span>
									</div>
									
									<div class="contactForm__formCell formInput--floatingLabel">
											<input id="contactPhoneInput" type="tel" aria-describedby="contactPhoneLabel" aria-errormessage="contactPhoneError" required pattern="^\D?(\d{3})\D?\D?(\d{3})\D?(\d{4})$" name="phone">
											<label id="contactPhoneLabel" for="contactPhoneInput">Phone</label>
											<span id="contactPhoneError" role="alert" class="form-error">
													Enter a valid phone number.
											</span>
									</div>
							</div>
			
							<div class="contactForm__formRow">
									<div class="contactForm__formCell formInput--boldOutline">
											<textarea name="contactMessage" rows="10" id="contactMessage" type="email" aria-describedby="contactMessageLabel" data-abide-ignore name="comments" ></textarea>
											<label id="contactMessageLabel" for="contactMessage">Message</label>
									</div>
							</div>
			
							<div class="contactForm__formRow contactForm__formActions">
									<div class="contactForm__formCell">
													<button class="button" type="submit" value="Submit">Submit</button>
									</div>
							</div>
							
					</form>

					<div class="contactForm__thanks">
						<p class="lead">Thank you for getting in touch! An advisor will be in contact with you soon. In the meantime, you can learn more about <a href="/open-learning/how-it-works">how courses work</a> or check out the <a href="/open-learning/get-started">Getting Started</a> page for details on how to complete your course registration.</p>
					</div>
			
					<aside class="contactForm__sidebar">
							<p class="note">Live support is available Monday thru Friday, 8 am–5 pm CST</p>
							<ul class="iconList">
									<li>
											<img src="/<?php echo drupal_get_path('module','sample_module'); ?>/assets/img/icons/icon_Phone.svg" width="14" height="14" class="inject-me iconList__icon">
											<div class="iconList__content">
													<a href="tel:1-844-321-6642"> (844) 321-6642</a><br/>
													<a href="tel:1-402-467-9000"> (402) 467-9000</a>
											</div>
									</li>
									<li>
											<img src="/<?php echo drupal_get_path('module','sample_module'); ?>/assets/img/icons/icon_Envelope.svg" width="14" height="14" class="inject-me iconList__icon">
											<div class="iconList__content">
													<a href="mailto:enrollment@doane.edu">enrollment@doane.edu</a>
											</div>
									</li>
							</ul>
					</aside>
			</section>
			</div>

<?php if (isset($page['footer'])) : ?>
	<?php include_once( drupal_get_path('module','sample_module') . '/templates/ola_footer.php'); ?>
<?php endif; ?>