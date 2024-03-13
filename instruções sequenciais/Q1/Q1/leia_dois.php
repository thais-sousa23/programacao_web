<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $valor1 = $_POST["primeiro"];
    $valor2 = $_POST["segundo"];

    
    if (is_numeric($valor1) && is_numeric($valor2)) {
       
        $media = ($valor1 + $valor2) / 2;

        
        print "A média aritmética de $valor1 e $valor2 é: $media";
    } else {
        
        print "Por favor, digite valores numéricos.";
    }
}
?>
