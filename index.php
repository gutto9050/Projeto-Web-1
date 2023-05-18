<?php
require "eventos.php";

    ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingresso</title>
</head>
<body>
        
    <?php 
        include "Eventos.php";
                
        foreach ( $evento as $eventos ) { ?>

                <h1> <?=$eventos["nome"]?> </h1>

                <img src="<?=$eventos["imagem"]?>"  alt="Poster Evento">

              
                <p> <?=$eventos['local']?> </p>
                <p> <?=$eventos['data']?> </p>
                <p> <?=$eventos['hora']?> </p>
                <p> <?=$eventos['preco']?> </p>
                <p> <?=$eventos['tipo']?> </p>
                <p> <?=$eventos['nivel']?> </p>

                <p> <?=$eventos['descricao']?> </p>






    <?php } ?>

</body>
</html>
