<?php 

	$num1 = 33;
	$num2 = 22;
	$num3 = 12;
	$num4 = 333;
	$num5 = 21;
	$num6 = 1;

	$numeros = array($num1, $num2, $num3, $num4, $num5, $num6);
	rsort($numeros);

	$dec = count($numeros);
	for ($i=0; $i < $dec; $i++) { 
		echo $numeros[$i];
		echo "<br>";
	}

 ?>