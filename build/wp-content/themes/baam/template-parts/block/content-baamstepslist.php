<?php
/**
 * Block Name: Steps list
 *
 * This is the template that displays a list of steps.
 */


// create id attribute for specific styling
$id = 'content-' . $block['id'];

?>
<?php if (have_rows('list')) { ?>
<section id="<?php echo $id; ?>" class="steps-list">
  <h2><?php the_field('title'); ?></h2>
  <div class="steps">
    <ol>
      <?php while (have_rows('list')):the_row(); ?>
        <li>
          <?php the_sub_field('step'); ?>
        </li>
      <?php endwhile; ?>
    </ol>
  </div>
  <?php if($image = get_field('image')) { ?>
  <div class="show-for-large illustration">

      <?php echo wp_get_attachment_image($image, 'large'); ?>

  </div>
  <?php } ?>
</section>
<?php } ?>
