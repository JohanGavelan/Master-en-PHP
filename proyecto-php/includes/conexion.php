<?php

$server = 'localhost';
$user = 'root';
$password = '';
$database = 'blog';
$port = 3308;

$db = mysqli_connect($server, $user, $password, $database, $port);


mysqli_query($db, "SET NAMES 'utf-8'");


//Iniciar sesión

if(!isset($_SESSION)) {
    session_start();
}