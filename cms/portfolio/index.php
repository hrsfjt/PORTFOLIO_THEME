<?php
  get_header();
  if (have_posts()) {
    while (have_posts()) {
      the_post();
?>
<article class="article">
  <header class="header">
    <h1 class="title"><?php echo get_the_title();?></h1>
    <div class="date"><?php echo get_the_date(); ?></div>
  </header>
  <div class="content">
    <?php the_content();?>
  </div>
  <footer></footer>
</article>
<?php
    }
  }
  get_footer();
?>
