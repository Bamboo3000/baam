<?php
/**
 * Block Name: Two Column Content
 *
 * This is the template that displays the content in two columns on a large screen.
 */


// create id attribute for specific styling
$id = 'content-' . $block['id'];

?>
<section id="<?php echo $id; ?>" class="branding-form">

  <div class="branding-form-wrapper">
    <div class="photo">
      <?php if($image = get_field('image')) { ?>
        <?php echo wp_get_attachment_image($image, 'large', '', array('class'=>'ofi-cover')); ?>
      <?php } ?>
    </div>
    <div class="contact-details">
      <h2><?php the_field('title'); ?></h2>
      <?php the_field('contact_details'); ?>
    </div>
    <div class="contact-form">
      <?php gravity_form(3, false, false, false, false, true); ?>
    </div>
  </div>
</section>
