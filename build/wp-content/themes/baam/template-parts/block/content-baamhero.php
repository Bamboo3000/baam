<?php
/**
 * Block Name: Hero
 *
 * This is the template that displays the content in two columns on a large screen.
 */


// create id attribute for specific styling
$id = 'content-' . $block['id'];

?>
<section id="<?php echo $id; ?>" class="hero">

  <div class="full-width-image">
    <?php if($image = get_field('image')) { ?>
      <?php echo wp_get_attachment_image($image, 'full'); ?>
    <?php } ?>
  </div>

</section>
