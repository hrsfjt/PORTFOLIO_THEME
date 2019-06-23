<?php
get_header();
?>
<div class="page">
  <header class="header">
    <h1 class="title">BLOG</h1>
  </header>
  <div class="content">
    <?php
    if (have_posts()) {
      while (have_posts()) {
        the_post();
        $image_url = get_the_post_thumbnail_url($post->ID, 'full');
    ?>
    <section class="archive">
      <header class="header">
        <h2 class="title"><a href="<?php echo get_the_permalink() ?>"><?php echo get_the_title(); ?></a></h2>
      </header>
      <div class="content">
        <?php the_content(); ?>
      </div>
    </section>
    <?php
      }
    }
    ?>
  </div>
  <?php echo get_template_part('content/pager', 'archive'); ?>
</div>
<?php
get_footer();
?>
