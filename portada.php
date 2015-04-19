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
$switchy = get_post_meta( get_the_ID(), '_cmb_switchy', true );

$prefix = '_cmb_';

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
<div class="switchy">
	<?php
	foreach ( (array) $switchy as $key => $entry ) {

	    $img = $title = $desc = $caption = '';

	    if ( isset( $entry['_cmb_title'] ) )
	        $title = esc_html( $entry['_cmb_title'] );

			if ( isset( $entry['_cmb_text_width'] ) )
	        $textw = esc_html( $entry['_cmb_text_width'] );

			if ( isset( $entry['_cmb_image_width'] ) )
	        $imgw = esc_html( $entry['_cmb_image_width'] );

			if ( isset( $entry['_cmb_position'] ) )
					$pos = $entry['_cmb_position'];

	    if ( isset( $entry['_cmb_text'] ) )
	        $desc = wpautop( $entry['_cmb_text'] );

	    if ( isset( $entry['_cmb_image'] ) ) {
	        /*$img = wp_get_attachment_image( $entry['_cmb_image'], 'share-pick', null, array(
	            'class' => 'imatge-switchy',
	        ) );*/
					$img = $entry['_cmb_image'];
	    }
	    $caption = isset( $entry['image_caption'] ) ? wpautop( $entry['image_caption'] ) : '';

	    ?>
			<div class="seccio">
				<div class="row">
						<?php if($pos == 'Left') { ?>
							<div class="<?php echo $textw ?> columns">
							<h3><?php echo $title ?></h3>
								<p>
									<?php echo $desc ?>
								</p>
							</div>
							<div class="<?php echo $imgw ?> columns">
								<img src="<?php echo $img ?>" alt="Caption" class="imatge-switchy"/>
							</div>
						<?php } else if($pos == 'Right') { ?>
							<div class="<?php echo $imgw ?> columns">
								<img src="<?php echo $img ?>" alt="Caption" class="imatge-switchy"/>
							</div>
							<div class="<?php echo $textw ?> columns">
							<h3><?php echo $title ?></h3>
								<p>
									<?php echo $desc ?>
								</p>
							</div>
						<?php } ?>
				</div>
			</div>
	<?php } ?>
</div>
</div>
<!-- <?php get_sidebar(); ?> -->
<?php get_footer(); ?>
