<?php

    require_once '../../classes/campeonato.php';
    require_once '../bd/BD.php';

    $campeonato = new Campeonato();
    $campeonato -> setNome($_POST['nome']);
    $campeonato -> setLocal($_POST['local']);
    $campeonato -> setData($_POST['data']);
    $campeonato -> setOrganizador($_POST['organizador']);

    $bd = new BD();
    $bd->cadastra($campeonato);
?>