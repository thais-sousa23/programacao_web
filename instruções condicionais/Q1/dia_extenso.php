<?php
$d = $_POST["dia"];
switch ($d) {

    case 1:
        print "Segunda-Feira";
        break;
    case 2:
        print "Terça-Feira";
        break;
    case 3:
        print "Quarta-Feira";
        break;
    case 4:
        print "Quinta-Feira";
        break;
    case 5:
        print "Sexta-Feira";
        break;
    case 6:
        print "Sábado";
        break;
    case 7:
        print "Domingo";
        break;
    default;
        print "Dia Inválido";

    }
?>