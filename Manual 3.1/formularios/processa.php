<?php
 $dbName = 'cadastro';
 $host = 'localhost';
 $user = 'root';
 $dsn = "mysql:dbname=$dbName;host=$host";
 $pdo = new PDO($dsn, $user);
$nome = $_POST['nome'];
$data_de_nascimento = $_POST['data_de_nascimento'];
$matricula = $_POST['matricula']; 
$email = $_POST['email']; 
$senha = password_hash($_POST['senha'],PASSWORD_DEFAULT);
$ret = $pdo->query("INSERT INTO user(nome,data_de_nascimento,matricula,email,senha) VALUES ('$nome','$data_de_nascimento','$matricula','$email','$senha')");
include("./formulario.php");

?>