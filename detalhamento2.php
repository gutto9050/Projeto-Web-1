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
    <header>
        <h1>Detalhes</h1>
    </header>
	<div class="container-detalhe">
		
		
		<div class="card">
        <?php if(isset($s)){ ?>
			    <img src="<?=$s["imagem"]?>" alt="<?=$s["nome"]?>">
			    <h3><?=$s["nome"]?></h3>
			    <h4><?=$s["local"]?></h4>
			    <p><?=$s["data"]?> </p>
			    <p><?=$s["preco"]?> </p>
                <p><?=$s["hora"]?> </p>
                <p><?=$s["tipo"]?> </p>
                <p><?=$s["nivel"]?> </p>
            
        <?php } ?>

			<a href="index.php" class="link">Voltar</a>
       
		</div>
			
		
	</div>

</body>
</html>