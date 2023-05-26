<?php
require "Eventos.php";

if(!isset($_GET["i"])){
    header("location: index.php");
    die;
}

$indice = $_GET["i"];



if(isset($evento[$indice])){
    $c = $evento[$indice];
}



?>






<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>Eventos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="top">    

            <a href="index.php"> <img src="Imagen/seta.png" alt="voltar" class="seta"> </a>
         <h1 class="titulo"> Star <br> Ingress </h1>
    </header>


	<div class="container-detalhe">
		
		
		<div class="card">

        <?php if(isset($c)){ ?>
            <div>
			<div class="none">    <img src="<?=$c["imagem"]?>" alt="<?=$c["nome"]?>"  class="img2"> </div>
            <div class="para">
			    <h3 class="paragrafo" ><?=$c["nome"]?></h3>
			    <h4 class="paragrafo"> Local: <?=$c["local"]?></h4>
			    <p class="paragrafo" >Data: <?=$c["data"]?> </p>
			    <p class="paragrafo" >Preço: R$<?=$c["preco"]?> </p>
                <p class="paragrafo" >Horario: <?=$c["hora"]?> </p>
                <p class="paragrafo" >Tipo: <?=$c["tipo"]?> </p>
                <p class="paragrafo" >Nive: <?=$c["nivel"]?> </p>
</div>
             </div>
        
		</div>
 
        <hr>
        <div class="desc">

            <h2 class="sinop">Sinopse/descrição</h2>

            <p class="text" > <?=$c["descricao"]?> </p>
            <?php } ?>
            
        </div>
			
		
	</div>
    <footer class="fundo">  </footer>
</body>
</html>