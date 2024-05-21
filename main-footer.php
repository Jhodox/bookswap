
    <footer class="ps-footer">
        

            <div class="container">

                <div class="ps-footer__widgets">

                    <!--=====================================
                    Contact us
                    ======================================-->  

                    <aside class="widget widget_footer widget_contact-us">

                        <h4 class="widget-title">Contactanos!</h4>

                        <div class="widget_content">

                            <p>CUCEI, Jalisco, México <br>
                                <a target="_blank" href="mailto:bookswapcontacto@gmail.com">bookswapcontacto@gmail.com</a>
                            </p>

                            <ul class="ps-list--social">
                                <li><a title="Ivan" class="instagram" target="_blank" href="https://www.instagram.com/ivanpillow"><i class="fab fa-instagram"></i></a></li>
                                <li><a title="Angel" class="instagram" target="_blank" href="https://www.instagram.com/asc_angeel"><i class="fab fa-instagram"></i></a></li>
                                <li><a title="Gerson" class="instagram" target="_blank" href="https://www.instagram.com/gerson_flores"><i class="fab fa-instagram"></i></a></li>
                                <li><a title="Cristian" class="instagram" target="_blank" href="https://www.instagram.com/cristiancitorozkito"><i class="fab fa-instagram"></i></a></li>
                                <li><a title="Brandon" class="instagram" target="_blank" href="https://www.instagram.com/__brandonhh__"><i class="fab fa-instagram"></i></a></li>
                                <li><a title="Jorge" class="instagram" target="_blank" href="https://www.instagram.com/jorgeoliv.ag/"><i class="fab fa-instagram"></i></a></li>
                            </ul>

                        </div>

                    </aside>

                    <!--=====================================
                    Quick Links
                    ======================================-->  

                    <aside class="widget widget_footer">

                        <h4 class="widget-title">Links Rápidos</h4>

                        <ul class="ps-list--link">

                            <li><a href="#inicio">Inicio</a></li>

                            <li><a href="#mas-buscados">Los Más Buscados</a></li>

                            <li><a href="#mas-intercambiados">Con Mayor Cantidad de Intercambios</a></li>

                            <li><a href="#recientes">Añadidos Recientemente</a></li>

                        </ul>

                    </aside>

                    <!--=====================================
                    Company
                    ======================================-->  

                    <aside class="widget widget_footer">

                        <h4 class="widget-title">Equipo de desarrollo</h4>

                        <ul class="ps-list--link">

                            <li><a href="aboutUs">Sobre nosotros</a></li>   

                            <li><a href="#AbrirModalContacto" data-bs-toggle="modal" data-bs-target="#modalContacto" data-bs-whatever="@mdo">Contacto</a></li>

                            <li><a href="preguntas_frecuentes">Preguntas Frecuentes</a></li> 

                        </ul>

                    </aside>

                    <!--=====================================
                    Bussiness
                    ======================================-->  

                    <aside class="widget widget_footer">

                        <h4 class="widget-title">Cuenta</h4>

                        <ul class="ps-list--link">

                            <li><a href="wishlist">Wishlist</a></li>

                            <li><a href="perfil">Mi Cuenta</a></li>
                            
                            <li><a href="javascript:cerrar_sesion()">Cerrar sesión</a></li>
                            
                        </ul>

                    </aside>

                </div>

   
    </footer>

    <?php
        if($admin_usuario_global == 1){
        echo 
        '<!-- Icono flotante -->
        <div class="floating-icon">
            <a title="Administradores" href="admins">
                <i class="fa-solid fa-gear"></i>
            </a>
        </div>'
        ;    
        }
    ?>



<!--=====================================
#region modal contacto
======================================-->  
<body>
    <title>Modal Contacto</title>
    
    <div class="modal fade" id="modalContacto" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered">
            <div class="modal-content modal-content-custom">
                <div class="modal-header">
                    <h5 class="h3 modal-title title" id="modalContactoLabel">Nuestro Contacto:</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                </div>
                <div class="modal-body modal-body-custom">
                    <div class="h4 text-justify">
                        <ul>
                            <li>
                                <strong>Llamanos 24/7</strong><br>
                                1800 97 97 69
                            </li><br>
                            <li>
                                <strong>Nuestro correo:</strong><br>
                                contact@marketplace.com
                            </li><br>
                            <li>
                                <strong>Nos ubicamos en:</strong><br>
                                CUCEI, Jalisco, México
                            </li><br>
                            <li>
                                <strong>Nuestras redes son:</strong><br>
                                <a href="https://www.twitch.tv/ingejorge_gg" target="_blank" ><i class="fab fa-twitch">&ensp;</i> JorgitoPlays</a>
                            </li><br>
                        </ul>
                    </div>
                </div>
                <div class="modal-footer">
                    <p class="text-justify">
                        Puedes contactarnos vía telefónica, o por correo. Nuestra dirección es justo en el edificio X aula 20, disponible por si llega a haber alguna consulta física.
                    </p>
                </div>
            </div>
        </div>
    </div>


</body>