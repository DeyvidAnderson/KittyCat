<?php

/*
 *
 * Instituto Federal de Educação, Ciência e Tecnologia - IFPE
 * Curso: Informática para Internet
 * Disciplina: Projeto e Prática II
 * Professor: Allan Lima - allan.lima@igarassu.ifpe.edu.br
 * 
 * Código de Domínio Público, sinta-se livre para usá-lo, modificá-lo e redistribuí-lo.
 *
 */

 
$contador = 0;

while ($contador < 10)
{
	if ($contador % 2 == 0) 
	{
		echo $contador.PHP_EOL;
	}
	
	$contador = $contador + 1;

}

?>