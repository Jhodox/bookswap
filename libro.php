<?php
ob_start();
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

	<title>BookSwap | Libro</title>
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
	#region Header
	======================================-->

    <?php
    // Estos tres siempre se ponen despues del body, del archivo que estemos creando
	require_once "include/functions.php";
	require_once "include/db_tools.php";  
    include('main-header.php'); 


    if(isset($_GET['id'])){
		$id_libro_global = $_GET['id'];

        $query0 = "SELECT COUNT(*) AS existe FROM libros WHERE id_libro = '$id_libro_global'";
        $existe = GetValueSQL($query0, 'existe');
        if($existe == 0){
            header("Location: ../../404");
        }
	}else{
		$id_libro_global = 0;
        
        header("Location: 404");
        exit;
	}

    $query1 = "SELECT libros.*, usuarios.nombres, usuarios.apellidos
    FROM libros
    INNER JOIN usuarios ON libros.id_usuario = usuarios.id_usuario
    WHERE id_libro = $id_libro_global";
    
    $id_usuario = GetValueSQL($query1, 'id_usuario');
    $titulo = GetValueSQL($query1, 'titulo');
    $autor = GetValueSQL($query1, 'autor');
    $editorial = GetValueSQL($query1, 'editorial');
    $year = GetValueSQL($query1, 'year');
    $sinopsis = GetValueSQL($query1, 'sinopsis');
    $num_visitas = GetValueSQL($query1, 'num_visitas');
    $num_prestamos = GetValueSQL($query1, 'num_prestamos');
    $ruta_foto_portada = GetValueSQL($query1, 'ruta_foto_portada');
    $fecha_agregado = GetValueSQL($query1, 'fecha_agregado');
    $statusLibro = GetValueSQL($query1, 'status');

    $nombre_usuario = GetValueSQL($query1, 'nombres');
    $apellido_usuario = GetValueSQL($query1, 'apellidos');
    
    $nombre_usuario_completo = rtrim($nombre_usuario)." ".rtrim($apellido_usuario);


    if($year == NULL){
        $year = "Sin Año";
    }

    if($sinopsis == NULL){
        $sinopsis = "Sin Sinopsis";
    }

    if($ruta_foto_portada == NULL){
        $ruta_foto_portada = $ruta_foto_no_existente;
    }

    ?>

    <!--=====================================
    #region Breadcrumb
    ======================================-->  
	
	<div class="ps-breadcrumb">

        <div class="container">

            <ul class="breadcrumb">

                <li><a href="index">Inicio</a></li>

                <li>Libros</li>

                <li><?php echo $titulo; ?></li>

            </ul>

        </div>

    </div>

    <!-- Aqui se comienza a trabajar lo nuevo  -->



    <!--=====================================
    #region Product Content
    ======================================--> 

	<div class="ps-page--product">

        <div class="ps-container">

            <!--=====================================
            Product Container
            ======================================--> 

            <div class="ps-page__container">

                <!--=====================================
                Left Column
                ======================================--> 

                <div class="ps-page__left">

                    <div class="ps-product--detail ps-product--fullwidth">

                        <!--=====================================
                        Product Header
                        ======================================--> 

                        <div class="ps-product__header">

                            <!--=====================================
                            Gallery
                            ======================================--> 

                            <div class="ps-product__thumbnail" data-vertical="true">

                                <figure>

                                    <div class="item">
                                        <a href="<?php echo $ruta_foto_portada; ?>">
                                            <img style="width: 400px; height: auto;" src="<?php echo $ruta_foto_portada; ?>" alt="<?php echo $titulo; ?>">
                                        </a>
                                    </div>

                                </figure>

                            </div><!-- End Gallery -->

                            <!--=====================================
                            #region Product Info
                            ======================================--> 

                            <div class="ps-product__info">

                                <h1><?php echo $titulo; ?></h1> 
                                
                                <p><?php echo $autor;  ?></p>

                                <div class="ps-product__meta">

                                    <p>Ofrecido por: <a href="#"><?php echo $nombre_usuario_completo;  ?></a></p>

                                    <div class="ps-product__rating" style="min-width: 180px;">

                                        <select class="ps-rating" data-read-only="true">

                                            <option value="1">1</option>
                                            <option value="1">2</option>
                                            <option value="1">3</option>
                                            <option value="1">4</option>
                                            <option value="2">5</option>

                                        </select>

                                        <span>(1 review)</span>

                                    </div>

                                </div>

                                <div class="ps-product__desc">

                                    <p> 
                                                
                                        <div class="ps-product__actions" id="wishlist_spot" title="Agregar a wishlist">
                                            <?php 
                                            $query10 = "SELECT COUNT(*) AS existe FROM wishlist WHERE id_usuario = $id_usuario_global AND id_libro = $id_libro_global";
                                            $existe_wishlist = GetValueSQL($query10, 'existe');

                                            if($id_usuario_global != 0){
                                                if($id_usuario_global != $id_usuario){ //El libro no es del usuario con la sesión iniciada

                                                if($existe_wishlist > 0){ //El producto está en la wishlist
                                                        $icon_wishlist = 
                                                        '<a onclick="wishlist_remove('.$id_usuario_global.', '.$id_libro_global.', event)" href="">
                                                            <i class="fas fa-heart fa-xl"></i>
                                                        </a>';

                                                    } else{ //El producto no está en la wishlist
                                                        $icon_wishlist = 
                                                        '<a onclick="wishlist_add('.$id_usuario_global.', '.$id_libro_global.', event)" href="">
                                                            <i class="fa-regular fa-heart fa-xl"></i>
                                                        </a>';
                                                    }
                                                } else{
                                                    $icon_wishlist = '';
                                                }

                                                echo $icon_wishlist;
                                            }
                                            
                                            
                                            ?>
                                            
                                        </div>
                                        <?php 
                                        $query9 = "SELECT * FROM status_libro WHERE id_status = $statusLibro";
                                        $status_libro_text = GetValueSQL($query9, 'status_nombre');
                                        if($statusLibro == 1){
                                            $style_status = "color: #42831F !important;";
                                        } elseif($statusLibro == 2){
                                            $style_status = "color: #C47E1A !important;";
                                        } elseif($statusLibro == 3){
                                            $style_status = "color: #C4411A !important;";
                                        } else{
                                            $style_status = "";
                                        }
                                        ?>

                                        Status:<a class="mr-20" style="<?php echo $style_status; ?>"><strong> <?php echo $status_libro_text; ?></strong></a>
                                        <?php
                                        $query8 = "SELECT COUNT(*) AS cuantos FROM waitlist WHERE id_libro = $id_libro_global";
                                        $cuantos_waitlist = GetValueSQL($query8, 'cuantos');
                                        ?>
                                        En Espera:<a ><strong> <?php echo $cuantos_waitlist ?></strong></a> 

                                    </p>

                                    <p><?php echo $sinopsis; ?></p>

                                </div>

                                <div class="ps-product__shopping">

                                <?php
                                if($id_usuario_global != 0){
                                    if($id_usuario_global == $id_usuario){ ?>
                                        <a class="ps-btn ps-btn--black disabled" href="perfil" href="">Ver Lista de Espera</a>
                                    <?php } else{ ?>
                                        <a class="ps-btn ps-btn--black disabled" onclick="solicitar_libro(<?php echo $id_usuario_global.', '.$id_libro_global.', event'; ?>)" href="">Solicitar</a>
                                    <?php }
                                }
                                ?>

                                    

                                    <!-- <a class="ps-btn ps-disabled" onclick="" href="">Solicitar</a> -->


                                </div>

                            </div> <!-- End Product Info -->

                        </div> <!-- End Product header -->

                    </div>

                </div><!-- End Left Column -->

                <!--=====================================
                #region Right Column
                ======================================--> 

                <div class="ps-page__right d-block d-sm-none d-xl-block">

                <?php
                $query2 = "SELECT COUNT(*) AS cuantos FROM libros 
                WHERE id_usuario = $id_usuario AND id_libro <> $id_libro_global AND status != 3";
                $cuantos = GetValueSQL($query2, 'cuantos');

                if($cuantos > 0){

                ?>

                    <aside class="widget widget_same-brand">

                        <h3>Por el mismo usuario</h3>

                        <div class="widget__content">

                            <?php
                            $query3 = "SELECT * FROM libros 
                            WHERE id_usuario = $id_usuario AND id_libro <> $id_libro_global AND status != 3
                            ORDER BY RAND() LIMIT 2";
                            $libros_mismo_usuario = DatasetSQL($query3);
                            while($row3 = mysqli_fetch_array($libros_mismo_usuario)){
                                $row_id_libro = $row3['id_libro'];
                                $row_titulo = $row3['titulo'];
                                $row_autor = $row3['autor'];
                                $row_year = $row3['year'];
                                $row_sinopsis = $row3['sinopsis'];
                                $row_ruta_foto_portada = $row3['ruta_foto_portada'];
                                $row_statusLibro = $row3['status'];

                                
                                $url_producto = str_replace(" ", "-", $row_titulo);
                                $url_producto = str_replace("/", "-", $url_producto);
                                $url_producto = quitarAcentos($url_producto);
                                $url_producto = preg_replace('/[^a-zA-Z0-9\s-]/', '', $url_producto);
                                ?>

                                <div class="ps-product">

                                    <div class="ps-product__thumbnail">

                                        <a onclick="sumar_visitas(<?php echo $row_id_libro; ?>)" href="libro/<?php echo $row_id_libro; ?>/<?php echo $url_producto; ?> "><img src="<?php echo $row_ruta_foto_portada ?>" alt="<?php echo $titulo; ?>"></a>

                                    </div>

                                    <div class="ps-product__container">

                                        <div class="ps-product__content">

                                            <a onclick="sumar_visitas(<?php echo $row_id_libro; ?>)" class="ps-product__title" href="libro/<?php echo $row_id_libro; ?>/<?php echo $url_producto; ?> "><?php echo $row_titulo ?></a>
                                            <p><?php echo $row_autor; ?></p>


                                        </div>

                                    </div>

                                </div>
                            <?php
                            }

                            
                           
                            ?>

                        </div>

                    </aside>
                <?php
                }
                ?>

                </div><!-- End Right Column -->

            </div><!--  End Product Container -->

            <!--=====================================
             #region Customers who bought
            ======================================--> 

            <div class="ps-section--default ps-customer-bought">

                <div class="ps-section__header">

                    <h3>Productos Relacionados</h3>

                </div>

                <div class="ps-section__content">

                    <div class="row">
                    
                    <?php 
                    // $cont = 0;
                    // do{

                    
                        $query4 = "SELECT COUNT(*) AS cuantos FROM libros 
                            WHERE (LOWER(titulo) LIKE '%$titulo%'
                            OR LOWER(autor) LIKE '%$autor%'
                            OR LOWER(editorial) LIKE '%$editorial%') 
                            AND id_libro <> $id_libro_global";
                        // echo $query4;
                        $cuantos4 = GetValueSQL($query4, 'cuantos');
                        if($cuantos4 <= 6){
                            $resto = 6 - $cuantos4;
                        } else{
                            $resto = 0;
                        }
                        

                        if($cuantos4 > 0){
                            // $query5 = "SELECT * FROM libros 
                            //     WHERE ((LOWER(titulo) LIKE '%$titulo%'
                            //     OR LOWER(autor) LIKE '%$autor%'
                            //     OR LOWER(editorial) LIKE '%$editorial%') 
                            //     AND id_libro <> $id_libro_global)
                            //     OR id_libro <> $id_libro_global
                            //     LIMIT 6";
                            $query5 = "(
                                SELECT * 
                                FROM libros 
                                WHERE (
                                    LOWER(titulo) LIKE '%$titulo%'
                                    OR LOWER(autor) LIKE '%$autor%'
                                    OR LOWER(editorial) LIKE '%$editorial%'
                                ) 
                                AND id_libro <> $id_libro_global
                                AND status != 3
                                LIMIT 6
                            )
                            UNION ALL
                            (
                                SELECT * 
                                FROM libros 
                                WHERE id_libro NOT IN (
                                    SELECT id_libro 
                                    FROM libros 
                                    WHERE (
                                        LOWER(titulo) LIKE '%$titulo%'
                                        OR LOWER(autor) LIKE '%$autor%'
                                        OR LOWER(editorial) LIKE '%$editorial%'
                                    )
                                    AND id_libro <> $id_libro_global
                                )
                                AND id_libro <> $id_libro_global
                                AND status != 3
                                ORDER BY RAND()
                                LIMIT $resto
                            )"; //La primera parte de la consulta es para encontrar coincidencias, y la segunda para encontrar aleatorios y que se llenen los 6 espacios

                            // echo $query5;
                            $libros_relacionados = DatasetSQL($query5);

                            while($row5 = mysqli_fetch_array($libros_relacionados)){
                                $row_id_libro = $row5['id_libro'];
                                $row_titulo = $row5['titulo'];
                                $row_autor = $row5['autor'];
                                $row_year = $row5['year'];
                                $row_sinopsis = $row5['sinopsis'];
                                $row_ruta_foto_portada = $row5['ruta_foto_portada'];
                                $row_statusLibro = $row5['status'];

                                $row_id_usuario = $row5['id_usuario'];

                                $row_query = "SELECT * FROM usuarios WHERE id_usuario = $row_id_usuario";
                                $row_nombres = GetValueSQL($row_query, 'nombres');
                                $row_apellidos = GetValueSQL($row_query, 'apellidos');
                                
                                $row_nombre_usuario_completo = rtrim($row_nombres)." ".rtrim($row_apellidos);

                                
                                $url_producto = str_replace(" ", "-", $row_titulo);
                                $url_producto = str_replace("/", "-", $url_producto);
                                $url_producto = quitarAcentos($url_producto);
                                $url_producto = preg_replace('/[^a-zA-Z0-9\s-]/', '', $url_producto);
                                ?>
                                <!-- Inicio Producto -->
                                <div class="col-lg-2 col-md-4 col-6 ">

                                    <div class="ps-product">

                                        <div class="ps-product__thumbnail">

                                            <a onclick="sumar_visitas(<?php echo $row_id_libro; ?>)" href="libro/<?php echo $row_id_libro; ?>/<?php echo $url_producto; ?> ">
                                                <img src="<?php echo $row_ruta_foto_portada ?>" alt="<?php echo $row_titulo ?>">
                                            </a>

                                        </div>

                                        <div class="ps-product__container">

                                            <div class="ps-product__content">

                                                <a onclick="sumar_visitas(<?php echo $row_id_libro; ?>)" class="ps-product__title" href="libro/<?php echo $row_id_libro; ?>/<?php echo $url_producto; ?> "><?php echo $row_titulo; ?></a>
                                                <p><?php echo $row_autor; ?></p>
                                                <p>Ofrecido por: <a class="ps-product__title" href="#"><?php echo "Luis Angel De La Cruz Ascencio"; ?></a></p>
                                            </div>

                                            <div class="ps-product__content hover">

                                                <a onclick="sumar_visitas(<?php echo $row_id_libro; ?>)" class="ps-product__title" href="libro/<?php echo $row_id_libro; ?>/<?php echo $url_producto; ?> "><?php echo $row_titulo; ?></a>
                                                <p><?php echo $row_autor; ?></p>
                                                <p>Ofrecido por: <a class="ps-product__title" href="#"><?php echo $row_nombre_usuario_completo; ?></a></p>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                                <!-- Fin Producto -->

                            <?php
                            }
                        }
                    //     $cont++;
                    // } while($cont < 6);

                    
                    ?>

                    </div>

                </div>

            </div><!--  End Customers who bought -->

            <!--=====================================
            #region Related products
            ======================================--> 

            <div class="ps-section--default">

                <div class="ps-section__header">

                    <h3>Añadidos recientemente</h3>

                </div>

                <div class="ps-section__content">

                    <div class="ps-carousel--nav owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="10000" data-owl-gap="30" data-owl-nav="true" data-owl-dots="true" data-owl-item="6" data-owl-item-xs="2" data-owl-item-sm="2" data-owl-item-md="3" data-owl-item-lg="4" data-owl-item-xl="5" data-owl-duration="1000" data-owl-mousedrag="on">
                        <!-- Puedo añadir unos 10 libros -->

                        <?php 
                    // $cont = 0;
                    // do{

                    
                        $query6 = "SELECT COUNT(*) AS cuantos FROM libros 
                        INNER JOIN usuarios ON libros.id_usuario = usuarios.id_usuario
                        WHERE libros.status != 3 AND id_libro <> $id_libro_global
                        ORDER BY fecha_agregado";
                        // echo $query4;
                        $cuantos6 = GetValueSQL($query6, 'cuantos');

                        if($cuantos6 > 0){
                            $query7 = "SELECT * FROM libros 
                            INNER JOIN usuarios ON libros.id_usuario = usuarios.id_usuario
                            WHERE libros.status != 3 AND id_libro <> $id_libro_global
                            ORDER BY fecha_agregado
                            LIMIT 10"; 

                            // echo $query7;
                            $libros_recientes = DatasetSQL($query7);

                            while($row7 = mysqli_fetch_array($libros_recientes)){
                                $row_id_libro = $row7['id_libro'];
                                $row_titulo = $row7['titulo'];
                                $row_autor = $row7['autor'];
                                $row_year = $row7['year'];
                                $row_sinopsis = $row7['sinopsis'];
                                $row_ruta_foto_portada = $row7['ruta_foto_portada'];
                                $row_statusLibro = $row7['status'];

                                $row_id_usuario = $row7['id_usuario'];

                                $row_query = "SELECT * FROM usuarios WHERE id_usuario = $row_id_usuario";
                                $row_nombres = GetValueSQL($row_query, 'nombres');
                                $row_apellidos = GetValueSQL($row_query, 'apellidos');
                                
                                $row_nombre_usuario_completo = rtrim($row_nombres)." ".rtrim($row_apellidos);

                                
                                $url_producto = str_replace(" ", "-", $row_titulo);
                                $url_producto = str_replace("/", "-", $url_producto);
                                $url_producto = quitarAcentos($url_producto);
                                $url_producto = preg_replace('/[^a-zA-Z0-9\s-]/', '', $url_producto);
                                ?>

                                <!--=====================================
                                #region Inicio producto
                                ======================================-->
                                
                                <div class="ps-product">
                                    <div class="ps-product__thumbnail">
                                        <a onclick="sumar_visitas(<?php echo $row_id_libro; ?>)"  href="libro/<?php echo $row_id_libro; ?>/<?php echo $url_producto; ?> ">
                                            <img style="height: 320px" src="<?php echo $row_ruta_foto_portada ?>" alt="<?php $row_titulo ?>">
                                        </a>
                                    </div>
                                    <div class="ps-product__container">
                                        <div class="ps-product__content">
                                            <a class="ps-product__title" onclick="sumar_visitas(<?php echo $row_id_libro; ?>)" class="ps-product__title" href="libro/<?php echo $row_id_libro; ?>/<?php echo $url_producto; ?> "><?php echo $row_titulo; ?></a>
                                            <p><?php echo $row_autor; ?></p>
                                            <p>Ofrecido por: <a class="ps-product__title" href="#"><?php echo $row_nombre_usuario_completo; ?></a></p>
                                        </div>
                                        <div class="ps-product__content hover">
                                            <a class="ps-product__title" onclick="sumar_visitas(<?php echo $row_id_libro; ?>)" class="ps-product__title" href="libro/<?php echo $row_id_libro; ?>/<?php echo $url_producto; ?> "><?php echo $row_titulo; ?></a>
                                            <p><?php echo $row_autor; ?></p>
                                            <p>Ofrecido por: <a class="ps-product__title" href="#"><?php echo $row_nombre_usuario_completo; ?></a></p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Fin Producto -->

                            <?php
                            }
                        }
                    //     $cont++;
                    // } while($cont < 10);

                    ?>

                    </div>
                </div>
            </div> <!-- End Related products -->

        </div>

    </div><!-- End Product Content -->












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