<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Baam
 */

get_header();
?>

<section class="stories stories-article px-5 pb-5">
	<div class="container-fluid">
		<div class="row">


			<?php
			while (have_posts()) : ?>
				<div class="col-lg-9">
					<div class="card p-0 m-0 border-0 mb-4">
						<div class="card-body p-0 m-0">
							<?php the_post();

							get_template_part('template-parts/content', get_post_type()); ?>
						</div>
					</div>
				</div>
			<?php endwhile; // End of the loop. 
			?>
			<div class="col-lg-3">
				<div class="card p-1 m-0 border-radius-s mb-4">
					<div class="card-body p-0 m-0">
						<a href="https://www.instagram.com/insta_baam/" target="_blank" class="btn btn__medium w-100 hover-black border-radius-s py-3">
							<svg height="28px" class="mr-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 56.3 61.8">
								<path d="M0 61c6.4-.7 8.4-3.1 8.4-11.3V12.2C8.4 3.9 6.4 1.6 0 .8V0h20.5v61.8H0zM35.8 61.5a59.4 59.4 0 01-6.2.3V61c11-.8 14.3-6.3 14.3-15.8 0-7-3.3-12-9-14.4a19.7 19.7 0 00-6.1-1.2V29a18.7 18.7 0 003.6-.8c4.9-1.8 8-7.3 8-13.4 0-10.3-4.6-13.4-10.9-14V0C39.6 0 52 3.1 52 14.7 52 22.1 45 27.3 36 29v.2c10.8 1.3 20.3 5.6 20.3 16.3 0 10.6-9 14.9-20.5 16.1z" />
							</svg> Insta_BAAM
						</a>
					</div>
				</div>
				<div class="card border-radius overflow-hidden border-0 mb-5">
					<div class="card-body p-0 d-flex m-n1">
						<?php get_sidebar(); ?>
					</div>
				</div>
			</div>

		</div>
	</div>
</section>

<?php
get_footer();
