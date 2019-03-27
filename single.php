<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package fragans
 */

get_header();
?>

<div class="container mx-auto w-full">
    <div id="primary" class="lg:flex md:block justify-between ">
        <main id="content" role="main" class="w-2/3 p-4 md:w-full sm:w-full border-r border-grey-500 my-4">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'single');

			// the_post_navigation();

		endwhile; // End of the loop.
		?>

		</main>
        <aside class="lg:w-1/3 md:w-full">
            <div class="p-4 ">
                <div class="p-2">
                    <?php get_sidebar(); ?>
                </div>
            </div>
        <aside>
		
	</div><!-- #primary -->
</div><!-- #container -->

<?php

get_footer();
