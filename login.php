<?php
//ob_start();
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

    <title>BookSwap | Inicio</title>
    <?php include ("include/headertagbase.php"); ?>

    <link rel="icon" href="imagenes/bookswap/logo.png">

    <!--=====================================
    CSS
    #region CSS
    ======================================-->

    <style>
        .text-justify {
        text-align: justify;
        }
    </style>

    <!-- google font -->
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,600,700&display=swap" rel="stylesheet">

    <!-- font awesome -->
    <link rel="stylesheet" href="css/plugins/fontawesome.min.css">

    <!-- linear icons -->
    <link rel="stylesheet" href="css/plugins/linearIcons.css">

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
    PLUGINS JS
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
    Header
    #region HEADER
    ======================================-->

    <?php
    // Estos tres siempre se ponen despues del body, del archivo que estemos creando
    require_once "include/functions.php";
    require_once "include/db_tools.php";
    include ('main-header.php')

        ?>

    <!--=====================================
    Breadcrumb
    #region BREADCRUMB
    ======================================-->

    <div class="ps-breadcrumb">

        <div class="container">

            <ul class="breadcrumb">

                <li><a href="index.php">Inicio</a></li>

                <li>Mi Cuenta</li>

            </ul>

        </div>

    </div>

    <!--=====================================
    Login - Register Content
    ======================================-->

    <div class="ps-my-account">

        <div class="container">

            <form class="ps-form--account ps-tab-root" >

                <ul class="ps-tab-list">

                    <li class="active"><a href="#sign-in">Ingresar</a></li>

                    <li class=""><a href="#register">¡Regístrate!</a></li>

                </ul>

                <div class="ps-tabs">

                    <!--=====================================
                    Login Form
                    #region LOGIN
                    ======================================-->

                    <div class="ps-tab active" id="sign-in">

                        <div class="ps-form__content">
                            <h5>Iniciar sesión</h5>
                            <form id="form_login" name="form_login">
                                <div class="form-group">

                                    <input class="obligatorio form-control" type="email" id="login_email"
                                        name="login_email" placeholder="Correo electrónico">

                                </div>

                                <div class="form-group form-forgot">

                                    <input class="obligatorio form-control" type="password" id="login_password"
                                        name="login_password" placeholder="Contraseña">

                                    <!-- <a onclick="">Reestablecer</a> -->

                                </div>

                                <div class="form-group submtit">

                                    <button class="ps-btn ps-btn--fullwidth" id="btn_login">Ingresar</button>

                                </div>
                            </form>
                        </div>


                    </div><!-- End Login Form -->

                    <!--=====================================
                    Register Form
                    #region REGISTER
                    ======================================-->

                    <div class="ps-tab" id="register">

                        <div class="ps-form__content">

                            <h5>Crea una nueva cuenta</h5>

                            <form id="form_registro" name="form_registro">
                                <div class="form-group">

                                    <input class="obligatorio form-control" type="text" id="registro_nombre"
                                        name="registro_nombre" placeholder="Nombre(s)">

                                </div>

                                <div class="form-group">

                                    <input class="obligatorio form-control" type="text" id="registro_apellidos"
                                        name="registro_apellidos" placeholder="Apellidos">

                                </div>

                                <div class="form-group">

                                    <input class="obligatorio form-control" type="text" id="registro_codigo"
                                        name="registro_codigo" placeholder="Código UDG">

                                </div>

                                <div class="form-group">

                                    <select class="form-control obligatorio" name="registro_carrera" id="registro_carrera">
                                    </select>
                                
                                </div>

                                <div class="form-group">

                                    <select class="form-control obligatorio" name="registro_ciclo_ingreso"
                                        id="registro_ciclo_ingreso"></select>

                                </div>

                                <div class="form-group">

                                    <input class="obligatorio form-control" type="email" id="registro_email"
                                        name="registro_email" placeholder="Correo institucional">

                                </div>

                                <div class="form-group">

                                    <input class="obligatorio form-control" type="password" id="registro_password"
                                        name="registro_password" placeholder="Contraseña">

                                </div>

                                <div class="form-group">

                                    <input class="obligatorio form-control" type="password"
                                        id="registro_confirm_password" name="registro_confirm_password"
                                        placeholder="Confirmar contraseña">

                                </div>

                                <div class="form-group submtit">

                                    <button class="ps-btn ps-btn--fullwidth" id="btn_registro">Registrarse</button>

                                </div>

                            </form>

                        </div>

                    </div><!-- End Register Form -->

                </div>

            </form>

        </div>

    </div>
    
    <!--=====================================
    #region TERMINOS Y CONDICIONES
    ======================================-->
    <div class="modal" id="modalTerminos" tabindex="-1" role="dialog" aria-labelledby="modalTerminosLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title title" id="modalTerminosLabel">Términos y Condiciones</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                </div>
                <div class="modal-body">
                    <p class="text-justify">
                        ¡Bienvenido a nuestra plataforma de intercambio de libros! Antes de sumergirte en la experiencia de descubrir nuevos mundos literarios y conectar con otros entusiastas de la lectura, es importante que revises y comprendas nuestros términos y condiciones:
                    </p>
                    <div class="text-justify">
                        <ul>
                            <li>
                                <strong>Uso de la Plataforma:</strong>
                                Nuestra plataforma está diseñada para facilitar el intercambio de libros entre usuarios registrados. Al utilizar nuestros servicios, aceptas respetar todas las políticas y normativas establecidas.
                            </li><br>
                            <li>
                                <strong>Registro de Usuario:</strong>
                                Para acceder a todas las funciones de la plataforma, es necesario crear una cuenta de usuario. Debes proporcionar información precisa y mantener tu cuenta segura. No compartas tus credenciales de inicio de sesión con terceros.
                            </li><br>
                            <li>
                                <strong>Privacidad y Seguridad:</strong>
                                Nos comprometemos a proteger tu privacidad y seguridad en línea. La información personal que compartas con nosotros será tratada con confidencialidad y no será compartida con terceros sin tu consentimiento.
                            </li><br>
                            <li>
                                <strong>Contenido del Usuario:</strong>
                                Al utilizar nuestra plataforma, aceptas que eres responsable del contenido que compartes, incluidas las fotos de perfil y las imágenes de tus libros. Te pedimos que respetes los derechos de autor y que no publiques contenido inapropiado o que infrinja las leyes vigentes.
                            </li><br>
                            <li>
                                <strong>Intercambio de Libros:</strong>
                                Al solicitar un intercambio de libros con otro usuario, aceptas cumplir con los términos y condiciones acordados. Nosotros facilitamos el proceso, pero no nos hacemos responsables de cualquier disputa que surja entre los usuarios.
                            </li><br>
                            <li>
                                <strong>Chat entre Usuarios:</strong>
                                Una vez que se haya aceptado un intercambio, podrás comunicarte con el otro usuario a través de nuestro chat integrado. Te recordamos que debes mantener un comportamiento respetuoso y cordial en todas tus interacciones.
                            </li><br>
                            <li>
                                <strong>Responsabilidad del Usuario:</strong>
                                Los usuarios son responsables de la condición de los libros intercambiados y deben asegurarse de enviarlos en buen estado. No nos hacemos responsables de daños causados por mal uso o negligencia de parte de los usuarios.
                            </li><br>
                        </ul>
                    </div>
                    <div class="form-check d-flex align-items-center">
                        <div class="col">
                            <label for="aceptoTerminos" class="d-flex align-items-center">
                                <input class="form-check-label me-3" type="checkbox" id="aceptoTerminos">
                                <span>Acepto los términos y condiciones</span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="form-group">
                        <button id="btnCerrar" type="button" class="btn ps-btn" data-bs-dismiss="modal" style="background-color: gray;">Cerrar</button>
                        <button type="button" class="btn ps-btn" id="btnAceptarTerminos">Aceptar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--=====================================
    Footer
    #region FOOTER
    ======================================-->
    <!-- Este es el pie de pagina, el cual va antes de que se acabe el body -->
    <?php include ('main-footer.php'); ?>


    <!--=====================================
    JS PERSONALIZADO
    #region JS PERSONALIZADO
    ======================================-->

	<script src="js/main.js"></script>
    
	<script src="assets/js/jquery-2.2.4.min.js"></script>
	<script src="assets/js/slick.min.js"></script>
	<script src="assets/js/jquery-ui.js"></script>
	<script src="assets/js/jquery.nice-select.js"></script>
	<script src="assets/js/scripts.js"></script>
	<script src="assets/js/funciones.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
	<script src="assets/plugins/sweetalert/sweetalert.min.js"></script> 
	<script src="assets/plugins/sweetalert/jquery.sweet-alert.custom.js"></script>
    
	<script>
		$(document).ready(function() { 
			llenar_select_carreras();
			llenar_select_ciclos();
		});
	</script>
</body>

</html>