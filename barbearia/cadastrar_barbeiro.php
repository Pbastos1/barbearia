<?php
include "connect.php";

$nomeDoUsuario = $_POST['nomeDoUsuario'];
$emailDoUsuario = $_POST['emailDoUsuario'];
$dataDeNascimento = $_POST['dataDeNascimento'];
$nomeDoBanco = $_POST['nomeDoBanco'];
$numeroDaAgencia = $_POST['numeroDaAgencia'];
$numeroDaConta = $_POST['numeroDaConta'];
$chavePix = $_POST['chavePix'];

$sql = "INSERT INTO cadastro_usuario (nome_usuario, data_de_nascimento, nome_banco, numero_agencia,	numero_conta, chave_pix, email)
VALUES ('$nomeDoUsuario', '$dataDeNascimento', '$nomeDoBanco', '$numeroDaAgencia', '$numeroDaConta', '$chavePix', '$emailDoUsuario')";

if (mysqli_query($conn, $sql)) {
    echo "Usuário(a) $nomeDoUsuario foi incluido no banco de dados";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

  $sql = 'select * from cadastro_usuario';
  $result = $conn->query($sql);
                // $conn->close();

?>

                <!DOCTYPE html>
                <html lang="pt-br">
                <head>
                <title>Usuários Cadastrados</title>
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
                </head>
                <body>
    
                <div class="container mt-3">
                <h6>Usuários Cadastrados:</h6>            
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Data de Nascimento</th>
                        <th>Nome do Banco</th>
                        <th>Número da Agência</th>
                        <th>Número da Conta</th>
                        <th>Chave Pix</th>
                        <th>Email</th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php
                    
                            if ($result->num_rows > 0) {
                                // output data of each row
                                while($row = $result->fetch_assoc()) {
                                echo "<tr><td>".$row['id']."</td><td>".$row['nome_usuario']."</td><td>".$row['data_de_nascimento']."</td><td>".$row['nome_banco']."</td><td>".$row['numero_agencia']."</td><td>".$row['numero_conta']."</td><td>".$row['chave_pix']."</td><td>".$row['email']."</td></tr>";
                                }
                            }
                        ?>
                    </tbody>
                </table>
                </div>
    
                </body>
                </html>
            