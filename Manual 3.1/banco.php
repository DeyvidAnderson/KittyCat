
<html>
   <head>
      <title>IFPE-IFPE Instituto Federal de Pernambuco</title>
      <meta charset="UTF-8">
      <link rel="stylesheet" type="text/css" href="style1.css">
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
include("menu.php");
?>
      <section>
         <h1>Banco de Dados</h1>
         <table class="conteudos_disciplinas" border="1"  >
            <tr>
               <th> Componente Curricular:Banco de Dados </th>
               <th>Professor(a): Milton</th>
            </tr>
            <tr>
               <th>Período: 2º </th>
               <th>Carga Horária: 60h</th>
            </tr>
            <tr>
               <th colspan="2" id="celula1">Competências</th>
            </tr>
            <td colspan="2" id="celula1">1. Identificar componentes de um Sistema de Banco de Dados e conhecer os principais itens a
               serem analisados na modelagem e gerenciamento de dados.
               <br>
               2. Elaborar modelos conceituais e dados. Elaborar modelos relacionais de dados.
               <br>
               3. Conhecer os comandos da sublinguagem de consulta SQL (Structureuery Language).
               <br>
               4. Elaborar aplicações utilizando recursos de um SGBD relacional.
            </td>
            <br>
            <tr>
               <th colspan="2" id="celula1">CONTEÚDOS PROGRAMÁTICOS</th>
            </tr>
            <tr>
               <td colspan="2" id="celula1">
                  1. Conceito de Banco de Dados e Componentes de um Sistemas 
                  <br>
                  2. Banco de Dados Dados
                  <br>
                  3. Usuários
                  <br>
                  4. Hardware
                  <br>
                  5. Sistemas Gerenciadores de Banco de Dados (SGBD’s)
                  <br>
                  6. Redundância e Inconsistência de dados.
                  <br>
                  7. Segurança e integridade de Banco de Dados.
                  <br>
                  8. Modelo Entidade e Relacionamento
                  <br>
                  9. Implementação do Modelo Relacional
                  <br>
                  10. SQL (Structure Query Language)
                  <br>
                  11. SGBD Relacional
               </td>
            </tr>
            <tr>
               <th colspan="2" id="celula1">BIBLIOGRAFIA BÁSICA</th>
            </tr>
            <tr>
               <td colspan="2"  id="celula1">1. DATE, C. J. Introdução a sistemas de banco de dados. 8. ed. Rio de Janeiro: Campus, 2004.
                  <br>
                  2. ELMASRI, Ramez, NAVATHE, Shamkant; Sistemas de Banco de Dados. 4. ed, São Paulo; Ed.
                  Addison-Wesley, 2005.
                  <br>
                  3. HEUSER. C. A. Projeto de banco de dados. 6. ed., Porto Alegre: Bookman, 2009.
               </td>
            </tr>
            <tr>
               <th colspan="2"  id="celula1">BIBLIOGRAFIA COMPLEMENTAR</th>
            </tr>
            <tr>
               <td colspan="2" id="celula1">
                  1. GILLENSON, Mark L. Fundamentos de sistemas de gerência de banco de dados. São Paulo:
                  LTC, 2006.
                  <br>
                  2. GONZAGA, Jorge Luiz. Dominando o PostgreSQL. Rio de Janeiro: Ciência Moderna, 2007.
                  <br>
                  3. HEUSER, Carlos Alberto. Projeto de Banco de Dados. 6 ed. Porto Alegre: Artmed, 2008.
                  <br>
                  4. Korth Henry; SILBERSCHATZ, Abraham; SUDARSCHAN, S. Sistema de Bancos de Dados. 5.
                  ed. São Paulo: Makron Books, 2006.
               </td>
            </tr>
         </table>
      </section>
     <?php
  include("rodape.php");
  ?>
   </body>
</html>

