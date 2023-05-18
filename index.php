
<?php 
        require "Eventos.php";
                
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
        
    <header>
                <h1> Star Ingress </h1>

    </header>

    <div class="Destaque">
        <h2>Destaque</h2>
    </div>
            
    <div class="Cinema">
        <h2>Cinemas</h2>

        <?php foreach ( $evento as $eventos ) { ?>

         <h3> <?=$eventos["nome"]?> </h3>
         <img src="<?=$eventos["imagem"]?>"  alt="Poster Evento">

         <p> <?=$eventos['data']?> </p>
         <p> <?=$eventos['tipo']?> </p>

         <a href="detalhamento.pho"> Detalhes </a>

         <?php } ?>
    </div>


    <div class="Show">
        <h2>Shows</h2>

   

        <h3> <?=$shows["nome"]?> </h3>
         <img src="<?=$eventos["imagem"]?>"  alt="Poster Evento">

         <p> <?=$shows['data']?> </p>
         <p> <?=$shows['tipo']?> </p>

         <a href="detalhamento.pho"> Detalhes </a>

         

    </div>
                  


    <footer>


    </footer>

</body>
</html>