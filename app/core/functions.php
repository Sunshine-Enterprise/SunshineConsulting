<?php

function create_table(string $query, array $data = []){
    
    $string = "mysql:hostname=localhost;";
    $con = new PDO($string, DBUSER, DBPASS);
  //  print_r($con);

    $stm = $con->prepare($query);
    $stm -> execute($data);

    $result = $stm->fetchAll(PDO::FETCH_ASSOC);
    if(is_array($result) && !empty($result)){
        return $result;
    }

    return false;

}


function redirect($page){
    header('Location '.$page);
    die;
}





