<header class="header">
	<div class="container-fluid">
		<div class="border-radius pb-5">
			<div class="container-fluid">
				<div class="row justify-content-center">
					<div class="col-auto">
						<picture>
							<source media="(min-width: 1599px)" data-srcset="<?php echo get_sub_field('desktop_animation')['url']; ?>" class="lazyset img-fluid">
							<?php if (get_sub_field('laptop_animation')) : ?>
								<source media="(min-width: 1279px)" data-srcset="<?php echo get_sub_field('laptop_animation')['url']; ?>" class="lazyset img-fluid">
							<?php endif; ?>
							<?php if (get_sub_field('tablet_animation')) : ?>
								<source media="(min-width: 719px)" data-srcset="<?php echo get_sub_field('tablet_animation')['url']; ?>" class="lazyset img-fluid">
							<?php endif; ?>
							<?php if (get_sub_field('mobile_animation')) : ?>
								<source media="(max-width: 720px)" data-srcset="<?php echo get_sub_field('mobile_animation')['url']; ?>" class="lazyset img-fluid">
							<?php endif; ?>
							<img data-src="<?php echo get_sub_field('desktop_animation')['url']; ?>" class="lazy img-fluid" alt="<?php echo get_sub_field('desktop_animation')['title']; ?>">
						</picture>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>