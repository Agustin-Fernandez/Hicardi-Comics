<?php

include 'db_connection.php';

$username = $_POST["username"];

$password = $_POST["password"];

if (empty($username) || empty($password)) die("bad request");

$sql = "INSERT INTO users VALUES (0, '$username', '$password')";

$query = $mysqli->query($sql);

include './login_validation.php'

?>
