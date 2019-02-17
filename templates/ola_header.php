<div><a class="show-on-focus" href="#mainContent">Skip to Content</a></div>
<?php if ($logged_in) : ?>
  <style type="text/css">
  @media screen and (max-width: 962px) {
  	html body.admin-menu {
			margin-top: 56px !important;
  	}	
  }
  </style>
<?php endif; ?>
	<nav class="multilevel-offcanvas off-canvas position-right offCanvas__primary" id="offCanvasRight" data-off-canvas>
		<ul class="offCanvas__primary__navigation">
				<li><a href="/open-learning/how-it-works">How it Works</a></li>
				<li><a href="/open-learning/about-us">About Us</a></li>
		</ul>
		<div class="offCanvas__primary__action">
				<a href="/open-learning/get-started" class="button hollow uppercase primaryCTA">Get Started</a>
		</div>
	</nav>
	<div class="off-canvas-content" data-off-canvas-content>
		<header class="primaryHeader_container" data-sticky-container>
			<div class="primaryHeader" data-sticky data-stick-to="top" data-sticky-on="small" data-options="marginTop:0;" style="width:100%">
					<div class="primaryHeader__wrapper">
					<div class="primaryHeader__branding">
						<a class="link__home" href="/open-learning">
							<span class="show-for-sr">Return to Open Learning Academy Home</span>
							<img src="/<?php echo drupal_get_path('module','sample_module'); ?>/assets/img/logos/logo_sample_module-color-horizontal_2color.svg" height="40" width="226" class="inject-me branding__logo"/>
						</a>
					</div>
					<nav class="primaryHeader__navigation">
						<ul  class="navigation__primary">
							<li><a href="/open-learning/how-it-works">How it Works</a></li>
							<li><a href="/open-learning/about-us">About Us</a></li>
							<li><a href="/open-learning/get-started" class="button hollow uppercase primaryCTA">Get Started</a></li>
						</ul>
						<button class="offCanvas__trigger" type="button" data-open="offCanvasRight"></button>
					</nav>
				</div>
			</div>
		</header>