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

// variáveis utilizadas durante o programa
$a = false;
$b = true;
$resultado;

// operador "NÃO"
resultado = !$a;
echo "!a= ", $resultado, PHP_EOL;

// operador "NÃO"
resultado = !$b;
echo "!b = ", $resultado, PHP_EOL;

// operador "E"
$resultado = $a && $b;
echo "a && b = ", $resultado, PHP_EOL;

// operador "OU"
resultado = $a || $b;
echo "a || b = ", $resultado, PHP_EOL;

?>