<?php 
$editor = get_field( "editor" );
?>
<div class="bg-grey-500 flex px-4 py-2 my-8">
    <div class="post-details text-grey-300 w-2/3">
         <span > <i class="fas fa-user-edit"></i> Oleh <?php the_author(); ?> </span>
         <span > <i class="fas fa-newspaper ml-4"></i> Editor <?php echo $editor; ?> </span>
         <time class="ml-4"> <?php the_time(); ?> </time>
         <span class="ml-4"><?php edit_post_link('Sunting', '<i class="far fa-edit "></i>', ''); ?></span>
    </div>
    <div class="social-icons w-1/3 flex justify-end">
        <span class="mr-4"><i class="fab fa-twitter rounded-sm hover:bg-black hover:text-white p-1"></i></span>
        <span class="mr-4"><i class="fab fa-facebook rounded-sm hover:bg-black hover:text-white p-1"></i></span>
        <span class="mr-4"><i class="fab fa-whatsapp rounded-sm hover:bg-black hover:text-white p-1"></i></span>
        <span class="mr-4"><i class="fab fa-line rounded-sm hover:bg-black hover:text-white p-1"></i></span>
        
    </div>
</div>