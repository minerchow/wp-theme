
  
<h4>共 <?php echo get_comments_number();?> 条评论</h4>


<?php 
    // wp_list_comments(); 
    wp_list_comments(array(
        // 'max_depth'         => '',
        'style'             => 'ul',
        'callback'          => 'custom_comment',
        // 'end-callback'      => null,
        'type'              => 'all',
        'per_page'          => '',
        // 'avatar_size'       => 16,
        'reverse_top_level' => true,
        'reverse_children'  => true,
    )); 
?>


<?php the_comments_navigation();?>


<?php comment_form(); ?>
