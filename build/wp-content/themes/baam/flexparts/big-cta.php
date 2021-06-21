<section class="cta-biggest mb-4 position-relative">
	<?php if (get_sub_field('image')) : ?>
		<div class="position-absolute left-auto right-auto h-100 overflow-hidden border-radius margin">
			<img data-src="<?php echo get_sub_field('image')['url']; ?>" alt="<?php echo get_sub_field('image')['title']; ?>" class="lazy bg-cover scale w-100 h-100">
		</div>
	<?php endif; ?>
	<div class="container-fluid py-5">
		<div class="row align-items-center justify-content-center py-5">
			<div class="col-lg-6 col-md-8 col-sm-10 text-center py-5">
				<?php if (get_sub_field('title')) : ?>
					<h1 class="py-5 font-secondary">
						<?php echo get_sub_field('title'); ?>
					</h1>
				<?php endif; ?>
				<?php if (get_sub_field('text')) : ?>
					<div class="mt-n5 mb-4">
						<?php echo get_sub_field('text'); ?>
					</div>
				<?php endif; ?>
				<?php if (get_sub_field('link')) : ?>
					<a href="<?php echo get_sub_field('link')['url']; ?>" class="btn btn__default bg-white border-radius-s">
						<?php echo get_sub_field('link')['title']; ?>
						<i class="fa fa-arrow-right ml-2"></i>
					</a>
				<?php endif; ?>
			</div>
		</div>
	</div>
	<?php /* if (get_sub_field('link')) : ?>
		<a href="<?php echo get_sub_field('link')['url']; ?>" class="whole-element-link"></a>
	<?php endif; */ ?>
</section>