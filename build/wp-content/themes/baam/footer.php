<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Baam
 */

?>

<footer class="footer mb-n5">
	<div class="container-fluid padding">
		<div class="card border-0 border-radius-s copy-card horizontal bg-grey2 pb-5 px-2">
			<div class="row align-items-center">
				<div class="col-md-5 col-9 d-flex flex-md-row flex-column align-items-md-center justify-content-md-start">
					<a class="flex-grow-0 btn btn__high small text-left" data-toggle="collapse" href="#footerCollapse" role="button" aria-expanded="false" aria-controls="footerCollapse">
						BAAM
					</a>
					<span class="seps d-md-inline-block d-none">
						|
					</span>
					<a href="tel:+4401223203090" class="text-left flex-grow-0 btn btn__high small">
						01223 20 30 90
					</a>
				</div>
				<div class="col-md-2 col-3 py-3 px-0 text-center">
					<a href="/contact-us" class="btn btn__high">
						Contact
					</a>
				</div>
				<div class="col-md-5 col-9 d-flex align-items-center justify-content-md-end">
					<a href="/privacy-policy" class="flex-grow-0 m-0 btn btn__high small">
						Privacy
					</a>
					<span class="seps">
						|
					</span>
					<a href="/terms-and-conditions" class="flex-grow-0 m-0 btn btn__high small">
						Terms
					</a>
				</div>
			</div>
			<div class="collapse pristine" id="footerCollapse">
				<div class="row">
					<div class="col-auto px-5 py-4 font-secondary">
						<p class="mt-0 mb-3">
							<a href="https://www.google.com/maps/dir/52.3505549,-0.1814928/The+Bradfield+Centre+Cambridge+Science+Park+Cambridge+CB3+9PP/@52.283738,-0.1592558,11z/data=!3m1!4b1!4m9!4m8!1m1!4e1!1m5!1m1!1s0x47d870545e4ef491:0x410ce131c2898905!2m2!1d0.1463073!2d52.2336488" target="_blank">
								The Bradfield Centre<br />
								Cambridge Science Park<br />
								Cambridge<br />
								CB3 9PP
							</a>
						</p>
						<a class="mb-3 d-inline-block" href="tel:+441223203090">01223 20 30 90</a><br />
						<a class="mb-3 d-inline-block" href="mailto:info@baamagency.co.uk">info@baamagency.co.uk</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>
</div><!-- #wrapper -->

<?php wp_footer(); ?>

</body>

</html>