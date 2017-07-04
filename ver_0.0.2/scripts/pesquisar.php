<?php
 // $exib = "este é um teste de include - OK";

if (isset($_GET['text_1'])){
	$exib = $_POST['text_1'];
		$test = ("location: https://www.google.com.br/#q=".$exib);
		die(var_dump($test));
	}else {
		header("location: 01_pg_web_JL_2017.php");
	}

if (!isset($_POST['link_1'])){
		$exib1 = $_POST['link_1'];
		header("location: https://www.google.com.br/#q=".$exib2);
	}

if (!isset($_POST['link_2'])){
		$exib2 = $_POST['link_2'];
		header("location: https://www.google.com.br/#q=".$exib2);
	 }