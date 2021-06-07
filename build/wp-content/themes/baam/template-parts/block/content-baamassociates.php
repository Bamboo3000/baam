<?php
/**
 * Block Name: Associates
 *
 * This is the template that displays the content in two columns on a large screen.
 */


// create id attribute for specific styling
$id = 'content-' . $block['id'];

?>
<section id="<?php echo $id; ?>" class="associates">


  <?php /* Associates */ ?>
  <?php if (have_rows('associates')): ?>

    <div class="grid-x grid-margin-x">
    <?php while(have_rows('associates')):the_row(); ?>

        <div class="cell large-4">
          <?php if($image = get_sub_field('image')) { ?>
            <?php echo wp_get_attachment_image($image, 'large'); ?>
          <?php } ?>
          <div class="content-container">
            <h3><?php the_sub_field('dept'); ?></h3>
            <span class="title"><?php the_sub_field('name'); ?></span>
            <div class="associates-content">
              <?php the_sub_field('content'); ?>
            </div>
          </div>
        </div>

    <?php endwhile; ?>
    </div>
  <?php endif; ?>
</section>
