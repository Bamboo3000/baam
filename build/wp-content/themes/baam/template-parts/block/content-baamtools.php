<?php
/**
 * Block Name: Two Column Content
 *
 * This is the template that displays the content in two columns on a large screen.
 */


// create id attribute for specific styling
$id = 'content-' . $block['id'];

?>
<section id="<?php echo $id; ?>" class="tools-section">
  <h2>Tools &amp; platforms used</h2>
  <?php if ($tools = get_field('tools')): ?>
    <ul class="tools">
      <?php foreach($tools as $tool): ?>
        <li><i class="<?php if($tool['value']=='share-alt'){echo 'fas';} else {echo 'fab';} ?> fa-<?php echo $tool['value']; ?> fa-3x"></i><?php echo $tool['label']; ?></li>
      <?php endforeach; ?>
    </ul>
  <?php endif; ?>
</section>
