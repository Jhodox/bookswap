<?php
//ob_start();
session_start();
?>


<!DOCTYPE html>
<html lang="es">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="format-detection" content="telephone=no">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="author" content="">
	<meta name="keywords" content="">
	<meta name="description" content="">

	<title>BookSwap | Sobre nosotros</title>
	<?php include ("include/headertagbase.php"); ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<link rel="icon" href="imagenes/bookswap/logoBookswap.png">

	<!--=====================================
	#region CSS
	======================================-->

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css" rel="stylesheet">

	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,600,700&display=swap" rel="stylesheet">

	<!-- font awesome -->
	<link rel="stylesheet" href="css/plugins/fontawesome.min.css">

	<!-- linear icons -->
	<link rel="stylesheet" href="css/plugins/linearIcons.css">

	<!-- Estilo Admin -->
    <link rel="stylesheet" href="assets/css/admin-style.css">

	<!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

	<!-- Owl Carousel -->
	<link rel="stylesheet" href="css/plugins/owl.carousel.css">

	<!-- Slick -->
	<link rel="stylesheet" href="css/plugins/slick.css">

	<!-- Light Gallery -->
	<link rel="stylesheet" href="css/plugins/lightgallery.min.css">

	<!-- Font Awesome Start -->
	<link rel="stylesheet" href="css/plugins/fontawesome-stars.css">

	<!-- jquery Ui -->
	<link rel="stylesheet" href="css/plugins/jquery-ui.min.css">

	<!-- Select 2 -->
	<link rel="stylesheet" href="css/plugins/select2.min.css">

	<!-- Scroll Up -->
	<link rel="stylesheet" href="css/plugins/scrollUp.css">

	<!-- DataTable -->
	<link rel="stylesheet" href="css/plugins/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" href="css/plugins/responsive.bootstrap.datatable.min.css">

	<!-- estilo principal -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Market Place 4 -->
	<link rel="stylesheet" href="css/market-place-4.css">

	<!--=====================================
	#region PLUGINS JS
	======================================-->

	<!-- jQuery library -->
	<script src="js/plugins/jquery-1.12.4.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

	<!-- Owl Carousel -->
	<script src="js/plugins/owl.carousel.min.js"></script>

	<!-- Images Loaded -->
	<script src="js/plugins/imagesloaded.pkgd.min.js"></script>

	<!-- Masonry -->
	<script src="js/plugins/masonry.pkgd.min.js"></script>

	<!-- Isotope -->
	<script src="js/plugins/isotope.pkgd.min.js"></script>

	<!-- jQuery Match Height -->
	<script src="js/plugins/jquery.matchHeight-min.js"></script>

	<!-- Slick -->
	<script src="js/plugins/slick.min.js"></script>

	<!-- jQuery Barrating -->
	<script src="js/plugins/jquery.barrating.min.js"></script>

	<!-- Slick Animation -->
	<script src="js/plugins/slick-animation.min.js"></script>

	<!-- Light Gallery -->
	<script src="js/plugins/lightgallery-all.min.js"></script>
	<script src="js/plugins/lg-thumbnail.min.js"></script>
	<script src="js/plugins/lg-fullscreen.min.js"></script>
	<script src="js/plugins/lg-pager.min.js"></script>

	<!-- jQuery UI -->
	<script src="js/plugins/jquery-ui.min.js"></script>

	<!-- Sticky Sidebar -->
	<script src="js/plugins/sticky-sidebar.min.js"></script>

	<!-- Slim Scroll -->
	<script src="js/plugins/jquery.slimscroll.min.js"></script>

	<!-- Select 2 -->
	<script src="js/plugins/select2.full.min.js"></script>

	<!-- Scroll Up -->
	<script src="js/plugins/scrollUP.js"></script>

	<!-- DataTable -->
	<script src="js/plugins/jquery.dataTables.min.js"></script>
	<script src="js/plugins/dataTables.bootstrap4.min.js"></script>
	<script src="js/plugins/dataTables.responsive.min.js"></script>

	<!-- Chart -->
	<script src="js/plugins/Chart.min.js"></script>


	<script src="https://kit.fontawesome.com/471d91ac13.js" crossorigin="anonymous"></script>
	<!--alerts CSS -->
	<link href="assets/plugins/sweetalert/sweetalert.css" rel="stylesheet" type="text/css">
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
		integrity="sha512-7U0k3Xu0BUw7+oTgnOUMW4JCxW3IaOwFNMDkPTi2B5cg7x17OOJUtGkObUcZDQw2FXmO1w+23r00Yod/7uCC3w=="
		crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

	<!--=====================================
	Preload
	======================================-->

	<!-- <div id="loader-wrapper">
		<img src="img/template/loader.jpg">
		<div class="loader-section section-left"></div>
		<div class="loader-section section-right"></div>
	</div>   -->

	<!--=====================================
	Header Promotion
	======================================-->


	<!--=====================================
	#region HEADER
	======================================-->

	<?php
	// Estos tres siempre se ponen despues del body, del archivo que estemos creando
	require_once "include/functions.php";
	require_once "include/db_tools.php";
	include ('main-header.php');

	?>

	<!--=====================================
	#region Breadcrumb
	======================================-->

	<div class="ps-breadcrumb">

		<div class="container">

			<ul class="breadcrumb">

				<li><a href="index.php">Inicio</a></li>

				<li>Sobre Nosotros</li>

			</ul>

		</div>

	</div>

	<!--=====================================
	#Preguntas Frecuentes
	======================================-->


    <div class="container">
        <div class="bg-light p-5 rounded shadow-sm">

            <h2 class="text-center mb-4">Preguntas Frecuentes</h2>
            
            <p class="text-justify">En esta sección se muestran preguntas y sus respuestas con el objetivo de aclarar tus dudas
            sobre el funcionamiento y desarrollo de la pagina, para que de esta forma puedas intercambiar tus libros favoritos sin ningun problema,
            sin mas que agregar, nosotros los desarrolladores, esperamos que tengas una buena experiencia.
            
            <br>
            <h3 class = "mt-4">Preguntas</h3>
            <p class="text-justify"><strong>¿Como puedo verificar mi usuario?</strong></p>
            <p class="text-justify">Para verificar tu usuario primero tienes que cumplir con la carga de documentosen la pestaña de  <a href="perfil"><strong>perfil</strong></a>.</p>

            <p class="text-justify"><strong>¿Como puedo solicitar un libro?</strong></p>
            <p class="text-justify">Para solicitar un libro puedes ir a la pagina de inicio donde podras encontrar la variedad de libros que hay dentro de 
            la pagina, pero si quieres un libro en especifico puedes ir a la barra de busqueda, e ingresar el libro que quieras, una vez seleccionado y si ya te
            encuentras verificado podras solicitar el libro para que el dueño considere el prestamo del libro. Si este decide aceptar, entonces podran comunicarse
            por medio del chat. Aqui esta la pagina de <a href="index"><strong>inicio</strong></a>, donde encontraras todo tipo de libros.</p>


            <p class="text-justify"><strong>¿Como puedo agregar libros?</strong></p>
            <p class="text-justify">Para agregar libros tendras que ir a la pagina de <a href="perfil"><strong>perfil</strong></a> y despues tendras que ir al apartado 
            de mis libros, donde podras observar un boton de agregar libros y tendras que llenar la información correspondiente.</p>

            <p class="text-justify"><strong>¿Como puedo iniciar un chat?</strong></p>
            <p class="text-justify">Para iniciar una conversación, es necesario que primero se acepte la solicitud de un libro, de esta forma se habilitara un apartado para
            ambos, donde sera posible comenzar la conversación y llegar a un acuerdo sobre las fechas.</p>

            <p class="text-justify"><strong>¿Como funciona la wishlist?</strong></p>
            <p class="text-justify">La wishlist es un poco mas privada y personal, ya que aqui podras poner todos esos libros que te gustan pero que aun no quieres solicitar
            de hecho puedes consultar tu wishlist justo aqui <a href="wishlist"><strong>wishlist</strong></a>. Para acceder solo tienes que darle corazon a un libro que te guste.</p>


            
        </div>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>












	<!--=====================================
	#region Footer
	======================================-->
	<!-- Este es el pie de pagina, el cual va antes de que se acabe el body -->
	<?php include ('main-footer.php'); ?>


	<!--=====================================
	#region JS PERSONALIZADO
	======================================-->

	<script src="js/main.js"></script>

	<script src="assets/js/jquery-2.2.4.min.js"></script>
	<script src="assets/js/slick.min.js"></script>
	<script src="assets/js/jquery-ui.js"></script>
	<script src="assets/js/jquery.nice-select.js"></script>
	<script src="assets/js/scripts.js"></script>
	<script src="assets/js/funciones.js"></script>

	<script src="assets/plugins/sweetalert/sweetalert.min.js"></script>
	<script src="assets/plugins/sweetalert/jquery.sweet-alert.custom.js"></script>

	<script>
		$(document).ready(function () {
			// llenar_select_carreras();
			// llenar_select_ciclos();
		});
	</script>
</body>

</html>