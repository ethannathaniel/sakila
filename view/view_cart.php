<?php
$pagina = "CART";
include_once "sections/section_head.php";

include_once "sections/section_menu.php";

?>


<div class="container_add">
    <h2 class="container__title">Registrar Actor</h2>
    <form action="../statics/php/insert.php" method="post" class="container__form">
        <label for="" class="container__label">Nombre:</label>
        <input name="nombre" type="text" class="container__input">
        <label for="" class="container__label">Apellido:</label>
        <input name="apellido" type="text" class="container__input">
        <input class="container__boton" type="submit" value="Registrar">
    </form>
</div>