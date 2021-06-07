<?php
/**
 * Block Name: Landing Page Proof v2
 *
 * This is the template that displays the content in two columns on a large screen.
 */


// create id attribute for specific styling
$id = 'content-' . $block['id'];

?>
<section id="<?php echo $id; ?>" class="landing-proof">




  <div class="testimonial">
    <h2 style="text-align:center;">Featured branding project</h2>
    <p><?php the_field('testimonial'); ?></p>
    <?php if($image = get_field('client_logo')) { ?>
      <?php echo wp_get_attachment_image($image, 'full'); ?>
    <?php } ?>
  </div>
  <div class="proof-columns mb">
    <?php the_field('content'); ?>
  </div>


</section>
