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

// exemplo do uso do ou:
// se (a maior do que b) ou (b igual a 3) então...
if ($a > $b || $b == 3)
{
	$a = $b;
}

echo $a, PHP_EOL;

?>