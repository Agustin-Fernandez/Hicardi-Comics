<?php
	session_start();
	include 'php/db_connection.php';
	$sql = "SELECT * FROM comics LIMIT 100";

	$query = $mysqli->query($sql);
	$commic = $query->fetch_all(MYSQLI_ASSOC);
	$count = $query->num_rows;

	echo '<script>';
	echo 'var comics = ' . json_encode($commic);
	echo '</script>';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Hicardi Comics</title>
	<link rel="stylesheet" href="css/styles.css">
</head>
<body class="fondo">
	<nav class="navbar">
        <a href="" class="logo--container">
					<img src="LogoAncho.png" alt="Hicardi Comics" class="logo">
				</a>
        <input type="text" id="search-input" class="text-input" />

	<?php if ( isset($_SESSION["id"]) ) { ?>
		<div style="display: flex;">
			<span>Bienvenido, <?php echo $_SESSION["username"] ?></span>
			<div style="width: 1px; background: #333; margin: 0 8px;"></div>
			<a href="php/logout.php" style="color: blue;">Cerrar sesión</a>
		</div>
	<?php } else { ?>
		<div style="display: flex;">
			<a href="login.php" style="color: blue;">Login</a>
			<div style="width: 1px; background: #333; margin: 0 8px;"></div>
			<a href="registro.php" style="color: blue;">Registro</a>
		</div>
	<?php } ?>
	</nav>
	<main>
		<section>
			<div id="comics-container"></div>
			<div id="paginator"></div>
		</section>
	</main>

	<footer>
		😎😎😎😎😎😎😎😎😎😎😎😎😎😎😎😎😎😎😎😎😎😎😎😎😎😎😎😎😎😎😎😎😎😎😎😎😎
	</footer>

	<script src="scripts/comics.js"></script>
</body>
</html>
