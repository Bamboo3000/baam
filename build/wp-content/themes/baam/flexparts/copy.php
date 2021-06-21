<section class="copy pb-5">
	<div class="container-fluid pb-5">
		<div class="row justify-content-center">
			<?php if (get_sub_field('width') == 'narrow') : ?>
				<div class="col-xl-4 col-lg-6 col-md-9">
				<?php elseif (get_sub_field('width') == 'medium') : ?>
					<div class="col-xl-7 col-lg-9">
					<?php elseif (get_sub_field('width') == 'wide') : ?>
						<div class="col-12">
						<?php endif; ?>
						<?php if (get_sub_field('title')) : ?>
							<h1 class="text-center font-secondary">
								<?php echo get_sub_field('title'); ?>
							</h1>
						<?php endif; ?>
						<p class="h4 text-center fw400">
							<?php echo get_sub_field('text'); ?>
						</p>
						</div>
					</div>
				</div>
</section>