<?php
/**
 * Block Name: Team
 *
 * This is the template that displays the content in two columns on a large screen.
 */


// create id attribute for specific styling
$id = 'content-' . $block['id'];

?>
<section id="<?php echo $id; ?>" class="team">


  <?php /* Core Services */ ?>
  <?php if (have_rows('team')): ?>

    <?php while(have_rows('team')):the_row(); ?>
      <div class="grid-x grid-margin-x">
        <div class="cell large-7 team-image">
          <?php if($image = get_sub_field('image')) { ?>
            <?php echo wp_get_attachment_image($image, 'large'); ?>
          <?php } ?>
        </div>
        <div class="cell large-5 team-content">
          <div class="team-meta">
            <h3><?php the_sub_field('name'); ?></h3>
            <span class="title"><?php the_sub_field('title'); ?></span>
            <ul>
              <li><a target="_blank" href="<?php the_sub_field('linkedin');?>"><i class="fab fa-linkedin"></i></a></li>

              <li><a href="mailto:<?php the_sub_field('email');?>"><i class="fas fa-paper-plane"></i></a></li>

              <?php
              $direct_dial = get_sub_field('direct_dial');
              $direct_dial_flat = str_replace(' ', '', $direct_dial);
              $direct_dial_href = ltrim($direct_dial_flat, "0");
              ?>
              <li><a href="tel:+44<?php echo $direct_dial_href; ?>"><i class="fas fa-mobile"></i></a></li>
            </ul>
          </div>
          <div class="team-biog">
            <?php the_sub_field('content'); ?>
          </div>
        </div>
      </div>
    <?php endwhile; ?>

  <?php endif; ?>

</section>
