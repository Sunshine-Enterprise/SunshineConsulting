<?php

print_r($_GET);


session_start();

class App{



    
    
    
    private function show($stuff){
        echo "<pre>";
        print_r($stuff);
        echo "</pre>";
    }
    
    function sliptURL(){
        
        $URL = $_GET['url'] ?? 'home';
        $URL = explode("/", $URL);
        show($URL);
        return $URL;
    }

    private function loadController(){
        $URL = sliptURL();
        
        $filename = "../app/controllers/".ucfirst($URL[0]).".php";
        
        if(file_exists($filename)){
            require $filename;
        }else{
            $filename = "../app/controllers/404.php";
            require $filename;
        }
    }
    
}
    loadController();

?>