<?php

$hostname = "localhost";
$username = "root";
$password = "";
$database = "Electro_naccer";

$connection = new mysqli($hostname, $username, $password, $database);

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}






?>