<?php

// $query1 = "SELECT * FROM usuarios WHERE id_usuario = 1";
// $nombre = GetValueSQL($query1, 'nombre');
// $apellido = GetValueSQL($query1, 'apellido');
// $email = GetValueSQL($query1, 'email');


// $query2 = "SELECT * FROM libros WHERE id_usuario = 1";
// $libros = DatasetSQL($query2);
// //Juego de Tronos - George. R. - DeBolsillo - 1    row1
// //Harry Potter - J. k. rowling - Salamandra - 1    row2

// while($row2 = mysqli_fetch_array($libros)){
//     $id_libro = $row2['id_libro'];
//     $codigo_usuario = $row2['codigo_usuario'];
//     $titulo = $row2['titulo'];
//     $autor = $row2['autor'];
//     $editorial = $row2['editorial'];
//     $fecha_agregado = $row2['fecha_agregado'];
//     $num_visitas = $row2['num_visitas'];
//     $status = $row2['status'];

//     ?>



<?php

//     echo "<p>".$id_libro."</p>";
//     echo "<p>".$codigo_usuario."</p>";
//     echo "<p>".$titulo."</p>";
// }

// $query3 = "INSERT INTO usuarios VALUES  (";
// ExecuteSQL($query3); 

?>




<?php


require "variables.php";
// session_start();
if (isset($_SESSION['id_sesion']) and isset($_SESSION['email'])) {
    $id_usuario_global = $_SESSION['id_sesion'];
    $sesion = 1;

    $query0 = "SELECT * FROM usuarios WHERE id_usuario = $id_usuario_global";
    $nombre_usuario_global = GetValueSQL($query0, 'nombres');

    $query1 = "SELECT CASE WHEN EXISTS (SELECT id_usuario FROM administradores WHERE id_usuario = $id_usuario_global) THEN 1 ELSE 0 END AS result";
    $admin_usuario_global = GetValueSQL($query1, "result");
    // echo "<script>console.log('Admin response: ', " . $admin_usuario_global . ");</script>";

} else {
    $sesion = 0;
    $id_usuario_global = 0;

    $nombre_usuario_global = " ";
}
// echo "ID SESION: ".$_SESSION['id_sesion'];
// echo "EMAIL: ".$_SESSION['email'];

// echo "Sesion: ".$sesion;
// echo "\nId: ".$id_usuario_global;

?>


<!--=====================================
    Header
    ======================================-->

