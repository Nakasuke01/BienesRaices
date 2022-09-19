<?php

require 'includes/funciones.php';


incluirTemplate('header');
?>

<main class="contenedor seccion">
    <h2>Contacto</h2>

    <picture>
        <source srcset="build/img/destacada3.webp" type="image/webp">
        <source srcset="build/img/destacada3.jpg" type="image/jpeg">
        <img src="build/img/destacada3.jpg" alt="Imagen de Contacto" loading="lazy">

    </picture>

    <h2>Llene el formulario del contacto</h2>
    <form action="" class="formulario">
        <fieldset>
            <legend>Informacion Personal</legend>

            <label for="nombre">Nombre</label>
            <input type="text" placeholder="Tu Nombre" id="nombre">

            <label for="email">Email</label>
            <input type="email" placeholder="Tu Email" id="email">

            <label for="telefono">Telefono</label>
            <input type="tel" placeholder="Tu Telefono" id="telefono">

            <label for="mensaje">Mensaje</label>
            <textarea id="mensaje"></textarea>

        </fieldset>

        <fieldset>
            <legend>Información sobre la propiedad</legend>

            <label for="opciones">Vende o Compra:</label>
            <select name="" id="opciones">
                <option value="" disabled selected>---Selecciona---</option>

                <option value="compra">Compra</option>
                <option value="vende">Vende</option>

            </select>

            <label for="presupuesto">Precio o Presupuesto</label>
            <input type="number" placeholder="Tu Precio o Presupuesto" id="presupuesto">
        </fieldset>

        <fieldset>
            <legend>Información sobre la propiedad</legend>

            <p>Como desea ser Contactado</p>
            <div class="forma-contacto">
                <label for="contactar-telefono">Telefono</label>
                <input type="radio" value="telefono" id="contactar-telefono" name="contacto">

                <label for="contactar-telefono">E-MAIL</label>
                <input name="contacto" type="radio" value="email" id="contactar-email">
            </div>
            <p>Si eligió telefono, elija la fecha y hora para ser contactado</p>

            <label for="fecha">Fecha: </label>
            <input type="date" id="telefono">

            <label for="date">Hora: </label>
            <input type="time" id="hora" min="09:00 max=" 18000">


        </fieldset>

        <input type="submit" value="enviar" class="boton-verde">

    </form>


</main>


<?php
incluirTemplate('footer');
?>


<script src="build/js/bundle.min.js"></script>
<!--Vinculacion con el modernizer-->

</body>

</html>