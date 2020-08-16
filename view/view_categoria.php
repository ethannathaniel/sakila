<?php
$pagina = "CATEGORY";
    include_once "sections/section_head.php";

    include_once "sections/section_menu.php";

    include_once "../statics/php/conexion_db.php";

    $actor = "SELECT * FROM actor";
?>

<div class="container-table">
    <div class="table__title">Datos de tabla actor Sakila</div>
    <div class="table__header">ID</div>
    <div class="table__header">Nombre</div>
    <div class="table__header">Apellido</div>
    <?php $resultado = mysqli_query($conexion, $actor);
    
    while($row = mysqli_fetch_assoc($resultado)) { ?>
    <div class="table__item"><?php echo $row["actor_id"];?></div>
    <div class="table__item"><?php echo $row["first_name"];?></div>
    <div class="table__item"><?php echo $row["last_name"];?></div>
    <?php }; mysqli_free_result($resultado);?>
</div>