<?php

global $varCurrentPage;
$varCurrentPage = "page-legal";

get_header(); ?>

<!-- 	<nav class="legal">
		<div class="row">
			<div class="small-24 columns">
				<ul>
					<li><a href="">FAQs</a></li>
					<li class="active"><a href="">Privacy Policy</a></li>
					<li><a href="">Legal</a></li>
					<li><a href="">Support</a></li>
				</ul>
			</div>
		</div>
	</nav> -->

	<section id="privacy-policy" class="legal">
		<div class="row">
			<div class="small-24 columns">
				<h3>What if you need medical treatment right away?</h3>
				<p>Typically when you enroll in health insurance benefits through your employer, your insurance carrier can take a week – or more – to send your Medical ID Card.</p>
				<p>MedID is a mobile identification app that provides you with a secure, easy way to access your Medical ID Card as soon as your coverage is approved.* You can be seen sooner and avoid the hassle of not having your Medical ID Card when you need it.</p>
				<p class="note">Access your Medical ID Card when your health insurance begins.</p>
			</div>
		</div>
	</section><!-- #privacy-policy -->

	<section id="download-app">
		<div class="row">
			<div class="small-24 columns">
				<h4 class="section-title">Download The App</h4>
				<h2>It's Free.  Get MedID Today.</h2>
				<h3>Ask your employer how you can get started with the MedID app</h3>
				<h3>– now available for download at no cost</h3>
				<div class="store-links">
					<img src="<?= get_template_directory_uri(); ?>/img/assets/app-store-color.svg" alt="">
					<img src="<?= get_template_directory_uri(); ?>/img/assets/play-store-color.svg" alt="">
				</div>
			</div>

		</div>
	</section><!-- #download-app -->


<?php
get_footer();
