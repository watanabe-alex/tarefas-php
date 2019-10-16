<?php

    $nomeArquivo = "usuarios.json";

    function cadastrarUsuarios($nome, $sobrenome, $img, $cv) {

        global $nomeArquivo;

        if (!file_exists($nomeArquivo)){
            $usuarios = [];
        } else {
            $usuarios = json_decode(file_get_contents($nomeArquivo),true);
        }
 
        //dados da imagem
        $id = count($usuarios)+1;
        $nomeImagem = $img["name"];
        $localTempImagem = $img["tmp_name"];
        $endImagem = "img/img".$id.substr($nomeImagem,-4);
        //dados do cv
        $nomeCV = $cv["name"];
        $localTempCV = $cv["tmp_name"];
        $endCV = "cv/cv".$id.substr($nomeCV,-4);

        //adiciona nova informação    
        $usuarios[] = ["id"=>$id,
                       "nome"=>$nome,
                       "sobrenome"=>$sobrenome,
                       "imagem"=>$endImagem,
                       "cv"=>$endCV];

        $json = json_encode($usuarios);
        $deuCerto = file_put_contents($nomeArquivo, $json);

        if ($deuCerto) {
            if (move_uploaded_file($localTempImagem, $endImagem)) {
                if (move_uploaded_file($localTempCV, $endCV)) {
                    return "salvo com sucesso.";
                } else {
                    return "Não foi possível salvar o cv.";
                }
            } else {
                return "Não foi possível salvar a imagem.";
            }
        } else {
            return "não foi possível salvar.";
        }

    }

    if ($_POST) {
        echo cadastrarUsuarios($_POST["nome"],$_POST["sobrenome"],$_FILES["img"],$_FILES["cv"]);
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
    
    <?php

        if (file_exists($nomeArquivo)){
            $usuarios = json_decode(file_get_contents($nomeArquivo),true);
            echo "<br><br>";
            foreach ($usuarios as $usuario) {
                echo $usuario["id"]." | ".$usuario["nome"]." | ".$usuario["sobrenome"]." | ".$usuario["imagem"]." | ".$usuario["cv"]."<br>";
            }
        }

    ?>

</body>
</html>