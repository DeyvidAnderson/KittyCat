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
$b = 2;

// se a maior do que b
if ($a > $b) {
	// a recebe o valor de b
	$a = $b;
	
// caso contr�rio
} else {
	// a igual a 0
	$a = 0;
}

// imprime o valor de a
echo "a = ", $a, PHP_EOL;

?>