<header class="header header--standard header--market-place-4" data-sticky="true">


    <!--=====================================
    Header Content
    ======================================-->

    <div class="header__content">

        <div class="container">

            <div class="header__content-left mt-3">

                <!--=====================================
                Logo
                ======================================-->

                <a class="ps-logo" href="index" title="Inicio">
                <!-- <img src="img/template/logo_light.png" alt="" width="70px" height="70px"> -->
                <img src="img/template/title_light.png" alt="" width="150px" height="40px">
                </a>

                <!--=====================================
                Menú
                ======================================-->

                <div class="menu--product-categories">

                    <!-- <div class="menu__toggle">
                        <i class="icon-menu"></i>
                        <span> Shop by Department</span>
                    </div> -->

                </div><!-- End menu-->

            </div><!-- End Header Content Left-->

            <!--=====================================
            #region Search
            ======================================-->

            <div class="header__content-center mt-3">
                <form class="ps-form--quick-search" action="index.html" method="get">
                    <input class="form-control" type="text" placeholder="Título, Autor, Usuario...">
                    <button>Buscar</button>
                </form>
            </div>

            <div class="header__content-right">

                <div class="header__actions">

                    <?php
                    if ($sesion != 0) { ?>
                        <!--=====================================
                    #region Wishlist
                    ======================================-->

                        <div id="header_icons" class="ps-cart--mini">

                            <?php
                            $query1 = "SELECT COUNT(*) AS cuantos FROM wishlist
                        INNER JOIN usuarios ON wishlist.id_usuario = usuarios.id_usuario
                        INNER JOIN libros ON wishlist.id_libro = libros.id_libro
                        WHERE wishlist.id_usuario = $id_usuario_global";
                            $cuantos_wishlist = GetValueSQL($query1, 'cuantos');

                            echo '<a id="header_wishlist" class="header__extra" href="wishlist" title="Wishlist">
                            <i class="icon-heart"></i><span><i>' . $cuantos_wishlist . '</i></span>
                        </a>';



                            ?>


                            <div class="ps-cart__content">

                                <?php
                                if ($cuantos_wishlist > 0) {
                                    //     $query2 = "SELECT DISTINCT wishlist.*, usuarios.*, libros.*, libros.id_usuario AS id_user FROM wishlist
                                    // INNER JOIN usuarios ON wishlist.id_usuario = usuarios.id_usuario
                                    // INNER JOIN libros ON wishlist.id_libro = libros.id_libro
                                    // WHERE wishlist.id_usuario = $id_usuario_global
                                    // ORDER BY id_wishlist DESC
                                    // LIMIT 4";
                                    $query2 = "SELECT wishlist.*, usuarios.*, libros.*, libros.id_usuario AS id_user, proporcionado.nombres AS name, proporcionado.apellidos AS lastname FROM wishlist
                                INNER JOIN usuarios ON wishlist.id_usuario = usuarios.id_usuario
                                INNER JOIN libros ON wishlist.id_libro = libros.id_libro
                                INNER JOIN usuarios AS proporcionado ON proporcionado.id_usuario = libros.id_usuario 
                                WHERE wishlist.id_usuario = $id_usuario_global
                                ORDER BY id_wishlist DESC
                                LIMIT 4";

                                    $wishlist = DatasetSQL($query2);

                                    while ($row2 = mysqli_fetch_array($wishlist)) {
                                        $id_libro = $row2['id_libro'];
                                        $codigo_usuario = $row2['codigo_usuario'];
                                        $titulo = $row2['titulo'];
                                        $autor = $row2['autor'];
                                        $editorial = $row2['editorial'];
                                        $year = $row2['year'];
                                        $sinopsis = $row2['sinopsis'];
                                        $num_visitas = $row2['num_visitas'];
                                        $num_prestamos = $row2['num_prestamos'];
                                        $ruta_foto_portada = $row2['ruta_foto_portada'];
                                        $fecha_agregado = $row2['fecha_agregado'];
                                        $status = $row2['status'];


                                        $url_producto = str_replace(" ", "-", $titulo);
                                        $url_producto = str_replace("/", "-", $url_producto);
                                        $url_producto = quitarAcentos($url_producto);
                                        $url_producto = preg_replace('/[^a-zA-Z0-9\s-]/', '', $url_producto);


                                        $nombre_usuario = $row2['name'];
                                        $apellido_usuario = $row2['lastname'];

                                        if ($year == NULL) {
                                            $year = "Sin Año";
                                        }

                                        if ($sinopsis == NULL) {
                                            $sinopsis = "Sin Sinopsis";
                                        }

                                        if ($ruta_foto_portada == NULL) {
                                            $ruta_foto_portada = "imagenes/libros/no-image.jpg";
                                        }

                                        ?>

                                        <div class="ps-cart__items">

                                            <div class="ps-product--cart-mobile">

                                                <div class="ps-product__thumbnail">
                                                    <a href="libro/<?php echo $id_libro; ?>/<?php echo $url_producto; ?> ">
                                                        <img src="<?php echo $ruta_foto_portada; ?>" alt="<?php echo $titulo; ?>">
                                                    </a>
                                                </div>

                                                <div class="ps-product__content">
                                                    <a class="ps-product__remove" href=""
                                                        onclick="wishlist_remove(<?php echo $id_usuario_global . ', ' . $id_libro . ', event' ?>)">
                                                        <i class="icon-cross"></i>
                                                    </a>
                                                    <a
                                                        href="libro/<?php echo $id_libro; ?>/<?php echo $url_producto; ?> "><?php echo $titulo; ?></a>
                                                    <p><?php echo $autor; ?></p>
                                                    <p><strong>Ofrecido por: </strong>
                                                        <?php echo rtrim($nombre_usuario) . " " . rtrim($apellido_usuario); ?></p>
                                                </div>

                                            </div>

                                        </div>
                                        <?php
                                    }
                                }
                                ?>


                            </div>

                        </div>

                        <!--=====================================
                    #region Perfil
                    ======================================-->

                        <div class="ps-block--user-header">
                            <div class="ps-block__left">
                                <a class="header__extra" href="perfil" title="Perfil">
                                    <i class="icon-user"></i><span><i>0</i></span>
                                </a>
                                <a class="ml-4" href="perfil"><?php echo $nombre_usuario_global; ?></a>
                            </div>
                        </div>



                        <!--=====================================
                    #region Cerrar Sesión
                    ======================================-->

                        <a class="header__extra" href="javascript:cerrar_sesion()" title="Cerrar sesión">
                            <i class="icon-exit" style="font-size: 30px"></i>
                        </a>


                        <?php
                    } else { ?>

                        <div class="ps-block--user-header mt-4">
                            <div class="ps-block__left">
                                <a href="login" title="Ingresar"><i class="icon-user"></i></a>
                            </div>
                            <div class="ps-block__right mt-2">
                                <a href="login">Ingresar</a>
                            </div>
                        </div>


                    <?php }
                    ?>


                </div><!-- End Header Actions-->

            </div><!-- End Header Content Right-->

        </div><!-- End Container-->

    </div><!-- End Header Content-->

