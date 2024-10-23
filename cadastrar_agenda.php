<?php
include "connect.php";

$dia = $_POST['dia'];
$horario_inicio = $_POST['horario_inicio'];
$horario_saida_intervalo = $_POST['horario_saida_intervalo'];
$horario_volta_intervalo = $_POST['horario_volta_intervalo'];
$horario_fim = $_POST['horario_fim'];

$tempo =
$start = strtotime($horario_inicio);
$end = strtotime($horario_saida_intervalo);
$mins = ($end - $start) / 60;
echo $mins;

$qnt_de_agendamentos = $mins/30;

echo "<br>qnt: $qnt_de_agendamentos";
$acumulado = $start;

for($i = 0; $i < $qnt_de_agendamentos; $i++){
  echo "\n Criando agendamento no horário " . date('H:i', $acumulado);
  $acumulado = $acumulado + 1800;
}

$start = strtotime($horario_volta_intervalo);
$end = strtotime($horario_fim);
$mins = ($end - $start) / 60;
echo $mins;

$qnt_de_agendamentos = $mins/30;

echo "<br>qnt: $qnt_de_agendamentos";
$acumulado = $start;

for($i = 0; $i < $qnt_de_agendamentos; $i++){
  echo "\n Criando agendamento no horário " . date('H:i', $acumulado);
  $acumulado = $acumulado + 1800;
}

$horario = $tempo;

$idUsuario = mysqli_insert_id($conn);

  $sql = 'select * from usuarios';
  $result = $conn->query($sql);

$sql = "INSERT INTO agenda (id_usuario, dia, horario)
    VALUES ('$idUsuario', '$dia', '$horario')";

if (mysqli_query($conn, $sql)) {
  echo " Os dados foram incluidos no banco de dados.";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

$sql = 'select * from agenda';
$result = $conn->query($sql);

?>