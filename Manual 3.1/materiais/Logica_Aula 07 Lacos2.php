<?php

// contador utiliado para controlar o laço
$contador = 0;

// enquanto contador menor do 10...
while ($contador < 10)
{

	// se o contador é par
	if ($contador % 2 == 0)
	{
		echo $contador, PHP_EOL; // EOL signfica end of line, na prática provoca uma quebra de linha
	}
	
	// incremente 1 ao valor de contador
	$contador = $contador + 1;
}

?>