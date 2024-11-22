<?php
require_once 'condiguracoes.php';
$msg = '';
if (isset($_POST['login'])) {

  // Recupere os dados inseridos pelo usuário
  $turma = $_POST['turma'];
  $username = $_POST['email'];
  $password = ($_POST['senha']);

  // Consulta SQL para verificar se os dados de login correspondem aos dados no banco de dados
  $sql = "SELECT * FROM `alunos` WHERE `email` = '$username' AND `password` = '$password' AND `turma` = '$turma'";
  $result = db()->query($sql);
  // Verifique se há resultados e se o login foi bem-sucedido
  if ($result->num_rows > 0) {

    $_SESSION['usuario'] = $result->fetch_assoc();
    // Login bem-sucedido, redirecione o usuário para a página inicial, por exemplo
    header('Location: home.php');
    exit();
  } else {
    // Login falhou, exiba uma mensagem de erro, por exemplo
    $msg = "Login falhou. Verifique seu nome de usuário e senha.";
  }
}
if(!empty($_SESSION['usuario']['id'])){
  header('Location: home.php');
  die();
}
// Feche a conexão
db()->close();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Faça o login | MemóriasTDS</title>
  <link rel="stylesheet" href="style.css">
  <link rel="icon" href="/img/LOGO303T.png">
  <link rel="stylsheet" href="style2.css">
  <style>
    body{
      background-image: url(img/backgroundOFC.png);
      background-size: cover;
      background-attachment: fixed;
    }
    .container3 {
      min-height: 24vh;
      justify-content: center;
      align-items: center;
      display: flex;
      text-align: center;
    }

    .container3 div > p span {
      color: red;
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
  </style>
</head>
<body>
<header>
  <img src="/img/logoterceirao3.png" alt="memorias" class="logo">
</header>
<div class="container">
  <h2>Login</h2>
  <form action="?login" method="post">
    <label for="text">Turma</label>
    <input type="text" id="turma" name="turma" required placeholder="Digite sua turma">
    <label for="email">Email:</label>
    <input type="text" id="email" name="email" required placeholder="Digite seu email">
    <label for="senha">Senha:</label>
    <input type="password" id="senha" name="senha" required placeholder="Digite sua senha">

    <div class="form-mensagem"><?= $msg ?? '' ?></div>
    <div class="container3">
      <div>
        <button type="submit" name="login" value="Login" class="log" style="margin-bottom: 10px">Login</button>
        <button onclick="window.location.href='cadastro.php'" class="reg">Cadastrar</button>
      </div>
    </div>
</div>
<script>
  // Adiciona um evento de clique ao botão de login
  document.getElementById('log').addEventListener('click', function () {
    // Redireciona para a página home.php
    window.location.href = 'home.php';
  });

  // Adiciona um evento de clique ao botão de registro
  document.getElementById('registerBtn').addEventListener('click', function () {
    // Redireciona para a página home.php
    window.location.href = 'cadastro.php';
  });
</script>

</body>
</html>
