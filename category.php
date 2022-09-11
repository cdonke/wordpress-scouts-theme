<?php get_header(); ?>
<div id="page-content">
    <div id="content-wide">

        <?php
				// Start the loop
				while(have_posts() ) : the_post();
				
				// Get the correct content type
				get_template_part( 'content', get_post_format() );
				
				// Loop ends
				endwhile;
				?>

    </div> <!-- End content-wide -->

    <!-- sidebar -->

    <?php get_sidebar(); ?>

</div> <!-- End page-content -->

<?php get_footer(); ?>