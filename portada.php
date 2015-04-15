<?php
/*
Template Name: Portada
*/
?>
<?php get_header(); ?>
<?php get_template_part( 'content', 'page' ); ?>
<?php
// Variables del cap (foto)
$imatgecap = get_post_meta( $post->ID, '_cmb_imatge_cap', true );
$titolcap = get_post_meta( $post->ID, '_cmb_titol_cap', true );
$textcap = get_post_meta( $post->ID, '_cmb_textarea_cap', true );
$botocap = get_post_meta( $post->ID, '_cmb_text_boto_cap', true );
$botolinkcap = get_post_meta( $post->ID, '_cmb_link_boto_cap', true );
?>
<div class="cap" style="background:linear-gradient(rgba(0, 0, 0, 0.7),rgba(0, 0, 0, 0.7)), url('<?php echo $imatgecap; ?>')">
		<div class="container">
			<div class="info-cap row">
				<div class="six columns">
					<h4><?php echo $titolcap; ?></h4>
					<p><?php echo $textcap; ?></p>
					<div class="botocapwrapper">
						<a href="<?php echo $botolinkcap ?>" class="botocap"><?php echo $botocap ?></a>
					</div>
				</div>
			</div>
		</div>
</div>
<div class="container contingut">
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
	<h2><?php the_title(); ?></h2>
	<?php the_content(); ?>
<?php endwhile; wp_reset_query(); ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
