		<aside>
		    <section>
		        <article>
		            <?php
					if ( is_active_sidebar( 'first-sidebar' ) ) : ?>
		            <div id="secondary" class="sidebar-container" role="complementary">
		                <div class="sidebar-inner">
		                    <div class="widget-area">
		                        <?php dynamic_sidebar( 'first-sidebar' ); ?>
		                    </div><!-- .widget-area -->
		                </div><!-- .sidebar-inner -->
		            </div><!-- #secondary -->
					
		            <?php endif; ?>
		        </article>


		        <?php if ( is_category() ): ?>
		        <article>
					<h3 class="widget-title"><?php esc_html_e( 'Histórico'  ); ?></h3>          

		            <?php
						$category = get_queried_object();
						$categoryId = $category->term_id;

						
						wp_get_archives( 
							array ( 
								'type' => 'postbypost',
								'show_post_count' => true,
								'category' => $categoryId
							)
						); 
					?>
		        </article>
		        <?php endif; ?>


		    </section>
		</aside>