<?php
/**
 * Block Name: BAAM Grid
 *
 * This is the template that displays the BAAM Grid layout.
 */


// create id attribute for specific styling
$id = 'content-' . $block['id'];

?>
<section id="<?php echo $id; ?>" class="baamgrid_wrapper">
  <?php if (have_rows('baam_grid')){ ?>
    <?php while (have_rows('baam_grid')){ the_row(); ?>

      <?php if (get_row_layout() == 'three_items_left') { ?>


        <?php /*$gridclasses = "baamgrid baamgrid-3 baamgrid-3-left";*/ ?>
        <?php $gridclasses = "bgrid bgrid__left"; ?>
        <?php $layout = "three_items_left"; ?>

      <?php } elseif (get_row_layout() == 'three_items_right') { ?>

        <?php /* $gridclasses = "baamgrid-3 baamgrid-3-right"; */ ?>
        <?php $gridclasses = "bgrid bgrid__right"; ?>
        <?php $layout = "three_items_right"; ?>

      <?php } else { ?>

        <?php /* $gridclasses = "baamgrid baamgrid-2"; */ ?>
        <?php $gridclasses = "bgrid bgrid__two"; ?>
        <?php $layout = "two_items"; ?>

      <?php }; ?>

        <div class="<?php echo $gridclasses; ?>">
          <?php if(have_rows('article')){ ?>

            <?php // set a counter ?>
            <?php $i = 0; ?>

            <?php while(have_rows('article')){ the_row(); ?>
              <?php if (get_sub_field('video') || get_sub_field('image')) { ?>

                <?php $article_classes = ""; ?>

                <?php if (get_sub_field('video')) {$article_classes .=" has-video";} ?>

                <?php // what layout type is it? THREE COLUMNS RIGHT ?>
                <?php if ($layout=='three_items_right') { ?>


                  <?php if ($i == 0) { ?>
                    <div class="bgrid-a">
                    <div class="bgrid bgrid__column">
                    <div class="bgrid-a">
                  <?php } ?>
                  <?php if ($i == 1) { ?>
                    <div class="bgrid-b">
                    <?php } ?>
                  <?php if ($i == 2) { ?>
                    <div class="bgrid-b">
                  <?php } ?>

                  <article class="<?php echo $article_classes; ?>">
                    <?php if ($link = get_sub_field('link')){ ?>
                      <a href="<?php echo $link['url']; ?>">
                    <?php } ?>
                    <?php if ($image = get_sub_field('image')){ ?>
                      <?php if ($layout == 'three_items_left') { ?>
                        <?php $size = $i>0 ? 'baam_screen_small' : 'baam_screen_large'; ?>
                      <?php } elseif ($layout == 'three_items_left') { ?>
                        <?php $size = $i>1 ? 'baam_screen_small' : 'baam_screen_large'; ?>
                      <?php } else { ?>
                        <?php $size = 'baam_screen_medium'; ?>
                      <?php } ?>

                      <?php echo wp_get_attachment_image($image, $size); ?>
                    <?php } ?>
                    <?php if ($video = get_sub_field('video')){ ?>
                      <video autoplay loop muted playsinline>
                        <source src="<?php echo $video['url']; ?>" type="video/mp4">
                      </video>
                    <?php } ?>
                    <?php if ($title = get_sub_field('title')){ ?>
                      <?php echo $title; ?>
                    <?php } ?>
                    <?php echo '<p class="case-study-suggest">Read the case study ></p>'; ?>
                    <?php if ($link){?>
                      </a>
                    <?php } ?>
                  </article>

                  <?php if ($i == 0) { ?>
                  </div>
                  <?php } ?>
                  <?php if ($i == 1) { ?>
                  </div></div></div>
                  <?php } ?>
                  <?php if ($i == 2) { ?>
                  </div>
                  <?php } ?>
                <?php } ?>


                <?php // THREE COLUMNS LEFT ?>

                <?php if ($layout=='three_items_left') { ?>


                  <?php if ($i == 0) { ?>
                    <div class="bgrid-a">

                  <?php } ?>
                  <?php if ($i == 1) { ?>
                    <div class="bgrid-b">
                    <div class="bgrid bgrid__column">
                    <div class="bgrid-a">
                    <?php } ?>
                  <?php if ($i == 2) { ?>
                    <div class="bgrid-b">
                  <?php } ?>

                  <article class="<?php echo $article_classes; ?>">
                    <?php if ($link = get_sub_field('link')){ ?>
                      <a href="<?php echo $link['url']; ?>">
                    <?php } ?>
                    <?php if ($image = get_sub_field('image')){ ?>
                      <?php if ($layout == 'three_items_left') { ?>
                        <?php $size = $i>0 ? 'baam_screen_small' : 'baam_screen_large'; ?>
                      <?php } elseif ($layout == 'three_items_left') { ?>
                        <?php $size = $i>1 ? 'baam_screen_small' : 'baam_screen_large'; ?>
                      <?php } else { ?>
                        <?php $size = 'baam_screen_medium'; ?>
                      <?php } ?>

                      <?php echo wp_get_attachment_image($image, $size); ?>
                    <?php } ?>
                    <?php if ($video = get_sub_field('video')){ ?>
                      <video autoplay loop muted playsinline>
                        <source src="<?php echo $video['url']; ?>" type="video/mp4">
                      </video>
                    <?php } ?>
                    <?php if ($title = get_sub_field('title')){ ?>
                      <?php echo $title; ?>
                    <?php } ?>
                    <?php echo '<p class="case-study-suggest">Read the case study ></p>'; ?>
                    <?php if ($link){?>
                      </a>
                    <?php } ?>
                  </article>

                  <?php if ($i == 0) { ?>
                  </div>
                  <?php } ?>
                  <?php if ($i == 1) { ?>
                  </div>
                  <?php } ?>
                  <?php if ($i == 2) { ?>
                  </div></div></div>
                  <?php } ?>
                <?php } ?>


                <?php // TWO COLUMNS ?>

                <?php if ($layout=='two_items') { ?>


                  <?php if ($i == 0) { ?>
                    <div class="bgrid-a">
                  <?php } ?>
                  <?php if ($i == 1) { ?>
                    <div class="bgrid-b">
                  <?php } ?>


                  <article class="<?php echo $article_classes; ?>">
                    <?php if ($link = get_sub_field('link')){ ?>
                      <a href="<?php echo $link['url']; ?>">
                    <?php } ?>
                    <?php if ($image = get_sub_field('image')){ ?>
                      <?php if ($layout == 'three_items_left') { ?>
                        <?php $size = $i>0 ? 'baam_screen_small' : 'baam_screen_large'; ?>
                      <?php } elseif ($layout == 'three_items_left') { ?>
                        <?php $size = $i>1 ? 'baam_screen_small' : 'baam_screen_large'; ?>
                      <?php } else { ?>
                        <?php $size = 'baam_screen_medium'; ?>
                      <?php } ?>

                      <?php echo wp_get_attachment_image($image, $size); ?>
                    <?php } ?>
                    <?php if ($video = get_sub_field('video')){ ?>
                      <video autoplay loop muted playsinline>
                        <source src="<?php echo $video['url']; ?>" type="video/mp4">
                      </video>
                    <?php } ?>
                    <?php if ($title = get_sub_field('title')){ ?>
                      <?php echo $title; ?>
                    <?php } ?>
                    <?php echo '<p class="case-study-suggest">Read the case study ></p>'; ?>
                    <?php if ($link){?>
                      </a>
                    <?php } ?>
                  </article>

                  <?php if ($i == 0) { ?>
                  </div>
                  <?php } ?>
                  <?php if ($i == 1) { ?>
                  </div>
                  <?php } ?>
                <?php } ?>







              <?php $i++; ?>
            <?php } ?>
            <?php } ?>
          <?php } ?>
        </div>

    <?php } ?>
  <?php } ?>
</section>
