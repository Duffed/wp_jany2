<?php get_header(); ?>
			<!-- Content -->
			<div id="main clearfix">
					<!-- Left (Blog entrys)-->
                   <div class="wrapper2">
                   <div class="left-container">
                        <?php while(have_posts()): the_post()?>
                            <article class="content blogposts">

                                <!-- Thumbnail -->
                                <?php 
                                    // check if the post has a Post Thumbnail assigned to it.
                                    if ( has_post_thumbnail() ) {
                                        the_post_thumbnail();
                                    } 
                                ?>
                                
                                <h2 class="post-title"><a href="<?php the_permalink()?>"><?php the_title()?></a></h2>

                                <div class="article_subtitle_container">
                                    <!-- Date -->
                                    <span class="article_subtitle_date">
                                        <?php the_time('j. F, Y') ?>, 
                                    </span>

                                    <!-- Comments -->
                                
                                    <span class="article_subtitle_comments">
                                        <a href="<?php echo the_permalink().'#comments'?>">
                                            <?php comments_number( 'Keine Kommentare', 'Ein Kommentar', '% Kommentare' ); ?>
                                        </a>
                                    </span>
                                </div>

                                <!-- content -->
                                <div class="actual_content">
                                    <?php the_content()?>
                                </div>

                                <!--Tags-->
                                <?php if ( get_the_tag_list() ) { ?>
                                    <div class="tag_list ">
                                        <?php echo get_the_tag_list(""," ",""); ?>
                                    </div>
                                <?php } ?>

                            </article>
                        <?php endwhile;?>

                        <?php comments_template("", true); ?>
					</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>