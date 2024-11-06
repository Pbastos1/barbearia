<?php
include "connect.php";
echo "<pre>";
print_r($_POST);

$dia = $_POST['dia'];
$idUsuario = $_POST['barbeiro'];
$inicio = strtotime($_POST['horario_inicio']);
$final = strtotime($_POST['horario_saida_intervalo']);
$mins = ($inicio - $final) / 60;

if($mins < 0)
    $mins = $mins*(-1);
//echo $mins;

$qnt_de_agendamento = $mins/30;

//echo "<br> qnt: $qnt_de_agendamento";
$acumulado = $inicio;

echo "<h1>Geração de agendamentos do primeiro horário!</h1>";
for($i = 0; $i < $qnt_de_agendamento; $i++){

    echo "\n Criado agendamento no horario para: " . date('H:i', $acumulado);
    $horario = date('H:i', $acumulado);
    $acumulado = $acumulado + 1800;
    $sql = "INSERT INTO agenda (id_usuario, dia, horario)
    VALUES ('$idUsuario', '$dia', '$horario')";

if (mysqli_query($conn, $sql)) {
  echo "";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

$sql = 'select * from agenda';
$result = $conn->query($sql);
}

$inicio = strtotime($_POST['horario_volta_intervalo']);
$final = strtotime($_POST['horario_fim']);
$mins = ($final - $inicio) / 60;

if($mins < 0)
    $mins = $mins*(-1);

$qnt_de_agendamentos = $mins/30;

$acumulado = $inicio;
echo "<h1>Geração de agendamentos do segundo horário!</h1>";
for($i = 0; $i < $qnt_de_agendamentos; $i++){
  echo "\n Criando agendamento no horário " . date('H:i', $acumulado);
  $horario = date('H:i', $acumulado);
  $acumulado = $acumulado + 1800;
$sql = "INSERT INTO agenda (id_usuario, dia, horario)
    VALUES ('$idUsuario', '$dia', '$horario')";

if (mysqli_query($conn, $sql)) {
  echo "";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

$sql = 'select * from agenda';
$result = $conn->query($sql);
}

?>