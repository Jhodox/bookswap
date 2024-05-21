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

	<title>BookSwap | Nuevo libro</title>
	<?php include("include/headertagbase.php"); ?>

	<link rel="icon" href="imagenes/bookswap/logoBookswap.png">

	<!--=====================================
	CSS
	======================================-->
	
	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,600,700&display=swap" rel="stylesheet">

	<!-- font awesome -->
	<link rel="stylesheet" href="css/plugins/fontawesome.min.css">

	<!-- linear icons -->
	<link rel="stylesheet" href="css/plugins/linearIcons.css">

	<!-- Bootstrap 4 -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	
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
	PLUGINS JS
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-7U0k3Xu0BUw7+oTgnOUMW4JCxW3IaOwFNMDkPTi2B5cg7x17OOJUtGkObUcZDQw2FXmO1w+23r00Yod/7uCC3w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
	Header
	======================================-->

    <?php
    // Estos tres siempre se ponen despues del body, del archivo que estemos creando
	require_once "include/functions.php";
	require_once "include/db_tools.php";  
    include('main-header.php'); 

    ?>

    <!--=====================================
    Breadcrumb
    ======================================-->  
	
	<div class="ps-breadcrumb">

        <div class="container">

            <ul class="breadcrumb">

                <li><a href="index">Inicio</a></li>

                <li>Nuevo libro</li>

            </ul>

        </div>

    </div>

    <!-- Aqui se puede empezar a trabajar lo nuevo  -->

     <!--=====================================
    Checkout
    ======================================--> 
    <div class="ps-checkout ps-section--shopping">

        <div class="container">

            <div class="ps-section__header">

                <h1>Nuevo Libro</h1>

            </div>

            <div class="ps-section__content">

                <form class="ps-form--checkout" action="do_action" method="post">

                    <div class="row">

                        <div class="col-xl-7 col-lg-8 col-sm-12 mx-auto">

                            <div class="ps-form__billing-info">

                                <h3 class="ps-form__heading">Billing Details</h3>

                                <div class="form-group">

                                    <label>First Name<sup>*</sup></label>

                                    <div class="form-group__content">

                                        <input class="form-control" type="text">

                                    </div>

                                </div>

                                <div class="form-group">

                                    <label>Last Name<sup>*</sup></label>

                                    <div class="form-group__content">

                                        <input class="form-control" type="text">

                                    </div>

                                </div>

                                <div class="form-group">

                                    <label>Email Address<sup>*</sup></label>

                                    <div class="form-group__content">

                                        <input class="form-control" type="email">

                                    </div>

                                </div>

                                <div class="form-group">

                                    <label>Country<sup>*</sup></label>

                                    <div class="form-group__content">

                                        <input class="form-control" type="text">

                                    </div>

                                </div>

                                <div class="form-group">

                                    <label>Phone<sup>*</sup></label>

                                    <div class="form-group__content">

                                        <input class="form-control" type="text">

                                    </div>

                                </div>

                                <div class="form-group">

                                    <label>Address<sup>*</sup></label>

                                    <div class="form-group__content">

                                        <input class="form-control" type="text">

                                    </div>

                                </div>

                                <div class="form-group">

                                    <div class="ps-checkbox">

                                        <input class="form-control" type="checkbox" id="create-account">

                                        <label for="create-account">Save address?</label>

                                    </div>

                                </div>

                                <h3 class="mt-40"> Addition information</h3>

                                <div class="form-group">

                                    <label>Order Notes</label>

                                    <div class="form-group__content">

                                        <textarea class="form-control" rows="7" placeholder="Notes about your order, e.g. special notes for delivery."></textarea>

                                    </div>

                                </div>

                                <a class="ps-btn ps-btn--fullwidth" onclick="" href="">Proceed to checkout</a>

                            </div>

                        </div>

                    </div>

                </form>

            </div>

        </div>

    </div>







    <!--=====================================
	Footer
	======================================-->  
    <!-- Este es el pie de pagina, el cual va antes de que se acabe el body -->
    <?php include('main-footer.php'); ?>


	<!--=====================================
	JS PERSONALIZADO
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
		 $(document).ready(function() { 
			// llenar_select_carreras();
			// llenar_select_ciclos();
		});
	</script>
</body>
</html>