<html>
   <head>
      <title>IFPE-IFPE Instituto Federal de Pernambuco</title>
      <meta charset="UTF-8">
      <link rel="stylesheet" type="text/css" href="style1.css">
<function validaCampo()
{
if(document.cadastro.nome.value==""){
     alert("O Campo nome é obrigatorio!");
     return false;
   }
  else
    if(document.cadastro.curso.value==""){
      alert("O Campo nome do curso é obrigatorio!");
      return false;
  }
  else
    if(document.cadastro.matricula.value==""){
      alert("O Campo matricula é obrigatorio!");
      return false;
  }
  else
    if(document.cadastro.email.value==""){
      alert("O Campo email é obrigatorio!");
      return false;
  }
  else
    if(document.cadrasto.nascimento.value==""){
      alert("O campo nascimento é obrigatorio");
      return false;
    }
  else
    if(document.cadastro.endereco.value==""){
      alert("O Campo endereço é obrigatorio!");
      return false;
   }
  else
     if(document.cadastro.cidade.value==""){
      alert("O Campo Cidade é obrigatorio!");
      return false;
   }
  else
     if(document.cadastro.estado.value==""){
      alert("O Campo Estado é obrigatorio!");
      return false;
   }
  else
     if(document.cadastro.bairro.value==""){
      alert("O Campo Bairro é obrigatorio!");
      return false;
   }
  else
     if(document.cadastro.pais.value==""){
      alert("O Campo país é obrigatorio!");
      return false;
   }
  else
    if(document.cadastro.login.value==""){
      alert("O Campo Login é obrigatorio!");
      return false;
   }
  else   
    if(document.cadastro.senha.value==""){
      alert("Digite uma senha!");
      return false;
   }
else
    return true;
}
</script>
         
<body>
      <header class="topo">
         <div class= "menu">
            <ul>
               <li>IFPE</li>
               <h1 class ="portal" ><a  href="http://www.ifpe.edu.br" class ="link1">Instituto Federal  de Pernambuco</a></h1>
               <li>Campus Igarassu</li>
            </ul>
             <form  class="formulario" method="POST" action="cadastro.php" >
           <label>matrícula:</label><input type="text" name="matricula" id="matricula"><br>
          <label>Senha:</label><input type="password" name="senha" id="senha"><br>
         <input type="submit" value="Cadastrar" id="cadastrar" name="cadastrar"><br>
         <a href="formulario.php"  class ="link1">Cadastre-se</a>
          </form>
         </div>
        
         
         
        </header>
        
         <?php
include("menu.php");
?>

         
         

      <section>

      <section>
      <br>
      <br>

       <h1>Cadastro de Alunos</h1>
       <br>
       <br>
       <p>
       
<form id="cadastro" name="cadastro" method="post"  action="informacao_usuario.php"  onsubmit="return validaCampo(); return false;">
  <table class="cadastro" width="625" border="0">
    <tr>
      <td width="69">Nome:*</td>
      <td width="546"><input name="nome" type="text" id="nome" size="70" maxlength="60" />
        <span class="style1"></span></td>
    </tr>
    <tr>
      <td width="69">Nome do Curso:*</td>
      <td width="546"><input name="curso" type="text" id="curso" size="70" maxlength="60" />
        <span class="style1"></span></td>
    </tr>
    <tr>
      <td width="69">Matrícula:* </td>
        <td width="546"><input type="text" name="matricula" id="matricula" size="70" maxlength="60" />
          <span class="style1"></span></td>
        </td>
    </tr>
    <tr>
      <td>Email:*</td>
      <td><input name="email" type="text" id="email" size="70" maxlength="60" />
      <span class="style1"></span></td>
    </tr>
    <tr>
      <td align="right">Nascimento:*</td>
        <td>
          <input type="text" name="dia" size="2" maxlength="2">
            /
          <input type="text" name="mes" size="2" maxlength="2">
            /
          <input type="text" name="ano" size="4" maxlength="4">
          <span class="style1"></span></td>
        </td>
      </tr>
    <tr>
      <td>Sexo:</td>
      <td><input name="sexo" type="radio" value="Masculino" checked="checked" />
        Masculino 
        <input name="sexo" type="radio" value="Feminino" />
        Feminino <span class="style1"></span> </td>
    </tr>
    <tr>
      <td>DDD:</td>
      <td><input name="ddd" type="text" id="ddd" size="4" maxlength="2" />
      Telefone:
        <input name="telefone" type="text" id="telefone" />
        <span class="style3">Apenas numeros</span> </td>
    </tr>
    <tr>
      <td>Endereço:*</td>
      <td><input name="endereco" type="text" id="endereco" size="70" maxlength="70" />
        <span class="style1"></span></td>
    </tr>
    <tr>
      <td>Cidade:*</td>
      <td><input name="cidade" type="text" id="cidade" maxlength="20" />
        <span class="style1"></span></td>
    </tr>
    <tr>
      <td>Estado:*</td>
      <td><input name="estado" type="text" id="estado" maxlength="20" />
        <span class="style1"></span></td>
    </tr>    
      
    <tr>
      <td>Bairro:*</td>
      <td><input name="bairro" type="text" id="bairro" maxlength="20" />
        <span class="style1"></span></td>
    </tr>
    <tr>
    <td> País:*</td>
      <td><input name="pais" type="text" id="pais" maxlength="20" />
        <span class="style1"></span></td>
    </tr>
    <tr>
      <td>Login:*</td>
      <td><input name="login" type="text" id="login" maxlength="12" />
        <span class="style1"></span></td>
    </tr>
    <tr>
      <td>Senha:*</td>
      <td><input name="senha" type="password" id="senha" maxlength="12" />
          <span class="style1"></span></td>
    </tr>
    <td>Cidade:*</td>
    <td><input name="cidade" type="text" id="cidade" maxlength="20" />
        <span class="style1"></span></td>
      
    <tr>
      <td colspan="2"><p>
        <input name="cadastrar" type="submit" id="cadastrar" value="Concluir meu Cadastro!" /> 
        <br>
        <br>
          <input name="limpar" type="reset" id="limpar" value="Limpar Campos preenchidos!" />
          <br>
          <span class="style1">* Campos com * são obrigatorios!</span></p>
          </td>
    </tr>
  </table>
</form>
</p>
      </section>
      <?php
      include("rodape.php");
      ?>
   </body>
</html>

