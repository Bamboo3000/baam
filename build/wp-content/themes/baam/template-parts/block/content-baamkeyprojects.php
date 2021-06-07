<?php
/**
 * Block Name: Two Column Content
 *
 * This is the template that displays the content in two columns on a large screen.
 */


// create id attribute for specific styling
$id = 'content-' . $block['id'];

?>
<section id="<?php echo $id; ?>" class="key-projects">
  <h2>Services requested</h2>

  <?php if ($services = get_field('the_services')): ?>
    <ul class="key-services">
      <?php foreach($services as $service): ?>
        <?php
        switch($service['value']){
          case "online_advertising":
            $class = "advertising";
            $url = home_url()."/services/advertising/";
          break;

          case "offline_advertising":
            $class = "advertising";
            $url = home_url()."/services/advertising/";
          break;

          case "content_marketing":
            $class = "marketing";
            $url = home_url()."/services/marketing/";
          break;

          case "email_marketing":
            $class = "marketing";
            $url = home_url()."/services/marketing/";
          break;

          case "campaign_strategy":
            $class = "strategy";
            $url = home_url()."/services/strategy/";
          break;

          case "campaign_management":
            $class = "strategy";
            $url = home_url()."/services/strategy/";
          break;

          case "brand_development":
            $class = "brand";
            $url = home_url()."/services/brand/";
          break;

          case "brand_management":
            $class = "brand";
            $url = home_url()."/services/brand/";
          break;

          case "websites":
            $class = "digital";
            $url = home_url()."/services/digital/";
          break;

          case "maintenance":
            $class = "digital";
            $url = home_url()."/services/digital/";
          break;
        }
        ?>

        <li class="<?php echo $class; ?>">
          <a href="<?php echo $url; ?>"><?php echo $service['label']; ?></a>
        </li>

      <?php endforeach; ?>
    </ul>
  <?php endif; ?>
</section>
