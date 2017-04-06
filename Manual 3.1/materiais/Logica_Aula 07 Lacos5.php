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

$i = 0;

// enquanto i menor do que 10
while ($i < 10)
{

	$j = 0;

	// equanto j menor do 10
	while ($j < 10)
	{
		// imprime A
		echo "A ";
		
		// incrementa j
		$j++;
	}

	// pula uma linha
	echo PHP_EOL;
	
	//incrementa i
	$i++;
}

?>