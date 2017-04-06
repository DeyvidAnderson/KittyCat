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

// contador utiliado para controlar o laço
$contador = 0;

// enquanto contador menor do 10...
while ($contador < 10) {
	// incremente 5 ao valor de a
	$a = $a + 5;
	// incremente 1 ao valor de contador
	$contador = $contador + 1;
}

// imprime o valor de a
echo "Valor final de a: ", $a;

?>