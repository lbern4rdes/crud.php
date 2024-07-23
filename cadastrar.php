<?php 
include_once "conexao.php";

try {
  $nome = filter_var($_POST['nome']);
  $cpf = filter_var($_POST['cpf']);
  $telefone = filter_var($_POST['telefone']);

  $insert = $conectar->prepare("INSERT INTO usuario (nome, cpf, telefone) VALUES (:nome, :cpf, :telefone)");
  $insert->bindParam(':nome', $nome);
  $insert->bindParam(':cpf', $cpf);
  $insert->bindParam(':telefone', $telefone);
  $insert->execute();

  header("location: index.php");
} catch(PDOException $e) {
  echo 'Erro ' . $e->getMessage();
}
?>