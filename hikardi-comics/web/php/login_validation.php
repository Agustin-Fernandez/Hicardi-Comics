<?php

session_start();

include 'db_connection.php';

$username = $_POST["username"];
$password = $_POST["password"];

if (empty($username) || empty($password)) die("bad request");

$sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";

$query = $mysqli->query($sql);
$count = $query->num_rows;
if($count == 0) die('
    <div>
        <h3>Usuario o contraseña incorrecta</h3>
        <a href="../login.php">
            <button>Volver al login</button>
        </a>
    </div>
');
$user = $query->fetch_assoc();

$_SESSION["id"] = $user['id'];
$_SESSION["username"] = $username;

header('Location: ../index.php');

?>
