<?php

if($_SERVER['SERVER_NAME']=="localhost"){
    define('DBUSER',"root"); 
    define('DBPASS',"");
    define('DBNAME',"seu_usa");
    define('DBHOST',"localhost");


}else{

    define("DBUSER","root"); 
    define("DBNAME","seu_usa");
    define("DBPASS","");
    define("DBHOST","secgcc.com");

}




