<?php 
	$data = "Data: ".date("d/m/Y H:i:s"."<br>\n");
	include "scripts/ler_arq.php";
?>
<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
<head>
	<title>	Exercicio Web - 2017</title>
</head>
	<body style="width: 100%; margin: 0">
		<div style="font-family: sans-serif; ">
		
			<!-- Imagem de Fundo  -->
		 	<div>
				<img src="img\voo1.jpg" bgproperties="fixed" style="background-repeat: no-repeat; align-items: center; margin-top: 0%; width: 100%; max-height: 960px; " />
			</div>
		 	
		 	<!-- Titulo Principal da Pagina #117799-->
	 		<div style="font: arial; font-size: 1.9rem; text-align-last: center; margin-top: -51%; color: #117799;" >
	 			<h1 > Pagina 01 - 2017 </h1>
	 		</div>

		 	<!-- Links para paginas color:#117799-->
			<div  style="margin-top: 2%; margin-left: 1%;" >
			 	<div style="color: orange; font-size: 1.5rem; ">
			 		<ul>
						<li><a href="https://pt.wikipedia.org/wiki/Arquivo" name="link_1"> Arquivos</a></li>
			 			<li><a href="https://pt.wikipedia.org/wiki/Download_e_upload" name="link_2"> Downloads</a></li>
					</ul>
				</div>

				<!--  Texto principal -->
				<div style="font-size:2.9rem; text-align-last: center; border-bottom-style: 10px; margin-bottom: 4%; margin-top: -5%; color:  rgb(102, 255, 255);"">
					<p>Conteúdo da Página</p>
					<div style="font-size:1.5rem; text-align-last: justify; width: 50%; margin-left: 25%;  font-style: bold; color: rgb(255, 255, 153);">
						<p>Mussum Ipsum, cacilds vidis litro abertis. In elementis mé pra quem é amistosis quis leo. Praesent vel viverra nisi. Mauris aliquet nunc non turpis scelerisque, eget. Atirei o pau no gatis, per gatis num morreus. Cevadis im ampola pa arma uma pindureta.
						</p>
						<p>
						Nec orci ornare consequat. Praesent lacinia ultrices consectetur. Sed non ipsum felis. Aenean aliquam molestie leo, vitae iaculis nisl. Admodum accumsan disputationi eu sit. Vide electram sadipscing et per. Manduma pindureta quium dia nois paga.
						</p>
					</div>
				</div>

				<!-- Texto diversos -->
				<div style="margin: 1%; font-size: 1.7rem; color: rgb(102, 255, 255); ">
					<label>Ler texto do arquivo:</font></label>
					<div style="margin-left: 2%; font-size: 1.5rem; color: rgb(255, 153, 51)">
						<p><?=ler_arq() ?></p>
					</div>
				</div>

				<!-- Entrada de dados -->
				<form method="POST" action="scripts/pesquisar.php" style="margin-top: 5%;">
					<div style="margin: 1%">
						<div style="font-size: 1.7rem; color: rgb(255, 255, 255); ">
							</label >Pesquisa:<label>
						</div>
						<input type="text" name="text_1" style="width: 20%; padding: 0.5rem">
						<button type="submit" name="OK" style="padding-color:darkblue; padding: 0.5rem">Pesquisar</button>
					</div>
				</form>

				<!-- Informaçôes autor -->
				<address style="font-size: 1.2rem; margin: 1%; margin-top: 5%; color: rgb(255, 255, 255)">
					 Autor:	Josuel A. Lopes -
						Seven Developer Solutions -
						2017/06/29 
				</address>
			</div>
		</div>
	</body>
	<!-- Rodapé da pagina -->
	<footer  >
		<div style="text-align-last: right; font-size: 1.5rem; margin-right: 3%; margin-top: -5%; color:skyblue">
			<p><?= $data ?></p>
		</div>
	</footer>
</html>