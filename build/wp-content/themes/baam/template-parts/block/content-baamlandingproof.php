<?php
/**
 * Block Name: Landing Page Proof
 *
 * This is the template that displays the content in two columns on a large screen.
 */


// create id attribute for specific styling
$id = 'content-' . $block['id'];

?>
<section id="<?php echo $id; ?>" class="landing-proof">

  <div class="landing-two-columns">
    <div class="landing-inner landing-center">
      <h2><?php the_field('title'); ?> <span><?php the_field('sub_heading'); ?></span></h2>
      <div class="proof-columns">
        <?php the_field('content'); ?>
      </div>
    </div>
    <div class="landing-inner landing-orbit-container">
      <?php if($gallery = get_field('gallery')): ?>
        <div class="orbit" role="region" aria-label="Gallery" data-orbit data-options="animInFromLeft:fade-in; animInFromRight:fade-in; animOutToLeft:fade-out; animOutToRight:fade-out;">
          <div class="orbit-wrapper">
            <div class="orbit-controls">
              <button class="orbit-previous"><span class="show-for-sr">Previous Slide</span>&#9664;&#xFE0E;</button>
              <button class="orbit-next"><span class="show-for-sr">Next Slide</span>&#9654;&#xFE0E;</button>
            </div>
            <ul class="orbit-container">
              <?php $i = 1; ?>
              <?php foreach($gallery as $image) { ?>
                <li class="<?php if($i == 1){echo "is-active ";} ?>orbit-slide">
                  <figure class="orbit-figure">
                    <?php echo wp_get_attachment_image($image['ID'], 'baam_screen_small', '', array('class'=>'orbit-image')); ?>
                    <?php if ($cap = $image['caption']) { ?>
                      <figcaption class="orbit-caption"><?php echo $cap; ?></figcaption>
                    <?php $i++; ?>
                  <?php } ?>
                  </figure>
                </li>
              <?php } ?>
            </ul>
          </div>
        </div>
      <?php endif; ?>
    </div>
  </div>

  <div class="testimonial">
    <h3>The client says...</h3>
    <p><?php the_field('testimonial'); ?></p>
    <?php if($image = get_field('client_logo')) { ?>
      <?php echo wp_get_attachment_image($image, 'full'); ?>
    <?php } ?>
  </div>
</section>
