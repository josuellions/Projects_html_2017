<?php
function ler_arq(){
	$lido = file('scripts/arq_test.txt');

	foreach ($lido as $key => $value) {
		# code...
		echo "<li>".$value."</li>";
	}
}