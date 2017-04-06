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

// variável do tipo ponto flutuante (real)
$f = 120.33;

// variável do tipo texto (string)
$s = "Instituto Federal de Educação, Ciência e Tecnologia";

// variável do tipo boolean
$b = true;

// imprimindo um float na tela
echo "f = ", $f, PHP_EOL;

// imprimindo um texto na tela
echo "s = ", $s, PHP_EOL;

// imprimindo um boolean na tela
echo "b = ", $b, PHP_EOL;

// também é possível concatenar strings com o operador .
$c = "IFPE - ".$s;
echo "c = ", $c, PHP_EOL;

// forma alternativas
$c = "IFPE - $s";
echo "c = ", $c, PHP_EOL;


?>