<?php
	session_start();
	include 'php/db_connection.php';

    $id = $_GET['id'];
	$sql = "SELECT * FROM comics WHERE id = $id LIMIT 100";

	$query = $mysqli->query($sql);
    $commic = $query->fetch_assoc();
    $images = explode(',', $commic['images']);

    $imageIdx = 0;
    if(isset($_GET['image'])) {
        $imageIdx = $_GET['image'];
    }

    $image = explode(',', $commic['images'])[$imageIdx];
	echo '<script>';
	echo 'var images = ' . json_encode($images);
	echo ';var imageIdx = ' . $imageIdx;
	echo '</script>';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nombre Comic</title> <!--Obtener el titulo del comic del json-->
    <link rel="stylesheet" href="css/styles.css"> 
    <link rel="stylesheet" href="css/comic.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
<nav class="navbar">
        <a href="./" class="logo--container"> <img src="../web/imgs/LogoAncho.png" alt="Hicardi Comics" class="logo"> </a>
	</nav>    
<section id="VisorComics">
    <div class="Row">
        <div class="DatosComic">
            <h2 id="Nombre">
                <?php echo $commic['name']; ?>
            </h2> <!--Obtener el titulo del comic del json-->
            <h2 id="Autor">
                <?php echo $commic['author']; ?>
            </h2> <!--Obtener el autor del comic del json-->
        </div>
        <div class="PrevNext">
            <a class="PrevNextButt" id="PrevButt">
                    <i class="fa fa-solid fa-arrow-left buttonIconLeft"></i>
                    Anterior
            </a>
            <a class="PrevNextButt" id="NextButt">
                Próximo
                <i class="fa fa-solid fa-arrow-right buttonIconRight"></i>
            </a>
        </div>
       
    </div>

    <article id="Comic">
        <div class="Imagen">
            <img src="<?php echo $image; ?>" alt="" id="commicImage">
        </div>
    </article>
</section>


<!--FOOTER-->
<section id="Footer">
        <img class="LogoFooter" src="../web/imgs/LogoAncho.png" class="LogoNav" alt="">

    
    <hr>
    <div class="redesContainer">
        <a href="../web/imgs/fb.png"><i class="fa fa-facebook-f w3-hover-opacity"></i></a>
        <a href="https://github.com/Agustin-Fernandez/Hicardi-Comics"><i class="fa fa-github w3-hover-opacity"></i></a>
        <a href="../web/imgs/ig.png"> <i class="fa fa-instagram w3-hover-opacity"></i></a>
    </div>
    
</section>

	<script src="scripts/comic.js"></script>
</body>
</html>
