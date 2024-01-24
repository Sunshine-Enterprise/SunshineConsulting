<?php

//print_r($_GET);


session_start();

require "../app/core/init.php";

$app = new App;
$app->loadController();




?>