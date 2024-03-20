<?php

function query(string $query, array $data = []){

	$string = "mysql:hostname=".DBHOST.";dbname=". DBNAME;
    $con = new PDO($string, DBUSER, DBPASS);

    //-----------------------------
    $statement = $con->prepare($query);
    $statement->execute($data);

    //here we say collect all data and associate it
    // if result return array with data return it
    // else return false
    $result = $statement->fetchAll(PDO::FETCH_ASSOC);
    if(is_array($result) && !empty($result))
	{
		return $result;
	}

	return false;
}


function redirect($page){
    header('Location: '.ROOT.'/'.$page);
    die;
}





