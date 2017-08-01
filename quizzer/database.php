<?php
//Create connection credentials
$db_host = 'localhost';
$db_name = 'quizzer';
$db_user = 'root';
$db_password = 'root';

//Create the mysqli object
$mysqli = new mysqli($db_host, $db_user, $db_password, $db_name);

//Error handler
if($mysqli->connect_error) {
    printf("Connect Failed: %s\n", $mysqli->connect_error);
    exit();
}