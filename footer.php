<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Responsive Starter Kit
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
        
		<nav class="utility-navigation" role="navigation">
            <h4 class="visually-hidden">Utility Navigation</h4>
		    <?php wp_nav_menu( array( 'theme_location' => 'utility' ) ); ?>
		</nav>
        
		<div class="site-info">&copy; 2014 Copyright content goes here.</div>
        
	</footer><!-- #colophon -->
    
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
