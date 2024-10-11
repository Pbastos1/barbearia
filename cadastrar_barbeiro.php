<?php
include "connect.php";

$nomeDoUsuario = $_POST['nomeDoUsuario'];
$emailDoUsuario = $_POST['emailDoUsuario'];
$dataDeNascimento = $_POST['dataDeNascimento'];
$nomeDoBanco = $_POST['nomeDoBanco'];
$numeroDaAgencia = $_POST['numeroDaAgencia'];
$numeroDaConta = $_POST['numeroDaConta'];
$chavePix = $_POST['chavePix'];

$sql = "INSERT INTO usuarios (nome_usuario, data_de_nascimento, nome_banco, numero_agencia,	numero_conta, chave_pix, email, senha)
VALUES ('$nomeDoUsuario', '$dataDeNascimento', '$nomeDoBanco', '$numeroDaAgencia', '$numeroDaConta', '$chavePix', '$emailDoUsuario', '$senha')";

if (mysqli_query($conn, $sql)) {
    echo "Usuário(a) $nomeDoUsuario foi incluido no banco de dados";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

  $sql = 'select * from usuarios';
  $result = $conn->query($sql);

?>