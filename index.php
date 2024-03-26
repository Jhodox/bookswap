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
	
</head>

<body>

    <!--=====================================
    Preload
    ======================================-->

    <div id="loader-wrapper">
        <img src="img/template/loader.jpg">
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div>  

	<!--=====================================
	Header Promotion
	======================================-->


    <!--=====================================
	Header
	======================================-->

    <?php include('main-header.php') ?>

  	

    <!--=====================================
    Navigation Mobile
    ======================================-->


    <?php
    //Está comentado
    include('navegacion-mobile.php'); 
    ?>

    <!--=====================================
    Home Content
    ======================================-->  

    <div id="homepage-6">

    	<!--=====================================
    	Home Banner
    	======================================-->  

    	<div class="ps-home-banner">
            <div class="ps-carousel--nav-inside owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="5000" data-owl-gap="0" data-owl-nav="true" data-owl-dots="true" data-owl-item="1" data-owl-item-xs="1" data-owl-item-sm="1" data-owl-item-md="1" data-owl-item-lg="1" data-owl-duration="1000" data-owl-mousedrag="on" data-owl-animate-in="fadeIn" data-owl-animate-out="fadeOut">

                <div class="ps-banner--market-4" data-background="img/slider/horizontal/1.jpg">
                	<img src="img/slider/horizontal/1.jpg" alt="">
                    <div class="ps-banner__content">
                        <h4>Limit Edition</h4>
                        <h3>HAPPY SUMMER <br/> 
                        	COMBO SUPER COOL <br/> 
                        	<p>UP TO <strong> 40%</strong></p>
                        </h3>
                        <a class="ps-btn" href="#">Shop Now</a>
                    </div>
                </div>

                <div class="ps-banner--market-4" data-background="img/slider/horizontal/2.jpg">
                	<img src="img/slider/horizontal/2.jpg" alt="">
                    <div class="ps-banner__content">
                        <h4>Version 2018</h4>
                        <h3>EXPERIENCE FEEL <br/> 
                        	GREATEST WITH VITURAL <br/> 
                        	<p>REALITY JUST <strong> $599</strong></p>
                        </h3>
                        <a class="ps-btn" href="#">Shop Now</a>
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
		Top Categoríes
		======================================-->  

        <div class="ps-top-categories">

            <div class="container">

                <h3>Top categories of the month</h3>

                <div class="row">

                    <div class="col-xl-2 col-lg-3 col-sm-4 col-6 ">
                        <div class="ps-block--category">
                        	<a class="ps-block__overlay" href="shop-default.html"></a>
                        	<img src="img/categories/1.jpg" alt="">
                            <p>Electronics</p>
                        </div>
                    </div>

                    <div class="col-xl-2 col-lg-3 col-sm-4 col-6 ">
                        <div class="ps-block--category">
                        	<a class="ps-block__overlay" href="shop-default.html"></a>
                        	<img src="img/categories/2.jpg" alt="">
                            <p>Clothings</p>
                        </div>
                    </div>

                    <div class="col-xl-2 col-lg-3 col-sm-4 col-6 ">
                        <div class="ps-block--category">
                        	<a class="ps-block__overlay" href="shop-default.html"></a>
                        	<img src="img/categories/3.jpg" alt="">
                            <p>Computers</p>
                        </div>
                    </div>

                    <div class="col-xl-2 col-lg-3 col-sm-4 col-6 ">
                        <div class="ps-block--category">
                        	<a class="ps-block__overlay" href="shop-default.html"></a>
                        	<img src="img/categories/4.jpg" alt="">
                            <p>Home &amp; Kitchen</p>
                        </div>
                    </div>

                    <div class="col-xl-2 col-lg-3 col-sm-4 col-6 ">
                        <div class="ps-block--category">
                        	<a class="ps-block__overlay" href="shop-default.html"></a>
                        	<img src="img/categories/5.jpg" alt="">
                            <p>Health &amp; Beauty</p>
                        </div>
                    </div>

                    <div class="col-xl-2 col-lg-3 col-sm-4 col-6 ">
                        <div class="ps-block--category">
                        	<a class="ps-block__overlay" href="shop-default.html"></a>
                        	<img src="img/categories/6.jpg" alt="">
                            <p>Health &amp; Beauty</p>
                        </div>
                    </div>

                </div>
            </div>

        </div><!-- End Top Categories -->

	</div><!-- End Homepage 6-->

 	<!--=====================================
	Section Gray
	======================================-->  

	<div class="ps-section--gray">

        <div class="container">

        	<!--=====================================
			Products of category
			======================================-->  

            <div class="ps-block--products-of-category">

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

                    <div class="ps-product ps-product--simple">

                        <div class="ps-product__thumbnail">

                        	<a href="product-default.html">

                        		<img src="img/products/clothing/1.jpg" alt="">

                        	</a>

                            <div class="ps-product__badge">-16%</div>

                        </div>

                        <div class="ps-product__container">

                            <div class="ps-product__content" data-mh="clothing">

                            	<a class="ps-product__title" href="product-default.html">Herschel Leather Duffle Bag In Brown Color</a>

                                <div class="ps-product__rating">

                                    <select class="ps-rating" data-read-only="true">

                                        <option value="1">1</option>
                                        <option value="1">2</option>
                                        <option value="1">3</option>
                                        <option value="1">4</option>
                                        <option value="2">5</option>

                                    </select>

                                    <span>01</span>

                                </div>

                                <p class="ps-product__price sale">$567.99 <del>$670.00 </del></p>

                            </div>

                        </div>

                    </div> <!-- End Product Simple -->

                    <!--=====================================
					Product Simple
					======================================--> 

                    <div class="ps-product ps-product--simple">

                        <div class="ps-product__thumbnail">

                        	<a href="product-default.html">

                        		<img src="img/products/clothing/2.jpg" alt=""></a>

                            <div class="ps-product__badge out-stock">Out Of Stock</div>

                        </div>

                        <div class="ps-product__container">

                            <div class="ps-product__content" data-mh="clothing">

                            	<a class="ps-product__title" href="product-default.html">Unero Military Classical Backpack</a>
                                
                                <div class="ps-product__rating">

                                    <select class="ps-rating" data-read-only="true">
                                        <option value="1">1</option>
                                        <option value="1">2</option>
                                        <option value="1">3</option>
                                        <option value="1">4</option>
                                        <option value="2">5</option>
                                    </select>
                                    <span>01</span>

                                </div>

                                <p class="ps-product__price">$101.99</p>

                            </div>

                        </div>

                    </div><!-- End Product Simple -->

                    <!--=====================================
					Product Simple
					======================================--> 

                    <div class="ps-product ps-product--simple">

                        <div class="ps-product__thumbnail">

                        	<a href="product-default.html">

                        		<img src="img/products/clothing/3.jpg" alt=""></a>

                            <div class="ps-product__badge">-25%</div>
   
                        </div>

                        <div class="ps-product__container">

                            <div class="ps-product__content" data-mh="clothing">

                            	<a class="ps-product__title" href="product-default.html">Rayban Rounded Sunglass Brown Color</a>
                                
                                <div class="ps-product__rating">
                                    <select class="ps-rating" data-read-only="true">
                                        <option value="1">1</option>
                                        <option value="1">2</option>
                                        <option value="1">3</option>
                                        <option value="1">4</option>
                                        <option value="2">5</option>
                                    </select>
                                    <span>02</span>
                                </div>

                                <p class="ps-product__price sale">$42.00 <del>$60.00 </del></p>

                            </div>

                        </div>

                    </div><!-- End Product Simple -->

                    <!--=====================================
					Product Simple
					======================================--> 

                    <div class="ps-product ps-product--simple">

                        <div class="ps-product__thumbnail">

                        	<a href="product-default.html">

                        		<img src="img/products/clothing/4.jpg" alt="">

                        	</a>

                            <div class="ps-product__badge out-stock">Out Of Stock</div>

                        </div>

                        <div class="ps-product__container">

                            <div class="ps-product__content" data-mh="clothing">

                            	<a class="ps-product__title" href="product-default.html">Sleeve Linen Blend Caro Pane Shirt</a>

                                <div class="ps-product__rating">

                                    <select class="ps-rating" data-read-only="true">
                                        <option value="1">1</option>
                                        <option value="1">2</option>
                                        <option value="1">3</option>
                                        <option value="1">4</option>
                                        <option value="2">5</option>
                                    </select>
                                    <span>01</span>

                                </div>

                                <p class="ps-product__price">$320.00</p>

                            </div>

                        </div>

                    </div><!-- End Product Simple -->

                    <!--=====================================
					Product Simple
					======================================--> 

                    <div class="ps-product ps-product--simple">

                        <div class="ps-product__thumbnail">

                        	<a href="product-default.html">

                        		<img src="img/products/clothing/5.jpg" alt=""></a>

                            <div class="ps-product__badge out-stock">Out Of Stock</div>   

                        </div>

                        <div class="ps-product__container">

                            <div class="ps-product__content" data-mh="clothing">

                            	<a class="ps-product__title" href="product-default.html">Men’s Sports Runnning Swim Board Shorts</a>
                                
                                <div class="ps-product__rating">
                                    <select class="ps-rating" data-read-only="true">
                                        <option value="1">1</option>
                                        <option value="1">2</option>
                                        <option value="1">3</option>
                                        <option value="1">4</option>
                                        <option value="2">5</option>
                                    </select><span>01</span>
                                </div>

                                <p class="ps-product__price">$85.00</p>

                            </div>

                        </div>

                    </div><!-- End Product Simple -->

                    <!--=====================================
					Product Simple
					======================================--> 

                    <div class="ps-product ps-product--simple">

                        <div class="ps-product__thumbnail">

                        	<a href="product-default.html">

                        		<img src="img/products/clothing/6.jpg" alt=""></a>

                            <div class="ps-product__badge out-stock">Out Of Stock</div>

                        </div>

                        <div class="ps-product__container">

                            <div class="ps-product__content" data-mh="clothing">

                            	<a class="ps-product__title" href="product-default.html">Paul’s Smith Sneaker InWhite Color</a>

                                <div class="ps-product__rating">
                                    <select class="ps-rating" data-read-only="true">
                                        <option value="1">1</option>
                                        <option value="1">2</option>
                                        <option value="1">3</option>
                                        <option value="1">4</option>
                                        <option value="2">5</option>
                                    </select>
                                    <span>01</span>
                                </div>

                                <p class="ps-product__price">$92.00</p>

                            </div>

                        </div>

                    </div><!-- End Product Simple -->

                </div><!-- End Block Product Box -->
              
            </div><!-- End Products of category -->
            <!-- Termino de Productos por bloque -->

           

        </div><!-- End Container-->

    </div><!-- End Section Gray-->


    <!--=====================================
	Footer
	======================================-->  

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
	
</body>
</html>