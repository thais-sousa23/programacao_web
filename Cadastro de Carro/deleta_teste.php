<?php

    $id = $_POST['id'];
    $bd = mysqli_connect("localhost", "root", "", "aula7");
    $sql = "DELETE FROM carro WHERE  id = $id";
    print $sql;
    mysqli_query($bd, $sql);
    mysqli_close($bd);

?>