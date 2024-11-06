<?php
include "connect.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Agendar Atendimento</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <h2>Agendamento</h2>
  <form action="listar_agendamento.php" method="post">
  <div class="mb-3 mt-3">
      <label class="form-check-label">Cliente:</label>
      <select class="form-select">
        <option value="">Selecione um Cliente</option>
        <?php
        $sql = 'select * from usuarios where id_grupo = 3';
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
          while($row = $result->fetch_assoc()) {
            echo "<option value=".$row['id_usuario'].">".$row['nome_usuario']."</option>";
          }
        }
        ?>
      </select> 
      <a href="paginadecadastro.php" class="btn btn-success" style="float: right;">+</a>
    </div>
    <div class="mb-3 mt-3">
                <label for="data">Data do Agendamento:</label>
                <input type="date" class="form-control" name="data">
            </div>
    <button type="submit" class="btn btn-primary">Agendar</button>
    <a href="index.php" class="btn btn-primary" style="float: right;">Voltar</a>
  </form>
</div>

</body>
</html>
