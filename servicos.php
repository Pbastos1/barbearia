<!DOCTYPE html>
<html lang="en">
<head>
  <title>Cadastrar Serviços</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <h2>Ficha de Cadastro de Serviços</h2>
  <form action="cadastrar_servico.php" method='post'>
  <div class="mb-3 mt-3">
      <label class="form-check-label">Serviço:</label>
      <input type="text" class="form-control" id="servico" placeholder="Digite um Servico" name="servico">
    </div>
    <div class="mb-3 mt-3">
      <label class="form-check-label">Valor:</label>
      <input type="text" class="form-control" id="valor" placeholder="Digite um Valor" name="valor">
    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
  </form>
</div>

</body>
</html>