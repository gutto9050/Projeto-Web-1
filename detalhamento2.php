<?php
require "Eventos.php";

if(!isset($_GET["i"])){
    header("location: index.php");
    die;
}

$indice = $_GET["i"];

  if(isset($shows[$indice])){
        $s = $shows[$indice];
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
        <?php if(isset($s)){ ?>
			    <img src="<?=$s["imagem"]?>" alt="<?=$s["nome"]?>"  class="img2">
            <div class="para">
			    <h3 class="paragrafo" ><?=$s["nome"]?></h3>
			    <h4 class="paragrafo" >Local: <?=$s["local"]?></h4>
			    <p class="paragrafo" >Data: <?=$s["data"]?> </p>
			    <p class="paragrafo" >Preço: R$<?=$s["preco"]?> </p>
                <p class="paragrafo" >Horario: <?=$s["hora"]?> </p>
                <p class="paragrafo" >Tipo: <?=$s["tipo"]?> </p>
                <p class="paragrafo" >Nivel: <?=$s["nivel"]?> </p>
            </div>
            
	
	</div>
    <hr>
    <div class="desc">

        <h2 class="sinop">Sinopse/descrição</h2>

        <p class="text" > <?=$c["descricao"]?> </p>
        <?php } ?>
    </div>

    <footer class="fundo">  </footer>

</body>
</html>