<?php 

include("conexao.php");

$nome=$_POST['nome'];
$email = $_POST['email'];

$sql = "INSERT INTO usuarios(nome, email) VALUES ('$nome', '$email')";
if(mysqli_query($conexao, $sql)){
  echo "Usuário cadastrado com sucesso";
} else {
  echo "Erro".mysqli_connect_error($conexao);
};

mysqli_close($conexao);