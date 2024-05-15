<?php

    require_once '../../classes/categoria_faixa.php';
    require_once '../bd/BD.php';

    $faixa = new Faixa(); 
    $faixa -> setCor($_POST['faixa']);
    $faixa -> setIDidade($_POST['idade']);

    $bd = new BD();
    $bd -> cadastra($faixa);
?>