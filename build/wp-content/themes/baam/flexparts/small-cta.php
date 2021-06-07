<section class="cta pb-5 pt-4">
	<div class="container-fluid">
		<div class="card border-0 border-radius-s">
			<div class="card-body px-0 py-lg-5">
				<div class="container">
					<div class="row align-items-center justify-content-center">
						<?php if (get_sub_field('text')) : ?>
							<div class="col-md-auto">
								<h2 class="fw400 font-secondary line-height-1 mb-0">
									<?php echo get_sub_field('text'); ?>
								</h2>
							</div>
						<?php endif; ?>
						<?php if (get_sub_field('link')) : ?>
							<div class="col-md-auto<?php echo get_sub_field('text') ? ' pl-5' : null; ?>">
								<a href="<?php echo get_sub_field('link')['url']; ?>" class="btn btn__big bg-grey8 color-white border-radius-s">
									<?php echo get_sub_field('link')['title']; ?>
								</a>
							</div>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>