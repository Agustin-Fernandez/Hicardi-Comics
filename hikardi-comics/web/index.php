<?php
	session_start();
	// include 'php/db_connection.php';
	// $sql = "SELECT * FROM comics LIMIT 100";

	// $query = $mysqli->query($sql);
	// $count = $query->num_rows;
	$count = 241;
	$comic =  [
			'name' => 'El eternauta (english)',
			'slug' => 'el-eternauta-(english)',
			'images' => [
				'https://www.androidpure.com/wp-content/uploads/2014/12/Xiaomi-Mi-Logo-e1418320898263.png',
				'https://brandemia.org/sites/default/files/inline/images/volkswagen_logo-portada.jpg',
				'https://www.tailorbrands.com/wp-content/uploads/2020/07/mcdonalds-logo.jpg'
			]
	];
	$comic2 =  [
			'name' => 'Test',
			'slug' => 'el-eternauta-(english)',
			'images' => [
				'https://www.androidpure.com/wp-content/uploads/2014/12/Xiaomi-Mi-Logo-e1418320898263.png',
				'https://brandemia.org/sites/default/files/inline/images/volkswagen_logo-portada.jpg',
				'https://www.tailorbrands.com/wp-content/uploads/2020/07/mcdonalds-logo.jpg'
			]
	];
	$comics = [$comic, $comic2, $comic, $comic, $comic, $comic, $comic, $comic, $comic, $comic ];

	echo '<script>';
	echo 'var comics = ' . json_encode($comics);
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
        <a href="index.html" class="logo--container">
					<img src="LogoAncho.png" alt="Hicardi Comics" class="logo">
				</a>
        <input type="text" id="search-input" class="text-input" />

	<?php if ( isset($_SESSION["id"]) ) { ?>
		<span>Bienvenido, <?php echo $_SESSION["username"] ?></span>
	<?php } else { ?>
		<a href="login.html">Perfil / login</a>
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
