<?php

    if ($_FILES) {
        //var_dump($_FILES["arquivo"]);
        
        $nome = $_FILES["arquivo"]["name"];
        $local_tmp = $_FILES["arquivo"]["tmp_name"];
        $caminho = dirname(__FILE__)."/uploads/";

        //salva se o arquivo não existe
        if (!file_exists($caminho.$nome)) {
            $deuCerto = move_uploaded_file($local_tmp, $caminho.$nome);
            if ($deuCerto){
                echo "Arquivo salvo.";
            } else {
                echo "Não foi possível salvar o arquivo.";
            }
        } else {
            echo "Arquivo já existe.";
        }

    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <form method="post" enctype="multipart/form-data">
        <input type="file" name="arquivo">
        <button>upload</button>
    </form>
    
</body>
</html>