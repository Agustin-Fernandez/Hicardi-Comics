<?php

$servername = "localhost";
$username = "agusfer";
$password = "fera2019";
$database = "Agustin";

// Create connection
$mysqli = new mysqli($servername, $username, $password, $database);

// Check connection
if ($mysqli->connect_error)
  die("Connection failed: {$mysqli->connect_error}");

$mysqli->query(
  "CREATE TABLE IF NOT EXISTS `$database`.`users` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `username` VARCHAR(48) NULL,
  `password` VARCHAR(48) NULL,
  PRIMARY KEY (`id`))"
);

$mysqli->query(
  "CREATE TABLE `$database`.`comics` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` varchar(256) NOT NULL,
  `author` varchar(64) NOT NULL,
  `images` text NOT NULL,
  PRIMARY KEY (`id`))"
);

?>
