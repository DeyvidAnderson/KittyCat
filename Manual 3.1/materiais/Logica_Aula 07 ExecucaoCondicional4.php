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

$a = 20;

// se a maior é multiplo de 5
if ($a % 5 == 0)
{
	echo "a eh multiplo 5";

	// se a maior é multiplo de 10
	if ($a % 10 == 0)
	{
		echo " e de 10";
	}
}

?>