<?php
include "connect.php";

$nomeDoUsuario = $_POST['nomeDoUsuario'];
$emailDoUsuario = $_POST['emailDoUsuario'];
$dataDeNascimento = $_POST['dataDeNascimento'];
$senha = $_POST['senha'];
$id_grupo = $_POST['id_grupo'];

$sql = "INSERT INTO usuarios (nome_usuario, data_de_nascimento, email, senha, id_grupo)
VALUES ('$nomeDoUsuario', '$dataDeNascimento', '$emailDoUsuario', '$senha', '$id_grupo')";

if (mysqli_query($conn, $sql)) {
    echo "Usuário(a) $nomeDoUsuario foi incluido no banco de dados.";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

  $idUsuario = mysqli_insert_id($conn);

  $sql = 'select * from usuarios';
  $result = $conn->query($sql);


$nomeDoBanco = $_POST['nomeDoBanco'];
$numeroDaAgencia = $_POST['numeroDaAgencia'];
$numeroDaConta = $_POST['numeroDaConta'];
$chavePix = $_POST['chavePix'];

$sql = "INSERT INTO dado_bancario (id_usuario, nome_do_banco, numero_agencia, numero_conta, chave_pix)
    VALUES ('$idUsuario', '$nomeDoBanco', '$numeroDaAgencia', '$numeroDaConta', '$chavePix')";

if (mysqli_query($conn, $sql)) {
  echo " Os dados foram incluidos no banco de dados.";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

$sql = 'select * from dado_bancario';
$result = $conn->query($sql);

?>