<!DOCTYPE html>
<?php
//conexão com o banco de dados
require_once 'db_connect.php';

//sessão
session_start();

// Botão enviar
    if(isset($_POST["btn-entrar"])):
        $erros = array();
        $login = mysqli_escape_string($connect,$_POST["login"]);

    endif;
?>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de login</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <h1>Login</h1>

        Login: <input type="text" name="login"><br>
        Senha: <input type="text" name="senha"><br>
        <button type="submit" name="btn-entrar">Entrat</button>

    </form>
</body>
</html>