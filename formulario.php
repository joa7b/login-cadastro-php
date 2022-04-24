<?php

    include_once('config.php');

    if (isset($_POST['submit'])) {

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $telefone = $_POST['telefone'];
        $sexo = $_POST['genero'];
        $data_nasc = $_POST['dataDeNascimento'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];
        $endereco = $_POST['endereco'];

        $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,email,senha,telefone,sexo,data_nasc,cidade,estado,endereco) 
        VALUES ('$nome','$email','$senha','$telefone','$sexo','$data_nasc','$cidade','$estado','$endereco')");

    }

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylecad.css">
    <title>Cadastro</title>
</head>
<body>
<div class="box">
    <form action="formulario.php" method="POST">
        <fieldset>
            <legend><b>Cadastro</b></legend>
            <br>
            <div class="inputBox">
                <input type="text" name="nome" id="nome" class="inputUser" required>
                <label for="nome" class="labelInput">Nome Completo</label>
            </div>
            <br><br>
            <div class="inputBox">
                <input type="text" name="email" id="email" class="inputUser" required>
                <label for="email" class="labelInput">Email</label>
            </div>
            <br><br>
            <div class="inputBox">
                <input type="password" name="senha" id="senha" class="inputUser" required>
                <label for="senha" class="labelInput">Senha</label>
            </div>
            <br><br>
            <div class="inputBox">
                <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                <label for="telefone" class="labelInput">Telefone</label>
            </div>
            <br>

            <p>Sexo:</p>
            <input type="radio" name="genero" id="masculino" value="masculino" required>
            <label for="masculino">Masculino</label>
            <br>
            <input type="radio" name="genero" id="feminino" value="feminino" required>
            <label for="feminino">Feminino</label>
            <br>
            <input type="radio" name="genero" id="outros" value="outros" required>
            <label for="outros">Outros</label>
            <br><br>

            <div class="inputBox">
                <label for="dataDeNascimento"><b>Data de nascimento:</b></label>
                <input type="date" name="dataDeNascimento" id="dataDeNascimento" class="inputUser" required>
            </div>
            <br><br>

            <div class="inputBox">
                <input type="text" name="cidade" id="cidade" class="inputUser" required>
                <label for="cidade" class="labelInput">Cidade</label>
            </div>
            <br><br>
            <div class="inputBox">
                <input type="text" name="estado" id="estado" class="inputUser" required>
                <label for="estado" class="labelInput">Estado</label>
            </div>
            <br><br>
            <div class="inputBox">
                <input type="text" name="endereco" id="endereco" class="inputUser" required>
                <label for="endereco" class="labelInput">Endereço</label>
            </div>
            <br><br>
            <input type="submit" value="Enviar" name="submit" id="submit">
        </fieldset>
    </form>
</div>
    
</body>
</html>