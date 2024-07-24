<?php
  include_once "conexao.php";

    $id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
    $consulta = $conectar->query("SELECT * FROM usuario where id = '$id'");
    $linha = $consulta->fetch(PDO::FETCH_ASSOC);
?>

  <form action="editar.php" method="post">
    Nome: <input type="text" name="nome" value="<?php echo $linha['nome'] ?>" id="nome"/><br>
    CPF: <input type="text" name="cpf" value="<?php echo $linha['cpf'] ?>" id="cpf"/><br>
    TELEFONE: <input type="text" name="telefone" value="<?php echo $linha['telefone'] ?>" id="telefone"/><br>
    <input type="hidden" name="id" value="<?php echo $linha['id']?>">
    <input type="submit" value="Editar">
  </form>