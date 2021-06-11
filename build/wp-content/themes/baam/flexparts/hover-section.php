<section class="cta-big pb-4">
	<div class="container-fluid px-0">
		<div class="row align-content-stretch">
			<div class="col-lg-5 pl-0 pr-2 card-reveal hover-effect-section">
				<div class="h-100 card border-0 border-radius bg-grey7">
					<div class="card-body p-4 h-100 d-flex flex-wrap align-items-center">
						<div class="w-100 text-left">
							<h2 class="card-body-title fw400 text-uppercase color-white font-secondary">
								<?php echo get_sub_field('title'); ?> <i class="fa fa-arrow-right ml-2"></i>
							</h2>
							<div class="card-hover-content color-white">

								<div class="text-size-large">
									<?php echo get_sub_field('text'); ?>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php if (get_sub_field('link')) : ?>
					<a href="<?php echo get_sub_field('link')['url']; ?>" class="whole-element-link"></a>
				<?php endif; ?>
			</div>
			<div class="col-lg-7 pr-0 hover-effect-section">
				<div class="h-100 card border-0 border-radius bg-grey2 p-0 overflow-hidden" style="color: yellow;">
					<img data-src="<?php echo get_sub_field('image')['url']; ?>" alt="<?php echo get_sub_field('image')['url']; ?>" class="lazy bg-cover scale">
				</div>
			</div>
		</div>
	</div>
</section>