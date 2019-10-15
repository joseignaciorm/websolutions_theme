
<footer class="footer--container">
            <section class="l-section l-container footer__before">
                <div class="footer__info col__one">
                    <h4 class="footer__info--tittle">Chip Designs</h4>
                    <p class="footer__info--txt">
                        Especialistas y autodidactas enfocados en el posicionamiento web - seo, diseño web, desarrollo web y marketing digital.
                        Nos apaciona la investigación, estar al día con las actualizaciones para brindar el mejor de los servicios a nuestros clientes.
                    </p>
                </div>
                <div class="footer__info col__two">
                    <h4 class="footer__info--tittle">Posicionamiento web - seo</h4>
                    <ul class="footer__info--item">
                        <li class="footer__info--list"><a href="" class="footer__info--link">Cómo posicionar mi negocio</a></li>
                        <li class="footer__info--list"><a href="" class="footer__info--link">Quiero posicionamiento mi web</a></li>
                        <li class="footer__info--list"><a href="" class="footer__info--link">Hacemos una auditoria de tu web gratis</a></li>
                        <li class="footer__info--list"><a href="" class="footer__info--link">Cómo contratar un buen consultor seo</a></li>
                    </ul>
                </div>
                <div class="footer__info col__three">
                    <h4 class="footer__info--tittle">Diseño web</h4>
                    <ul class="footer__info--item">
                        <li class="footer__info--list"><a href="" class="footer__info--link">Diseño web a medida</a></li>
                        <li class="footer__info--list"><a href="" class="footer__info--link">¿Diseño web & desarrolo web?</a></li>
                        <li class="footer__info--list"><a href="" class="footer__info--link">¿Qué métodos de diseño web empleamos?</a></li>
                        <li class="footer__info--list"><a href="" class="footer__info--link">Te hacemos un análisis gratis de tu web</a></li>
                    </ul>
                </div>
                <div class="footer__info col__four">
                    <h4 class="footer__info--tittle">Contacto</h4>
                    <ul class="footer__info--item">
                        <li class="footer__info--list"><a href="" class="footer__info--link">Cuéntamos mas sobre tu negocio</a></li>
                        <li class="footer__info--list"><a href="" class="footer__info--link">Analicemos tu contenido web</a></li>
                        <li class="footer__info--list"><a href="" class="footer__info--link">Analicemos el rendimiento de tu web</a></li>
                        <li class="footer__info--list"><a href="" class="footer__info--link">Quiero mejorar el tráfico de mi sitio web</a></li>
                    </ul>
                </div>
            </section>
            <section class="l-section l-container footer__after">
                <div class="footer__rights">&copy; <?php echo date('Y') . ' -'; ?> Diseño web por Nacho</div>
                <div class="social_content">
                    <?php 
                        wp_nav_menu(array(
                            'theme_location'    => 'social_menu',
                            'container'         => 'nav'
                        ));
                    ?>
                </div>
            </section>
        </footer>
    <!-- FOOTER END -->
    </div>
    
</main>
<!-- MAIN CONTAINER END -->
<?php wp_footer(); ?>
</body>
</html>
<!-- FOOTER -->