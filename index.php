<?php

require 'includes/funciones.php';


incluirTemplate('header', $inicio = true);
?>

<main class="contenedor seccion">
    <h2>Más Sobre Nosotros</h2>

    <div class="iconos-nosotros">
        <div class="icono">
            <img src="build/img/icono1.svg" alt="Icono Seguridad" loading="lazy">
            <h3>Seguridad</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Doloremque eaque debitis odio dolor ab, fuga sint ea quasi libero hic nisi amet id nihil excepturi dolores ad dolore quaerat fugiat.</p>
        </div>

        <div class="icono">
            <img src="build/img/icono2.svg" alt="Icono Precio" loading="lazy">
            <h3>Precio</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Doloremque eaque debitis odio dolor ab, fuga sint ea quasi libero hic nisi amet id nihil excepturi dolores ad dolore quaerat fugiat.</p>
        </div>

        <div class="icono">
            <img src="build/img/icono3.svg" alt="Icono Tiempo" loading="lazy">
            <h3>Tiempo</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Doloremque eaque debitis odio dolor ab, fuga sint ea quasi libero hic nisi amet id nihil excepturi dolores ad dolore quaerat fugiat.</p>
        </div>

    </div>
</main>

<section class="seccion contenedor">
    <h2>Casas y Departamentos en Venta</h2>

    <div class="contenedor-anuncios">
        <div class="anuncio">
            <picture>
                <source srcset="buid/img/anuncio1.webp" type="imagen/webp">
                <source srcset="buid/img/anuncio1.jpg" type="imagen/jpg">
                <img src="build/img/anuncio1.jpg" alt="anuncio" loading="lazy">
            </picture>

            <div class="contenido-anuncio">
                <h3 class="titulo-anuncio">Casa de Lujo en el Lago</h3>
                <p class="desc">Casa en el lago con excelente vista,acabados de lujo a un excelente precio</p>
                <p class="precio">$30,000,000</p>

                <ul class="iconos-caracteristicas">
                    <li>
                        <img class="icono" src="build/img/icono_wc.svg" alt="icono wc" loading="lazy">
                        <p>3</p>
                    </li>

                    <li>
                        <img class="icono" src="build/img/icono_estacionamiento.svg" alt="icono estacionamiento" loading="lazy">
                        <p>3</p>
                    </li>

                    <li>
                        <img class="icono" src="build/img/icono_dormitorio.svg" alt="icono icono_dormitorio" loading="lazy">
                        <p>4</p>
                    </li>
                </ul>

                <a href="anuncio.php" class="boton boton-amarillo">Ver Propiedad</a>
            </div>
            <!--fin del contenido anuncio-->
        </div>
        <!--Fin del anuncio-->


        <div class="anuncio">
            <picture>
                <source srcset="buid/img/anuncio2.webp" type="imagen/webp">
                <source srcset="buid/img/anuncio2.jpg" type="imagen/jpg">
                <img src="build/img/anuncio2.jpg" alt="anuncio" loading="lazy">
            </picture>

            <div class="contenido-anuncio">
                <h3 class="titulo-anuncio">Casa con terminados de lujo</h3>
                <p class="desc">Casa con diseños modernos, así como tecnología inteligente amueblada</p>
                <p class="precio">$20,000,000</p>

                <ul class="iconos-caracteristicas">
                    <li>
                        <img class="icono" src="build/img/icono_wc.svg" alt="icono wc" loading="lazy">
                        <p>3</p>
                    </li>

                    <li>
                        <img class="icono" src="build/img/icono_estacionamiento.svg" alt="icono estacionamiento" loading="lazy">
                        <p>3</p>
                    </li>

                    <li>
                        <img class="icono" src="build/img/icono_dormitorio.svg" alt="icono icono_dormitorio" loading="lazy">
                        <p>4</p>
                    </li>
                </ul>

                <a href="anuncio.php" class="boton boton-amarillo">Ver Propiedad</a>
            </div>
            <!--fin del contenido anuncio-->
        </div>
        <!--Fin del anuncio-->




        <div class="anuncio">
            <picture>
                <source srcset="buid/img/anuncio3.webp" type="imagen/webp">
                <source srcset="buid/img/anuncio3.jpg" type="imagen/jpg">
                <img src="build/img/anuncio3.jpg" alt="anuncio" loading="lazy">
            </picture>

            <div class="contenido-anuncio">
                <h3 class="titulo-anuncio">Casa con alberca</h3>
                <p class="desc">Casa con alberca y acabados de lujo en la ciudad, excelente oportunidad</p>
                <p class="precio">$30,000,000</p>

                <ul class="iconos-caracteristicas">
                    <li>
                        <img class="icono" src="build/img/icono_wc.svg" alt="icono wc" loading="lazy">
                        <p>3</p>
                    </li>

                    <li>
                        <img class="icono" src="build/img/icono_estacionamiento.svg" alt="icono estacionamiento" loading="lazy">
                        <p>3</p>
                    </li>

                    <li>
                        <img class="icono" src="build/img/icono_dormitorio.svg" alt="icono icono_dormitorio" loading="lazy">
                        <p>4</p>
                    </li>
                </ul>

                <a href="anuncio.php" class="boton boton-amarillo">Ver Propiedad</a>
            </div>
            <!--fin del contenido anuncio-->
        </div>
        <!--Fin del anuncio-->

    </div>
    <!--fin contenedor anuncios-->

    <div class="ver-todas">
        <a href="anuncios.php" class="boton-verde">Ver Todas</a>
    </div>
