<?php
  get_header();
?>
<div class="content-archive">
  <h1 class="title title--archive"><?php single_cat_title('', true); ?></h1>
  <div class="list list--archive">
<?php
  if (have_posts()) {
    while (have_posts()) {
      the_post();
?>
    <section>
      <div class="content">
        <h1 class="content__title"><a class="link" href="<?php echo get_the_permalink(); ?>"><?php the_title(); ?></a></h1>
        <div class="content__date"><?php the_date(); ?></div>
      </div>
    </section>
<?php
      }
    }
?>
  </div>
</div>
<?php
  get_footer();
?>
