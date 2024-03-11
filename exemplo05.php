<?php 

	$nome = "Thiago";

	function exibir(){
		$nome = "Elaine";

		echo "Valor da variável dentro da função: " . $nome . "<br />";
	}

	exibir();

	echo "<br />Valor da variável fora da função: " . $nome;

 ?>