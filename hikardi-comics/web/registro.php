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
        <a href="./" class="logo--container"> <img src="LogoAncho.png" alt="Hicardi Comics" class="logo"> </a>
	</nav>
    
	<main>
		<form method="post" action="php/register.php" class="form">
				<div class="form-field">
					<label class="texto-login">Nombre de Usuario</label>
					<input type="text" name="username" class="text-input" />
				</div>
				<br />
				<br />
				<div class="form-field">
					<label class="texto-login">Contraseña</label>
					<input type="password" name="password" class="text-input" />
				</div>
				<button class="form-button">Registrarme</button>
		</form>
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

