<?php
    
    require_once '../../classes/atleta.php';
    require_once '../bd/BD.php';

    $atleta = new atleta();
    $atleta ->setEmail($_POST['email']);
    $atleta ->setSenha($_POST['senha']);
    
    $bd = new BD();
    $foiAuteticado = $bd->autentica($atleta);

    if ($foiAuteticado)
        print "Usuário autenticado com sucesso!!!";
    else
        print "Usuário ou senha inválido!!!";
?>