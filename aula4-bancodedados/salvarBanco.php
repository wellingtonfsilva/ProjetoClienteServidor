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


$database->insert('moradores', ['nome_morador'=> $_POST['nome_morador'],
                                'cpf'=> $_POST['cpf'],
                                'endereco'=> $_POST['endereco'],
                                'telefone'=> $_POST['telefone'],
                                'cidade'=> $_POST['cidade'],
                                'bairro'=> $_POST['bairro'],
                                'senha'=> $_POST['senha'],
                            ]);

    
//var_dump($_GET);
//var_dump($_POST);
echo "<script>alert('Cadastro realizado com sucesso!'); window.location.href='index.html';</script>";



