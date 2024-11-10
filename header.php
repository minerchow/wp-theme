<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri()?>">
</head>
<body>
    <header>
        <div class="container">
            <div class="name">
                <a href="<?php echo home_url();?>"><?php echo bloginfo('name') ?></a>
            </div>
            <div class="nav">
                <?php
                    echo get_search_form();//搜索框
                    echo wp_nav_menu( array(
                        'container' => 'div',//容器标签
                        'container_class' => 'navbar-box',//ul父节点class值
                        'container_id' => 'nav-bar',//ul父节点id值
                        'theme_location' => 'menu666',//导航别名
                        'items_wrap' => '<ul class="navbar-nav">%3$s</ul>', //包装列表
                        ) );
                ?>
            </div>
            
        </div>
        <?php
          if(is_home()){
        ?>
         <div class="big-coniainer">
                <img src="<?php echo get_template_directory_uri()?>/assets/images/bg-big.jpg" />
            </div>
        <?php    
          }
        ?>
       
    </header>