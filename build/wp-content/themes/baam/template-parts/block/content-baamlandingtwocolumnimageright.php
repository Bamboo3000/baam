<?php
/**
 * Block Name: Two Column Content
 *
 * This is the template that displays the content in two columns on a large screen.
 */


// create id attribute for specific styling
$id = 'content-' . $block['id'];

?>
<section id="<?php echo $id; ?>" class="landing-header">
  <div class="landing-two-columns">
    <div class="landing-inner landing-center landing-two">
      <?php the_field('content'); ?>
    </div>
    <div class="landing-inner landing-one">
      <?php if($image = get_field('image')) { ?>
        <?php echo wp_get_attachment_image($image, 'large'); ?>
      <?php } ?>
    </div>
  </div>
</section>
