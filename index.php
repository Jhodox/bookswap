<?php
// ob_start();
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

	<title>BookSwap | Inicio</title>

	<link rel="icon" href="img/template/icono.png">

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
    include('main-header.php') 

    ?>

    <!--=====================================
    Home Content
    ======================================-->  

    <div id="homepage-6">

    	<!--=====================================
    	Home Banner
    	======================================-->  

    	<div class="ps-home-banner" id="inicio">
            <div class="ps-carousel--nav-inside owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="5000" data-owl-gap="0" data-owl-nav="true" data-owl-dots="true" data-owl-item="1" data-owl-item-xs="1" data-owl-item-sm="1" data-owl-item-md="1" data-owl-item-lg="1" data-owl-duration="1000" data-owl-mousedrag="on" data-owl-animate-in="fadeIn" data-owl-animate-out="fadeOut">

                <div class="ps-banner--market-4" data-background="img/slider/horizontal/1.jpg">
                	<img src="img/slider/horizontal/1.jpg" alt="">
                    <div class="ps-banner__content">
                        <h3>INTERCAMBIA LIBROS <br/> 
                        	ENTRE ESTUDIANTES <br/> 
                        </h3>
                        <!-- <a class="ps-btn" href="#">Shop Now</a> -->
                    </div>
                </div>

                <div class="ps-banner--market-4" data-background="img/slider/horizontal/2.jpg">
                	<img src="img/slider/horizontal/2.jpg" alt="">
                    <div class="ps-banner__content">
                        <h3>FORMA PARTE <br/> 
                        	DE TU COMUNIDAD <br/> 
                        </h3>
                        <!-- <a class="ps-btn" href="#">Shop Now</a> -->
                    </div>
                </div>

            </div>

        </div><!-- End Home Banner-->

        <!--=====================================
    	Home Features
    	======================================-->  

        <div class="ps-site-features">

            <div class="container">

                <div class="ps-block--site-features ps-block--site-features-2">

                    <div class="ps-block__item">
                        <div class="ps-block__left"><i class="icon-bubbles"></i></div>
                        <div class="ps-block__right">
                            <h4>Fácil Comunicación</h4>
                            <p>Entre usuarios</p>
                        </div>
                    </div>

                    <div class="ps-block__item">
                        <div class="ps-block__left"><i class="icon-book"></i></div>
                        <div class="ps-block__right">
                            <h4>Variedad de Libros</h4>
                            <p>De terceros o propios</p>
                        </div>
                    </div>

                    <div class="ps-block__item">
                        <div class="ps-block__left"><i class="icon-sync"></i></div>
                        <div class="ps-block__right">
                            <h4>Intercambios seguros</h4>
                            <p>Entre estudiantes de UDG</p>
                        </div>
                    </div>

                    <div class="ps-block__item">
                        <div class="ps-block__left"><i class="icon-cross-circle"></i></div>
                        <div class="ps-block__right">
                            <h4>Sistema de Strikes</h4>
                            <p>Para evitar inconvenientes</p>
                        </div>
                    </div>
                    
                </div>

            </div>

        </div><!-- End Home Features-->

       

        

        
 	<!--=====================================
	Section Gray
	======================================-->  

	<div class="ps-section--gray">

        <div class="container">

        	<!--=====================================
			            MÁS BUSCADOS
			======================================-->  

            <div class="ps-block--products-of-category" id="mas-buscados">

            	<!--=====================================
				Menu subcategory
				======================================-->  

                <div class="ps-block__categories">

                    <h3>Los Más <br> Buscados</h3>

                        <a class="ps-block__more-link" href="#">Ver Todos</a>

                </div>

                <!-- Aqui estaba el slider -->

                <!--=====================================
				Block Product Box
				======================================-->  

                <div class="ps-block__product-box">
					
					<!--=====================================
					Product Simple
					======================================--> 

                    <?php 
                    $cont = 0;
                    do{

                    
                    $query1 = "SELECT * FROM libros 
                    INNER JOIN usuarios ON libros.id_usuario = usuarios.id_usuario
                    WHERE libros.status != 3
                    ORDER BY num_visitas
                    LIMIT 6";   
                    $mas_buscados = DatasetSQL($query1);

                    while($row1 = mysqli_fetch_array($mas_buscados)){
                        $id_libro = $row1['id_libro'];
                        $codigo_usuario = $row1['codigo_usuario'];
                        $titulo = $row1['titulo'];
                        $autor = $row1['autor'];
                        $editorial = $row1['editorial'];
                        $year = $row1['year'];
                        $sinopsis = $row1['sinopsis'];
                        $num_visitas = $row1['num_visitas'];
                        $num_prestamos = $row1['num_prestamos'];
                        $ruta_foto_portada = $row1['ruta_foto_portada'];
                        $fecha_agregado = $row1['fecha_agregado'];
                        $status = $row1['status'];

                        $url_producto = str_replace(" ", "-", $titulo);
                        $url_producto = str_replace("/", "-", $url_producto);
                        $url_producto = str_replace("Ñ", "N", $url_producto);
                        $url_producto = str_replace("ñ", "ñ", $url_producto);

                        $nombre_usuario = $row1['nombres'];
                        $apellido_usuario = $row1['apellidos'];

                        $nombre_usuario_completo = rtrim($nombre_usuario)." ".rtrim($apellido_usuario);

                        if($year == NULL){
                            $year = "Sin Año";
                        }

                        if($sinopsis == NULL){
                            $sinopsis = "Sin Sinopsis";
                        }

                        if($ruta_foto_portada == NULL){
                            $ruta_foto_portada = "imagenes/libros/no-image.jpg";
                        }

                        
                        ?>

                        <div class="ps-product ps-product--simple">

                        <div class="ps-product__thumbnail">

                            <a onclick="sumar_visitas(<?php echo $id_libro; ?>)" href="libro/<?php echo $id_libro; ?>/<?php echo $url_producto; ?> ">

                                <img src="<?php echo $ruta_foto_portada; ?>" alt="<?php echo $titulo; ?>">

                            </a>

                        </div>

                        <div class="ps-product__container">

                            <div class="ps-product__content" data-mh="clothing">

                                <a onclick="sumar_visitas(<?php echo $id_libro; ?>)" class="ps-product__title" href="libro/<?php echo $id_libro; ?>/<?php echo $url_producto; ?> "><?php echo $titulo; ?></a> 
                                <p><?php echo $autor; ?></p>

                                <br>

                                <p>Ofrecido por: <a class="ps-product__title" href="#"><?php echo $nombre_usuario_completo; ?></a></p>

                            </div>

                        </div>

                        </div>

                    
                    <?php } 
                    $cont++;
                    } while($cont < 3);?>                 

                </div><!-- End Block Product Box -->
              
            </div><!-- End Products of category -->
            <!-- Termino de Productos por bloque -->
                    


            <!--=====================================
			            MÁS INTERCAMBIADOS
			======================================-->  

            <div class="ps-block--products-of-category" id="mas-intercambiados">

            	<!--=====================================
				Menu subcategory
				======================================-->  

                <div class="ps-block__categories">

                    <h3>Con Mayor Cantidad <br> De Intercambios</h3>

                        <a class="ps-block__more-link" href="#">Ver Todos</a>

                </div>

                <!-- Aqui estaba el slider -->

                <!--=====================================
				Block Product Box
				======================================-->  

                <div class="ps-block__product-box">
					
					<!--=====================================
					Product Simple
					======================================--> 

                    <?php 
                    $cont = 0;
                    do{

                    
                    $query1 = "SELECT * FROM libros 
                    INNER JOIN usuarios ON libros.id_usuario = usuarios.id_usuario
                    WHERE libros.status != 3
                    ORDER BY libros.num_prestamos
                    LIMIT 6";
                    $mas_buscados = DatasetSQL($query1);

                    while($row1 = mysqli_fetch_array($mas_buscados)){
                        $id_libro = $row1['id_libro'];
                        $codigo_usuario = $row1['codigo_usuario'];
                        $titulo = $row1['titulo'];
                        $autor = $row1['autor'];
                        $editorial = $row1['editorial'];
                        $year = $row1['year'];
                        $sinopsis = $row1['sinopsis'];
                        $num_visitas = $row1['num_visitas'];
                        $num_prestamos = $row1['num_prestamos'];
                        $ruta_foto_portada = $row1['ruta_foto_portada'];
                        $fecha_agregado = $row1['fecha_agregado'];
                        $status = $row1['status'];

                        $url_producto = str_replace(" ", "-", $titulo);
                        $url_producto = str_replace("/", "-", $url_producto);
                        $url_producto = str_replace("Ñ", "N", $url_producto);
                        $url_producto = str_replace("ñ", "ñ", $url_producto);

                        $nombre_usuario = $row1['nombres'];
                        $apellido_usuario = $row1['apellidos'];
                        
                        $nombre_usuario_completo = rtrim($nombre_usuario)." ".rtrim($apellido_usuario);

                        if($year == NULL){
                            $year = "Sin Año";
                        }

                        if($sinopsis == NULL){
                            $sinopsis = "Sin Sinopsis";
                        }

                        if($ruta_foto_portada == NULL){
                            $ruta_foto_portada = "imagenes/libros/no-image.jpg";
                        }

                        
                        ?>

                        <div class="ps-product ps-product--simple">

                        <div class="ps-product__thumbnail">

                            <a onclick="sumar_visitas(<?php echo $id_libro; ?>)" href="libro/<?php echo $id_libro; ?>/<?php echo $url_producto; ?> ">

                                <img src="<?php echo $ruta_foto_portada; ?>" alt="<?php echo $titulo; ?>">

                            </a>

                        </div>

                        <div class="ps-product__container">

                            <div class="ps-product__content" data-mh="clothing">

                                <a onclick="sumar_visitas(<?php echo $id_libro; ?>)" class="ps-product__title" href="libro/<?php echo $id_libro; ?>/<?php echo $url_producto; ?> "><?php echo $titulo; ?></a> 
                                <p><?php echo $autor; ?></p>

                                <br>

                                <p>Ofrecido por: <a class="ps-product__title" href="#"><?php echo $nombre_usuario_completo; ?></a></p>

                            </div>

                        </div>

                        </div>

                    
                    <?php } 
                    $cont++;
                    } while($cont < 3);?>                 

                </div><!-- End Block Product Box -->
              
            </div><!-- End Products of category -->
            <!-- Termino de Productos por bloque -->

           

            <!--=====================================
			            MÁS RECIENTES
			======================================-->  

            <div class="ps-block--products-of-category" id="recientes">

            	<!--=====================================
				Menu subcategory
				======================================-->  

                <div class="ps-block__categories">

                    <h3>Añadidos <br> Recientemente</h3>

                        <a class="ps-block__more-link" href="#">Ver Todos</a>

                </div>

                <!-- Aqui estaba el slider -->

                <!--=====================================
				Block Product Box
				======================================-->  

                <div class="ps-block__product-box">
					
					<!--=====================================
					Product Simple
					======================================--> 

                    <?php 
                    $cont = 0;
                    do{

                    
                    $query1 = "SELECT * FROM libros 
                    INNER JOIN usuarios ON libros.id_usuario = usuarios.id_usuario
                    WHERE libros.status != 3
                    ORDER BY fecha_agregado
                    LIMIT 6";
                    $mas_buscados = DatasetSQL($query1);

                    while($row1 = mysqli_fetch_array($mas_buscados)){
                        $id_libro = $row1['id_libro'];
                        $codigo_usuario = $row1['codigo_usuario'];
                        $titulo = $row1['titulo'];
                        $autor = $row1['autor'];
                        $editorial = $row1['editorial'];
                        $year = $row1['year'];
                        $sinopsis = $row1['sinopsis'];
                        $num_visitas = $row1['num_visitas'];
                        $num_prestamos = $row1['num_prestamos'];
                        $ruta_foto_portada = $row1['ruta_foto_portada'];
                        $fecha_agregado = $row1['fecha_agregado'];
                        $status = $row1['status'];

                        $url_producto = str_replace(" ", "-", $titulo);
                        $url_producto = str_replace("/", "-", $url_producto);
                        $url_producto = str_replace("Ñ", "N", $url_producto);
                        $url_producto = str_replace("ñ", "ñ", $url_producto);

                        $nombre_usuario = $row1['nombres'];
                        $apellido_usuario = $row1['apellidos'];

                        $nombre_usuario_completo = rtrim($nombre_usuario)." ".rtrim($apellido_usuario);

                        if($year == NULL){
                            $year = "Sin Año";
                        }

                        if($sinopsis == NULL){
                            $sinopsis = "Sin Sinopsis";
                        }

                        if($ruta_foto_portada == NULL){
                            $ruta_foto_portada = "imagenes/libros/no-image.jpg";
                        }

                        
                        ?>

                        <div class="ps-product ps-product--simple">

                        <div class="ps-product__thumbnail">

                            <a onclick="sumar_visitas(<?php echo $id_libro; ?>)" href="libro/<?php echo $id_libro; ?>/<?php echo $url_producto; ?> ">

                                <img src="<?php echo $ruta_foto_portada; ?>" alt="<?php echo $titulo; ?>">

                            </a>

                        </div>

                        <div class="ps-product__container">

                            <div class="ps-product__content" data-mh="clothing">

                                <a onclick="sumar_visitas(<?php echo $id_libro; ?>)" class="ps-product__title" href="libro/<?php echo $id_libro; ?>/<?php echo $url_producto; ?> "><?php echo $titulo; ?></a> 
                                <p><?php echo $autor; ?></p>

                                <br>

                                <p>Ofrecido por: <a class="ps-product__title" href="#"><?php echo $nombre_usuario_completo; ?></a></p>

                            </div>

                        </div>

                        </div>

                    
                    <?php } 
                    $cont++;
                    } while($cont < 3);?>                 

                </div><!-- End Block Product Box -->
              
            </div><!-- End Products of category -->
            <!-- Termino de Productos por bloque -->

           

        </div><!-- End Container-->

    </div><!-- End Section Gray-->


    <!--=====================================
	Footer
	======================================-->  
    <!-- Este es el pie de pagina, el cual va antes de que se acabe el body -->
    <?php include('main-footer.php'); ?>

    <!--=====================================
    PopUp
    ======================================-->
    
    <!-- Ventana Emergente al cargar página. Podría servir para más adelante -->
    <!-- <div class="ps-site-overlay"></div> -->

    <!-- <div class="ps-popup" id="subscribe" data-time="500">
        <div class="ps-popup__content bg--cover" data-background="img/bg/subscribe.jpg" style="background: url(img/bg/subscribe.jpg);"><a class="ps-popup__close" href="#"><i class="icon-cross"></i></a>
            <form class="ps-form--subscribe-popup" action="index.html" method="get">
                <div class="ps-form__content">
                    <h4>Get <strong>25%</strong> Discount</h4>
                    <p>Subscribe to the Martfury mailing list <br> to receive updates on new arrivals, special offers <br> and our promotions.</p>
                        <div class="form-group">
                            <input class="form-control" type="text" placeholder="Email Address" required="">
                            <button class="ps-btn">Subscribe</button>
                        </div>
                        <div class="ps-checkbox">
                            <input class="form-control" type="checkbox" id="not-show" name="not-show">
                            <label for="not-show">Don't show this popup again</label>
                        </div>
                </div>
            </form>
        </div>
    </div> -->

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
</body>
</html>