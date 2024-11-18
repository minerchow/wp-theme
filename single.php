<?php get_header(); ?>
    <main class="container">
        <div class="main-box">
            <div class="container-main">
                <div id="lists">
                    <?php 
                        the_post();
                        the_title('<h2 class="title">','</h2>');
                    ?>    
                    <h3><?php the_author();   ?> </h3> 
                    <div><?php echo get_the_time('Y-m-d H:i:s');//输出文章发布时间 ?></div>
                    <?php    
                        the_content();
                    ?>
                </div>
                <div class="navs">
                    <?php the_post_navigation(
        array(
            'prev_text' => '<span class="nav-subtitle">上一篇：</span> <span class="nav-title">%title</span>',
            'next_text' => '<span class="nav-subtitle">下一篇：</span> <span class="nav-title">%title</span>',
            )
    ); ?>
                </div>   
                <div class="card-box comments">
                    <?php comments_template(); ?>
                </div> 
            </div>
           <div class="sider-bar">
            <?php get_sidebar(); ?>
           </div>
        </div>
    </main>
   
<?php get_footer(); ?>    
