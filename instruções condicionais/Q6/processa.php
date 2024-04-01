<?php

$num = $_POST['numero'];

if ($num > 20) {
    $metade = $num / 2;
    print "A metade do número é: " . $metade;
} else {
    print "O número não é maior que 20";
}

?>