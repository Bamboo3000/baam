<section class="slider pb-4">
	<div class="swiper-container px-2 pb-3">
		<div class="swiper-wrapper">
			<?php foreach (get_sub_field('slides') as $slide) : ?>
				<div class="swiper-slide mx-3 border-radius">
					<?php if ($slide['slide_type'] == 'image') : ?>
						<img data-src="<?php echo $slide['image']['url']; ?>" alt="<?php echo $slide['image']['title']; ?>" class="lazy bg-cover-abs">
					<?php elseif ($slide['slide_type'] == 'video') : ?>
						<video preload="auto" poster="<?php echo $slide['video_poster']['url']; ?>" class="bg-cover-abs">
							<source src="<?php echo $slide['video']; ?>" type="video/mp4" class="bg-cover-abs" />
						</video>
						<div class="video-play">
							<i class="fa fa-play"></i>
						</div>
					<?php endif; ?>
					<?php if (isset($slide['link']) && $slide['link']) : ?>
						<a href="<?php echo $slide['link']['url']; ?>" class="whole-element-link"></a>
					<?php endif; ?>
				</div>
			<?php endforeach; ?>
		</div>
		<div class="swiper-scrollbar"></div>
	</div>
</section>