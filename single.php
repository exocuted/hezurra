<?php get_header(); ?>
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
<div class="minicap">
  <h2><?php the_title() ?></h2>
</div>
<div class="container contingut">
  <?php the_date('Y-m-d', '<h4 class="date">', '</h4>'); ?>
  <?php the_content(); ?>
<?php endwhile; wp_reset_query(); ?>

<?php comments_template( '', true ); ?>
</div>

<?php get_footer(); ?>