</header>



<!--=====================================
Header Mobile
======================================-->

<header class="header header--mobile" data-sticky="true">


    <div class="navigation--mobile">

        <div class="navigation__left">

            <!--=====================================
            #region MENU MOBILE
            ======================================-->



            <a class="ps-logo pl-3 pl-sm-5" href="index">
                <img src="img/template/logo_light.png" class="pt-3" width="70px" height="70px">
                <img src="img/template/title_light.png" alt="" class="pt-3" width="100px" height="30px">
            </a>

        </div>

        <div class="navigation__right">

            <div class="header__actions">

                <?php
                if ($sesion != 0) { ?>
                    <!--=====================================
                    #region Wishlist mobile
                    ======================================-->

                    <div id="header_icons_mobile" class="ps-cart--mini">

                        <?php
                        $query1 = "SELECT COUNT(*) AS cuantos FROM wishlist
                        INNER JOIN usuarios ON wishlist.id_usuario = usuarios.id_usuario
                        INNER JOIN libros ON wishlist.id_libro = libros.id_libro
                        WHERE wishlist.id_usuario = $id_usuario_global";
                        $cuantos_wishlist = GetValueSQL($query1, 'cuantos');

                        echo '<a class="header__extra" href="wishlist">
                            <i class="icon-heart"></i><span><i>' . $cuantos_wishlist . '</i></span>
                        </a>';



                        ?>


                        <div class="ps-cart__content">

                            <?php
                            if ($cuantos_wishlist > 0) {
                                $query2 = "SELECT * FROM wishlist
                                INNER JOIN usuarios ON wishlist.id_usuario = usuarios.id_usuario
                                INNER JOIN libros ON wishlist.id_libro = libros.id_libro
                                WHERE wishlist.id_usuario = $id_usuario_global
                                ORDER BY id_wishlist DESC
                                LIMIT 4";
                                $wishlist = DatasetSQL($query2);

                                while ($row2 = mysqli_fetch_array($wishlist)) {
                                    $id_libro = $row2['id_libro'];
                                    $codigo_usuario = $row2['codigo_usuario'];
                                    $titulo = $row2['titulo'];
                                    $autor = $row2['autor'];
                                    $editorial = $row2['editorial'];
                                    $year = $row2['year'];
                                    $sinopsis = $row2['sinopsis'];
                                    $num_visitas = $row2['num_visitas'];
                                    $num_prestamos = $row2['num_prestamos'];
                                    $ruta_foto_portada = $row2['ruta_foto_portada'];
                                    $fecha_agregado = $row2['fecha_agregado'];
                                    $status = $row2['status'];

                                    $url_producto = str_replace(" ", "-", $titulo);
                                    $url_producto = str_replace("/", "-", $url_producto);
                                    $url_producto = quitarAcentos($url_producto);
                                    $url_producto = preg_replace('/[^a-zA-Z0-9\s-]/', '', $url_producto);

                                    $nombre_usuario = $row2['nombres'];
                                    $apellido_usuario = $row2['apellidos'];

                                    if ($year == NULL) {
                                        $year = "Sin Año";
                                    }

                                    if ($sinopsis == NULL) {
                                        $sinopsis = "Sin Sinopsis";
                                    }

                                    if ($ruta_foto_portada == NULL) {
                                        $ruta_foto_portada = "imagenes/libros/no-image.jpg";
                                    }

                                    ?>

                                    <div class="ps-cart__items">

                                        <div class="ps-product--cart-mobile">

                                            <div class="ps-product__thumbnail">
                                                <a href="libro/<?php echo $id_libro; ?>/<?php echo $url_producto; ?> ">
                                                    <img src="<?php echo $ruta_foto_portada; ?>" alt="<?php echo $titulo; ?>">
                                                </a>
                                            </div>

                                            <div class="ps-product__content">
                                                <a class="ps-product__remove" href=""
                                                    onclick="wishlist_remove(<?php echo $id_usuario_global . ', ' . $id_libro . ', event' ?>)">
                                                    <i class="icon-cross"></i>
                                                </a>
                                                <a
                                                    href="libro/<?php echo $id_libro; ?>/<?php echo $url_producto; ?> "><?php echo $titulo; ?></a>
                                                <p><?php echo $autor; ?></p>
                                                <p><strong>Ofrecido por: </strong>
                                                    <?php echo rtrim($nombre_usuario) . " " . rtrim($apellido_usuario); ?></p>
                                            </div>

                                        </div>

                                    </div>
                                    <?php
                                }
                            }
                            ?>


                        </div>

                    </div>

                    <!--=====================================
                    #region Perfil mobile
                    ======================================-->

                    <div class="ps-block--user-header">
                        <div class="ps-block__left">
                            <a class="header__extra" href="perfil">
                                <i class="icon-user"></i><span><i>0</i></span>
                            </a>
                            <a class="ml-4" href="perfil"><?php echo $nombre_usuario_global; ?></a>
                        </div>
                    </div>


                    <!--=====================================
                    Cerrar Sesión
                    ======================================-->

                    <a class="header__extra" href="javascript:cerrar_sesion()" title="Cerrar sesión">
                        <i class="icon-exit" style="font-size: 30px"></i>
                    </a>


                    <?php
                } else { ?>

                    <div class="ps-block--user-header">
                        <div class="ps-block__left">
                            <a href="login" title="Ingresar"><i class="icon-user" ></i></a>
                        </div>
                        <div class="ps-block__right">
                            <a href="login">Ingresar</a>
                        </div>
                    </div>


                <?php }
                ?>


            </div>

        </div>

    </div>

    <!--=====================================
    Search
    ======================================-->

    <div class="ps-search--mobile">

        <form class="ps-form--search-mobile" action="index.html" method="get">
            <div class="form-group--nest">
                <input class="form-control" type="text" placeholder="Título, Autor, Usuario...">
                <button><i class="icon-magnifier"></i></button>
            </div>
        </form>

    </div>

</header> <!-- End Header Mobile -->






<div class="navigation--list">
    <div class="navigation__content">
        <a class="navigation__item ps-toggle--sidebar" href="#menu-mobile">
            <i class="icon-alarm"></i><span> Notificaciones</span>
        </a>
        <a class="navigation__item ps-toggle--sidebar" href="#search-sidebar">
            <i class="icon-magnifier"></i><span> Buscar</span>
        </a>
        <p class="navigation__item ps-toggle--sidebar">

        </p>
    </div>
</div>


<!--=====================================
    Navigation Mobile Search
    ======================================-->

<div class="ps-panel--sidebar" id="search-sidebar">
    <div class="ps-panel__header">
        <form class="ps-form--search-mobile" action="#" method="get">
            <div class="form-group--nest">
                <input class="form-control" type="text" placeholder="Título, Autor, Usuario...">
                <button><i class="icon-magnifier"></i></button>
            </div>
        </form>
    </div>
    <div class="navigation__content"></div>
</div>