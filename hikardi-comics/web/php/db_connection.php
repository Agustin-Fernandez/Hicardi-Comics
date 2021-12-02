<?php

$servername = "127.0.0.1";
$username = "agusfer";
$password = "fera2019";
$database = "Agustin";

// Create connection
$mysqli = new mysqli($servername, $username, $password, $database);

// Check connection
if ($mysqli->connect_error) {
  die("Connection failed");
}

?>
