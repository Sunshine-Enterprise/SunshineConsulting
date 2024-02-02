<?php

create_table();

function create_table(){
    
    $string = "mysql:hostname=localhost;";
    $con = new PDO($string, DBUSER, DBPASS);
    //print_r($con);

}
