<?php

    require_once '../../classes/inscricao.php';
    require_once '../bd/BD.php';

    $inscricao = new Inscricao();
    $inscricao -> setIDatleta($_POST['nome']);
    $inscricao -> setIDacademia($_POST['academia']); 
    $inscricao -> setIDfaixa($_POST['faixa']);
    $inscricao -> setIDpeso($_POST['peso']);
    $inscricao -> setIDsexo($_POST['sexo']);

    $bd = new BD();
    $bd -> cadastra($inscricao);
?>