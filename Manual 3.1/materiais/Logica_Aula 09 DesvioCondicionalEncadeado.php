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
$b = 2;

// se a maior do que b
if ($a > $b) {
	// a recebe o valor de b
	$a = $b;		
	// se a igual a 3
	if ($a == 3) {
		// a recebe zero
		$a = 0;
	}
}

// imprime o valor de a
echo "a = ", $a, PHP_EOL;

?>