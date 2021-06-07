<?php
/**
 * Block Name: Services
 *
 * This is the template that displays the content in two columns on a large screen.
 */


// create id attribute for specific styling
$id = 'content-' . $block['id'];

?>
<section id="<?php echo $id; ?>" class="services">


  <?php /* Core Services */ ?>
  <?php if (have_rows('core_services')): ?>
  <?php $count = count(get_field('core_services')); ?>
  <div class="core-services">
    <div class="grid-x grid-margin-x">
      <div class="cell services-type">
        <?php the_title('<h1>','</h1>'); ?>
        <h2>Core services</h2>
      </div>
    </div>
    <?php $i = 1; ?>
    <?php while(have_rows('core_services')):the_row(); ?>
      <div class="grid-x grid-margin-x">
        <div class="cell large-7 services-image">
          <?php if($image = get_sub_field('image')) { ?>
            <?php echo wp_get_attachment_image($image, 'large'); ?>
          <?php } ?>
        </div>
        <div class="cell large-5 services-content">
          <h3><?php the_sub_field('title'); ?></h3>
          <?php the_sub_field('content'); ?>
          <button class="button button--baam" data-open="book-discovery-meeting">Book a discovery meeting</button>
        </div>
      </div>
      <?php if($i < $count): ?>
        <hr>
      <?php endif; ?>
      <?php $i++; ?>
    <?php endwhile; ?>
  </div>
  <?php endif; ?>

  <?php /* Supporting Services */ ?>
  <?php if (have_rows('supporting_services')): ?>
  <div class="supporting-accordion accordion" data-accordion data-allow-all-closed="true">
    <div class="accordion-item is-active" data-accordion-item>
      <a class="accordion-title" href="#">
        <div class="grid-x grid-margin-x">
          <div class="cell services-type">
            <h2><span class="sh">Show</span> supporting services</h2><i class="sh-icon fas fa-chevron-down"></i>
          </div>
        </div>
      </a>
      <div class="accordion-content" data-tab-content>
        <?php while(have_rows('supporting_services')):the_row(); ?>
          <div class="grid-x grid-margin-x">
            <div class="cell large-7 services-image">
              <?php if($image = get_sub_field('image')) { ?>
                <?php echo wp_get_attachment_image($image, 'large'); ?>
              <?php } ?>
            </div>
            <div class="cell large-5 services-content">
              <h3><?php the_sub_field('title'); ?></h3>
              <?php the_sub_field('content'); ?>
              <button class="button button--baam" data-open="book-discovery-meeting">Book a discovery meeting</button>
            </div>
          </div>
          <hr>
        <?php endwhile; ?>
      </div>
    </div>
  </div>
  <?php endif; ?>

</section>
