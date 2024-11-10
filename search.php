<?php get_header(); ?>
    <main class="container">
        <div class="main-box">
            "<?php echo get_search_query()?>"的搜索结果
            <div id="lists">
                <?php 
                    while(have_posts()){
                        the_post();
                        get_template_part('templates/cons');
                            
                    }
                    the_posts_pagination( array(
                        'mid_size' => 2, //当前页码数的 两边 显示几个页码。
                        'prev_text' =>'上一页', //上一页
                        'next_text' =>'下一页', //下一页
                        'screen_reader_text'=>' '
                        ) );
                ?>
            </div>
        </div>
    </main>
   
<?php get_footer(); ?>    
