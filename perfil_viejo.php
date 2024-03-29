<?php 
ob_start();
?>

<!DOCTYPE html>
<html lang="zxx">
<head>
	<meta charset="UTF-8">
    <title>D-SUPREME | Sneakers</title>
	<?php include("include/headertagbase.php"); ?>
	<!-- =================== META =================== -->
	<meta name="keywords" content="">
	<meta name="description" content="">
	<meta name="format-detection" content="telephone=no">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="shortcut icon" href="img/banners/logoDsupreme-icono.png">
	<!-- =================== STYLE =================== -->
	<link rel="stylesheet" href="assets/css/slick.min.css">
	<link rel="stylesheet" href="assets/css/bootstrap-grid.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/css/jquery-ui.css">
	<link rel="stylesheet" href="assets/css/nice-select.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/custom.css">
    <script src="https://kit.fontawesome.com/471d91ac13.js" crossorigin="anonymous"></script>
	<!--alerts CSS --> 
	<link href="assets/plugins/sweetalert/sweetalert.css" rel="stylesheet" type="text/css">
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body id="home" class="home-dark">
    <div class="loading"></div>
	<!--================ PRELOADER ================-->
	<!--div class="preloader-cover">
		<div class="preloader">
			<span></span>
			<span></span>
			<span></span>
			<span></span>
		</div>
	</div>-->
	<!--============== PRELOADER END ==============-->
	<?php 
	require_once "include/functions.php";
	require_once "include/db_tools.php"; 
	include('variables.php');
	include('main-header.php');
    
	?>
	
	<!--=================== S-CONTACTS ===================-->
	<section class="s-shop">
	<input type="hidden" id="id_usuario">
		<div class="container" id="carrito_content">
			<div class="row">
				<div class="col-12 col-lg-12 shop-cover mt-5">
                    <div class="p-5">
                        <span class="mask"></span>
                        <?php 
                        if($id_usuario == 0){
                            header('location: index');
                            exit;
                        } else{
                            $query1 = 'SELECT * FROM usuarios WHERE id_usuario = '.$id_usuario;
                            $nombre = GetValueSQL($query1, 'nombre');
                            $apaterno = GetValueSQL($query1, 'apaterno');
                            $amaterno = GetValueSQL($query1, 'amaterno');
                            $telefono = GetValueSQL($query1, 'telefono');
                            $email = GetValueSQL($query1, 'email');
                        }
                        
                        ?>
                        <div id="info-perfil" class="baner-item-content">
                            <h2 style="color: white !important;">Información de Perfil</h2>
                            <h4 class="white normal mt-3">Nombre: <span style="color: #23c050;"> <?php echo $nombre; ?> </span></h4>
                            <h4 class="white normal">Apellido Paterno: <span style="color: #23c050;"> <?php echo $apaterno; ?> </span></h4>
                            <h4 class="white normal">Apellido Materno: <span style="color: #23c050;"> <?php echo $amaterno; ?> </span></h4>
                            <h4 class="white normal">Teléfono: <span style="color: #23c050;"> <?php echo $telefono; ?> </span></h4>
                            <h4 class="white normal">Correo Electrónico: <span style="text-transform: none !important; color: #23c050;"> <?php echo $email; ?> </span></h4>
                            <p><a style="text-decoration: underline; float: left; cursor: pointer;" class="mr-5" onclick="llenar_form_info(1)">Actualizar información</a></p>
                            <p><a style="text-decoration: underline; cursor: pointer; clear: both;" onclick="llenar_form_info(2)">Cambiar Contraseña</a></p>
                           
                            <div id="form_info" style="display: none;"> 
                                <div style="margin-top: 50px !important; text-align: center;" class="container s-anim text-center">
                                    <h4 class="title text-center mb-2">Actualizar Datos</h4>
                                    <div class="row justify-content-md-center">
                                        <form id='form_cambiar_info' name="form_cambiar_info">
                                            <ul class="form-cover">
                                                <div class="col-12" style="text-align: left;">
                                                    <p>Nombre * </p>
                                                    <li class=""><input class="obligatorio white" type="text" id="info_nombre" name="info_nombre" placeholder="Nombre(s)"></li>
                                                </div>
                                                <div class="col-md-6" style="text-align: left;">
                                                    <p>Apellido Paterno * </p>
                                                    <li class=""><input class="obligatorio white" type="text" id="info_apaterno" name="info_apaterno" placeholder="Apellido Paterno"></li>
                                                </div>
                                                <div class="col-md-6" style="text-align: left;">
                                                    <p>Apellido Materno * </p>
                                                    <li class=""><input class="obligatorio white" type="text" id="info_amaterno" name="info_amaterno" placeholder="Apellido Materno"></li>
                                                </div>
                                                <div class="col-md-6" style="text-align: left;">
                                                    <p>Teléfono * </p>
                                                    <li class=""><input class="obligatorio white" type="tel" maxlength="10" id="info_telefono" name="info_telefono" placeholder="Teléfono"></li>
                                                </div>
                                                <div class="col-md-6" style="text-align: left;">
                                                    <p>Correo Electrónico * </p>
                                                    <li class=""><input class="obligatorio white" type="email" id="info_email" name="info_email" placeholder="Correo Electrónico"></li>
                                                </div>
                                            </ul>
                                            <div class="btn-form-cover">
                                                <a style="cursor: pointer;" onclick="guardar_nva_info()" class="btn dark-gray"><span class="white">Guardar</span></a>
                                                <!--<button id="btn_info" type="submit" class="btn white"><span>Registrarse</span></button>-->
                                            </div>
                                        </form>
                                        
                                        <div id="message"></div>
                                    </div>
                                </div>
                            </div>

                            <div id="form_password" style="display: none;"> 
                                <div style="margin-top: 50px !important; text-align: center;" class="container s-anim text-center">
                                    <h4 class="title text-center mb-2">Cambiar Contraseña</h4>
                                    <div class="row justify-content-md-center">
                                        <form id='form_cambiar_password' name="form_cambiar_password">
                                            <ul class="form-cover">
                                                <div class="col-md-12" style="text-align: left;">
                                                    <p>Contraseña Actual *</p>
                                                    <li class=""><input class="obligatorio white" type="password" id="info_password_actual" name="info_password_actual" placeholder="Contraseña Actual"></li>
                                                </div>
                                                <div class="col-md-12" style="text-align: left;">
                                                    <p>Nueva Contraseña *</p>
                                                    <li class=""><input class="obligatorio white" type="password" id="info_password_nueva" name="info_password_nueva" placeholder="Nueva Contraseña"></li>
                                                </div>
                                                <div class="col-md-12" style="text-align: left;">
                                                    <p>Confirmar Contraseña *</p>
                                                    <li class=""><input class="obligatorio white" type="password" id="info_password_conf" name="info_password_conf" placeholder="Confirmar contraseña"></li>
                                                </div>
                                            </ul>
                                            <div class="btn-form-cover">
                                                <a style="cursor: pointer;" onclick="guardar_nva_password()" class="btn dark-gray"><span class="white">Guardar</span></a>
                                                <!--<button id="btn_info" type="submit" class="btn white"><span>Registrarse</span></button>-->
                                            </div>
                                        </form>
                                        
                                        <div id="message"></div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>


                        <div class="baner-item-content mt-5">
                            <h2 style="color: white !important;">Pedidos</h2>
                                <div style="margin-top: 50px !important;" class="container s-anim text-center">
                        
                        <?php 
                        $query2 = "SELECT * FROM folios 
                        INNER JOIN datos_folio ON folios.id_folio = datos_folio.id_folio
                        WHERE folios.id_usuario = $id_usuario ORDER BY fecha DESC, folios.id_folio DESC";
                        $folios = DatasetSQL($query2);
                        while($row2 = mysqli_fetch_array($folios)){
                            $id_folio = $row2['id_folio'];
                            $total_pago = $row2['total_pago'];
                            $fecha = $row2['fecha'];
                            $tipo = $row2['tipo'];
                            $estatus = $row2['estatus'];
                            $estatus_pago = '';
                            $tipo_pago = '';
                            if($estatus == 0){
                                $estatus_pago = 'Sin pago';
                            } else if($estatus == 1){
                                $estatus_pago = 'Pagado';
                            } 
                            if($tipo == 'mercadopago'){
                                $tipo_pago = 'Mercado Pago';
                            } else if($tipo == 'transferencia'){
                                $tipo_pago = 'Depósito o Transferencia';
                            } else if($tipo == 'paypal'){
                                $tipo_pago = 'PayPal';
                            }
                            
                            
                            ?>
                                <h5 class="title mb-2 mt-5"><?php echo $fecha; ?></h5>
                                <div class="row ">
                                    <div class="col-md-4">
                                        <p style="font-weight: bold;">Subtotal: <span style="font-weight: normal;">$<?php echo number_format($total_pago,2);?></span></p>
                                    </div> 
                                    <div class="col-md-4">
                                        <p style="font-weight: bold;">Tipo de Pago: <span style="font-weight: normal;"> <?php echo $tipo_pago;?></span></p>
                                    </div> 
                                    <div class="col-md-4">
                                        <p style="font-weight: bold;">Estatus: <span style="font-weight: normal;"> <?php echo $estatus_pago;?></span></p>
                                    </div> 
                                </div>
                                <?php 
                                $query3 = "SELECT * FROM folio_detalle
                                INNER JOIN estilos ON folio_detalle.id_estilo = estilos.id_estilo
                                INNER JOIN productos ON folio_detalle.id_producto = productos.id_producto
                                INNER JOIN tallas ON folio_detalle.id_talla = tallas.id_talla
                                WHERE id_folio = $id_folio";
                                $productos_folio = DatasetSQL($query3);
                                while($row3 = mysqli_fetch_array($productos_folio)){
                                    $cantidad = $row3['cantidad'];
                                    $precio_unitario = $row3['precio_unitario'];
                                    $talla = $row3['talla'];
                                    $nombre_estilo = $row3['nombre_estilo'];
                                    $nombre_producto = $row3['nombre'];
                                    ?>
                                    <div class="container" style="border: 1px solid #192330; border-radius: 10px; background-color: white;">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <p class="dark-blue" style="font-weight: bold;">Producto: <span style="font-weight: normal;"> <?php echo $nombre_producto;?></span></p>
                                            </div> 
                                            <div class="col-md-6">
                                                <p class="dark-blue" style="font-weight: bold;">Estilo: <span style="font-weight: normal;"> <?php echo $nombre_estilo;?></span></p>
                                            </div> 
                                            <div class="col-md-6">
                                                <p class="dark-blue" style="font-weight: bold;">Precio Unitario: <span style="font-weight: normal;">$<?php echo number_format($precio_unitario, 2);?></span></p>
                                            </div> 
                                            <div class="col-md-6">
                                                <p class="dark-blue" style="font-weight: bold;">Cantidad: <span style="font-weight: normal;"> <?php echo $cantidad;?></span></p>
                                            </div> 
                                            <div class="col-md-6">
                                                <p class="dark-blue" style="font-weight: bold;">Talla: <span style="font-weight: normal;"> <?php echo $talla;?></span></p>
                                            </div> 
                                        </div>
                                    </div>
                            
                            
                                <?php }
                                ?>

                            <?php
                            }
                            
                            ?>
                                </div>                            
                            
                        </div>
                    </div>
				</div>
			</div>
            
		</div>
	</section>

	
	<!--==================== FOOTER ====================-->
	<?php include('main-footer.php');?>
	<!--================== FOOTER END ==================-->

	<!--===================== TO TOP =====================-->
	<a class="to-top" href="#home">
		<i class="fa fa-angle-double-up" aria-hidden="true"></i>
	</a>
	<!--=================== TO TOP END ===================-->
	<!--=================== SCRIPT	===================-->
	<script src="assets/js/jquery-2.2.4.min.js"></script>
	<script src="assets/js/slick.min.js"></script>
	<script src="assets/js/jquery-ui.js"></script>
	<script src="assets/js/jquery.nice-select.js"></script>
	<script src="assets/js/scripts.js"></script>
	<script src="assets/js/funciones.js"></script>
    <script>
    $(document).ready(function() {
        $(".loading").fadeOut("slow");;
    });
    </script>
	
	<script src="assets/plugins/sweetalert/sweetalert.min.js"></script> 
	<script src="assets/plugins/sweetalert/jquery.sweet-alert.custom.js"></script>
</body>
</html>