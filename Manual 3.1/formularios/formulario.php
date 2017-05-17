<!DOCTYPE html>
<html>
<head>
	<title>cadastro</title>
	<link rel="stylesheet" type="text/css" href="../css/style2.css">
	<link rel="stylesheet" type="text/css" href="../css/style1.css">
</head>
<body>
<header class="topo">
         <div class= "menu">
            <ul>
               <li>IFPE</li>
               <h1 class ="portal" ><a  href="http://www.ifpe.edu.br" class ="link1">Instituto Federal  de Pernambuco</a></h1>
               <li>Campus Igarassu</li>
            </ul>
         </div>
</header>
        
  <?php
    include("../menu.php");
   ?>
<section>
<br>
<br>
  <h2 align="center" id="cadastro">Cadastro de Alunos</h2>

   <form action="processa.php" method="POST">
     <label>Nome:<input type="text" name="nome" id="nome" placeholder="Nome"></label><br>
     <label>Data de Nascimento:<input type="date" name="data_de_nascimento" id="data_de_nascimento" placeholder="Data de nascimento"></label><br>
     <label>Matrícula:<input type="text" name="matricula" id="matricula" placeholder="Matrícula"></label><br>
     <label>E-mail:<input type="email" name="email" id="email" placeholder="E-mail"></label><br>
     <label>Senha:<input type="password" name="senha" id="senha" placeholder="Senha"></label><br>
     <input type="submit" name="cadastrar" value="Cadastrar">
	
    </form>
</section>    
<?php
   include("../rodape.php");
?>

</body>
</html>