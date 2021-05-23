<section class="team__copy py-5">
	<div class="container-fluid padding pb-3">
		<div class="row">
			<div class="col-12">
				<?php if (get_sub_field('text')) : ?>
					<p class="h3 two-columns-big">
						<?php echo get_sub_field('text'); ?>
					</p>
				<?php endif; ?>
				<?php if (get_sub_field('link')) : ?>
					<a href="<?php echo get_sub_field('link')['url']; ?>" class="btn btn__circle">
						<span>
							<?php echo get_sub_field('link')['title']; ?>
						</span>
					</a>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>