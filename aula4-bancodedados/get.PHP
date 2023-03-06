<?php
 
$nome = '';
 
if (isset($nome) && empty($nome) == false) {
    echo $nome;
}
 
function retornarEnderecoFormatado($nome_morador, $cpf,$endereco,$telefone, $cidade, $bairro, $senha)
{
    return 'Nome : ' . $nome_morador .'Cpf'.$cpf.'Endereço :'.$endereco.'Telefone :'.$telefone.' Cidade '.$cidade. '. Bairro : ' . $bairro . 'Senha'.$senha.'.';
}
 
?>
 
<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Pagina de login</title>
</head>
<style>
.button {
  display: inline-block;
  background-color: #069cc2;
  border-radius: 6px;
  padding: 10px;
  cursor: pointer;
  color: #fff;
  border: none;
  font-size: 15px;
  margin-right: 30px;
  width: 100px; /* exemplo de tamanho fixo */

  
}
body {background-color: black;}
</style>

<body >


<form action="index.php" method="GET" class="w-full max-w-[444px] flex flex-col p-10 border shadow mx-auto mt-10 bg-white space-y-3">

<?php if (isset($_GET['nome_morador']) && isset($_GET['cpf']) && isset($_GET['endereco']) && isset($_GET['telefone']) && isset($_GET['cidade']) && isset($_GET['bairro']) && isset($_GET['senha'])) : ?>

    <h1>DADOS DO MORADOR</h1>
    <div><b>Nome:</b> <?php echo $_GET['nome_morador'] ?></div>
    <div><b>CPF:</b> <?php echo $_GET['cpf'] ?></div>
    <div><b>Endereço:</b> <?php echo $_GET['endereco'] ?></div>
    <div><b>Telefone:</b> <?php echo $_GET['telefone'] ?></div>
    <div><b>Cidade:</b> <?php echo $_GET['cidade'] ?></div>
    <div><b>Bairro:</b> <?php echo $_GET['bairro'] ?></div>
    <div><b>Senha:</b> <?php echo $_GET['senha'] ?></div>

    <div class="button-container">
        <form action="salvar.php" method="POST">
            <input type="hidden" name="nome_morador" value="<?php echo $_GET['nome_morador'] ?>">
            <input type="hidden" name="cpf" value="<?php echo $_GET['cpf'] ?>">
            <input type="hidden" name="endereco" value="<?php echo $_GET['endereco'] ?>">
            <input type="hidden" name="telefone" value="<?php echo $_GET['telefone'] ?>">
            <input type="hidden" name="cidade" value="<?php echo $_GET['cidade'] ?>">
            <input type="hidden" name="bairro" value="<?php echo $_GET['bairro'] ?>">
            <input type="hidden" name="senha" value="<?php echo $_GET['senha'] ?>">
            <button type="submit" name="confirmar" class="button">Confirmar</button>
        </form>
        <a href="index.php" class="button" id="sair-btn">Sair</a>
   
</div>

<script>
  // Obtém o elemento do botão pelo ID
  var sairBtn = document.getElementById("sair-btn");

  // Adiciona um manipulador de eventos "onclick" ao botão
  sairBtn.onclick = function() {
    // Pergunta ao usuário se ele deseja sair
    var confirmarSaida = confirm("Deseja realmente sair?");

    // Se o usuário clicou em "OK", redireciona para a página INDEX.php
    if (confirmarSaida == true) {
      window.location.href = "index.PHP";
    }

      // Se o usuário clicou em "Cancelar", permanece na mesma página
    else {
      return false;
    }
  };
</script>

<script>
  // Obtém o elemento do botão pelo ID
  var confirmarBtn = document.getElementById("confirmar-btn");

  // Adiciona um manipulador de eventos "onclick" ao botão
  confirmarBtn.onclick = function() {
    // Insira aqui o código que deseja executar ao clicar no botão "Confirmar"
    alert("Cadastro concluido com sucesso!");
  };
</script>

 
</div>
  
        <?php
        return;
        endif;
        ?>

<div style="text-align: center;">
  <div style="display: inline-block;">
    <img src="images.jpg" alt="Logo da minha empresa" width="100" height="50">
  </div>
</div>



            <h1> CADASTRO DE MORADORES</h1>
        <input type="text" name="nome_morador" placeholder="Nome" class="py-2 px-2 border border-gray-300 outline-none">
        <input type="text" name="cpf" placeholder="Cpf" class="py-2 px-2 border border-gray-300 outline-none">
        <input type="text" name="endereco" placeholder="endereco" class="py-2 px-2 border border-gray-300 outline-none">
        <input type="text" name="telefone" placeholder="telefone" class="py-2 px-2 border border-gray-300 outline-none">
        <div>
                <select name="cidade" placeholder= "Cidade" class="w-full py-2 border-2 border-gray-200 focus:border-b-sky-500 outline-none">
                    <option value="">Cidade</option>
                    <option value="Florianopolis">Florianopolis</option>
                    <option value="Palhoça">Palhoça</option>
                    <option value="São Jose">São Jose</option>
                    <option value="Biguaçu">Biguaçu</option>
                </select>
            </div>
            <div>
                <select name="bairro" placeholder= "bairro" class="w-full py-2 border-2 border-gray-200 focus:border-b-sky-500 outline-none">
                    <option value="">Selecione o bairro</option>
                    <option value="Aririú">Aririú</option>
                    <option value="Bela Vista">Bela Vista</option>
                    <option value="Centro">Centro</option>
                    <option value="Enseada de Brito">Enseada de Brito</option>
                    <option value="Guarda do Cubatão">Guarda do Cubatão</option>
                    <option value="Jardim Eldorado">Jardim Eldorado</option>
                    <option value="Madri">Madri</option>
                    <option value="Pagani">Pagani</option>
                    <option value="Passa Vinte">Passa Vinte</option>
                    <option value="Ponte do Imaruim">Ponte do Imaruim</option>
                    <option value="Praia de Fora">Praia de Fora</option>
                    <option value="São Sebastião">São Sebastião</option>
                    <option value="Vila Nova">Vila Nova</option>

                </select>
            </div>
            <input type="text" name="senha" placeholder="Senha" class="py-2 px-2 border border-gray-300 outline-none">
        
            <button type="submit" class="bg-blue-500 text-white font-bold py-2">Cadastre -se</button>
        <button type="submit" class="bg-green-500 text-white font-bold py-2">Login</button>
    </form>
   
</body>
 
</html>