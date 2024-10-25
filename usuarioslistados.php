<?php
include "connect.php";
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
                        <th>Email</th>
                        <th>Senha</th>
                        <th>Grupo</th>
                        <th>Nome do Banco</th>
                        <th>Número da Agência</th>
                        <th>Número da Conta</th>
                        <th>Chave Pix</th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = 'select * from usuarios';
                        $result = $conn->query($sql);
                    
                            if ($result->num_rows > 0) {
                                // output data of each row
                                while($row = $result->fetch_assoc()) {
                                echo "<tr><td>".$row['id_usuario']."</td><td>"
                                .$row['nome_usuario']."</td><td>"
                                .$row['data_de_nascimento']."</td><td>"
                                .$row['email']."</td><td>"
                                .$row['senha']."</td><td>"
                                .$row['id_grupo']."</td>";
                                }
                            }
                        $sql = 'select * from dado_bancario';
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0){
                            while($row = $result->fetch_assoc()){
                        echo "<td>".$row['nome_banco']."</td><td>"
                            .$row['numero_agencia']."</td><td>"
                            .$row['numero_conta']."</td><td>"
                            .$row['chave_pix']."</td><td>"
                            .$row['id_usuario']."</td></tr>";
                            }
                        }
                        ?>
                    </tbody>
                </table>
                </div>
    
                </body>
                </html>