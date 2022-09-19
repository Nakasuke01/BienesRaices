<?php

require 'includes/funciones.php';


incluirTemplate('header');
?>

<main class="contenedor seccion contenido-centrado">
    <h2>Casa en Venta Frente al Bosque</h2>

    <picture>
        <source srcset="build/img/destacada.webp" type="image/webp">
        <source srcset="build/img/destacada.jpg" type="image/jpeg">
        <img loading="lazy" src="build/img/destacada.jpg" alt="imagen de la propiedad">
    </picture>

    <div class="resumen-propiedad">
        <p class="precio">$30,000,000</p>

        <ul class="iconos-caracteristicas">
            <li>
                <img src="build/img/icono_wc.svg" alt="icono wc" loading="lazy">
                <p>3</p>
            </li>

            <li>
                <img src="build/img/icono_estacionamiento.svg" alt="icono estacionamiento" loading="lazy">
                <p>3</p>
            </li>

            <li>
                <img src="build/img/icono_dormitorio.svg" alt="icono icono_dormitorio" loading="lazy">
                <p>4</p>
            </li>
        </ul>

        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum, molestiae veritatis dicta aspernatur, tempora ipsam saepe dolores debitis aliquid nemo ex atque optio doloremque repellendus exercitationem quia porro consequuntur cumque, minima veniam minus nihil reiciendis! Eligendi quia eveniet nostrum iure molestiae, dolorum quasi quos quae, atque vel ullam qui temporibus? Officia unde veniam in impedit provident ad commodi, soluta quae earum esse nemo architecto quia magnam dolorum odio. Consequuntur, numquam ex. Eaque tenetur voluptatem optio. Amet pariatur ipsum, saepe numquam animi magni veritatis hic, consequuntur corporis qui maxime quos tempore cupiditate ipsam corrupti nam!</p>

        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Asperiores distinctio aspernatur cumque alias ipsa inventore repellat perspiciatis, repellendus culpa odio dignissimos deserunt ea sapiente nobis labore vero architecto. Est minima ea nam cumque. Reiciendis asperiores facere ullam possimus magnam, at animi inventore exercitationem!</p>

    </div>
</main>






<?php
incluirTemplate('footer');
?>


<script src="build/js/bundle.min.js"></script>
<!--Vinculacion con el modernizer-->
</body>

</html>