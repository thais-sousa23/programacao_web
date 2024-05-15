<?php
    
    require_once '../../classes/categoria_sexo.php';
    require_once '../bd/BD.php';

    $bd = new BD();
    $sexo = $bd->selecionaTodos();

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo Os Sexos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
</head>

<body>
    <div style="margin-top: 50px; text-align: center;">
        <br>    
        <h1>Tabela de Categoria de Sexo</h1>
        <br>
    </div>
    <table class="table table-bordered border-dark" style="width: 80%; margin: 20px auto;">
        <tr>
            <th style="text-align: center;">ID sexo</th>
            <th style="text-align: center;">Gênero</th>
        <tr>
            <?php foreach ($sexo as $c) { ?>
        <tr>
            <th style="text-align: center;"><?php print $c->getIDsexo(); ?></th>
            <th style="text-align: center;"><?php print $c->getGenero(); ?></th>
        </tr>
    <?php } ?>
    </tr>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>