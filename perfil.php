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
                        $id_status = GetValueSQL($query1, 'status');

                        $query2 = "SELECT * FROM carreras WHERE id_carrera = '$id_carrera'";
                        $carrera = GetValueSQL($query2, 'carrera');

                        $query3 = "SELECT * FROM ciclos WHERE id_ciclo = '$id_ciclo_ingreso'";
                        $ciclo_ingreso = GetValueSQL($query3, 'ciclo');

                        $query4 = "SELECT * FROM status_usuario WHERE id_status = $id_status";
                        $status = GetValueSQL($query4,'status');

                        if($ruta_foto_perfil == NULL){
                            $ruta_foto_perfil = $ruta_foto_no_usuario;
                        }
                        
                        if($ruta_foto_credencial == NULL){
                            $ruta_foto_credencial = $ruta_foto_no_existente;
                        }
                    
                    }
                
                ?> 


                <aside class="ps-block--store-banner container" id="div-perfil">

                    <div class="ps-block__user row" >

                        <div class="ps-block__user-avatar-quitar-esto text-center">

                            <img style="width: 300px; height: 150px; margin-bottom: 10px; border-radius: 50%;" src="<?php echo $ruta_foto_perfil ?>" alt="Foto de Perfil">

                            <div class="br-wrapper">

                            <button class="btn btn-primary btn-lg rounded-circle" onclick="activar_actualizar_datos()">
                                <i class="fas fa-pencil-alt"></i>
                            </button>


                            </div>

                            <div class="br-wrapper br-theme-fontawesome-stars mt-3">

                                <select class="ps-rating" data-read-only="true" style="display: none;">
                                    <option value="1">1</option>
                                    <option value="1">2</option>
                                    <option value="1">3</option>
                                    <option value="1">4</option>
                                    <option value="2">5</option>
                                </select>

                            </div>

                        </div>

                        <!-- Aqui se muestra lo del perfil -->

                        <div class="ps-block__user-content text-center text-lg-left ml-">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12">
                                        <h2 class="text-white"><?php echo $nombres . ' ' . $apellidos; ?></h2>
                                    </div>
                                    <div class="col-lg-6">
                                        <p><i class="fas fa-user"></i> Código: <?php echo $codigo_usuario; ?></p>
                                        <p><i class="fas fa-envelope"></i> Correo Institucional: <?php echo $correo; ?></p>
                                        <p><i class="fas fa-graduation-cap"></i> Carrera: <?php echo $carrera; ?></p>
                                        <p><i class="fas fa-calendar-days"></i> Ciclo de ingreso: <?php echo $ciclo_ingreso; ?></p>
                                        <p><i class="fas fa-flag"></i> Status: <?php echo $status; ?></p>
                                    </div>

                                    <!-- Columna derecha (imagen de la credencial) -->
                                    <div class="col-lg-6">
                                        <p><i class="fas fa-id-card"></i> Credencial de UDG:</p>
                                        <img style="max-width: 250px; height: auto;" src="<?php echo $ruta_foto_credencial; ?>" class="img-fluid" alt="Credencial de Estudiante">
                                    </div>

                                    <!-- Botones -->
                                    <div class="col-lg-12">
                                        <button class="btn btn-warning btn-lg" onclick="activar_actualizar_datos()">Actualizar datos</button>
                                        <button class="btn btn-info btn-lg" onclick="activar_cambiar_password()">Cambiar contraseña</button>
                                    </div>
                                </div>
                            </div>
                            
                        </div>

                        <!-- Aqui se muestra lo del peerfil -->
                        <div class="row ml-lg-auto pt-5">

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

                <!--=====================================
                Formularios para acciones
                ======================================--> 

                <div class="container mt-5">

                    <div class="row justify-content-center">
                        <div class="col-6" id="formulario_acciones">

                            <div id="actualizar_info_usuario">
                            <!--=====================================
                            #region Cambiar informacion de Usuario
                            ======================================-->
                                <div class="ps-form__content">
                                    <figure class="ps-block--vendor-status row m-3" style="margin-bottom: -10px">
                                        <figcaption>Información de Usuario</figcaption>
                                    </figure>
                                    
                                    <form id="form_actualizar_datos" name="form_actualizar_datos">
                                        <div class="form-group row">
                                            <p class="h3 text-dark" >Nombre(s):</p>
                                            <input class="obligatorio form-control" type="text" id="nombres" name="nombres" placeholder="Nombre(s)" required>
                                        </div>

                                        <div class="form-group row">
                                            <p class="h3 text-dark">Apellidos:</p>
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

                                        <div class="form-group">
                                            <p class="h3 text-dark">Foto de Perfil(Máximo 2mb): </p>
                                            <div class="col">
                                                <input type="file" class="custom-file-input form-control" id="foto_perfil" onchange="updateFileName(this, 'foto_perfil_label')">
                                                <label class="custom-file-label" id="foto_perfil_label" for="foto_perfil">Seleccionar archivo</label>
                                                <div id="imagen-perfil"></div> <!-- Aquí se jala la imagen desde la funcion llenar_formulario_actualizar_datos -->
                                            </div>
                                        </div>
                                            
                                        <div class="form-group">
                                            <p class="h3 text-dark">Credencial de Estudiante(Máximo 2mb): </p>
                                            <div class="col">
                                                <input type="file" class="custom-file-input" id="foto_credencial" onchange="updateFileName(this, 'foto_credencial_label')">
                                                <label class="custom-file-label" id="foto_credencial_label" for="foto_credencial">Seleccionar archivo</label>
                                                <div id="imagen-credencial"></div> <!-- Aquí igual -->
                                            </div>
                                        </div>


                                        <div class="form-group submit row justify-content-center" >

                                            <button class="ps-btn col-lg-5 m-1" onclick="actualizar_usuario(<?php echo $id_usuario_global; ?>, event)">Guardar</button>
                                            <button type="button" class="btn ps-btn col-lg-5 m-1" onclick="activar_cerrar_ventanas()" style="background-color: gray;">Cancelar</button>

                                        </div>
                                    </form>
                                </div>


                            </div>

                            <!--=====================================
                            #region Cambiar contraseña
                            ======================================-->

                        
                            <div id="cambiar_password">

                                <div class="ps-form__content">
                                    <figure class="ps-block--vendor-status row m-3" style="margin-bottom: -10px">
                                        <figcaption>Cambiar Contraseña</figcaption>
                                    </figure>
                                    
                                    <form id="form_cambiar_password" name="form_cambiar_password">
                                        <div class="form-group row">
                                            <input class="obligatorio form-control" type="password" id="password_actual" name="password_actual" placeholder="Contraseña actual">
                                        </div>

                                        <div class="form-group row">
                                            <input class="obligatorio form-control" type="password" id="nueva_password" name="nueva_password" placeholder="Nueva contraseña">
                                        </div>
                                        
                                        <div class="form-group row">
                                            <input class="obligatorio form-control" type="password" id="confirmar_nueva_password" name="confirmar_nueva_password" placeholder="Confirmar nueva contraseña">
                                        </div>

                                        <div class="form-group submit row justify-content-center" >

                                            <button type="button" class="ps-btn col-lg-5 m-1" onclick="cambiar_password(<?php echo $id_usuario_global; ?>, event)">Guardar</button>
                                            <button type="button" class="btn ps-btn col-lg-5 m-1" onclick="activar_cerrar_ventanas()" style="background-color: gray;">Cancelar</button>


                                        </div>
                                    </form>
                                </div>


                            </div>

                        </div>

                    </div>

                    

   
                </div>
   
                <div class="ps-section__content">

                    <ul class="ps-section__links">
                        <li id="li_mis_libros" class="active"><a type="button" href="" onclick="cambiar_opciones_perfil(1, event)">Mis Libros</a></li>
                        <li id="li_prestamos_activos"><a type="button" href="" onclick="cambiar_opciones_perfil(2, event)">Préstamos activos</a></li>
                        <li id="li_historial_prestamos"><a type="button" href=""  onclick="cambiar_opciones_perfil(3, event)">Historial de Préstamos</a></li>
                    </ul>

                    
                    <!--------------------------------------- 
                        #region Mis Libros
                    ---------------------------------------->

                    <div class="ps-section--shopping ps-shopping-cart" style="margin-top: -70px;">

                        <div class="container" id="div_mis_libros">

                            <div class="ps-section__header">

                                <h1>Mis Libros</h1>

                            </div>

                            <div class="ps-section__content" style="margin-top: -50px;">

                                <div class="table-responsive">
                                    
                                <div class="ps-section__cart-actions">

                                    <a class="ps-btn" onmouseover="this.style.color='white';" onmouseout="this.style.color='black';"  onclick="abrir_modal(1)">
                                        <i class="fa-solid fa-circle-plus" data-bs-whatever="@mdo"></i> Agregar Libro
                                    </a>


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
                            #region Prestamos Activos
                        -->

                        <div class="container" id="div_prestamos_activos">

                            <div class="ps-section__header">

                                <h1>Préstamos Activos</h1>

                            </div>

                            <div class="ps-section__content" style="margin-top: -50px;">

                                <div class="table-responsive">
                                    
                                <div class="ps-section__cart-actions">

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
                                    
                                <div class="ps-section__cart-actions">

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
        
    <!-- Ventana modal para añadir nuevo registro -->
    <div class="modal fade" id="modalAgregar"  aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Añadir Nuevo Libro</h1>
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
    
    
	<script>
		 $(document).ready(function() { 
			llenar_select_carreras();
			llenar_select_ciclos();
		});
	</script>
</body>
</html>