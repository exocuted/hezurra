<?php
/*
Template Name: Portfolio
*/
?>
<?php get_header(); ?>
</div>
<?php get_template_part( 'content', 'page' ); ?>
<?php
// Variables del cap (foto)
$switchy = get_post_meta( get_the_ID(), '_cmb_portfolio', true );

$prefix = '_cmb_';

?>
<div class="container contingut">
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
	<h2><?php the_title(); ?></h2>
	<?php the_content(); ?>
<?php endwhile; wp_reset_query(); ?>
<div class="pfolio">
	<?php
  $counter = 0;
  ?><div class="row">

  <?php
	foreach ( (array) $switchy as $key => $entry ) {

	    $img = $title = $desc = $caption = '';

	    if ( isset( $entry['_cmb_titlep'] ) )
	        $title = esc_html( $entry['_cmb_titlep'] );

	    if ( isset( $entry['_cmb_imagep'] ) ) {
	        /*$img = wp_get_attachment_image( $entry['_cmb_image'], 'share-pick', null, array(
	            'class' => 'imatge-switchy',
	        ) );*/
					$img = $entry['_cmb_imagep'];
	    }
	    // $caption = isset( $entry['image_caption'] ) ? wpautop( $entry['image_caption'] ) : '';
      $counter++;
	    ?>

      <div class="four columns imagep">
        <h4><?php echo $title ?></h4>
        <img src="<?php echo $img ?>" alt="" />
      </div>
      <?php if($counter % 3 == 0) {
        echo '</div><div class="row">';
      } ?>
	<?php } ?>
</div>
</div>
</div>
<!-- <?php get_sidebar(); ?> -->
<?php get_footer(); ?>
