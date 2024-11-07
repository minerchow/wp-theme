<?php
    echo '<div class="list">';
    the_title('<h2 class="title"><a target="_blank" href="'.get_permalink().'">','</a></h2>');
    the_excerpt();
    echo '<div>'.get_the_author().'</div>';
    echo '<div>
            <span>'.get_the_date('Y-m-d').'</span>
            <a target="_blank" href="'.get_permalink().'"><span>查看详情</span></a>
        </div>';
    echo '</div>';
?>