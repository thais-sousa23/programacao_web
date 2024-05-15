<?php

    require_once '../../classes/categoria_sexo.php';
    require_once '../bd/BD.php';

    $sexo = new Sexo();
    $sexo -> setGenero($_POST['sexo']);

    $bd = new BD();
    $bd -> cadastra($sexo);
?>