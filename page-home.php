
<?php
 // Template Name: Homepage
get_header();
?>


<div class="container mx-auto w-full">
    <div id="primary" class="lg:flex md:block justify-between ">
        <main id="content" role="main" class="w-2/3 p-4 md:w-full border-r border-grey-500 my-4">
            
             <?php
                // $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
				/* Start the Loop */
                $args = array(
                    'posts_per_page'   => 5,
                    // 'post_type'        => 'post',
                    'paged' => $paged
                    );
                // var_dump($paged);
                $custom_query = new WP_Query( $args );

                while($custom_query->have_posts()) : $custom_query->the_post();
                        if(0 == $custom_query->current_post){ /**is the first post**/ 
                            get_template_part('template-parts/content-featured', get_post_type());
                        }else{
                		    get_template_part('template-parts/content', get_post_type());
                        }
                endwhile;
                
                
                
                
                // get_template_part('components/pagination',get_post_type());
                ?>
                    
                <?php
                echo paginate_links();
                wp_reset_postdata(); // reset the query 
				?>
            
        </main>
        <aside class="lg:w-1/3 md:w-full">
            <div class="p-4 ">
                <div class="p-2">
                    <?php get_sidebar(); ?>
                </div>
            </div>
        <aside>
    
    </div>
</div>



<?php
get_footer();
?> 

