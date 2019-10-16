<?php
    $funcoesExecutadas = 0;

    include("funcoes.php");

    echo $funcoesExecutadas."<br>";
    var_dump(maior(2,3,9));

    echo "<br>".$funcoesExecutadas."<br>";
    var_dump(tabela(2,9));

    echo "<br>".$funcoesExecutadas."<br>";

    echo strpos("Adoro php! -Eu também adoro php!","php");
?>