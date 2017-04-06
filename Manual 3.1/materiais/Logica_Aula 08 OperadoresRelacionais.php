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

// note que variáveis booleanas, quando false, imprime uma string vazia "" no console, há outras funções que podem ser utilizadas pra resultados distinto como a intval.

// testa se a e b são iguais guardando o resultado na variável "resultado"
$resultado = $a == $b;
echo "a == b = ";
echo resultado, PHP_EOL;

// testa se a e b são diferentes guardando o resultado na variável "resultado"
$resultado = $a != $b;
echo "a != b = ";
echo resultado, PHP_EOL;

// testa se a é maior ou igual a b guardando o resultado na variável "resultado"		
$resultado = $a >= $b;
echo "a >= b = ";
echo $resultado, PHP_EOL;

// testa se a é menor do que b guardando o resultado na variável "resultado"
$resultado = $a < $b;
echo "a < b = ";
echo $resultado, PHP_EOL;

// testa se a é menor ou igual a b guardando o resultado na variável "resultado"	
$resultado = $a <= $b;
echo "a <= b = ";
echo $resultado, PHP_EOL;

// expressão combinando diversos operadores
$resultado = ((($a * $b) - 10) % 3) < 2;
echo "(((a * b) - 10) % 3) < 2 = ";
echo $resultado, PHP_EOL;

//MOMENTO MATRIX: Fazendo um se em php com o operador ?

$s = ($a <= $b) ? "menor ou igual" : "maior";
echo "a <= b = ";
echo $s, PHP_EOL;

?>