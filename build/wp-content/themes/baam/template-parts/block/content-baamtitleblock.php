<?php
/**
 * Block Name: Title Block
 *
 * This is the template that displays the content in two columns on a large screen.
 */


// create id attribute for specific styling
$id = 'content-' . $block['id'];

?>
<section id="<?php echo $id; ?>" class="title-block">
  <?php if ($h1 = get_field('h1_check')): ?>
    <div class="main-title"><h1 class="title"><?php the_field('title'); ?></h1> <?php if(get_field('sub_title')): ?><h2 class="sub-title"><?php the_field('sub_title'); ?></h2><?php endif; ?></div>
  <?php else: ?>
    <div class="main-title"><h2 class="title"><?php the_field('title'); ?></h2> <?php if(get_field('sub_title')): ?><h3 class="sub-title"><?php the_field('sub_title'); ?></h3><?php endif; ?></div>
  <?php endif; ?>
</section>
