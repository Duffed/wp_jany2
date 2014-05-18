<?php
/* 
* Template Name: Rezepteindex
*/
get_header(); ?>
    <!-- Content -->
    <!-- Left (Blog entrys)-->
    <div class="wrapper2">
    <div class="left-container">
    <article class="actual_content clearfix">
        <?php 
            $categories = get_categories('hide_empty=1&child_of=1');
            // Schleife für jede subkategorie
            foreach($categories as $category) {

                $args = array(
                    'category_name' => $category->name,
                    'posts_per_page' => -1
                );

                $catQuery = new WP_Query($args);

                echo "<h2 class='recipeindex'>".$category->name."</h2>";
                echo "<ul>";
                
                    if ( $catQuery->have_posts() ) : while ( $catQuery->have_posts() ) : $catQuery->the_post();

                        ?>
                            <!-- List -->
                            <li><a href="<?php the_permalink()?>"><?php the_title()?></a></li>
                        <?php

                    endwhile;

                    wp_reset_postdata();

                    endif;
            
                echo"</ul>";
               
            } 
        ?>
     </article>
    </div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>