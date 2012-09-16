<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package _tsd
 * @since _tsd 1.0
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">

			<article id="post-0" class="post error404 not-found">
				<header class="entry-header">
					<h1 class="entry-title"><?php _e( 'Oops! We can&rsquo;t seem to find that page (404).', '_tsd' ); ?></h1>
				</header>

				<div class="entry-content">
					<p><?php _e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', '_tsd' ); ?></p>

					<?php the_widget( 'WP_Widget_Recent_Posts' ); ?>

					<div class="clear spacer"></div>

					<?php the_widget( 'WP_Widget_Tag_Cloud' ); ?>

				</div><!-- .entry-content -->
			</article><!-- #post-0 -->

		</div><!-- #content -->
	</div><!-- #primary .site-content -->

<?php get_footer(); ?>