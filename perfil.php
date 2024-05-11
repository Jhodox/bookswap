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

	<title>BookSwap | Perfil</title>
	<?php include("include/headertagbase.php"); ?>

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
	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"> -->
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

    if($sesion == 0){
        header("Location: index");
    }

    ?>

    <input type="hidden" id="id_usuario_global" value="<?php echo $id_usuario_global; ?>">
    <!--=====================================
    Breadcrumb
    ======================================-->  
	
	<div class="ps-breadcrumb">

        <div class="container">

            <ul class="breadcrumb">

                <li><a href="index.php">Inicio</a></li>

                <li>Perfil</li>

            </ul>

        </div>

    </div>

<!-- Aqui se puede empezar a trabajar lo nuevo  -->

     <!--=====================================
    My Account Content
    ======================================--> 

    <!--=====================================
    #region Mi Perfil
    ======================================-->

    <div class="ps-vendor-dashboard pro" style="margin-top: -50px">

        <div class="container">

            <div class="ps-section__header">

                <!--=====================================
                Profile
                ======================================--> 

                <?php
                    if($sesion != 0){
                        $query1 = "SELECT * FROM usuarios WHERE id_usuario = $id_usuario_global";
                        $nombres = GetValueSQL($query1, 'nombres');
                        $apellidos = GetValueSQL($query1, 'apellidos');
                        $codigo_usuario = GetValueSQL($query1, 'codigo_usuario');
                        $id_carrera = GetValueSQL($query1, 'carrera');
                        $id_ciclo_ingreso = GetValueSQL($query1, 'ciclo_ingreso');
                        $correo = GetValueSQL($query1, 'correo');
                        $ruta_foto_perfil = GetValueSQL($query1, 'ruta_foto_perfil');
                        $ruta_foto_credencial = GetValueSQL($query1, 'ruta_foto_credencial');
                        $id_status_usuario = GetValueSQL($query1, 'status');


                        $query2 = "SELECT * FROM carreras WHERE id_carrera = '$id_carrera'";
                        $carrera = GetValueSQL($query2, 'carrera');

                        $query3 = "SELECT * FROM ciclos WHERE id_ciclo = '$id_ciclo_ingreso'";
                        $ciclo_ingreso = GetValueSQL($query3, 'ciclo');

                        $query4 = "SELECT * FROM status_usuario WHERE id_status = $id_status_usuario";
                        $status = GetValueSQL($query4,'status');

                        if($ruta_foto_perfil == NULL){
                            $ruta_foto_perfil = $ruta_foto_no_usuario;
                        }
                        
                        if($ruta_foto_credencial == NULL){
                            $ruta_foto_credencial = $ruta_foto_no_existente;
                        }

                        if($id_status_usuario != 1){
                            $mensaje_status = "* Para validar tu cuenta, actualiza tu foto de perfil y la credencial de UDG.";
                        } else{
                            $mensaje_status = "";
                        }

                        $query7 = "SELECT COUNT(*) AS cuantos FROM strikes WHERE id_usuario = $id_usuario_global";
                        $cuantos_strikes = GetValueSQL($query7, 'cuantos');

                        if($cuantos_strikes > 0){
                            $mensaje_strikes = "<a class='text-decoration-underline' href=''>(Ver detalles)</a>";
                        } else{
                            $mensaje_strikes = "";
                        }
                    
                    }
                
                ?> 


                <aside class="ps-block--store-banner container" id="div-perfil">

                    <div class="ps-block__user row" >

                        <div class="ps-block__user-avatar-quitar-esto text-center col-lg-2">

                            <img style="width: 300px; height: 150px; margin-bottom: 10px; border-radius: 50%;" src="<?php echo $ruta_foto_perfil ?>" alt="Foto de Perfil">

                            <div class="br-wrapper">

                                <button class="btn btn-primary btn-lg rounded-circle" title="Editar" onclick="activar_actualizar_datos(<?php echo $id_usuario_global; ?>)" data-bs-toggle="modal" data-bs-target="#modalCambiarInfoUsuario" data-bs-whatever="@mdo">
                                    <i class="fas fa-pencil-alt"></i>
                                </button>

                            </div>

                            <div class="br-wrapper mt-5">

                                <!-- <select class="ps-rating" data-read-only="true" style="display: none;">
                                    <option value="1">1</option>
                                    <option value="1">2</option>
                                    <option value="1">3</option>
                                    <option value="1">4</option>
                                    <option value="2">5</option>
                                </select> -->
                                <!-- <div class="text-center">
                                    <a type="button" href="lista-de-espera">
                                        <h1><i class="fas fa-clock fa-sm text-white"></i></h1>
                                        <h4 class="text-white">Lista de Espera </h4>
                                    </a>
                                </div> -->

                            </div>

                        </div>

                        <!-- Aqui se muestra lo del perfil -->

                        <div class="ps-block__user-content text-left text-lg-left col-lg-6">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12">
                                        <h2 class="text-white"><?php echo $nombres . ' ' . $apellidos; ?></h2>
                                    </div>
                                    <div class="col-lg-6">
                                        <p><i class="fas fa-user"></i> Código: <?php echo $codigo_usuario; ?></p>
                                        <p><i class="fas fa-envelope"></i> Correo Institucional: <?php echo $correo; ?></p>
                                        <p><i class="fas fa-graduation-cap"></i>Carrera: <?php echo $carrera; ?></p>
                                        <p><i class="fas fa-calendar-days"></i> Ciclo de ingreso: <?php echo $ciclo_ingreso; ?></p>
                                        <p><i class="fa-solid fa-xmark"></i> Strikes: <?php echo $cuantos_strikes." ".$mensaje_strikes; ?> </p>
                                        <p><i class="fas fa-flag"></i> Status: <?php echo $status ?></p>
                                        <p><?php echo $mensaje_status; ?></p>
                                    </div>

                                    <!-- Columna derecha (imagen de la credencial) -->
                                    <div class="col-lg-6">
                                        <p><i class="fas fa-id-card"></i> Credencial de UDG:</p>
                                        <img style="max-width: 250px; height: auto;" src="<?php echo $ruta_foto_credencial; ?>" class="img-fluid" alt="Credencial de Estudiante">
                                    </div>

                                    <!-- Botones -->
                                    <div class="col-lg-12">
                                        <button class="btn btn-warning btn-lg" onclick="activar_actualizar_datos(<?php echo $id_usuario_global; ?>)" data-bs-toggle="modal" data-bs-target="#modalCambiarInfoUsuario" data-bs-whatever="@mdo">Actualizar datos</button>
                                        <button class="btn btn-info btn-lg" data-bs-toggle="modal" data-bs-target="#modalCambiarPassword" data-bs-whatever="@mdo">Cambiar contraseña</button>
                                    </div>
                                </div>
                            </div>
                            
                        </div>

                        <!-- Aqui se muestra lo del peerfil -->
                        <div class="row ml-lg-auto pt-5 col-lg-4">

                        <?php
                        $query2 = "SELECT COUNT(*) AS cuantos FROM wishlist WHERE id_usuario = $id_usuario_global";
                        $cuantos = GetValueSQL($query2, 'cuantos');

                        ?>
            
                            <!-- <div class="col-lg-3 col-6">
                                <div class="text-center">
                                    <a href="#">
                                        <h1><i class="fas fa-heart text-white"></i></h1>
                                        <h4 class="text-white">Wishlist <span class="badge badge-secondary rounded-circle"><?php echo $cuantos;?></span></h4>
                                    </a>
                                </div>
                            </div>
                
                            <div class="col-lg-3 col-6">
                                <div class="text-center">
                                    <a href="#">
                                        <h1><i class="fas fa-bell text-white"></i></h1>
                                        <h4 class="text-white">Nots <span class="badge badge-secondary rounded-circle">51</span></h4>
                                    </a>
                                </div>
                            </div>
                
                            <div class="col-lg-3 col-6">
                                <div class="text-center">
                                    <a href="#">
                                        <h1><i class="fas fa-comments text-white"></i></h1>
                                        <h4 class="text-white">Messages <span class="badge badge-secondary rounded-circle">51</span></h4>
                                    </a>
                                </div>
                            </div> -->

                        </div>

                    </div>

                </aside><!-- s -->
                
                
                <div class="ps-section__content">

                    <ul class="ps-section__links">
                        <li id="li_mis_libros" class="active"><a type="button" href="" onclick="cambiar_opciones_perfil(1, event)">Mis Libros</a></li>
                        <li id="li_prestamos_activos"><a type="button" href="" onclick="cambiar_opciones_perfil(2, event)">Préstamos activos</a></li>
                        <li id="li_historial_prestamos"><a type="button" href=""  onclick="cambiar_opciones_perfil(3, event)">Historial de Préstamos</a></li>
                    </ul>

                    
                    <!--------------------------------------- 
                        #region Mis Libros
                    ---------------------------------------->

                    <div class="ps-section--shopping ps-shopping-cart" style="margin-top: -120px;">

                        <div class="container" id="div_mis_libros">

                            <div class="ps-section__header">

                                <h1>Mis Libros</h1>

                            </div>

                            <div class="ps-section__content" style="margin-top: -50px;">

                                <div class="table-responsive">
                                    
                                <div class="ps-section__cart-actions" style="margin-top: -100px; margin-bottom: -50px;">
                                    <?php
                                    if($id_status_usuario != 1){  ?>
                                        <!-- 
                                            #region CAMBIAR IF A != 2
                                        -->
                                        <a class="btn ps-btn" type="button" data-bs-toggle="modal" data-bs-target="#modalAgregarLibro" data-bs-whatever="@mdo">
                                            <i class="fa-solid fa-circle-plus"></i> Agregar Libro
                                        </a>
                                    <?php } ?>


                                </div>
                                    <div class="table-responsive">
                                        <table class="table ps-table--shopping-cart">

                                            <thead>

                                                <tr>

                                                    <th>Libro</th>
                                                    <th>Editorial</th>
                                                    <th>Año</th>
                                                    <th>Fecha de Agregado</th>
                                                    <th>Estatus</th>
                                                    <th>Opciones</th>
                                                    <th>Préstamos</th>

                                                </tr>

                                            </thead>

                                            <tbody>

                                                <?php 
                                                $query5 = "SELECT COUNT(*) AS cuantos FROM libros WHERE id_usuario = $id_usuario_global";
                                                $cuantos_libros = GetValueSQL($query5, 'cuantos');

                                                if($cuantos_libros > 0){
                                                    $query6 = "SELECT * FROM libros
                                                    INNER JOIN status_libro ON libros.status = status_libro.id_status
                                                    WHERE id_usuario = $id_usuario_global
                                                    ORDER BY (id_libro = 3) DESC";
                                                    $mis_libros = DatasetSQL($query6);

                                                    while($row6 = mysqli_fetch_array($mis_libros)){
                                                        $id_libro = $row6['id_libro'];
                                                        $titulo = $row6['titulo'];
                                                        $autor = $row6['autor'];
                                                        $editorial = $row6['editorial'];
                                                        $year = $row6['year'];
                                                        $fecha_agregado = $row6['fecha_agregado']; 
                                                        $sinopsis = $row6['sinopsis'];
                                                        $id_libro = $row6['id_libro'];
                                                        $ruta_foto_portada = $row6['ruta_foto_portada'];
                                                        $status = $row6['status_nombre'];

                                                        $url_producto = str_replace(" ", "-", $titulo);
                                                        $url_producto = str_replace("/", "-", $url_producto);
                                                        $url_producto = quitarAcentos($url_producto);

                                                        $id_status = $row6['id_status'];

                                                        switch($id_status){
                                                            case 1:
                                                                $cambiar_status_libro = '<a type="button" onclick="cambiar_status_libro('.$id_libro.', 1)" title="Cambiar estatus"><i class="fas fa-toggle-on"></i></a>';
                                                                $mensaje_status = '<i class="fas fa-book-openfas fa-book-open"></i> '.$status;
                                                            break;
                                                            case 2:
                                                                $cambiar_status_libro = '';
                                                                $mensaje_status = '<i class="fas fa-book-reader"></i> '.$status;
                                                            break;
                                                            case 3:
                                                                $cambiar_status_libro = '<a type="button" onclick="cambiar_status_libro('.$id_libro.', 3)"><i class="fas fa-toggle-off"></i></a>';
                                                                $mensaje_status = '<i class="fas fa-book"></i> '.$status;
                                                            break;
                                                        }

                                                        if($year == NULL){
                                                            $year = "Sin Año";
                                                        }
                                                    
                                                        if($sinopsis == NULL){
                                                            $sinopsis = "Sin Sinopsis";
                                                        }

                                                        if($ruta_foto_portada == NULL){
                                                            $ruta_foto_portada = $ruta_foto_no_existente;
                                                        }

                                                        $query10 = "SELECT COUNT(*) AS existe FROM prestamos WHERE id_libro = $id_libro AND status_prestamo != 4 AND status_prestamo != 6";
                                                        $existe_prestamos = GetValueSQL($query10, 'existe');

                                                        if($existe_prestamos > 0){
                                                            $query11 = "SELECT * FROM prestamos 
                                                            INNER JOIN usuarios ON prestamos.id_usuario_destino = usuarios.id_usuario
                                                            INNER JOIN status_prestamos ON prestamos.status_prestamo = status_prestamos.id_status
                                                            WHERE id_libro = $id_libro AND status_prestamo != 4 AND status_prestamo != 6";

                                                            $id_prestamo = GetValueSQL($query11, 'id_prestamo');
                                                            $nombre_prestamo = GetValueSQL($query11, 'nombres'). " " .GetValueSQL($query11, 'apellidos');
                                                            $correo_prestamo = GetValueSQL($query11, 'correo');
                                                            $codigo_usuario_prestamo = GetValueSQL($query11, 'codigo_usuario');
                                                            $fecha_inicio = GetValueSQL($query11, 'fecha_inicio');
                                                            $fecha_fin = GetValueSQL($query11, 'fecha_fin');
                                                            $id_status_prestamo = GetValueSQL($query11, 'status_prestamo');
                                                            $status_prestamo = GetValueSQL($query11, 'status_nombre');

                                                            if($fecha_fin == NULL){
                                                                $fecha_fin = "Por acordar";
                                                            }

                                                            if($fecha_inicio == NULL){
                                                                $fecha_inicio = "Por acordar";
                                                            }

                                                            $prestamo = '<div class="table-responsive">
                                                                            <table class="table table-bordered">
                                                                                <thead>
                                                                                    <tr>
                                                                                        <th>Status</th>
                                                                                        <th>Nombre</th>
                                                                                        <th>Correo Institucional</th>
                                                                                        <th>Código UDG</th>
                                                                                        <th>Fecha Inicio</th>
                                                                                        <th>Fecha Fin</th>';
                                                                                        if($id_status_prestamo == 1 ){
                                                                                            $prestamo .= '<th>Opciones</th>';
                                                                                        }
                                                                                    $prestamo .= '</tr>
                                                                                </thead>
                                                                                <tbody>';

                                                            $prestamo .= '<tr>
                                                                <td>' . $status_prestamo . '</td>
                                                                <td>' . $nombre_prestamo . '</td>
                                                                <td>' . $correo_prestamo . '</td>
                                                                <td class="text-center">' . $codigo_usuario_prestamo . '</td>
                                                                <td class="text-center">' . $fecha_inicio . '</td>
                                                                <td class="text-center">' . $fecha_fin . '</td>';
                                                                if($id_status_prestamo == 1 ){
                                                                    $prestamo .= '<td class="text-center" >
                                                                        <a class="btn btn-link" type="button" style="font-size: 16px;" href="" onclick="aceptar_denegar_prestamo('.$id_prestamo.', '.$id_libro.', 1, event)">Aceptar</a> / 
                                                                        <a class="btn btn-link" type="button" style="font-size: 16px;" href="" onclick="aceptar_denegar_prestamo('.$id_prestamo.', '.$id_libro.', 2, event)">Denegar</a>
                                                                            
                                                                    </td>';
                                                                }
                                                            $prestamo .= '</tr>';


                                                            $prestamo .= '</tbody>
                                                                        </table>
                                                                    </div>';
                                                            

                                                            $query8 = "SELECT COUNT(*) AS cuantos FROM waitlist
                                                            INNER JOIN usuarios ON waitlist.id_usuario = usuarios.id_usuario
                                                            WHERE id_libro = $id_libro";
                                                            $cuantos_waitlist = GetValueSQL($query8, 'cuantos');

                                                            if ($cuantos_waitlist > 0) {

                                                                $waitlist = '<div class="table-responsive">
                                                                            <table class="table table-bordered">
                                                                                <thead>
                                                                                    <tr>
                                                                                        <th>Turno</th>
                                                                                        <th>Nombre</th>
                                                                                        <th>Correo Institucional</th>
                                                                                        <th>Código UDG</th>
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody>';

                                                                $query9 = "SELECT * FROM waitlist
                                                                            INNER JOIN usuarios ON waitlist.id_usuario = usuarios.id_usuario
                                                                            WHERE id_libro = $id_libro ORDER BY turno";
                                                                $query_waitlist = DatasetSQL($query9);
                                                                
                                                            
                                                                while ($row9 = mysqli_fetch_array($query_waitlist)) {
                                                                    $turno = $row9['turno'];
                                                                    $nombre_waitlist = $row9['nombres'] . " " . $row9['apellidos'];
                                                                    $correo_waitlist = $row9['correo'];
                                                                    $codigo_usuario_waitlist = $row9['codigo_usuario'];
                                                            
                                                                    $waitlist .= '<tr>
                                                                                    <td>' . $turno . '</td>
                                                                                    <td>' . $nombre_waitlist . '</td>
                                                                                    <td>' . $correo_waitlist . '</td>
                                                                                    <td class="text-center">' . $codigo_usuario_waitlist . '</td>
                                                                                </tr>';
                                                                }

                                                                
                                                                $waitlist .= '</tbody>
                                                                    </table>
                                                                </div>';
                                                            
                                                            } else {
                                                                $waitlist = "No existe lista de espera";
                                                            }


                                                        } else{
                                                            $prestamo = "No hay ningún préstamo activo.";
                                                            $waitlist = "No existe lista de espera";
                                                        }


                                                        
                                                        

                                                        echo '<tr>
                                                            <td>
            
                                                                <div class="ps-product--cart">
            
                                                                    <div class="ps-product__thumbnail">
            
                                                                        <a href="libro/'.$id_libro.'/'.$url_producto.'"><img src="'.$ruta_foto_portada.'" alt="$titulo"></a>
            
                                                                    </div>
            
                                                                    <div class="ps-product__content">
            
                                                                        <a href="libro/'.$id_libro.'/'.$url_producto.'">'.$titulo.'</a>
            
                                                                        <p>Autor: <strong>'.$autor.'</strong></p>
                                                                        <a type="button" href="" onclick="ver_sinopsis('.$id_libro.', event)">Ver sinopsis</a>
            
                                                                    </div>
            
                                                                </div>
            
                                                            </td>

                                                            <td class="text-center">'.$editorial.'</td>
                                                            
                                                            <td class="text-center">'.$year.'</td>
            
                                                            <td class="text-center">'.$fecha_agregado.'</td>
            
                                                            <td class="text-center">'.$mensaje_status.'</td>                       
            
                                                            <td class="text-center">
            
                                                                <a type="button" data-bs-toggle="modal" data-bs-target="#modalEditarLibro" data-bs-whatever="@mdo" onclick="llenar_form_editar_libro('.$id_libro.')" title="Editar libro"><i class="fa-solid fa-pen-to-square"></i></a>&emsp;
                                                                '.$cambiar_status_libro.'
            
                                                            </td>

                                                            <td class="text-center">                                                               
                                                                <a class="btn btn-link" type="button" style="font-size: 16px;" href="" onclick="ver_waitlist('.$id_libro.', event)">Ver préstamos</a>
                                                            </td>
            
                                                        </tr>'; 

                                                        echo '<tr id="sinopsis_'.$id_libro.'" style="display: none;">
                                                            <td class="text-center " colspan="7"><strong>Sinopsis: </strong>'.$sinopsis.'</td>
                                                        </tr>';

                                                        echo '<tr id="waitlist_'.$id_libro.'" style="display: none;">
                                                            <td style="text-align: left !important;" colspan="7" id="table_prestamo_'.$id_libro.'">
                                                                <strong>Préstamo: </strong><br>'
                                                                .$prestamo.'
                                                                <br>
                                                                <strong>Lista de Espera: </strong><br>'
                                                                .$waitlist.'
                                                            </td>
                                                        </tr>';

                                                        //fas fa-book-openfas fa-book-open     - Disponible
                                                        //fas fa-book-reader                   - Prestado
                                                        //fas fa-book   -                      - Inactivo
                                                        

                                                    }
                                                }

                                                ?>

                                            </tbody>

                                        </table>

                                    </div>
                                    
                                </div>

                                <hr>

                                <!-- <div class="d-flex flex-row-reverse">
                                <div class="p-2"><h3>Total <span>$414.00</span></h3></div>             
                                </div>

                                <div class="ps-section__cart-actions">

                                    <a class="ps-btn" href="categories.html.html">
                                        <i class="icon-arrow-left"></i> Back to Shop
                                    </a>

                                    <a class="ps-btn" href="checkout.html">
                                        Proceed to checkout <i class="icon-arrow-right"></i> 
                                    </a>

                                </div> -->

                            </div> 
                            
                        </div>

                        <!-- Fin sección -->

                        <!-- Inicio sección 
                            #region Prestamos Activos
                        -->

                        <div class="container" id="div_prestamos_activos">

                            <div class="ps-section__header">

                                <h1>Préstamos Activos</h1>

                            </div>

                            <div class="ps-section__content" style="margin-top: -50px;">

                                <div class="table-responsive">
                                    
                                <div class="ps-section__cart-actions" style="margin-top: -100px; margin-bottom: -50px;">

                                    <!-- <a class="ps-btn" onmouseover="this.style.color='white';" onmouseout="this.style.color='black';"  onclick="abrir_modal(1)">
                                        <i class="fa-solid fa-circle-plus" data-bs-whatever="@mdo"></i> Agregar Libro
                                    </a> -->


                                </div>

                                    <table class="table ps-table--shopping-cart">

                                        <thead>

                                            <tr>

                                                <th>Libro</th>
                                                <th>Editorial</th>
                                                <th>Año</th>
                                                <th>Fecha de Agregado</th>
                                                <th>Estatus</th>
                                                <th>Opciones</th>

                                            </tr>

                                        </thead>

                                        <tbody>

                                            <?php 
                                            $query5 = "SELECT COUNT(*) AS cuantos FROM libros WHERE id_usuario = $id_usuario_global";
                                            $cuantos_libros = GetValueSQL($query5, 'cuantos');

                                            if($cuantos_libros > 0){
                                                $query6 = "SELECT * FROM libros
                                                INNER JOIN status_libro ON libros.status = status_libro.id_status
                                                WHERE id_usuario = $id_usuario_global";
                                                $mis_libros = DatasetSQL($query6);

                                                while($row6 = mysqli_fetch_array($mis_libros)){
                                                    $id_libro = $row6['id_libro'];
                                                    $titulo = $row6['titulo'];
                                                    $autor = $row6['autor'];
                                                    $editorial = $row6['editorial'];
                                                    $year = $row6['year'];
                                                    $sinopsis = $row6['sinopsis'];
                                                    $id_libro = $row6['id_libro'];
                                                    $ruta_foto_portada = $row6['ruta_foto_portada'];
                                                    $status = $row6['status_nombre'];

                                                    if($year == NULL){
                                                        $year = "Sin Año";
                                                    }
                                                
                                                    if($sinopsis == NULL){
                                                        $sinopsis = "Sin Sinopsis";
                                                    }

                                                    if($ruta_foto_portada == NULL){
                                                        $ruta_foto_portada = $ruta_foto_no_existente;
                                                    }

                                                    echo '<tr>
                                                        <td>
        
                                                            <div class="ps-product--cart">
        
                                                                <div class="ps-product__thumbnail">
        
                                                                    <a href="product-default.html"><img src="'.$ruta_foto_portada.'" alt="$titulo"></a>
        
                                                                </div>
        
                                                                <div class="ps-product__content">
        
                                                                    <a href="product-default.html">'.$titulo.'</a>
        
                                                                    <p>Autor: <strong>'.$autor.'</strong></p>
                                                                    <a type="button" href="" onclick="ver_sinopsis('.$id_libro.', event)">Ver sinopsis</a>
        
                                                                </div>
        
                                                            </div>
        
                                                        </td>

                                                        <td class="text-center">'.$editorial.'</td>
                                                        
                                                        <td class="text-center">'.$year.'</td>
        
                                                        <td class="text-center">'.$fecha_agregado.'</td>
        
                                                        <td class="text-center">'.$status.'</td>                       
        
                                                        <td class="text-center">
        
                                                            <a type="button" href="" onclick=""><i class="fa-solid fa-pen-to-square"></i></a>&emsp;
                                                            <a type="button" href="" onclick=""><i class="fa-solid fa-xmark"></i></a>
        
                                                        </td>
        
                                                    </tr>';

                                                    echo '<tr id="sinopsis_'.$id_libro.'" style="display: none;">
                                                        <td class="text-justify " colspan="5"><strong>Sinopsis: </strong>'.$sinopsis.'</td>
                                                    </tr>';

                                                }
                                            }

                                            ?>

                                        </tbody>

                                    </table>

                                </div>

                                <hr>

                                <!-- <div class="d-flex flex-row-reverse">
                                <div class="p-2"><h3>Total <span>$414.00</span></h3></div>             
                                </div>

                                <div class="ps-section__cart-actions">

                                    <a class="ps-btn" href="categories.html.html">
                                        <i class="icon-arrow-left"></i> Back to Shop
                                    </a>

                                    <a class="ps-btn" href="checkout.html">
                                        Proceed to checkout <i class="icon-arrow-right"></i> 
                                    </a>

                                </div> -->

                            </div> 
                            
                        </div>

                        <!-- Fin sección -->

                        <!-- Inicio sección 
                            #region Historial de Prestamos
                        -->

                        <div class="container" id="div_historial_prestamos">

                            <div class="ps-section__header">

                                <h1>Historial de Préstamos</h1>

                            </div>

                            <div class="ps-section__content" style="margin-top: -50px;">

                                <div class="table-responsive">
                                    
                                <div class="ps-section__cart-actions" style="margin-top: -100px; margin-bottom: -50px;">

                                    <!-- <a class="ps-btn" onmouseover="this.style.color='white';" onmouseout="this.style.color='black';"  onclick="abrir_modal(1)">
                                        <i class="fa-solid fa-circle-plus" data-bs-whatever="@mdo"></i> Agregar Libro
                                    </a> -->


                                </div>

                                    <table class="table ps-table--shopping-cart">

                                        <thead>

                                            <tr>

                                                <th>Libro</th>
                                                <th>Editorial</th>
                                                <th>Año</th>
                                                <th>Fecha de Agregado</th>
                                                <th>Estatus</th>
                                                <th>Opciones</th>

                                            </tr>

                                        </thead>

                                        <tbody>

                                            <?php 
                                            $query5 = "SELECT COUNT(*) AS cuantos FROM libros WHERE id_usuario = $id_usuario_global";
                                            $cuantos_libros = GetValueSQL($query5, 'cuantos');

                                            if($cuantos_libros > 0){
                                                $query6 = "SELECT * FROM libros
                                                INNER JOIN status_libro ON libros.status = status_libro.id_status
                                                WHERE id_usuario = $id_usuario_global";
                                                $mis_libros = DatasetSQL($query6);

                                                while($row6 = mysqli_fetch_array($mis_libros)){
                                                    $id_libro = $row6['id_libro'];
                                                    $titulo = $row6['titulo'];
                                                    $autor = $row6['autor'];
                                                    $editorial = $row6['editorial'];
                                                    $year = $row6['year'];
                                                    $sinopsis = $row6['sinopsis'];
                                                    $id_libro = $row6['id_libro'];
                                                    $ruta_foto_portada = $row6['ruta_foto_portada'];
                                                    $status = $row6['status_nombre'];

                                                    if($year == NULL){
                                                        $year = "Sin Año";
                                                    }
                                                
                                                    if($sinopsis == NULL){
                                                        $sinopsis = "Sin Sinopsis";
                                                    }

                                                    if($ruta_foto_portada == NULL){
                                                        $ruta_foto_portada = $ruta_foto_no_existente;
                                                    }

                                                    echo '<tr>
                                                        <td>
        
                                                            <div class="ps-product--cart">
        
                                                                <div class="ps-product__thumbnail">
        
                                                                    <a href="product-default.html"><img src="'.$ruta_foto_portada.'" alt="$titulo"></a>
        
                                                                </div>
        
                                                                <div class="ps-product__content">
        
                                                                    <a href="product-default.html">'.$titulo.'</a>
        
                                                                    <p>Autor: <strong>'.$autor.'</strong></p>
                                                                    <a type="button" href="" onclick="ver_sinopsis('.$id_libro.', event)">Ver sinopsis</a>
        
                                                                </div>
        
                                                            </div>
        
                                                        </td>

                                                        <td class="text-center">'.$editorial.'</td>
                                                        
                                                        <td class="text-center">'.$year.'</td>
        
                                                        <td class="text-center">'.$fecha_agregado.'</td>
        
                                                        <td class="text-center">'.$status.'</td>                       
        
                                                        <td class="text-center">
        
                                                            <a type="button" href="" onclick=""><i class="fa-solid fa-pen-to-square"></i></a>&emsp;
                                                            <a type="button" href="" onclick=""><i class="fa-solid fa-xmark"></i></a>
        
                                                        </td>
        
                                                    </tr>';

                                                    echo '<tr id="sinopsis_'.$id_libro.'" style="display: none;">
                                                        <td class="text-justify " colspan="5"><strong>Sinopsis: </strong>'.$sinopsis.'</td>
                                                    </tr>';

                                                }
                                            }

                                            ?>

                                        </tbody>

                                    </table>

                                </div>

                                <hr>

                                <!-- <div class="d-flex flex-row-reverse">
                                <div class="p-2"><h3>Total <span>$414.00</span></h3></div>             
                                </div>

                                <div class="ps-section__cart-actions">

                                    <a class="ps-btn" href="categories.html.html">
                                        <i class="icon-arrow-left"></i> Back to Shop
                                    </a>

                                    <a class="ps-btn" href="checkout.html">
                                        Proceed to checkout <i class="icon-arrow-right"></i> 
                                    </a>

                                </div> -->

                            </div> 
                            
                        </div>

                        <!-- Fin Sección -->

                    </div>           

                </div>

 
            </div>

        </div>

    </div>




    <!---------------------------------------
    #region Ventanas Modales
    ---------------------------------------->




    <!-- 
        #region Modal Cambiar Información de Usuario
    -->
    <div class="modal fade" id="modalCambiarInfoUsuario"  aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title title" id="exampleModalLabel">Actualizar Información</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="form_actualizar_datos" name="form_actualizar_datos">
                        <div class="form-group row m-2">
                            <p class="h3 text-dark" >Nombre(s): <span class="text-danger">*</span></p>
                            <input class="obligatorio form-control" type="text" id="nombres" name="nombres" placeholder="Nombre(s)" required>
                        </div>

                        <div class="form-group row m-2">
                            <p class="h3 text-dark">Apellidos: <span class="text-danger">*</span></p>
                            <input class="obligatorio form-control" type="text" id="apellidos" name="apellidos" placeholder="Apellidos" required>
                        </div>

                        <!-- <div class="form-group row">
                            <p class="h3 text-dark">Código UDG:</p>
                            <input disabled class="obligatorio form-control" type="text" id="codigo_usuario" name="codigo_usuario" placeholder="Código UDG">
                        </div>

                        <div class="form-group row">
                            <p class="h3 text-dark">Carrera:</p>
                            <input disabled class="obligatorio form-control" type="text" id="carrera" name="carrera" placeholder="Carrera">
                        </div>

                        <div class="form-group row">
                            <p class="h3 text-dark">Cíclo de Ingreso:</p>
                            <input disabled class="obligatorio form-control" type="text" id="ciclo_ingreso" name="ciclo_ingreso" placeholder="Cíclo de Ingreso">
                        </div>

                        <div class="form-group row">
                            <p class="h3 text-dark">Correo Institucional:</p>
                            <input disabled class="obligatorio form-control" type="text" id="correo" name="correo" placeholder="Correo Institucional">
                        </div> -->

                        <div class="form-group m-2">
                            <p class="h3 text-dark">Foto de Perfil(Máximo 2mb): </p>
                            <div class="col">
                                <input type="file" class="form-control-file form-control" id="foto_perfil">
                                <div id="imagen-perfil" class="text-center mt-2"></div> <!-- Aquí se jala la imagen desde la funcion llenar_formulario_actualizar_datos -->
                            </div>
                        </div>
                            
                        <div class="form-group m-2">
                            <p class="h3 text-dark">Credencial de Estudiante(Máximo 2mb): </p>
                            <div class="col">
                                <input type="file" class="form-control-file form-control" id="foto_credencial">
                                <div id="imagen-credencial" class="text-center mt-2"></div> <!-- Aquí igual -->
                            </div>
                        </div>

                    </form>
                </div>
                <div class="modal-footer">
                    <div class="form-group">
                        <button type="button" class="btn ps-btn" data-bs-dismiss="modal" style="background-color: gray;">Cancelar</button>
                        <button type="button" class="btn ps-btn" onclick='actualizar_usuario(<?php echo $id_usuario_global; ?>, event)'>Guardar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- 
        #region Modal Cambiar Contraseña
    -->
    <div class="modal fade" id="modalCambiarPassword"  aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title title" id="exampleModalLabel">Cambiar Contraseña</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="form_cambiar_password" name="form_cambiar_password">
                        <div class="form-group row m-2">
                            <p class="h3 text-dark" >Contraseña Actual: <span class="text-danger">*</span></p>
                            <input class="obligatorio form-control" type="password" id="password_actual" name="password_actual" placeholder="Contraseña actual">
                        </div>

                        <div class="form-group row m-2">
                            <p class="h3 text-dark" >Nueva Contraseña: <span class="text-danger">*</span></p>
                            <input class="obligatorio form-control" type="password" id="nueva_password" name="nueva_password" placeholder="Nueva contraseña">
                        </div>
                        
                        <div class="form-group row m-2">
                            <p class="h3 text-dark" >Confirmar Contraseña <span class="text-danger">*</span></p>
                            <input class="obligatorio form-control" type="password" id="confirmar_nueva_password" name="confirmar_nueva_password" placeholder="Confirmar contraseña">
                        </div>

                    </form>
                </div>
                <div class="modal-footer">
                    <div class="form-group">
                        <button type="button" class="btn ps-btn" data-bs-dismiss="modal" style="background-color: gray;">Cancelar</button>
                        <button type="button" class="btn ps-btn" onclick='cambiar_password(<?php echo $id_usuario_global; ?>)'>Guardar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- 
        #region Modal Agregar Nuevo Libro
    -->
    <div class="modal fade" id="modalAgregarLibro"  aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title title" id="exampleModalLabel">Nuevo Libro</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="form_agregar_libro" name="form_agregar_libro">
                        <div class="form-group row m-2">
                            <p class="h3 text-dark">Título: <span class="text-danger">*</span></p>
                            <input class="obligatorio form-control" type="text" id="al_titulo" name="al_titulo" placeholder="Título" required>
                        </div>

                        <div class="form-group row m-2">
                            <p class="h3 text-dark">Autor: <span class="text-danger">*</span></p>
                            <input class="obligatorio form-control" type="text" id="al_autor" name="al_autor" placeholder="Autor" required>
                        </div>

                        <div class="form-group row m-2">
                            <p class="h3 text-dark">Editorial: <span class="text-danger">*</span></p>
                            <input class="obligatorio form-control" type="text" id="al_editorial" name="al_editorial" placeholder="Editorial" required>
                        </div>
                        
                        <div class="form-group row m-2">
                            <p class="h3 text-dark">Año de Publicación: </p>
                            <input class="form-control" type="text" id="al_año" name="al_año" placeholder="Año">
                        </div>
                        
                        <div class="form-group row m-2">
                            <p class="h3 text-dark">Sinopsis: </p>
                            <textarea class="form-control" rows="5" id="al_sinopsis" name="al_sinopsis" placeholder="Sinópsis"></textarea>
                        </div>

                        <div class="form-group m-2">
                            <p class="h3 text-dark">Foto del Libro (Máximo 2mb): <span class="text-danger">*</span></p>
                            <div class="col">
                                <input type="file" class="form-control-file form-control obligatorio" id="al_foto_portada">
                                <div id="imagen-perfil" class="text-center mt-2"></div> <!-- Aquí se jala la imagen desde la funcion llenar_formulario_actualizar_datos -->
                            </div>
                        </div>
                            

                    </form>
                </div>
                <div class="modal-footer">
                    <div class="form-group">
                        <button type="button" class="btn ps-btn" data-bs-dismiss="modal" style="background-color: gray;">Cancelar</button>
                        <button type="button" class="btn ps-btn" onclick='agregar_libro(<?php echo $id_usuario_global; ?>)'>Guardar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- 
        #region Modal Editar Libro
    -->
    <div class="modal fade" id="modalEditarLibro"  aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title title" id="exampleModalLabel">Nuevo Libro</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="form_editar_libro" name="form_editar_libro">
                        <input type="hidden" id="el_id_libro" name="el_id_libro">
                        <div class="form-group row m-2">
                            <p class="h3 text-dark">Título: <span class="text-danger">*</span></p>
                            <input class="obligatorio form-control" type="text" id="el_titulo" name="el_titulo" placeholder="Título" required>
                        </div>

                        <div class="form-group row m-2">
                            <p class="h3 text-dark">Autor: <span class="text-danger">*</span></p>
                            <input class="obligatorio form-control" type="text" id="el_autor" name="el_autor" placeholder="Autor" required>
                        </div>

                        <div class="form-group row m-2">
                            <p class="h3 text-dark">Editorial: <span class="text-danger">*</span></p>
                            <input class="obligatorio form-control" type="text" id="el_editorial" name="el_editorial" placeholder="Editorial" required>
                        </div>
                        
                        <div class="form-group row m-2">
                            <p class="h3 text-dark">Año de Publicación: </p>
                            <input class="form-control" type="text" id="el_año" name="el_año" placeholder="Año">
                        </div>
                        
                        <div class="form-group row m-2">
                            <p class="h3 text-dark">Sinopsis: </p>
                            <textarea class="form-control" rows="5" id="el_sinopsis" name="el_sinopsis" placeholder="Sinópsis"></textarea>
                        </div>

                        <div class="form-group m-2">
                            <p class="h3 text-dark">Foto del Libro (Máximo 2mb): </p>
                            <div class="col">
                                <input type="file" class="form-control-file form-control" id="el_foto_portada">
                                <div id="imagen-perfil" class="text-center mt-2"></div> <!-- Aquí se jala la imagen desde la funcion llenar_formulario_actualizar_datos -->
                            </div>
                        </div>
                            

                    </form>
                </div>
                <div class="modal-footer">
                    <div class="form-group">
                        <button type="button" class="btn ps-btn" data-bs-dismiss="modal" style="background-color: gray;">Cancelar</button>
                        <button type="button" class="btn ps-btn" onclick='editar_libro(<?php echo $id_usuario_global; ?>)'>Guardar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>


        
    <!-- Ventana modal para añadir nuevo registro -->
    <div class="modal fade" id="modalAgregar"  aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title title" id="exampleModalLabel">Añadir Nuevo Libro</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    
                </div>
                <div class="modal-footer">
                    <div class="form-group">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <button type="button" class="btn btn-primary" onclick=''>Guardar</button>
                    </div>
                </div>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  
    
    
	<script>
		 $(document).ready(function() { 
			llenar_select_carreras();
			llenar_select_ciclos();
		});

        // $('#modalEditarLibro').on('show.bs.modal', function (event) {
        //     var button = $(event.relatedTarget);
        //     var id = button.data('id');
        //     var modal = $(this);
        //     // console.log(id);
        //     modal.find('#el_id_libro').val(id);
        // });
	</script>
</body>
</html>