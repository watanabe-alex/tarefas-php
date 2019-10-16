<?php

    var_dump($_POST);

    echo "<br>";
    var_dump($_POST["nome"]);

    echo "<br>Foreach";
    foreach ($_POST as $k=>$v){
        echo "<br>$k => $v";
    }

    echo "<br>testando getAllHeaders";
    foreach (getallheaders() as $k=>$v){
        echo "<br>$k => $v";
    }

    $teste = getallheaders();
    echo "<br>".$teste["User-Agent"];

    echo "<br><br>Outras variáveis";
    $arr = ["SERVER" => $_SERVER,
            "FILES" => $_FILES,
            "REQUEST" => $_REQUEST,
            "SESSION" => $_SESSION,
            "ENV" => $_ENV,
            "COOKIE" => $_COOKIE,
            "GLOBALS" => $GLOBALS];
    foreach ($arr as $key => $value) {
        echo "<br><br>$key:";
        foreach ($value as $k => $v){
            echo "<br>$k: $v";
        }
    }

    echo "<br><br>Outras variáveis com var_dump";
    $arr = ["SERVER" => $_SERVER,
            "FILES" => $_FILES,
            "REQUEST" => $_REQUEST,
            "SESSION" => $_SESSION,
            "ENV" => $_ENV,
            "COOKIE" => $_COOKIE,
            "GLOBALS" => $GLOBALS];
    foreach ($arr as $v) {
        echo "<br><br>";
        var_dump($v);
    }
    

    

?>