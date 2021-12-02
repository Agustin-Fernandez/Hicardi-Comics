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
	<link rel="stylesheet" href="css/comic.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
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

	<section id="Footer">
			<img class="LogoFooter" src="../web/imgs/LogoAncho.png" class="LogoNav" alt="">

		
		<hr>
		<div class="redesContainer">
			<a href="../web/imgs/fb.png"><i class="fa fa-facebook-f w3-hover-opacity"></i></a>
			<a href="https://github.com/Agustin-Fernandez/Hicardi-Comics"><i class="fa fa-github w3-hover-opacity"></i></a>
			<a href="../web/imgs/ig.png"> <i class="fa fa-instagram w3-hover-opacity"></i></a>
		</div>
		
	</section>
	
	<script src="scripts/comics.js"></script>
</body>
</html>
