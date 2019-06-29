<?php
get_header();
if (have_posts()) {
    while (have_posts()) {
        the_post();
        ?>
<article class="page">
  <header class="header">
    <h1 class="title"><?php echo get_the_title(); ?></h1>
    <div class="date"><?php echo get_the_date(); ?></div>
  </header>
  <div class="content article">
    <?php the_content();?>
  </div>
  <footer>
      <?php
$tags = get_the_tags($post->ID);
        if (isset($tags)) {
            ?>
    <div class="tags">
      <?php
for ($i = 0; $i < count($tags); $i++) {
                $name = $tags[$i]->name;
                $slug = $tags[$i]->slug;
                ?>
        <a class="tags-item" href="<?php echo esc_url(home_url() . "/tag/" . $slug); ?>"><?php echo $name; ?></a>
        <?php
}
            ?>
    </div>
    <?php
}
        ?>
    <?php
if (get_next_post() || get_previous_post()) {
            ?>
    <div class="pager-post">
      <?php
if (get_next_post()) {
                ?>
      <div class="next"><?php next_post_link('%link', '＜ 次の記事', true);?></div>
      <?php
}
            ?>
      <?php
if (get_previous_post()) {
                ?>
      <div class="prev"><?php previous_post_link('%link', '前の記事 ＞', true);?></div>
      <?php
}
            ?>
    </div>
    <?php
}
        ?>
  </footer>
</article>
<?php
}
}
get_footer();
?>
