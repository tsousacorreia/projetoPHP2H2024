<?php 

	$vetor = array();

	for ($i=0; $i < 10; $i++) { 
		$vetor[$i] = $i + 1;
	}

	foreach ($vetor as $valores) {
		echo $valores."<br/>";
	}

	echo "<br/><br/>";



	$nome = array('Maria', 'João', 'Pedro', 'Paulo', 'Lucas');

	echo 'Os nomes no array são:<br/>';

	foreach ($nome as $nomes) {
		echo '<br/>' .$nomes;
	}

	echo "<br/><br/>";



	$num = array(1, 2, 3, 4, 5);

	foreach ($num as $valor) {
		echo "Valor: $valor <br/>";
	}



	echo "<br/><br/>";

	$inicio = array_unshift($num, 0); //insere no inicio do vetor

	foreach ($num as $valor) {
		echo "Valor: $valor <br/>";
	}
	


	echo "<br/><br/>";

	$inicio = array_push($num, 6); //insere no final do vetor

	foreach ($num as $valor) {
		echo "Valor: $valor <br/>";
	}



	echo "<br/><br/>";	

	$inicio = array_shift($num); //exclui do inicio

	foreach ($num as $valor) {
		echo "Valor: $valor <br/>";
	}



	echo "<br/><br/>";	

	$inicio = array_pop($num); //exclui do final

	foreach ($num as $valor) {
		echo "Valor: $valor <br/>";
	}


	echo "<br/><br/>";

	$clubes = array("PAL" => "Palmeiras", "FLA" => "Flamengo", "ATM" => "Atlético Mineiro", "INT" => "Internacional");

	echo "O primeiro clube da lista é o ".$clubes['PAL']."<br/>";
	echo "O segundo clube da lista é o ".$clubes['FLA']."<br/>";
	echo "O terceiro clube da lista é o ".$clubes['ATM']."<br/>";
	echo "O quarto clube da lista é o ".$clubes['INT']."<br/>";


	echo "<br/><br/>";

	foreach ($clubes as $value) {
		echo $value."<br/>";
	}


	echo "<br/><br/>";

	if (is_array($clubes)) {
		echo " Clubes é um array";
	}else{
		echo "Clubes não é um array";
	}


	echo "<br/><br/>";

	if (array_key_exists("PAL", $clubes)) {
		echo "<br/>Clube encontrado no vetor através da chave informada.";
	}

 ?>