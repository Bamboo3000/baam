<?php
/**
 * Block Name: Two Column Content
 *
 * This is the template that displays the content in two columns on a large screen.
 */


// create id attribute for specific styling
$id = 'content-' . $block['id'];

?>
<section id="<?php echo $id; ?>" class="two-column-content">
  <h1><?php the_field('header'); ?></h1>
  <div><?php the_field('content'); ?></div>
</section>
