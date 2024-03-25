<?php 

	$nome = "Thiago";
	$peso = 70.00;
	$altura = 1.80;

	function imc($peso, $altura){
		return($peso/($altura*$altura));
	}

	$calcimc = imc($peso, $altura);

 	$resultado = sprintf("Olá %s, seu IMC é: %.2f.", $nome, $calcimc);

 	echo $resultado;

 ?>