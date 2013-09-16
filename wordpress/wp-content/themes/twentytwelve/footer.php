<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
    </div><!-- #main .wrapper -->
    <footer id="colophon" role="contentinfo">
        <div class="site-info">
            <p>&copy;2013 Blue Canyon Grill. All Rights Reserved.</p>
            <p>
                <a href="http://www.goldenmarketingllc.com" target="_blank">Website Design by Golden Marketing LLC</a>
            </p>
			<p>
                <a href="http://www.visitgolden.com" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/visitgolden.png" /></a>
                <a href="http://www.golden.com/buygolden" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/buygolden.png" /></a>
            </p>
        </div><!-- .site-info -->
    </footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>