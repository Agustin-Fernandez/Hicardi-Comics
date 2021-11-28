<?php

$servername = "127.0.0.1";
$username = "root";
$password = "";
$database = "hikardi";

// Create connection
$mysqli = new mysqli($servername, $username, $password, $database);

// Check connection
if ($mysqli->connect_error) {
  die("Connection failed");
}

?>
