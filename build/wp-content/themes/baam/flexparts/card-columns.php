<?php

$count = count(get_sub_field('columns'));
$order = '';

if ($count === 1) {
	$col = 'col-12';
} elseif ($count === 2) {
	$col = 'col-md-6 col-12';
} elseif ($count === 3) {
	$col = 'col-lg-4 col-12';
	$order = array('order-1', 'order-lg-6 order-12', 'order-lg-12 order-6');
} elseif ($count === 4) {
	$col = 'col-lg-3 col-sm-6 col-12';
}

?>
<section class="pb-4">
	<div class="container-fluid padding">
		<div class="card border-0 border-radius-s copy-card horizontal bg-grey2">
			<div class="card-body p-3">
				<div class="row mx-0">
					<?php foreach (get_sub_field('columns') as $column) : ?>
						<div class="<?php echo $col . ' ' . $order; ?> px-2">
							<?php if ($column['column_type'] == 'image') : ?>
								<img data-src="<?php echo $column['image']['url']; ?>" alt="<?php echo $column['image']['title']; ?>" class="lazy h-100 bg-cover">
							<?php elseif ($column['column_type'] == 'video') : ?>
								<video preload="auto" poster="<?php echo $column['video_poster']['url']; ?>" class="bg-cover-abs">
									<source src="<?php echo $column['video']; ?>" type="video/mp4" class="bg-cover-abs" />
								</video>
								<div class="video-play">
									<i class="fa fa-play"></i>
								</div>
							<?php elseif ($column['column_type'] == 'text') : ?>
								<div class="p-4 d-flex align-items-center h-100">
									<div>
										<?php echo $column['text']; ?>
									</div>
								</div>
							<?php endif; ?>
						</div>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
	</div>
</section>