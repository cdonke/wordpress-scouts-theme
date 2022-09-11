<?php get_header(); 

// If this is the home page, it should show the frontpage layout with selected posts.
if ( is_front_page() ) {
	?>
<div>
    <?php
/* If this is a home page
   We will check if it has a gallery.  If yes, show the content.
	 If not we will check if it has a featured image.  If yes, show the featured image.
	 If not we will show the default image.
*/
	
// Try to make a gallery if one has been inserted.  This only works for the shortcodes below.
	if ((strpos($post->post_content,'[gallery') !== false) 
	or (strpos($post->post_content,'[bxgallery') !== false) 
	or (strpos($post->post_content,'[cycloneslider') !== false)
	or (strpos($post->post_content,'[metaslider') !== false)
	or (strpos($post->post_content,'[flexslider') !== false)
	or (strpos($post->post_content,'[wowslider') !== false)
	or (strpos($post->post_content,'[smoothrecent') !== false)
	or (strpos($post->post_content,'[smoothslider') !== false)
	or (strpos($post->post_content,'[wowslider') !== false)
	or (strpos($post->post_content,'[smartslider2') !== false)
	or (strpos($post->post_content,'[promoslider') !== false)
	or (strpos($post->post_content,'[metaslider') !== false) 
	or (strpos($post->post_content,'[soliloquy') !== false)
	or (strpos($post->post_content,'[nivo-slider') !== false)
	or (strpos($post->post_content,'[all-nivoslider') !== false)	
  or (strpos($post->post_content,'[huge_it_slider') !== false))
	{
		while ( have_posts() ) : the_post();
			the_content();
		endwhile;		
	} 

// Else use the featured image if one has been selected.
	elseif ( has_post_thumbnail() ) {	
		/*	the_post_thumbnail('front-image');*/
		$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'front-image' );
		$url = $thumb['0']; 
		?>
    <?php	
		}
		
// Else use the default image.		
		else { 
		}

		// Reset Query in case we do something at another time.
		wp_reset_query();

		// Get the latest three posts in the home-page-sections category
		query_posts( array ( 'category_name' => 'home-page', 'posts_per_page' => 4 ) );

		if ( have_posts() ) : while ( have_posts() ) : the_post();
		if (!has_post_thumbnail()) {
			?>
			</div>
			<div id="front-third">
				<section>
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<header>
							<h1 class="entry-title"><?php the_title(); ?></h1>
						</header>
						<?php the_content(); ?>

					</article>
				</section>
			</div>
			<div id="front-bottom">
		<?php
			}
			else 
			{
		?>
			<div>
				<section>
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<header>
							<h1 class="entry-title"><?php the_title(); ?></h1>
						</header>
						<div class="content-half">
							<?php the_content(); ?>
						</div>
						<div class="content-half thumb">
						<?php 
								$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'front-image' );
								$url = $thumb['0']; 
							?>
							<img src="<?php echo $url ?>" alt="" />
						</div>
					</article>
				</section>
			</div>
		<?php	
			}	 
			// Loop ends
			endwhile;
		?>
</div>
<?php
			// And we're done
		endif;

		// Reset Query in case we do something at another time.
		wp_reset_query();

// If this is not the home page, it should show the regular page contents
} else {

?>
<div id="page-content">
    <div id="content-wide">
        <section>
            <?php if ( have_posts() ) : ?>
            <?php /* The loop */ ?>
            <?php while ( have_posts() ) : the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <h1 class="entry-title"><?php the_title(); ?></h1>
                <?php
			        // The content
			        the_content();
			    ?>
            </article>
            <?php endwhile; ?>
            <?php else : ?>
            <?php get_template_part( 'content', 'none' ); ?>
            <?php endif; ?>
        </section>
    </div> <!-- End content-wide -->
    <?php get_sidebar(); ?>
</div> <!-- End page-content -->
<?php 
	} // This is the end bracket for a regular page.
	get_footer(); ?>