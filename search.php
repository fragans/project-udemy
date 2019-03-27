
<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package fragans
 */

get_header();
?>

<div class="container mx-auto w-full">
    <div id="primary" class="lg:flex md:block  justify-between ">
        <main id="content" role="main" class="w-2/3 p-4 md:w-full border-r border-grey-500 my-4">
					<?php if ( have_posts() ) : ?>
			
						<header class="page-header py-8 mb-8 border-b border-grey-500">
							<?php
					
							/* translators: %s: search query. */
							echo '<h1 class="text-5xl text-center">Hasil Pencarian : ' . get_search_query() . '</h1>' ;
					
							the_archive_description( '<div class="text-center py-4 text-grey-300 lg:px-8 leading-loose">', '</div>' );
							?>
						</header><!-- .page-header -->
			
						<?php
						/* Start the Loop */
						while ( have_posts() ) :
							the_post();
			
							/*
							 * Include the Post-Type-specific template for the content.
							 * If you want to override this in a child theme, then include a file
							 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
							 */
							get_template_part( 'template-parts/content', get_post_type() );
			
						endwhile;
			
							get_template_part( 'components/pagination');
			
					else :
			
						get_template_part( 'template-parts/content', 'none' );
			
					endif;
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

<?php

get_footer();
