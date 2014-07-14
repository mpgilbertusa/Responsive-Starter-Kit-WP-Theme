<?php
/**
 * The Template for displaying all single posts.
 *
 * @package Responsive Starter Kit
 */

get_header(); ?>

<div class="sidebar-right">

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'single' ); ?>

			<?php rsk_post_nav(); ?>

			<?php
				// If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || '0' != get_comments_number() ) :
					comments_template();
				endif;
			?>

		<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

    <?php get_sidebar(); ?>

</div><!-- /.sidebar-right -->

<?php get_footer(); ?>