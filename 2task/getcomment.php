<?php 
    require('bdconnect.php');
    $res=$db->query("SELECT context FROM test");
    $arr=array();
    foreach($res as $value) $arr[]=$value['context'];
    if(count($arr)>0){
        echo '<p class="comment_title">Comments:</p>';
        echo '<ul class="comment_list">';
        foreach($arr as $value){
            echo '<li class="comment_item"> <section class="comment_section">';
            echo '<hr class="comment_line">';
            echo '<p class="comment_name">Stranger</p>';  
            echo '<p class="comment_context">'.$value.'</p>';  
            echo '</section></li>';
        }
        echo '<li class="comment_item"><section class="comment_section">';
        echo '<hr class="comment_line">'; 
        echo '</section></li>';
        echo '</ul>';
    }
?>