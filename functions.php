<?php
    //注册菜单分类
    register_nav_menus(array(
    'primary' => '主导航菜单',
    'footer' => '页脚菜单',
    'menu666' => '菜单666'
    ));
    function custom_excerpt_length($length) {
        return 20; // 修改文章摘要长度为20个单词
    }
    add_filter('excerpt_length', 'custom_excerpt_length');
    // add_theme_support( 'widgets' );
    // functions 自定义侧边栏
    function my_custom_sidebar() {
    register_sidebar(
        array (
            'name' => '测试侧边栏',//侧边栏名称
            'id' => 'test-side-bar',//侧边栏ID
            'description' => '这里是侧边栏的描述',//侧边栏描述
            'before_widget' => '<div class="widget-content">',//侧边栏前面的代码
            'after_widget' => "</div>",//侧边栏后面的代码
            'before_title' => '<h3 class="widget-title">',//侧边栏标题的前面的代码
            'after_title' => '</h3>',//侧边栏标题的后面的代码
            'defore_sidebar'=>'122221',
            'after_sidebar'=>'13331'
        )
    );
    
	//可同时注册多个小工具
	register_sidebar(
        array (
            'name' => '测试侧边栏2',//侧边栏名称
            'id' => 'test-side-bar2',//侧边栏ID
            'description' => '这里是侧边栏的描述2',//侧边栏描述
            'before_widget' => '<div class="widget-content2">',//侧边栏前面的代码
            'after_widget' => "</div>",//侧边栏后面的代码
            'before_title' => '<h3 class="widget-title2">',//侧边栏标题的前面的代码
            'after_title' => '</h3>',//侧边栏标题的后面的代码
        )
    );
}
add_action( 'widgets_init', 'my_custom_sidebar' );
//评论模板
function custom_comment($comment, $args, $depth){
    $GLOBALS['comment'] = $comment; 
    // var_dump($args);
    $ava = get_avatar($comment,'48');
    $author_link = get_comment_author_link();
    // $author = get_comment_author();
    // echo $author;

    echo '
    <li class="comment-list">
        <div class="avatar">
        '.$ava.'
        </div>
        <div class="comment_content">
            <div class="comment_author">
                '.$author_link.'
            </div>
            
            <div class="comment_time">
           '.get_comment_time('Y-m-d H:i:s').'
            </div>
        ';
        ?>
            <div class="edit-line">
                <?php 
                    // 显示评论的编辑链接 
                    edit_comment_link( '编辑', '<p class="edit-link">', '</p>' ); 
                ?>
                <div class="reply">
                    <?php 
                        // 显示评论的回复链接 
                        comment_reply_link( array_merge( $args, array( 
                        'reply_text' =>  '回复', 
                        'after'      =>  ' <span>&darr;</span>', 
                        'depth'      =>  $depth, 
                        'max_depth'  =>  $args['max_depth'] ) ) ); 
                    ?>
                </div>
            </div>
            <?php
              comment_text()
            ?>
        </div>
    </li>
    <?php
}
?>