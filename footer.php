<footer>

    <div class="footer-third">
        <?php
			if ( is_active_sidebar( 'footer-sidebar' ) ) : ?>
        <div id="tertiary" class="sidebar-container footer" role="complementary">
            <div class="sidebar-inner">
                <div class="widget-area">
                    <?php dynamic_sidebar( 'footer-sidebar' ); ?>
                </div><!-- .widget-area -->
            </div><!-- .sidebar-inner -->
        </div><!-- #tertiary -->
        <?php else: ?>
        &copy; <?php echo date("Y"); ?> <?php bloginfo( 'name' ); ?>
        <?php endif; ?>
    </div>

    <div class="footer-third">
        <?php
			if ( is_active_sidebar( 'footer-middle-sidebar' ) ) : ?>
        <div id="footer-middle-sidebar" class="sidebar-container footer" role="complementary">
            <div class="sidebar-inner">
                <div class="widget-area">
                    <?php dynamic_sidebar( 'footer-middle-sidebar' ); ?>
                </div><!-- .widget-area -->
            </div><!-- .sidebar-inner -->
        </div><!-- #footer-middle-sidebar -->
        <?php else: ?>&nbsp;
        <?php endif; ?>
    </div>

    <div class="footer-third">
        <?php
			if ( is_active_sidebar( 'footer-right-sidebar' ) ) : ?>
        <div id="footer-right-sidebar" class="sidebar-container footer" role="complementary">
            <div class="sidebar-inner">
                <div class="widget-area">
                    <?php dynamic_sidebar( 'footer-right-sidebar' ); ?>
                </div><!-- .widget-area -->
            </div><!-- .sidebar-inner -->
        </div><!-- #footer-right-sidebar -->
        <?php else: ?><img id="footer-prepared"
            src="<?php echo get_template_directory_uri(); ?>/images/prepared_standard_rev.gif" alt="Do Your Best!">
        <?php endif; ?>
    </div>

    <div class="clear-both"></div>
</footer>
</div>


<?php wp_footer(); ?>
<script>
jQuery(document).ready(function($) {
    jQuery(".flexnav").flexNav({
        'animationSpeed': 50,
        'calcItemWidths': true,
        'hoverIntent': true,
        'hoverIntentTimeout': 25,
        'hover': true
    });
});
</script>
</body>

</html>