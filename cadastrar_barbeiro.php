<?php
include "connect.php";

echo'<pre>';
print_r($_POST)

$nome_usuario = $_POST['nomeDoUsuario'];
$email = $_POST['emailDoUsuario'];
$data_de_nascimento = $_POST['dataDeNascimento'];
$nome_banco = $_POST['nomeDoBanco'];
$numero_agencia = $_POST['numeroDaAgencia'];
$numero_conta = $_POST['numeroDaConta'];
$chave_pix = $_POST['chavePix'];

$sql = 
?>