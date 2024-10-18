  <!DOCTYPE html>
<html lang="en">
<head>
  <title>Ficha de Cadastro Usuário</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <style>
    .esc{
      display: none;
    }
  </style>
</head>
<body>
  

<div class="container mt-3">
  <h2>Ficha de Cadastro de Usuário</h2>
  <div class="mb-3 mt-3" id='group'>
    <label class="form-check-label">Grupo do Usuário:</label>
    <select class="form-select" id="grupo">
        <option>Selecione um Grupo</option>
        <option value="adm" id="1" name="grupo">Admin</option>
        <option value="barbeiro" id="2" name="grupo">Barbeiro</option>
        <option value="cliente" id="3" name="grupo">Cliente</option>
      </select>
      <button onclick="info()" class="btn btn-success" id='botao'>Confirmar</button>
    </div>
  <form action="cadastrar_barbeiro.php" method='post'>
    
    <div class="mb-3 mt-3">
      <label for="nomeDoUsuario">Nome do Usuário:</label>
      <input id="nomeDoUsuario" name="nomeDoUsuario" class="form-control" value="" type="text">
    </div>
    <div class="mb-3 mt-3">
        <label for="emailDoUsuario">Email:</label>
        <input id="emailDoUsuario" name="emailDoUsuario" class="form-control" value="" type="email">
      </div>
    <div class="mb-3 mt-3" id='data'>
        <label for="dataDeNascimento">Data de Nascimento:</label>
        <input id="dataDeNascimento" name="dataDeNascimento" class="form-control" value="" type="date">
      </div>
      <div class="mb-3 mt-3" id='banco'>
        <label for="nomeDoBanco">Nome do Banco:</label>
        <select class="form-select" id="grupo">
        <option>Selecione um Banco</option>
        </select>
      </div>
      <div class="mb-3 mt-3" id='agencia'>
        <label for="numeroDaAgencia">Número da Agência:</label>
        <input id="numeroDaAgencia" name="numeroDaAgencia" class="form-control" value="">
      </div>
      <div class="mb-3 mt-3" id='conta'>
        <label for="numeroDaConta">Número da Conta:</label>
        <input id="numeroDaConta" name="numeroDaConta" class="form-control" value="">
      </div>
      <div class="mb-3 mt-3" id='pix'>
        <label for="chavePix">Chave Pix:</label>
        <input id="chavePix" name="chavePix" class="form-control" value="">
      </div>
      <div class="mb-3 mt-3">
        <label for="senha">Senha</label>
        <input type="password" id="senha" name="senha" class="form-control" value="">
      </div>
      <div class="mb-3 mt-3 esc">
        <label for="id_grupo">Grupo</label>
        <input id="id_grupo" name="id_grupo" class="form-control" value="">
      </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
  </form>
</div>
<script>
  function info(){
    let grupo = document.getElementById("grupo").value;
    switch(grupo){
      case "adm":
        document.getElementById("banco").className = "esc";
        document.getElementById("conta").className = "esc";
        document.getElementById("agencia").className = "esc";
        document.getElementById("pix").className = "esc";
        document.getElementById("botao").className = "esc";
        document.getElementById("group").className = "esc";
        document.getElementById("id_grupo").value = "1";
        alert("O usuário é Admin");
        break;
      case "barbeiro":
        document.getElementById("group").className = "esc";
        document.getElementById("id_grupo").value = "2";
        alert("O usuário é Barbeiro");
        break;
      case "cliente":
        document.getElementById("banco").className = "esc";
        document.getElementById("conta").className = "esc";
        document.getElementById("agencia").className = "esc";
        document.getElementById("pix").className = "esc";
        document.getElementById("botao").className = "esc";
        document.getElementById("group").className = "esc";
        document.getElementById("id_grupo").value = "3";
        alert("O usuário é Cliente");
        break;
      default:
        alert("Opção inválida");
    }
  }

</script>

</body>
</html>