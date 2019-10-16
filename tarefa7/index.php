<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tarefa 7</title>
</head>
<body>
    
    <h1>Exercício 1</h1>
    <?php
        $a = ["a" => 1, "b" => 2, "c" => "Eu <3 JSON"];
        echo "array associativo: ".$a;

        $a = json_encode($a);
        echo "<br>json_encode: ".$a;

        $b = json_decode($a,true);
        echo "<br>json_decode: ".$b;

        echo "<br>".$b["c"]."|".$b["a"]."|".$b["b"]."|"
    ?>

    <h1>Exercício 2</h1>
    <?php
        $dadosJson = file_get_contents("categorias.json");
        $dadosJson = json_decode($dadosJson,true);
    ?>
    
    <form>
        <?php foreach ($dadosJson["categorias"] as $cat) { ?>
            <input type="checkbox" id=<?php echo $cat["id"]; ?> name=<?php echo $cat["nome"]; ?> /><?php echo $cat["nome"]; ?>
        <?php } ?>
        
    </form>

</body>
</html>