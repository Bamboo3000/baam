<section class="pb-3 team__section">
	<div class="container-fluid padding">
		<div class="row">
			<div class="col-12">
				<div class="card border-0 border-radius-s bg-grey6 overflow-hidden">
					<div class="card-body p-0">
						<div class="row">
							<?php if (get_sub_field('image_position') === 'right') : ?>
								<div class="col-lg-6 team__section-text">
									<?php if (get_sub_field('bio')) : ?>
										<p class="h3 text-right m-0">
											<?php echo get_sub_field('bio'); ?>
										</p>
									<?php endif; ?>
								</div>
								<div class="sep"></div>
								<div class="col-lg-6 pl-0 d-flex">
									<?php if (get_sub_field('image')) : ?>
										<img data-src="<?php echo get_sub_field('image')['url']; ?>" alt="<?php echo get_sub_field('image')['title']; ?>" class="lazy bg-cover">
									<?php endif; ?>
									<div class="team__section-name">
										<?php if (get_sub_field('name')) : ?>
											<h3 class="font-secondary mb-0"><?php echo get_sub_field('name'); ?></h3>
										<?php endif; ?>
										<?php if (get_sub_field('job_title')) : ?>
											<h5 class="text300"><?php echo get_sub_field('job_title'); ?></h5>
										<?php endif; ?>
									</div>
								</div>
							<?php else : ?>
								<div class="col-lg-6 pr-0 d-flex">
									<?php if (get_sub_field('image')) : ?>
										<img data-src="<?php echo get_sub_field('image')['url']; ?>" alt="<?php echo get_sub_field('image')['title']; ?>" class="lazy bg-cover">
									<?php endif; ?>
									<div class="team__section-name right">
										<?php if (get_sub_field('name')) : ?>
											<h3 class="font-secondary mb-0"><?php echo get_sub_field('name'); ?></h3>
										<?php endif; ?>
										<?php if (get_sub_field('job_title')) : ?>
											<h5 class="text300"><?php echo get_sub_field('job_title'); ?></h5>
										<?php endif; ?>
									</div>
								</div>
								<div class="sep"></div>
								<div class="col-lg-6 team__section-text d-flex">
									<?php if (get_sub_field('bio')) : ?>
										<p class="h3 m-0">
											<?php echo get_sub_field('bio'); ?>
										</p>
									<?php endif; ?>
								</div>
							<?php endif; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>