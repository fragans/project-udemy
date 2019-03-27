<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <header class="container w-full">
        <?php
        if (is_singular()) :
            the_title('<h1 class="text-5xl">', '</h1>');
        else :
            the_title('<h3 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h3>');
        endif;  
        ?>
        
        
    </header><!-- .entry-header -->
        
        <?php get_template_part( 'template-parts/content', 'sharer'); ?>
        
        <div class="post-body">
            <?php the_content();?>
    	</div>
    	
	    <?php get_template_part( 'template-parts/content', 'sharer'); ?>
	    
	    <?php if ('post' === get_post_type()) : ?>
        
        <div class="post-details flex my-4 border-t py-4 border-grey-500">
            <div class="post-category">
                <?php the_category(', '); ?>
            </div>
            <div class="post-tags">
                <?php the_tags(' ',' '); ?>
            </div> 
            
        </div>

        <?php endif; ?>
    
    
    
    

</article><!-- #post-<?php the_ID(); ?> --> 