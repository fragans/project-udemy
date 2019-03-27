<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package fragans
 */

?>

<article id="post-<?php the_ID(); ?>" class="mb-8" >
    <div class="flex">
        <div class="post-image max-w-xs w-1/4">
            <?php if (has_post_thumbnail()) : ?>
    		
    			<?php the_post_thumbnail(); ?>
    		
        	<?php endif ?>
    	</div>
	    <div class="w-3/4 pl-8">
            <?php
            if (is_singular()) :
                the_title('<h3 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h3>');
            else :
                the_title('<h3 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h3>');
            endif;
    
            if ('post' === get_post_type()) : ?>
    
            <div class="post-details text-grey-300 ">
                
    			
    			<div class="flex flex-row py-4">
                   <time class="uppercase pr-4">
                    	         <?php the_time('F j, Y'); ?>
                    	     </time>
                    <div class="post-category">
                     <?php the_category(', '); ?>
                    </div>
                    <div class="post-tags">
                    <?php the_tags(' ',' '); ?>
                    </div> 
        			<?php 
        // 			edit_post_link('Edit', '<span class="fa fa-pencil"></span>', ''); 
        			?>
    			</div>
    			
                
            </div>
            
            <div class="post-excerpt text-grey-300">
            <?php echo get_excerpt(250);?>
    	    </div>
    
            <?php endif; ?>
        </div>    
        
	</div>
	
</article><!-- #post-<?php the_ID(); ?> --> 