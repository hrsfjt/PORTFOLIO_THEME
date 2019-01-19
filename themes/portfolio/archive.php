<?php
  get_header();
?>
<div class="content-archive">
  <h1 class="title title--category"><?php single_cat_title('', true); ?></h1>
  <div class="list">
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
