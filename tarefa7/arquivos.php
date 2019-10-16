<?php
    function existeTextoTxt(){
        if (file_exists("texto.txt")) {
            return fopen("texto.txt","r+");
        } else {
            return fopen("texto.txt","x+");
        }
    }

    $arq = existeTextoTxt();
    for ($i=1; $i<=50; $i++){
        fwrite($arq,"Olá Mundo! testando.\n");
    }
    fclose($arq);

    $arq = fopen('texto.txt', 'r');
    $tamanho = filesize('texto.txt');
    $conteudo = fread($arq, $tamanho);
    fclose($arq);
    echo $conteudo."<br><br>";

    $arq = fopen('texto.txt', 'r');
    while ($linha = fgets($arq)) {
        echo $linha;
    }
    fclose($arq);

    unlink("texto.txt");

    file_put_contents("texto2.txt","Olá novamente, mundo!");
    file_put_contents("texto2.txt","Esse texto sobreescreve o anterior?");
    file_put_contents("texto2.txt","NÃO!",FILE_APPEND);

    

?>