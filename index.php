<?php
require "eventos.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Star Ingress</title>
</head>
<body>
        
    <header class="top">
                <h1 class="titulo"> Star <br>
                                    Ingress </h1>

    </header>

        <div class="DT">
            <hr  class="ponto" >
                <h3 class="dts"> Fique atento as datas e localização dos eventos </h3>    
            <hr  class="ponto" >
        </div>

    <div class="Destaque">
    
    <div class="one"> 

         <h2 class="Medio">Destaque</h2>
         <div class="lines"></div>

    </div>

        <img src="/Imagen/henrique.jpeg" alt="banner show">
    </div>
            
    <div class="Cinema">
        <h2 class="Medio">Cinema</h2>
        <div class="lines"></div>

        <?php foreach ( $evento as $eventos ) { ?>

         <h3> <?=$eventos['nome']?> </h3>
         <img src="<?=$eventos["imagem"]?>"  alt="Poster Evento" class="imagem">

        <div class="circulo"> </div>

         <p> <?=$eventos['data']?> </p>
         <p> <?=$eventos['tipo']?> </p>

         <a href="detalhamento.pho"> Detalhes </a>

         <?php } ?>
    </div>


    <div class="Show">
        <h2 class="Medio">Shows</h2>
        <div class="lines"></div>

   

        <h3> <?=$shows["nome"]?> </h3>
         <img src="<?=$eventos["imagem"]?>"  alt="Poster Evento" class="imagem" >

         <div class="circulo"> </div>

         <p> <?=$shows['data']?> </p>
         <p> <?=$shows['tipo']?> </p>

         <a href="detalhamento.pho"> Detalhes </a>

         

    </div>
                  


    <footer class="fundo">

              
    </footer>

</body>
</html>
