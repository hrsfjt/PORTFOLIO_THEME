<?php
  get_header();
  if (have_posts()) {
    while (have_posts()) {
      the_post();
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
  echo get_template_part('parts/content/categories', 'list');
  echo get_template_part('parts/content/links', 'external');
  get_footer();
?>
