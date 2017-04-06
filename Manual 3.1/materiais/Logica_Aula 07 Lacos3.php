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

// acumula o resultado a ser impresso
$a = 0;

// de contador = 1 até 10...
for ($contador = 0; $contador < 10; $contador++) {
	// incremente 5 ao valor de a
	$a = $a + 5;
}

// imprime o valor de a
echo "Valor final de a: ", $a;

?>