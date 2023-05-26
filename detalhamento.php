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
			    <h4> Local: <?=$c["local"]?></h4>
			    <p>Data: <?=$c["data"]?> </p>
			    <p>Preço: R$<?=$c["preco"]?> </p>
                <p>Horario: <?=$c["hora"]?> </p>
                <p>Tipo: <?=$c["tipo"]?> </p>
                <p>Nive: <?=$c["nivel"]?> </p>
                <p>descrição: <?=$c["descricao"]?> </p>
        <?php } ?>
		</div>

        <div class="desc">

            <h2 class="sinop">Sinopse/descrição</h2>
   
            <p class="text"> Lorem ipsum dolor sit amet. Ut sequi quasi id dolorem voluptas non
                exercitationem ducimus quo aspernatur temporibus! Id eveniet quam 33 dicta accusantium 
                sit nostrum magni quo ducimus galisum et voluptatem voluptas ex sunt dolore eos ullam 
                voluptatibus. Qui explicabo dignissimos At perferendis dignissimos aut laborum maiores
                etinventore quis ex enim dolore!
`               Et voluptatem dolor eos eaque repudiandae et facere doloribus ut eius eaque in velit velit.
                Vel consectetur facilis est dignissimos sunt ut veritatis autem in voluptas excepturi.
                Eum harum fugiat ut necessitatibus vero sit debitis accusamus quo ullam tempore ut quas quia. Rem accusamus
                earum ut nisi perspiciatis ut voluptatem numquam nam unde facilis eos temporibus quae. 
                Et eligendi voluptate ut culpa atque At alias fuga.</p>
        </div>
			
		
	</div>
    <footer class="fundo">  </footer>
</body>
</html>