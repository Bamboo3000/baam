<?php
/**
 * Block Name: Two Column Content
 *
 * This is the template that displays the content in two columns on a large screen.
 */


// create id attribute for specific styling
$id = 'content-' . $block['id'];

?>
<section id="<?php echo $id; ?>">
<?php if (have_rows('slides')) { ?>

  <div class="client-slider">
  <?php while(have_rows('slides')):the_row(); ?>
    <div class="client-slide">
      <div class="client-flexbox">
        <div class="client-image">

        <?php if($video = get_sub_field('video')) { ?>
          <video autoplay loop muted playsinline>
            <source src="<?php echo $video['url']; ?>" type="video/mp4">
          </video>
        <?php } elseif (get_sub_field('oembed')) { ?>
          <?php the_sub_field('oembed'); ?>
        <?php } elseif ($image = get_sub_field('image')) { ?>
          <?php echo wp_get_attachment_image($image, 'large', '', array()); ?>
        <?php } ?>
        </div>
        <div class="client-content">
          <h2><?php the_sub_field('header'); ?></h2>
          <?php if($services = get_sub_field('services')) { ?>
            <ul class="services">
              <?php foreach($services as $service) { ?>
                <li class="service <?php echo $service['value']; ?>"><?php echo $service['label']; ?></li>
              <?php } ?>
            </ul>
          <?php } ?>
          <?php the_sub_field('content'); ?>
          <?php if ($link = get_sub_field('link')) { ?>
            <a class="client-link" href="<?php echo esc_url($link['url']); ?>" target="<?php echo esc_attr($link['target']); ?>"><?php echo esc_html($link['title']); ?></a>
          <?php } ?>
        </div>
      </div>
    </div>
  <?php endwhile; ?>
  </div>

<?php } ?>

</section>
