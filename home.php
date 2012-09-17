<?php
/**
 * The home page template file.
 *
 * @package _tsd
 * @since _tsd 1.0
 */

get_header(); ?>

		<div id="primary" class="site-content">
			<div id="content" role="main">

			<?php if ( have_posts() ) : ?>

				<?php 
					/*
					 * Uses the 'Post Order' plugin to set 9 post, of my choosing,
					 * to be displayed on the home page.
					 */
					$args = array(
					              'orderby'   => 'menu_order',
					              'order'     => 'ASC',
					              'showposts' => 9
					            );

					$my_query = new WP_Query($args); 
				?>

				<?php while ( $my_query->have_posts() ) : $my_query->the_post(); ?>

					<?php
						/* Include the Post-Format-specific template for the content.
						 * If you want to overload this in a child theme then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						get_template_part( 'content', get_post_format() );
					?>

				<?php endwhile; ?>

			<?php elseif ( current_user_can( 'edit_posts' ) ) : ?>

				<?php get_template_part( 'no-results', 'index' ); ?>

			<?php endif; ?>

			</div><!-- #content -->
		</div><!-- #primary .site-content -->

<?php get_footer(); ?>