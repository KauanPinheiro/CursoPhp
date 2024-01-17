<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>upload de arquivost</title>
</head>
<body>
    <?php
        if(isset($_POST["enviar-formulario"])):
            $formatosPermitidos = array("png","jpeg","jpg","gif");
            $extensao = pathinfo($_FILES["arquivos"]["name"], PATHINFO_EXTENSION);

                if(in_array($extensao,$formatosPermitidos)):
                    $pasta = "arquivos/";
                    $temporario = $_FILES;
                    $novoNome = uniqid().".$extensao";

                        if(move_uploaded_file($temporario, $pasta.$novoNome)):
                            $mensagem = "Upload feito com sucesso!";
                        else:
                            $mensagem = "Não foi possivel ser feito o upload";
                        endif;
                    else:
                        $mensagem = "Formato inválido";
                    endif;

                    echo $mensagem;
                
        endif;
    ?>
    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post" enctype="multipart/form-data>">    
        <input type="file" name="arquivo[]"><br>
        <input type="submit" name="enviar-fomulario">
    </form>
</body>
</html>