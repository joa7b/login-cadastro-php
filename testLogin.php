<?php
    //print_r($_REQUEST);

    if (isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])){
        //acessa
        include_once('config.php');
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        //print_r('Email: '.$email);
        //print_r('Senha: '.$senha);

        $sql = "SELECT * FROM usuarios WHERE email = '$email' and senha = '$senha'";

        $result = $conexao->query($sql);

        //print_r($result);

        if (mysqli_num_rows($result) < 1){
            header('Location: telaLogin.php');
        }else{
            header('Location: sistema.php');
        }

    }else{
        //não acessa
        header('location: telaLogin.php');
    }
?>