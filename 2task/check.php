<?php
    if(isset($_GET['lol'])){
        switch($_GET['lol']){
            case "landing":
                echo '<script>location.replace("./landing.php");</script>';
                break;
            case "micro":
                echo '<script>location.replace("./micro.php");</script>';
                break;
            case "macro":
                echo '<script>location.replace("./macro.php");</script>';
                break;
            case "champions":
                echo '<script>location.replace("./champions.php");</script>';
                break;
            case "news":
                echo '<script>location.replace("./news.php");</script>';
                break;
            case "search":
                echo '<script>location.replace("./search.php");</script>';
                break;
            case "pyke":
                echo '<script>location.replace("./pyke.php");</script>';
                break;
            case "error":
                echo '<script>location.replace("./error.php");</script>';
                break;
            case "us":
                echo '<script>location.replace("./us.php");</script>';
        } 
    }      
?>