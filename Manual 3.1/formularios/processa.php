<?php
include_once("conecta.php");

$nome = $_POST['nome'];
$data_de_nascimento = $_POST['data_de_nascimento'];
$matricula = $_POST['matricula']; 
$email = $_POST['email']; 
$senha = $_POST['senha']; 

$resultado_usuario="INSERT INTO user(nome,data_de_nascimento,matricula,email,senha) VALUES ('$nome','$data_de_nascimento','$matricula','$email','$senha')";
$resultado_usuario= mysqli_query($conexao, $resultado_usuario);

include("formulario.php");

?>