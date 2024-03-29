
<?php
//session_start();
if(isset($_SESSION['id_sesion']) AND isset($_SESSION['email'])){
	$id_usuario = $_SESSION['id_sesion'];
	$sesion = 1;
} else{
	$sesion = 0;
	$id_usuario = 0;
}
	//echo "ID SESION: ".$_SESSION['id_sesion'];
	//echo "EMAIL: ".$_SESSION['email'];
	
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

            <div class="header__content-left">

                <!--=====================================
                Logo
                ======================================-->

                <a class="ps-logo" href="index.php">
                    <img src="img/template/logo_light.png" alt="">
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
            Search
            ======================================-->

            <div class="header__content-center">
                <form class="ps-form--quick-search" action="index.html" method="get">
                    <input class="form-control" type="text" placeholder="Título, Autor, Usuario,...">
                    <button>Buscar</button>
                </form>
            </div>

            <div class="header__content-right">

                <div class="header__actions">

                    <!--=====================================
                    Wishlist
                    ======================================-->

                    <div class="ps-cart--mini">

                        <?php 
                        $query1 = "SELECT COUNT(*) AS cuantos FROM wishlist
                        INNER JOIN usuarios ON wishlist.codigo_usuario = usuarios.codigo_usuario
                        INNER JOIN libros ON wishlist.id_libro = libros.id_libro
                        WHERE wishlist.codigo_usuario = '222790641'";
                        $cuantos = GetValueSQL($query1, 'cuantos');
                        
                        ?>

                        <a class="header__extra" href="#">
                            <i class="icon-heart"></i><span><i><?php echo $cuantos; ?></i></span>
                        </a>

                        <div class="ps-cart__content">

                            <?php 
                            if($cuantos > 0){
                                $query2 = "SELECT * FROM wishlist
                                INNER JOIN usuarios ON wishlist.codigo_usuario = usuarios.codigo_usuario
                                INNER JOIN libros ON wishlist.id_libro = libros.id_libro
                                WHERE wishlist.codigo_usuario = '222790641'";
                                $wishlist = DatasetSQL($query2);

                                while($row2 = mysqli_fetch_array($wishlist)){
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

                                    $nombre_usuario = $row2['nombres'];
                                    $apellido_usuario = $row2['apellidos'];

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

                                    <div class="ps-cart__items">

                                    <div class="ps-product--cart-mobile">

                                        <div class="ps-product__thumbnail">
                                            <a href="#">
                                                <img src="<?php echo $ruta_foto_portada; ?>" alt="<?php echo $titulo; ?>">
                                            </a>
                                        </div>

                                        <div class="ps-product__content">
                                            <a class="ps-product__remove" href="#">
                                                <i class="icon-cross"></i>
                                            </a>
                                            <a href="product-default.html"><?php echo $titulo; ?></a>
                                            <p><?php echo $autor; ?></p>
                                            <p><strong>Ofrecido por: </strong> <?php echo rtrim($nombre_usuario)." ".rtrim($apellido_usuario); ?></p>
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
                    Notificaciones de Waitlist
                    ======================================-->

                    <a class="header__extra" href="#">
                        <i class="icon-alarm"></i><span><i>0</i></span>
                    </a>

                    <!--=====================================
                    Login and Register
                    ======================================-->

                    <div class="ps-block--user-header">
                        <div class="ps-block__left">
                            <i class="icon-user"></i>
                        </div>
                        <div class="ps-block__right">
                            <a href="login.php">Ingresar</a>
                            <a href="register.php">¡Regístrate!</a>
                        </div>
                    </div>

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
            Menu Mobile
            ======================================-->

            

            <a class="ps-logo pl-3 pl-sm-5" href="index.html">
                <img src="img/template/logo_light.png" class="pt-3" alt="">
            </a>

        </div>

        <div class="navigation__right">

            <div class="header__actions">

                <!--=====================================
                Wishlist
                ======================================-->
                <div class="ps-cart--mini">

                    <?php 
                    $query1 = "SELECT COUNT(*) AS cuantos FROM wishlist
                    INNER JOIN usuarios ON wishlist.codigo_usuario = usuarios.codigo_usuario
                    INNER JOIN libros ON wishlist.id_libro = libros.id_libro
                    WHERE wishlist.codigo_usuario = '222790641'";
                    $cuantos = GetValueSQL($query1, 'cuantos');

                    ?>

                    <a class="header__extra" href="#">
                        <i class="icon-heart"></i><span><i><?php echo $cuantos; ?></i></span>
                    </a>

                    <div class="ps-cart__content">

                        <?php 
                        if($cuantos > 0){
                            $query2 = "SELECT * FROM wishlist
                            INNER JOIN usuarios ON wishlist.codigo_usuario = usuarios.codigo_usuario
                            INNER JOIN libros ON wishlist.id_libro = libros.id_libro
                            WHERE wishlist.codigo_usuario = '222790641'";
                            $wishlist = DatasetSQL($query2);

                            while($row2 = mysqli_fetch_array($wishlist)){
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

                                $nombre_usuario = $row2['nombres'];
                                $apellido_usuario = $row2['apellidos'];

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

                                <div class="ps-cart__items">

                                <div class="ps-product--cart-mobile">

                                    <div class="ps-product__thumbnail">
                                        <a href="#">
                                            <img src="<?php echo $ruta_foto_portada; ?>" alt="<?php echo $titulo; ?>">
                                        </a>
                                    </div>

                                    <div class="ps-product__content">
                                        <a class="ps-product__remove" href="#">
                                            <i class="icon-cross"></i>
                                        </a>
                                        <a href="product-default.html"><?php echo $titulo; ?></a>
                                        <p><?php echo $autor; ?></p>
                                        <p><strong>Ofrecido por: </strong> <?php echo rtrim($nombre_usuario)." ".rtrim($apellido_usuario); ?></p>
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
                Login and Register
                ======================================-->

                <div class="ps-block--user-header">

                    <div class="ps-block__left">
                        <i class="icon-user"></i>
                    </div>
                    <div class="ps-block__right">
                        <a href="login.php">Login</a>
                        <a href="register.php">Register</a>
                    </div>

                </div>

            </div>

        </div>

    </div>

    <!--=====================================
    Search
    ======================================-->

    <div class="ps-search--mobile">

        <form class="ps-form--search-mobile" action="index.html" method="get">
            <div class="form-group--nest">
                <input class="form-control" type="text" placeholder="Título, Autor, Usuario,...">
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
                    <input class="form-control" type="text" placeholder="Título, Autor, Usuario,...">
                    <button><i class="icon-magnifier"></i></button>
                </div>
            </form>
        </div>
        <div class="navigation__content"></div>
    </div>

    <!--=====================================
    Navigation Mobile Shoping Cart
    ======================================-->

    <div class="ps-panel--sidebar" id="cart-mobile">
        <div class="ps-panel__header">
            <h3>Shopping Cart</h3>
        </div>
        <div class="navigation__content">
            <div class="ps-cart--mobile">
                <div class="ps-cart__content">
                    <div class="ps-product--cart-mobile">
                        <div class="ps-product__thumbnail"><a href="#"><img src="img/products/clothing/7.jpg" alt=""></a></div>
                        <div class="ps-product__content"><a class="ps-product__remove" href="#"><i class="icon-cross"></i></a><a href="product-default.html">MVMTH Classical Leather Watch In Black</a>
                            <p><strong>Sold by:</strong> YOUNG SHOP</p><small>1 x $59.99</small>
                        </div>
                    </div>
                </div>
                <div class="ps-cart__footer">
                    <h3>Sub Total:<strong>$59.99</strong></h3>
                    <figure><a class="ps-btn" href="shopping-cart.html">View Cart</a><a class="ps-btn" href="checkout.html">Checkout</a></figure>
                </div>
            </div>
        </div>
    </div>