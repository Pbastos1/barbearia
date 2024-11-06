<?php
include "connect.php";

$dias_da_semana = ['Domingo', 'Segunda-feira', 'Terça-feira', 'Quarta-feira', 'Quinta-feira', 'Sexta-feira', 'Sábado'];

$dayofweek = date('w', strtotime($_POST['data']));
$data_agendamento = $_POST['data'];

// echo "<br><br><br><br>dia da semana agendamento: " . $dayofweek;

$sql = "SELECT * FROM agenda inner join usuarios on usuarios.id_usuario = agenda.id_barbeiro
where dia = $dayofweek
";

$sql = "
select usuarios.nome_usuario, agenda.dia, agenda.horario from agenda 
INNER join usuarios on usuarios.id_usuario = agenda.id_barbeiro
where agenda.id_agenda not in (SELECT agenda.id_agenda FROM `agenda` inner join agendamento on agendamento.id_agenda = agenda.id_agenda
inner join usuarios on usuarios.id_usuario = agenda.id_barbeiro where agendamento.data = '$data_agendamento' and agenda.dia = $dayofweek)
and dia = $dayofweek
";
$result = $conn->query($sql);

// echo "<pre>";
// print_r([
//     'agendamento' => $_POST,
//     'result' => $result,
// ]);

// SELECT * FROM `agenda` inner join agendamento on agendamento.id_agenda = agenda.id_agenda
// inner join usuarios on usuarios.id_usuario = agenda.id_usuario

?>



<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>


    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <div class="container-fluid">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" href="index.html">Início</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="lista_de_usuarios.php">Lista de usuários</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Disabled</a>
                </li>
            </ul>
        </div>
    </nav>

<div class="container mt-3">
  <h2>Lista de usuários</h2> 
  <h2>Agendamento disponíveis para o dia: <?php echo $_POST['data']; ?></h2>          
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Barbeiro</th>
        <th>Dia da Semana</th>
        <th>Horário</th>
        <th>Ações</th>
      </tr>
    </thead>
    <tbody>
      <?php
      
        if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
          echo "
            <tr>
                <td>".$row['nome_usuario']."</td>
                <td>".$dias_da_semana[$row['dia']]."</td>
                <td>".$row['horario']."</td>
                <td><a href='cadastrar_agendamento.php' class='btn btn-primary'>Agendar</a></td>
            </tr>";
        }
    }
      ?>
    </tbody>
  </table>
</div>

</body>
</html>