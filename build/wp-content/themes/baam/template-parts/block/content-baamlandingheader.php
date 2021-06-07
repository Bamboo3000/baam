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
  <h1><?php the_title(); ?></h1>
  <div class="landing-two-columns">
    <div class="landing-inner">
      <?php if($image = get_field('image')) { ?>
        <?php echo wp_get_attachment_image($image, 'large'); ?>
      <?php } ?>
    </div>
    <div class="landing-inner landing-center">
      <?php the_field('content'); ?>

      <a class="landing-cta-button" href="#<?php echo get_field('cta_button_link'); ?>" data-smooth-scroll data-offset="-150">
        <?php if($image = get_field('cta_button_image')) { ?>
          <?php echo wp_get_attachment_image($image, 'thumb', '', array('class'=>'ofi-cover')); ?>
        <?php } ?>
         <?php the_field('cta_button_text'); ?>
      </a>
    </div>
  </div>
</section>
