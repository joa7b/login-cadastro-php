<?php
    $dbhost = 'Localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbname = 'cadastro';

    $conexao = new mysqli($dbhost,$dbUsername,$dbPassword,$dbname);

    
   /* if($conexao->connect_errno){
        echo "Erro";
    }else{
        echo "Conexão efetuada com sucesso!";
    }

    */
    

?>