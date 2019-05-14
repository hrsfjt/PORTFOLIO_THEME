<?php
  get_header();
  if (have_posts()) {
    while (have_posts()) {
      the_post();
?>
<article class="article">
  <header class="article__header">
    <h1 class="title"><?php the_title(); ?></h1>
  </header>
  <div class="article__content">
    <?php the_content(); ?>
  </div>
  <footer></footer>
</article>
<?php
    }
  }
  get_footer();
?>
