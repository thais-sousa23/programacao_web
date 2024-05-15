<?php
    
    require_once '../../classes/atleta.php';
    require_once '../bd/BD.php';

    $atleta = new atleta();
    $atleta ->setNome($_POST['nome']);
    $atleta ->setTelefone($_POST['telefone']);
    $atleta ->setdataNascimento($_POST['dataNascimento']);
    $atleta ->setEmail($_POST['email']);
    $atleta ->setSenha($_POST['senha']);
    $atleta ->setIDsexo($_POST['sexo']);
    $atleta ->setIDacademia($_POST['academia']);

    $bd = new BD();
    $bd->cadastra($atleta);

?>