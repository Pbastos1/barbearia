<?php
include "connect.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Cadastrar Agenda do Barbeiro</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <h2>Cadastro da Agenda do Barbeiro</h2>
  <form action="cadastrar_agenda.php" method="post">
  <div class="mb-3">
      <label class="form-check-label">Barbeiro:</label>
      <select class="form-select" name="barbeiro" id="barbeiro">
        <option value="">Selecione um Barbeiro</option>
        <?php
         $sql = 'select * from usuarios where id_grupo = 2';
         $result = $conn->query($sql);
         if ($result->num_rows > 0) {
           while($row = $result->fetch_assoc()) {
             echo "<option value=".$row['id_usuario'].">".$row['nome_usuario']."</option>";
           }
         }
        ?>
      </select>
    </div>
    <div class="mb-3 mt-3">
      <label class="form-check-label">Dia da Semana:</label>
      <select name="dia" id="dia" class="form-select">
        <option name="dia" value="">Selecione um Dia</option>
        <option name="dia" value="0">Domingo</option>
        <option name="dia" value="1">Segunda-Feira</option>
        <option name="dia" value="2">Terça-Feira</option>
        <option name="dia" value="3">Quarta-Feira</option>
        <option name="dia" value="4">Quinta-Feira</option>
        <option name="dia" value="5">Sexta-Feira</option>
        <option name="dia" value="6">Sábado</option>
      </select>
    </div>
    <div class="mb-3 mt-3">
      <label for="horario_inicio">Horário Início:</label>
      <input type="time" class="form-control" name="horario_inicio" id="horario_inicio">
    </div>
    <div class="mb-3 mt-3"">
      <label for="horario_saida_intervalo">Horário Saída Intervalo:</label>
      <input type="time" class="form-control" name="horario_saida_intervalo" id="horario_saida_intervalo">
    </div>
    <div class="mb-3 mt-3"">
      <label for="horario_volta_intervalo">Horário Volta Intervalo:</label>
      <input type="time" class="form-control" name="horario_volta_intervalo" id="horario_volta_intervalo">
    </div>
    <div class="mb-3 mt-3"">
      <label for="horario_fim">Horário Fim:</label>
      <input type="time" class="form-control" name="horario_fim" id="horario_fim">
    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
  </form>
</div>

</body>
</html>
