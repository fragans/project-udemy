<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package fragans
 */

?>

<article id="post-<?php the_ID(); ?>" class="mb-8 border-b border-grey-500 my-4" >

        <?php    

        if ('post' === get_post_type()) : ?>

        	<?php if (has_post_thumbnail()) : ?>
        		<div class="post-image">
        			<?php the_post_thumbnail(); ?>
        		</div>
        	<?php endif ?>
            <?php if (is_singular()) :
                    the_title('<h1 class="entry-title mb-2"><b><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></b></h1>');
                else :
                    the_title('<h1 class="entry-title mb-2"><b><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></b></h1>');
                endif;
            ?>
            <div class="flex mb-8">
                <div class="post-details w-1/3 border-grey-500 border-r mr-8">
                    <div class="align-middle">
                    	 <div class="text-base text-grey-300 uppercase w-full flex justify-center">
                    	     <time class="p-1">
                    	         <?php the_time('F j, Y'); ?>
                    	     </time>
                    	     <span class="p-1">
                    	     <?php edit_post_link('Edit', '<span class="fa fa-pencil"></span>', ''); ?>
                    	     </span>
                    	 </div>
                    	 <div class="post-category w-full flex justify-center">
                             <?php the_category(' ',' '); ?>
                         </div>
                         <div class="post-tags w-full flex justify-center">
                    	     <?php the_tags(' ',' '); ?>
                    	 </div>
                	 </div>
            	</div>
                    
                <div class="post-excerpt text-grey-300 w-2/3">
                    <?php echo the_excerpt();?>
            	</div>
        	</div>
            	
	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> --> 