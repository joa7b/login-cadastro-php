<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Tela de login</title>
</head>
<body>
<div id="tela-login">   
    <h1>Login</h1>
    <form action="testLogin.php" method="POST">
        <input type="text" name="email" placeholder="Email" class="input-dados">
        <br><br>
        <input type="password" name="senha" placeholder="Senha" class="input-dados">
        <br><br>
        <input type="submit" name="submit" id="button" value="Enviar">
    </form>
</div>    
</body>
</html>