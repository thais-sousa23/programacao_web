<?php

require_once '../../classes/academia.php';
require_once '../bd/BD.php';

$academia = new Academia();
$academia -> setNome($_POST['nome']);
$academia -> setCnpj($_POST['cnpj']);
$academia -> setEndereco($_POST['endereco']);
$academia -> setResponsavel($_POST['responsavel']);
$academia -> setTelefone($_POST['telefone']);

$bd = new BD();
$bd->cadastra($academia);
?>