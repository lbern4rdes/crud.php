<?php 
include_once "conexao.php";

try {
  $id = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);
  $nome = filter_var($_POST['nome']);
  $cpf = filter_var($_POST['cpf']);
  $telefone = filter_var($_POST['telefone']);

  $update = $conectar->prepare("UPDATE usuario SET nome= :nome, cpf= :cpf, telefone= :telefone WHERE id = :id");
  $update->bindParam(':id', $id);
  $update->bindParam(':nome', $nome);
  $update->bindParam(':cpf', $cpf);
  $update->bindParam(':telefone', $telefone);
  $update->execute();

  header("location: index.php");
} catch(PDOException $e) {
  echo 'Erro ' . $e->getMessage();
}
?>