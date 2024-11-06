<?php
include "connect.php";

$servico = $_POST['servico'];
$valor = $_POST['valor'];

$sql = "INSERT INTO servicos (servico, valor)
VALUES ('$servico', '$valor')";

if (mysqli_query($conn, $sql)) {
    echo "Novo Serviço incluído com sucesso";
} else {
    echo "Error: ". $sql. "<br>". mysqli_error($conn);
}

$sql = 'select * from servicos';
  $result = $conn->query($sql);

?>