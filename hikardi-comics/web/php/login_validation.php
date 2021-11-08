<?

session_start();

include 'db_connection.php';

$servername = "127.0.0.1";
$username = "root";
$password = "";
$database = "hikardi";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

$username = $_POST["username"];

$password = $_POST["password"];


if (empty($username) || empty($password)) die("bad request");
if ($mysqli->connect_errno) die("Conexión fallida");

// $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";

// $query = $mysqli->query($sql);
// $count = $query->num_rows;

// if($count == 0) die("Usuario o contraseña incorrectas");

// $user = $query->fetch_assoc();

$_SESSION["id"] = 1;
$_SESSION["username"] = $username;

header('Location: ../index.php');

?>
