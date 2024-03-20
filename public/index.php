<?php
    
    require "../app/core/init.php";



    //if doest exist home, home is default value 
    $url= $_GET['url'] ?? 'home';

    $url= explode("/", $url);

    $page_name = trim($url[0]);
    
    $filename = "../app/pages/".$page_name.".php";
    
//    print_r($url);
    



    //echo $filename;

    if(file_exists($filename)){
        require_once $filename;
    }else{
        require_once "../app/pages/404.php";
    }


//session_start();


/*
require "../app/core/init.php";

$app = new App;
$app->loadController();
*/


?>