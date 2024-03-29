<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <?php
            /*
                Validaçõess 
                funçoes (fliter_input - filter_var)
                FILTER_VALIDATE_INT
                FILTER_VALIDATE_EMAIL
                FILTER_VALIDATE_FLOAT
                FILTER_VALIDATE_IP
                FILTER_VALIDADE_URL

            */
    ?>

    <?php
/*
    if(isset($_POST["enviar-formulario"])):
            $erros = array();
    // validaçoes
            if(!$idade = filter_input(INPUT_POST,'idade', FILTER_VALIDATE_INT)):
                $erros[] = "Idade precisa ser inteiro";
            endif;
            if(!$email = filter_input(INPUT_POST,'email', FILTER_VALIDATE_EMAIL)):
                $erros[] = "Email inválido";
            endif;
            if(!$peso = filter_input(INPUT_POST,'peso', FILTER_VALIDATE_FLOAT)):
                $erros[] = "Peso precisa ser um float";
            endif;
            if(!$ip = filter_input(INPUT_POST,'ip', FILTER_VALIDATE_IP)):
                $erros[] = "IP inválido";    
            endif;
            if(!$url = filter_input(INPUT_POST,'url', FILTER_VALIDATE_URL)):
                $erros[] = "URL inválida";    
            endif;
        
    // exibindo mensagens
                if(!empty($erros)):
                    foreach($erros as $erros):
                        echo "<li> $erros </li>";
                    endforeach;
                else:
                    echo "Parabéns, seus dados estão corretos!";
                endif;
    
    endif;
*/  
    ?>

    <?php
    /*
        Sanitização são os filtros de limpeza
        funções (filter_input - filter var)
        FILTER_SANITIZE_SPECIAL_CHARS
        FILTER_SANITIZE_INT
        FILTER_SANITIZER_EMAIL
        FILTER_SANITIZE_URL
    */ 

    if(isset($_POST["enviar-formulario"])):
        $erros = array();
// Sanitização
        $nome = filter_input(INPUT_POST,'nome', FILTER_SANITIZE_SPECIAL_CHARS) ;
            echo $nome."<br>";

        $idade = filter_input(INPUT_POST,'idade', FILTER_SANITIZE_NUMBER_INT);
                if(filter_var($idade,FILTER_VALIDATE_INT)):
                    $erro[] = "Idade precisa ser inteiro";
                endif;

        $email = filter_input(INPUT_POST,'email', FILTER_VALIDATE_EMAIL );
                if(filter_var($email,FILTER_VALIDATE_EMAIL)):
                    $erro[] = "Email inválido";
                endif;

        $url = filter_input(INPUT_POST,'url', FILTER_VALIDATE_URL );
                if(filter_var($url,FILTER_VALIDATE_URL)):
                    $erro[] = "URL inválida";
                endif;


        // exibindo mensagens
        if(!empty($erros)):
            foreach($erros as $erros):
                echo "<li> $erros </li>";
            endforeach;
        else:
            echo "Parabéns, seus dados estão corretos!";
        endif;
    
    endif;
    ?>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    Nome: <input type="text" name="nome"><br>
    Idade: <input type="text" name="idade"><br>
    Email: <input type="email" name="email"><br> 
    URL: <input type="text" name="url">

    <button type="submit" name="enviar-formulario">Enviar</button>

</form>

</body>
</html>