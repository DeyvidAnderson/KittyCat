<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="./css/style1.css">
</head>
<body>
<header class="topo">
 <div class= "menu">
  <ul>
   <li>IFPE</li>
    <h1 class ="portal" ><a  href="http://www.ifpe.edu.br" class ="link1">Instituto Federal  de Pernambuco</a></h1>
    <li>Campus Igarassu</li>
  </ul>
  <form  id="formulario" method="POST" action="cadastro.php" >
    <label>Matrícula:</label><input type="text" name="matricula" id="matricula"><br>
    <label>Senha:</label><input type="password" name="senha" id="senha"><br>
    <input type="submit" value="Entrar" id="entrar" name="entrar"><br>
    <a href="./formularios/formulario.php"  class ="link1">Cadastre-se</a>
  </form>
 </div> 
         
</header>
            
<div id="opcoes">

 <ul>
  <li><a href='index.php'>Inicio</a></li>
  <li><a href='tutoriais.php'>Tutoriais</a></li>
  <li><a href='wiki.php'>Mediawiki</a></li>
 </ul>
</div>

</body>
</html>