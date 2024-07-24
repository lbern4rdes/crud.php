<?php
include_once "conexao.php";

try {
  //execução da instrução
  $consulta = $conectar->query("SELECT * FROM usuario");

  echo "<a href = 'formCadastro.php'>Novo Cadastro<a/><br><br>Listagem de Usuários";
  echo "<table border='1'><tr><td>ID</td><td>NOME</td><td>CPF</td><td>TELEFONE</td><td>Ações</td></tr>";

  while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {

    echo "<tr><td>$linha[id]</td><td>$linha[nome]</td><td>$linha[cpf]</td><td>$linha[telefone]</td><td><a href='formEditar.php?id=$linha[id]'>Editar</a> - <a href='Excluir.php?id=$linha[id]'>Excluir</a></td></tr>";
  }

  echo "</table>";
  echo $consulta->rowCount() . " Registros Exibidos";
} catch(PDOException $e) {
    echo $e->getMessage();
}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tabela de usuários</title>
</head>
<body>
  <table border='1'>
    <tr> 
      <td>ID</td>
      <td>NOME</td>
      <td>CPF</td>
      <td>TELEFONE</td>
      <td>Ações</td>
    </tr>
    
    <?php while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) { var_dump($linha); ?>
    vard
    <tr> 
      <td>ID</td>
      <td><?= $linha["nome"];?></td>
      <td>CPF</td>
      <td>TELEFONE</td>
      <td>Ações</td>
    </tr>
    <?php }?>
  </table>
</body>
</html>