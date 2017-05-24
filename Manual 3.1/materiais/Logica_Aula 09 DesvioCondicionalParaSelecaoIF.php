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

// se a igual a 1
if ($a == 1) {
	$resultado = "um";
// caso contrário, se a igual a 2
} else if ($a == 2) {
	$resultado = "dois";
// caso contrário
} else {
	$resultado = "outro numero";
}

echo "resultado = ", $resultado, PHP_EOL;

?>