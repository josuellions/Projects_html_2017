<?php 
	$data = "Data: ".date("d/m/Y H:i:s"."<br>\n");
	include "scripts/ler_arq.php";
?>
<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
	<title>	Exercicio Web - 2017</title>
</head>
<body >
			
 	<!-- Titulo Principal da Pagina #117799-->
	<h1> Pagina 01 - 2017 </h1>

 	<!-- Links para paginas color:#117799-->
	<ul>
		<li><a href="https://pt.wikipedia.org/wiki/Arquivo" name="link_1"> Arquivos</a></li>
		<li><a href="https://pt.wikipedia.org/wiki/Download_e_upload" name="link_2"> Downloads</a></li>
	</ul>

	<!-- Imagem de Fundo  -->
	<img src="img\voo1.jpg" bgproperties="fixed" />

	<!--  Texto principal -->
	<h2>Conteúdo da Página</h2>
	<p>Mussum Ipsum, cacilds vidis litro abertis. In elementis mé pra quem é amistosis quis leo. Praesent vel viverra nisi. Mauris aliquet nunc non turpis scelerisque, eget. Atirei o pau no gatis, per gatis num morreus. Cevadis im ampola pa arma uma pindureta.
	</p>
	<p>
	Nec orci ornare consequat. Praesent lacinia ultrices consectetur. Sed non ipsum felis. Aenean aliquam molestie leo, vitae iaculis nisl. Admodum accumsan disputationi eu sit. Vide electram sadipscing et per. Manduma pindureta quium dia nois paga.
	</p>
	<!-- Texto lido arquivo especifico -->
	<section>
		<label>Ler texto do arquivo:</label>
		<div >
			<?=ler_arq() ?>
		</div>
	</section>
	<!-- Entrada de dados -->
	<form method="POST" action="scripts/pesquisar.php" ">
		<label >Pesquisa:</label>
		<input type="text" name="text_1">
		<button type="submit" name="OK">Pesquisar</button>
	</form>

	<!-- Informaçôes autor -->
	<address >
		 Autor:	Josuel A. Lopes -
			Seven Developer Solutions -
			2017/06/29 
	</address>
</body>

<!-- Rodapé da pagina -->
<footer>
	<p><?= $data ?></p>
</footer>
	<link rel="stylesheet" type="text/css" href="css/styles.css">
</html>