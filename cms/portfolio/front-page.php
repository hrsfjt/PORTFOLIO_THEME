<?php
  get_header();
?>
<div class="image--front">
</div>
<div class="content-front">
  <h2 class="title">Blog</h2>
  <?php echo get_template_part('content/posts', 'front'); ?>
</div>
<?php
  get_footer();
?>
