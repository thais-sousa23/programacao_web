<?php

    require_once '../../classes/categoria_peso.php';
    require_once '../bd/BD.php';

    $peso = new Peso();
    $peso -> setNome($_POST['nome']);
    $peso -> setPesoMaximo($_POST['peso']);
    $peso -> setIDsexo($_POST['sexo']);
    $peso -> setIDidade($_POST['idade']);

    $bd = new BD();
    $bd->cadastra($peso);
?>