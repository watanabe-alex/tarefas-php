<?php

    $nomeArquivo = "usuarios.json";

    if ($_POST) {
        $usuarios = json_decode(file_get_contents($nomeArquivo),true);

        $endMudar = $_POST["endereco"];   
        $usuarios[$endMudar] = ["id"=>$usuarios[$endMudar]["id"],
                                "nome"=>$_POST["nome"],
                                "sobrenome"=>$_POST["sobrenome"],
                                "imagem"=>$usuarios[$endMudar]["imagem"],
                                "cv"=>$usuarios[$endMudar]["cv"]];

        $json = json_encode($usuarios);
        $deuCerto = file_put_contents($nomeArquivo, $json);

        if ($deuCerto) {
            echo "Alterações salvas.";
        } else {
            echo "Não foi possíve salvar as alterações.";
        }

    } else {
        if ($_GET){
            $usuarios = json_decode(file_get_contents($nomeArquivo),true);
            $id = $_GET["id"];
            
            foreach ($usuarios as $key=>$usuario){
                $encontrado = [];
                if ($usuario["id"]==$id) {
                    $encontrado = $usuario;
                    $end = $key;
                    break;
                }
            }
            if ($encontrado) {
                var_dump($encontrado);
            }
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
    
    <form method="post">
        <input type="text" name="nome" placeholder="Nome do usuario" value=<?php echo $encontrado["nome"] ?>>
        <input type="text" name="sobrenome" placeholder="Sobrenome do usuário" value=<?php echo $encontrado["sobrenome"] ?>>
        <input type="hidden" name="endereco" value=<?php echo $end ?>>
        <button>cadastrar</button>
    </form>
    <?php echo "<a href='".$encontrado["imagem"]."' download>".$encontrado["imagem"]."<br></a>"; ?>
    <?php echo "<a href='".$encontrado["cv"]."' download>".$encontrado["cv"]."<br></a>"; ?>

</body>
</html>