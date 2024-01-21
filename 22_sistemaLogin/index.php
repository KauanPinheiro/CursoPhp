<!DOCTYPE html>
<?php
//conexão com o banco de dados
require_once 'db_connect.php';

//sessão
session_start();

// Botão enviar
    if(isset($_POST["btn-entrar"])):
    // coletando os dados do inout
        $erros = array();
        $login = mysqli_escape_string($connect,$_POST["login"]);
        $senha = mysqli_escape_string($connect,$_POST["senha"]);
    
        //verificando se os campos vieram vazios 
        if(empty($login) or empty($senha)):
            $erro[] = "<li> O campo login/senha precisar ser preencido </li>";
        else:
            $sql = "SELECT login FROM usuarios WHERE login = '$login' ";
            $resultado = mysqli_query($connect,$sql);
            // verificando o banco de dados 
            if(mysqli_num_rows($resultado) > 0):
                $senha = md5($senha);
                $sql = "SELECT * FROM usuarios WHERE login = '$login' AND senha = '$senha' " ;    
                $resultado = mysqli_query($connect,$sql);

                    if(mysqli_num_rows($resultado) == 1):
                        $dados = mysqli_fetch_array($resultado);
                        mysqli_close($connect);
                        $_SESSION['logado'] = true;
                        $_SESSION['id_usuario'] = $dados['id'];
                        header('location: home.php');
                    else:
                        $erro[] = "Usuario e sennha não confere";
                    endif;

            else:
                
                $erro[] = " <li> Usuario não existe </li> ";
            endif;

        endif;

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
    <?php
        if(!empty($erro)):
            foreach($erro as $erro):
                echo $erro;
            endforeach;
        endif;
    ?>

        Login: <input type="text" name="login"><br>
        Senha: <input type="text" name="senha"><br>
        <button type="submit" name="btn-entrar">Entrat</button>

    </form>
</body>
</html>