


<?php
$menu_Inicio = "<a href='index.php'>Inicio</a>";
$menu_Tutoriais = "<a href='tutoriais.php'>Tutoriais</a>";
$menu_MATERIAIS="<a href ='#'>Materiais de Aulas</a>";
$menu_PRIMEIRO="<a href ='primeiro.php'>1° Perído</a>";
$menu_SEGUNDO="<a href ='segundo.php'>2° Período</a>";
$menu_TERCEIRO="<a href ='terceiro.php'>3° Período</a>";

$menu_pesquisar = "<a href='pesquisar.php'>Pesquisar</a>";

$mostra_menus = "<div id='opcoes'><ul>
  
<li>$menu_Inicio</li>
		<li>$menu_Tutoriais</li>
	  		<li>$menu_MATERIAIS
	  		<ul>
	         	  <li>$menu_PRIMEIRO</li>
	                 <li>$menu_SEGUNDO</li>
	                 <li>$menu_TERCEIRO</li>  
	                 </li>                 
	       		</ul>
			
		               





                    </div>";
				
				print $mostra_menus;

?>
