<?php 
    require('bdconnect.php');
    $res=$db->query("SELECT context FROM test");
    $arr=array();
    foreach($res as $value) $arr[]=$value['context'];
    if(count($arr)>0){
        echo '<style type="text/css">';
        echo '.guides{ top: '.(string)(3150+count($arr)*175).'px; }';
        echo '</style>';
    }
?>