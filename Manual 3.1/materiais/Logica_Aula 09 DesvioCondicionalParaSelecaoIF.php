<?php

/**
 *
 * Instituto Federal de Educa��o, Ci�ncia e Tecnologia - IFPE
 * Curso: Inform�tica para Internet
 * Disciplina: L�gica de Programa��o e Estrutura de Dados
 * Professor: Allan Lima - allan.lima@igarassu.ifpe.edu.br
 * 
 * C�digo de Dom�nio P�blico, sinta-se livre para us�-lo, modific�-lo e redistribu�-lo.
 *
 */
 
$a = 5;

// se a igual a 1
if ($a == 1) {
	$resultado = "um";
// caso contr�rio, se a igual a 2
} else if ($a == 2) {
	$resultado = "dois";
// caso contr�rio
} else {
	$resultado = "outro numero";
}

echo "resultado = ", $resultado, PHP_EOL;

?>