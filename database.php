<?php

//Create connection credentials 
$db_host = 'localhost';
$db_name = 'quizer';
$db_user = 'dbuser';
$db_password = 'password';


//Crate MySQLI object
$mysqli= new mysqli($db_host,$db_user,$db_password,$db_name);

//Error Handler
if ($mysqli -> connect_error){
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

?>