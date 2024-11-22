<?php 
require_once 'condiguracoes.php';

if (isset($_POST['cadastrar'])) {

  // Recupere os dados inseridos pelo usuário
  $name = trim($_POST['nome']);
  $username = trim($_POST['email']);
  $turma = trim($_POST['turma']);
  $password = ($_POST['senha']);

  // Verificar se o email já existe para a turma
  if (email_existe($username, $turma)) {
    // Se o email já existir, exibe mensagem de erro
    echo "<script>alert('Já existe um cadastro com esse email para a turma especificada.');</script>";
  } else {
    // Caso contrário, realiza o cadastro no banco de dados
    $sql = "INSERT INTO alunos (nome, email, turma, password) VALUES ('$name', '$username', '$turma', '$password')";
    $result = db()->query($sql);

    // Verifique se o cadastro foi bem-sucedido
    if ($result) {
      // Cadastro bem-sucedido, redirecione o usuário para a página inicial
      header('Location: index.php');
      exit();
    } else {
      // Caso o cadastro falhe, exibe mensagem de erro
      echo "<script>alert('Cadastro falhou. Tente novamente.');</script>";
    }
  }
}

// Feche a conexão
db()->close();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Faça o cadastro | MemóriasTDS</title>
  <link rel="stylesheet" href="stylecad.css">
  <link rel="stylesheet" href="style.css">
  <link rel="icon" href="/img/LOGO303T.png">
  <style>
    body{
      background-image: url(img/backgroundOFC.png);
      background-size: cover;
      background-attachment: fixed;
    }
    p {
      position: relative;
      top: 30px;
    }

    p a {
      color: black;
      text-decoration: none;
    }

    button {
      cursor: pointer;
      border: 0;
      border-radius: 4px;
      font-weight: 600;
      margin: 0 10px;
      width: 200px;
      padding: 10px 0;
      box-shadow: 0 0 20px rgba(104, 85, 224, 0.2);
      transition: 0.4s;
    }

    .reg {
      color: rgb(104, 85, 224);
      background-color: rgba(255, 255, 255, 1);
      border: 1px solid rgba(104, 85, 224, 1);
    }

    .log {
      color: rgb(104, 85, 224);
      background-color: rgba(255, 255, 255, 1);
      border: 1px solid rgba(104, 85, 224, 1);
    }

    button:hover {
      color: white;
      width: 250px;
      box-shadow: 0 0 20px rgba(104, 85, 224, 0.6);
      background-color: rgba(104, 85, 224, 1);
    }
    .container3 {
    display: flex;
    flex-direction: column; /* Coloca os botões em coluna */
    align-items: center; /* Centraliza os itens horizontalmente */
    margin-top: 20px; /* Espaço acima dos botões */
}

.container3 button {
    margin: 5px 0; /* Espaço entre os botões */
}
  </style>
  
</head>
<body>
<header>
  <img src="/img/logoterceirao3.png" alt="memorias" class="logo">
</header>
<div class="container">
  <h2>Cadastro</h2>
  <!-- Página de Cadastro -->
  <form action="" method="POST">
    <label for="nome">Nome:</label>
    <input type="text" id="nome" name="nome" alt="nome" required placeholder="Digite seu nome completo">
    
    <label for="turma">Turma:</label>
    <input type="text" id="turma" name="turma" required placeholder="Digite sua turma">
    
    <label for="email">Email:</label>
    <input type="text" id="email" name="email" required placeholder="Digite seu email">
    
    <label for="senha">Senha:</label>
    <input type="password" id="senha" name="senha" required placeholder="Digite sua senha">

    <div class="container3">
        <button type="submit" name="cadastrar" class="log">Cadastrar</button>
        <button onclick="window.location.href='index.php'" class="reg">Voltar ao login</button>
    </div>
</form>

</body>

</html>
