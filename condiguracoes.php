<?php
session_start(['login_turma']);

function db(): mysqli {
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "cadastro";

  // Crie uma conexão
  $conn = new mysqli($servername, $username, $password, $dbname);

  // Verifique a conexão
  if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
  }
  return $conn;
}

/**
 * @throws JsonException
 */
function echo_json($data = []) {
  echo json_encode($data, JSON_THROW_ON_ERROR);
  die();
}

function echo_dump($data = []) {
  echo '<pre>';
  echo var_dump($data);
  echo '</pre>';
  die();
}

function redirect($url) {
  header('location: ' . $url);
  die();
}

/**
 * Função para verificar se o email já está registrado na mesma turma.
 *
 * @param string $email
 * @param int $turma
 * @return bool
 */
function email_existe($email, $turma): bool {
  $conn = db();
  $query = "SELECT COUNT(*) FROM alunos WHERE email = ? AND turma = ?";
  $stmt = $conn->prepare($query);
  $stmt->bind_param("si", $email, $turma);  // "s" para string (email), "i" para inteiro (turma)
  $stmt->execute();
  $stmt->bind_result($count);
  $stmt->fetch();
  $stmt->close();
  return $count > 0;  // Retorna true se o email já estiver registrado para essa turma
}

/**
 * Função de cadastro de usuário.
 * Verifica se o email já está registrado antes de inserir um novo usuário.
 *
 * @param int $id
 * @param string $nome
 * @param string $email
 * @param int $turma
 * @param string $password
 */
function cadastrar_usuario($id, $nome, $email, $turma, $password) {
  // Verifica se o email já está cadastrado na mesma turma
  if (email_existe($email, $turma)) {
    // Retorna um erro se o email já estiver registrado
    echo_json(['error' => 'Já existe um cadastro com esse email para a turma especificada.']);
    return;
  }

  // Caso contrário, realiza o cadastro do novo usuário
  $conn = db();
  $query = "INSERT INTO alunos (id, nome, email, turma, password) VALUES (?, ?, ?, ?, ?)";
  $stmt = $conn->prepare($query);
  $stmt->bind_param("issis", $id, $nome, $email, $turma, $password);  // O "i" é para inteiros, "s" para strings
  $stmt->execute();
  $stmt->close();
  echo_json(['success' => 'Cadastro realizado com sucesso!']);
}
