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

// Se o valor de a for
switch ($a) {
	// caso a = 1
	case 1:
		$resultado = "um";
		break;
	// caso a = 2
	case 2:
		$resultado = "dois";
		break;
	// caso a = 3
	default:
		$resultado = "outro numero";
		break;
}

// Imprime o valor da vari�vel resultado
echo "resultado = ", $resultado, PHP_EOL;

?>