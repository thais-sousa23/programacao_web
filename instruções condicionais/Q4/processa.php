<?php
$valor = $_POST['valor'];

switch ($valor) {
    case 1:
    case 10:
        print 'Alimentação!';
        break;

    case 11:
    case 20:
        print 'Limpeza!';
        break;

    case 21:
    case 30:
        print 'Eletrônicos!';
        break;
    default;
        print "Categoria inválida!";
}
