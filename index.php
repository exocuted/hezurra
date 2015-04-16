<?php get_header(); ?>
<div class="minicap">
  <div class="container">
    <h2>The blog</h2>
  </div>
</div>
<div class="container contingut">
<div class="nine columns">
  <?php if ( have_posts() ): ?>
    <?php while ( have_posts() ) : the_post(); ?>
      <h2>
        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
      </h2>
      <?php the_excerpt(); ?>
    <?php endwhile; wp_reset_query(); ?>
  <?php else: ?>
    <h2>No posts found</h2>
  <?php endif; ?>

  <?php if ( $wp_query->max_num_pages > 1 ) : ?>
    <div class="prev">
      <?php next_posts_link( __( '&larr; Older posts' ) ); ?>
    </div>
    <div class="next">
      <?php previous_posts_link( __( 'Newer posts &rarr;' ) ); ?>
    </div>
  <?php endif; ?>
</div>
<div class="three columns sbar">
  <?php get_sidebar(); ?>
</div>
</div>
<?php get_footer(); ?>