</section>

<section class="imagen-contacto">
    <h2 class="it">Encuentra la casa de tus sueños</h2>
    <p class="ip">Llena el formulario de contacto y un asesor se pondra en contacto contigo a la brevedad</p>
    <a href="contacto.php" class="boton-amarillo-contacto">Contactanos</a>
</section>

<div class="contenedor seccion seccion-inferior">
    <section class="blog">
        <h3>Nuestro Blog</h3>
        <article class="entrada-blog">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/blog1.webp" type="image/webp">
                    <source srcset="build/img/blog1.jpg" type="image/jpg">
                    <img src="build/img/blog1.jpg" alt="Texto Entrada Blog" loading="lazy">
                </picture>
            </div>
            <div class="texto-entrada">
                <a href="entrada.php">
                    <h4>Terraza en el Techo de tu casa</h4>
                    <p>Escrito el: <span>20/07/2022</span> por: <span>Admin</span></p>
                    <p>Consejos para construir una terraza en el techo de tu csa con los mejores materiales y ahorrando dinero</p>
                </a>
            </div>
        </article>

        <article class="entrada-blog">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/blog2.webp" type="image/webp">
                    <source srcset="build/img/blog2.jpg" type="image/jpg">
                    <img src="build/img/blog2.jpg" alt="Texto Entrada Blog" loading="lazy">
                </picture>
            </div>
            <div class="texto-entrada">
                <a href="entrada.php">
                    <h4>Guia para la decoración de tu hogar</h4>
                    <p>Escrito el: <span>20/07/2022</span> por: <span>Admin</span></p>
                    <p>Maximiza el espacio de tu hogar con esta guia, aprende a combinar muebles y colores para dare vida a tu espacio</p>
                </a>
            </div>
        </article>
    </section>

    <section class="testimoniales">
        <h3>Testimoniales</h3>
        <div class="testimonial">
            <blockquote>
                El personal se comporto de una excelente forma, muy buena atención y la casa que me ofrecieron cumple con todas mis expectativas.
            </blockquote>
            <p>-Nakasuke</p>
        </div>
    </section>
</div>


<?php
incluirTemplate('footer');
?>


<script src="build/js/bundle.min.js"></script>
<!--Vinculacion con el modernizer-->
</body>

</html>