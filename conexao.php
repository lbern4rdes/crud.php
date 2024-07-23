<?php 
  try {
    // Faz conexão com o banco de dados
    $conectar = new PDO("mysql:host=localhost;port=3306;dbname=pdo;", "root", "");
    // echo 'Conectou com sucesso';
  } catch (PDOException $e) {

    //caso ocorra erro de conexão com o banco exibe a mensagem

    echo 'Falha ao conectar com o banco de dados' . $e->getMessage();
  }

?>