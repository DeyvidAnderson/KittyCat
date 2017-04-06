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


// Um subprograma realiza uma operação específica e pode
// ser reutilizado várias vezes no código
function somar($a, $b) {
	return $a + $b;
}

// exemplo de chamada do subprograma somar
$resultado = somar(10, 15);
echo $resultado, PHP_EOL;

$resultado = somar(5, 3);
echo $resultado, PHP_EOL;

$resultado = somar(-10, 10);
echo $resultado, PHP_EOL;

?>