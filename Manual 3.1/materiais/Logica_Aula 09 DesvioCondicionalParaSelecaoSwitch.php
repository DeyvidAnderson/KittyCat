<?php

/**
 *
 * Instituto Federal de Educação, Ciência e Tecnologia - IFPE
 * Curso: Informática para Internet
 * Disciplina: Lógica de Programação e Estrutura de Dados
 * Professor: Allan Lima - allan.lima@igarassu.ifpe.edu.br
 * 
 * Código de Domínio Público, sinta-se livre para usá-lo, modificá-lo e redistribuí-lo.
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

// Imprime o valor da variável resultado
echo "resultado = ", $resultado, PHP_EOL;

?>