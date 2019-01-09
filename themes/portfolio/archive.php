<?php
  get_header();
?>
<div class="content--archives">
  <h1 class="title content__title">Archives : <?php single_cat_title(); ?></h1>
  <div class="list list--archives">
<?php
  if (have_posts()) {
    while (have_posts()) {
      the_post();
?>
    <section>
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
