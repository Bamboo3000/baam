<?php

/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Baam
 */

get_header();

$category = get_queried_object();
if($category) {
	$category = $category->slug;
} else {
	$category = false;
}

?>

<section class="stories px-5 pb-5">
	<div class="container-fluid">
		<div class="row">
			<?php if (have_posts()) : ?>
				<div class="col-lg-9">
					<div class="card p-1 m-0 border-radius-s mb-4">
						<div class="card-body p-0 m-0">
							<div class="row">
								<div class="col-lg-4">
									<a href="<?php echo get_post_type_archive_link( 'post' ); ?>" class="btn btn__medium w-100 hover-black border-radius-s<?php echo !$category ? ' active' : null; ?>">
										Everything
									</a>
								</div>
								<div class="col-lg-4">
									<a href="/category/case-studies" class="btn btn__medium w-100 hover-black border-radius-s<?php echo $category === 'case-studies' ? ' active' : null; ?>">
										Case studies
									</a>
								</div>
								<div class="col-lg-4">
									<a href="/category/news" class="btn btn__medium w-100 hover-black border-radius-s<?php echo $category === 'news' ? ' active' : null; ?>">
										News
									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="stories-row row">
						<?php
						/* Start the Loop */
						$i = 0;
						while (have_posts()) :
							the_post();

							if( ($i + 2) % 3 === 0 ) {
								$class = 'col-lg-8';
							} elseif( $i % 3 === 0 ) {
								$class = 'col-12';
							} else {
								$class = 'col-lg-4';
							}
							/*
							* Include the Post-Type-specific template for the content.
							* If you want to override this in a child theme, then include a file
							* called content-___.php (where ___ is the Post Type name) and that will be used instead.
							*/ ?>
							<article class="story-card <?php echo $class; ?> pb-4">
								<div class="card border-radius overflow-hidden border-0 h-100">
									<div class="card-body p-0 h-100 d-flex">
										<a href="<?php the_permalink(); ?>" aria-hidden="true" tabindex="-1">
											<img data-src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo esc_html ( get_the_title() ); ?>" class="h-100 lazy bg-cover">
										</a>
										<div class="btn btn__medium position-absolute bg-black py-2 px-4 border-radius-s right-0 bottom-0 mb-2 mr-2">
											<?php echo esc_html ( get_the_title() ); ?>
										</div>
									</div>
								</div>
							</article>
						<?php // get_template_part('template-parts/content', get_post_type());
						$i++;
						endwhile;

						the_posts_navigation(); ?>
					</div>
				</div>
			<?php else :

				get_template_part('template-parts/content', 'none');

			endif;
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
