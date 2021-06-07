<?php
/**
 * Block Name: Full Width Video
 *
 * This is the template that displays the content in two columns on a large screen.
 */


// create id attribute for specific styling
$id = 'content-' . $block['id'];

?>
<section id="<?php echo $id; ?>" class="hero">

  <div class="full-width-video">
    <?php if($video = get_field('video')) { ?>
      <video autoplay loop muted playsinline preload="auto">
        <source src="<?php echo $video['url']; ?>" type="video/mp4">
      </video>
    <?php } ?>
  </div>

</section>
