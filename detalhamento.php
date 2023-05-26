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
			    <img src="<?=$c["imagem"]?>" alt="<?=$c["nome"]?>">
			    <h3><?=$c["nome"]?></h3>
			    <h4><?=$c["local"]?></h4>
			    <p><?=$c["data"]?> </p>
			    <p><?=$c["preco"]?> </p>
                <p><?=$c["hora"]?> </p>
                <p><?=$c["tipo"]?> </p>
                <p><?=$c["nivel"]?> </p>
                <p><?=$c["descricao"]?> </p>
        <?php } ?>

			<a href="index.php" class="link">Voltar</a>
       
		</div>
			
		
	</div>
    <footer class="fundo">  </footer>
</body>
</html>