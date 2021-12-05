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

$sql1 = "
CREATE TABLE IF NOT EXISTS `comics` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` varchar(256) NOT NULL,
  `author` varchar(64) NOT NULL,
  `images` text NOT NULL,
  PRIMARY KEY (`id`));
";

$mysqli->query($sql1);

$sql2 = "
CREATE TABLE IF NOT EXISTS `users` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `username` VARCHAR(48) NULL,
  `password` VARCHAR(48) NULL,
  PRIMARY KEY (`id`));
";

$mysqli->query($sql2);

?>
