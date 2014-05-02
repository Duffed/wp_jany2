<?php get_header(); ?>
			<!-- Content -->
				<!-- Left (Blog entrys)-->
				<div class="wrapper2">
				<div class="left-container">

					<!-- Tag: X -->
					<div class="search-headline">
						<p class="search-title">Tag: <?php single_tag_title(); ?></p>
					</div>

                    <?php while(have_posts()): the_post()?>
                        <article class="content blogposts clearfix">

                        	<!-- Thumbnail -->
							<?php 
								// check if the post has a Post Thumbnail assigned to it.
								if ( has_post_thumbnail() ) {
									the_post_thumbnail();
								} 
							?>
                            <h2 class="post-title"><a href="<?php the_permalink()?>"><?php the_title()?></a></h2>

                            <!-- comments & Date -->
                            <div class="article_subtitle_container">
								<!-- Date -->
	                            <span class="article_subtitle_date">
	                            	<?php the_time('j. M, Y') ?>, <!-- http://codex.wordpress.org/Formatting_Date_and_Time -->
	                            </span>

	                            <!-- Comments -->
                            
	                            <span class="article_subtitle_comments">
	                            	<a href="<?php echo the_permalink().'#comments'?>">
										<?php comments_number( 'Keine Kommentare', 'Ein Kommentar', '% Kommentare' ); ?>
									</a>
								</span>
							</div>
                            

							<!-- Content -->
                            <div class="actual_content">
								<?php the_content(""); ?> <!--the_content();-->
							</div>

							<!-- Continue reading -->
							<div class="more-link-container">
								<a href="<?php the_permalink(); ?>" class="more-link">Weiterlesen&nbsp;&nbsp;</a>
							</div>

                        </article>
                    <?php endwhile;?>

                    <!-- Next/Previous Button -->
					<?php if( $wp_query->max_num_pages > 1 ) :
						?>
						<div id="navigation" class="clearfix">
							<?php next_posts_link( __( '<div class="previous">&Auml;ltere Beitr&auml;ge</div>' ), $wp_query->max_num_pages ); ?>
							<?php previous_posts_link( __( '<div class="next">Neuere Beitr&auml;ge</div>'  ), $wp_query->max_num_pages ); ?>
						</div><!-- end of .navigation -->
					<?php
					endif; ?>
				</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>