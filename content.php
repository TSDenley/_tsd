<?php
/**
 * @package _tsd
 * @since _tsd 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class("grid"); ?>>
	<a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail( $post->ID, array( 180, 180 ) ); ?></a>
</article><!-- #post-<?php the_ID(); ?> -->
