<?php

    require_once '../../classes/categoria_idade.php';
    require_once '../bd/BD.php';

    $idade = new Idade();
    $idade -> setNome($_POST['categoria']);
    $idade -> setIdadeMinima($_POST['idadeMin']);
    $idade -> setIdadeMaxima($_POST['idadeMax']);

    $bd = new BD();
    $bd->cadastra($idade);
?>