<?php
  get_header();
  if (have_posts()) {
    while (have_posts()) {
      the_post();
      $image_url = get_the_post_thumbnail_url($post->ID, 'full');
?>
<div typeof="BreadcrumbList" vocab="https://schema.org/">
  <?php if (function_exists('bcn_display')) bcn_display(); ?>
</div>
<article>
  <header>
    <h1><?php the_title(); ?></h1>
  </header>
  <div>
    <?php the_content(); ?>
  </div>
  <footer></footer>
</article>
<?php
    }
  }
?>
<?php
  get_footer();
?>
