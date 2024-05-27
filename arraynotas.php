<?php 
	
	$alunos = array();
	$nomes = ['Maria', 'João', 'Carlos', 'José', 'Julia', 'Silvia', 'Eduardo', 'Daniela', 'Miguel', 'Bianca'];
	$notas = [6.5, 7.0, 3.5, 10, 9.5, 8.0, 10, 9.0, 6.5, 9.5];
	$cont = 0.0;
	$soma = 0.0;
	$media = 0.0;

	for ($i=0; $i < 10; $i++) { 
		$alunos[$nomes[$i]] = $notas[$i];
		$cont++;
		$soma += $notas[$i];
	}

	$media = $soma / $cont;



	foreach ($alunos as $nome => $nota) {
		echo "Aluno: $nome, Nota: $nota</br>";
	}

	echo $media;

 ?>
