<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package fragans
 */

get_header();
?>
<div class="container mx-auto w-full">
	<div id="primary" class="lg:flex md:block justify-between ">
		<main id="content" role="main" class="w-2/3 p-4 md:w-full border-r border-grey-500 my-4">

		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) :
				?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
				<?php
			endif;

			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				 
				// get_template_part( 'template-parts/content', get_post_type() );
				if(0 == $wp_query->current_post){ /**is the first post**/ 
				    get_template_part('template-parts/content-featured', get_post_type());
				}else{
				    get_template_part('template-parts/content', get_post_type());
				}
			endwhile;

			// the_posts_navigation();
			get_template_part( 'components/pagination');

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

		</main><!-- #main -->
		<aside class="lg:w-1/3 md:w-full">
            <div class="p-4 ">
                <div class="p-2">
                    <?php get_sidebar(); ?>
                </div>
            </div>
        <aside>
	</div><!-- #primary -->
	</div> 

<?php
get_sidebar();
get_footer();
