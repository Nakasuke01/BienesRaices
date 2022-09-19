<?php

require 'includes/funciones.php';


incluirTemplate('header');
?>

<main class="contenedor seccion">
    <h2>Conoce sobre Nosotros</h2>

    <div class="contenido-nosotros">
        <picture class="imagen">
            <source srcset="build/img/nosotros.webp" type="imagen/webp">
            <source srcset="build/img/nosotros.jpg" type="imagen/jpeg">
            <img loading="lazy" src="build/img/nosotros.jpg" alt="Sobre Nosotros">
        </picture>


        <div class="texto-nosotros">
            <blockquote>
                25 años de experiencia
            </blockquote>

            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum, molestiae veritatis dicta aspernatur, tempora ipsam saepe dolores debitis aliquid nemo ex atque optio doloremque repellendus exercitationem quia porro consequuntur cumque, minima veniam minus nihil reiciendis! Eligendi quia eveniet nostrum iure molestiae, dolorum quasi quos quae, atque vel ullam qui temporibus? Officia unde veniam in impedit provident ad commodi, soluta quae earum esse nemo architecto quia magnam dolorum odio. Consequuntur, numquam ex. Eaque tenetur voluptatem optio. Amet pariatur ipsum, saepe numquam animi magni veritatis hic, consequuntur corporis qui maxime quos tempore cupiditate ipsam corrupti nam!</p>

            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Asperiores distinctio aspernatur cumque alias ipsa inventore repellat perspiciatis, repellendus culpa odio dignissimos deserunt ea sapiente nobis labore vero architecto. Est minima ea nam cumque. Reiciendis asperiores facere ullam possimus magnam, at animi inventore exercitationem!</p>
        </div>
    </div>

</main>

<seccion class="contenedor seccion">
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
</seccion>


<?php
incluirTemplate('footer');
?>

<script src="build/js/bundle.min.js"></script>
<!--Vinculacion con el modernizer-->
</body>

</html>