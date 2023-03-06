<?php

require_once __DIR__ . '/vendor/autoload.php';

use Medoo\Medoo;
 
// Connect the database.
$database = new Medoo([
    'type' => 'mysql',
    'host' => 'localhost',
    'database' => 'Moradores',
    'username' => 'root',
    'password' => ''
]);

$data = $database->select('moradores', ['id','nome_morador','cpf','endereco','telefone','cidade','bairro','senha']);

?>
<!DOCTYPE html>
<html>
<head>
    <title>Dados dos Moradores</title>
    <!-- Adiciona os arquivos CSS do Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Dados dos Moradores</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nome</th>
                    <th>CPF</th>
                    <th>Endereço</th>
                    <th>Telefone</th>
                    <th>Cidade</th>
                    <th>Bairro</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data as $row) : ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['nome_morador']; ?></td>
                    <td><?php echo $row['cpf']; ?></td>
                    <td><?php echo $row['endereco']; ?></td>
                    <td><?php echo $row['telefone']; ?></td>
                    <td><?php echo $row['cidade']; ?></td>
                    <td><?php echo $row['bairro']; ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <!-- Adiciona os arquivos JavaScript do Bootstrap -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>
