<?php
include "connect.php";

$dia = $_POST['dia'];
$horario = $_POST['horario'];

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