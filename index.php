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
         <h1 class="titulo"> Star <br> Ingress </h1>
    </header>

        <div class="DT">
            <hr  class="ponto" >
            
                <h3 class="dts"> Fique atento as datas e localização dos eventos </h3>    

            <hr  class="ponto" >
        </div>

    <div class="Destaque">

         <h2 class="Medio">Destaque</h2>
             <div class="lines"></div>
                 <img src="Imagen/banner-destaque-desktop.jpeg" alt="banner show" class="banner">

                 <a href="detalhamento2.php?i=4" class="new"> Detalhes</a>
</div>

                <h2 class="Medio">Cinema</h2>
                <div class="lines"></div>

    <div class="container">
    
     <div class="Cinema">

        <?php foreach ( $evento as $i => $c) { ?>

              
              <h3 class="nome"> <?=$c['nome']?> </h3> 
                <img src="<?=$c['imagem']?>"  alt="Poster Evento" class="imagem">

                 <div class="circulo"> </div> 

                 <p class="dados"> <?=$c['data']?> </p>
                 <p class="dados"> <?=$c['tipo']?> </p>

                <a class="link" href="detalhamento.php?i=<?=$i?>"> Detalhes </a> 

         <?php } ?>
    </div>
  
        </div>    
   
                 <h2 class="Medio">Shows</h2>
                 <div class="lines"></div>

        
    <div class="Show">
        <?php foreach ( $shows as $e => $s ) { ?>

                <h3 class="nome"> <?=$s["nome"]?> </h3> 
                 <img src="<?=$s["imagem"]?>"  alt="Poster Evento" class="imagem" >

          <div class="circulo"> </div> 

                 <p class="dados"> <?=$s['data']?> </p>
                 <p class="dados"> <?=$s['tipo']?> </p>

                 <a class="link" href="detalhamento2.php?i=<?=$e?>"> Detalhes </a>
         <?php } ?>
    </div>
                  


    <footer class="fundo">  </footer>



</body>
</html>

