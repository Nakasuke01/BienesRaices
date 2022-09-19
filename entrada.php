<?php

require 'includes/funciones.php';


incluirTemplate('header');
?>

<main class="contenedor seccion contenido-centrado">
    <h2>Guia para la decoracion de tu hogar</h2>


    <picture>
        <source srcset="build/img/destacada2.webp" type="image/webp">
        <source srcset="build/img/destacada2.jpg" type="image/jpeg">
        <img loading="lazy" src="build/img/destacada2.jpg" alt="imagen de la propiedad">
    </picture>

    <div class="resumen-propiedad">
        <p class="informacion-meta">Escrito el: <span> 20/10/2021 </span> por: <span> Admin</span> </p>
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