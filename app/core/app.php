<?php


class App{
    
    public function show($stuff)
    {
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


    public function loadController(){
        $URL = $this->sliptURL();
        
        $filename = "../app/controllers/".ucfirst($URL[0]).".php";
        
        if(file_exists($filename)){
            require $filename;
        }else{
            $filename = "../app/controllers/404.php";
            require $filename;
        }
    }


    
    
}
