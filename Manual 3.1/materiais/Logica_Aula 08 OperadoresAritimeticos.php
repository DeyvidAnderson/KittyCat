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

$a = 10;
$b = 5;

// soma as variáveis a e b guardando o resultado na variável "resultado"
$resultado = $a + $b;
echo "a + b = ";
echo $resultado, PHP_EOL;

// subtrai a de b guardando o resultado na variável "resultado"
$resultado = $a - $b;
echo "a - b = ";
echo $resultado, PHP_EOL;

// multiplica as variáveis a e b guardando o resultado na variável "resultado"
$resultado = $a * $b;
echo "a * b = ";
echo $resultado, PHP_EOL;

// divide a por b guardando o resultado na variável "resultado"
$resultado = $a / $b;
echo "a / b = ";
echo $resultado, PHP_EOL;

// computa o resto da divisão inteira de a por b guardando o resultado na variável "resultado"
$resultado = $a % $b;
echo "a % b = ";
echo $resultado, PHP_EOL;

// expressão combinando vários operadores
$resultado = (($a + $b) - 10) % 4;
echo "((a + b) - 10) % 4 = ";
echo $resultado, PHP_EOL;

?>