<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <h1>Exercício 1</h1>
    <?php
        $num1 = 14;
        $num2 = 7;
        $num1 > $num2 ? $maior = $num1 : $maior = $num2;
        echo "O maior número é $maior";
    ?>

    <h1>Exercício 2 e 3</h1>
    <?php
        $num = mt_rand(1,5);
        if ($num == 3 || $num == 5) {
            echo $num;
        }
        if ($num == 3) {
            echo $num;
        } else {
            echo "O número NÃO é 3.";
        }
    ?>

    <h1>Exercício 4 e 5</h1>
    <?php
        $num = mt_rand(0,100);
        if ($num > 50) {
            echo "o número é maior do que 50";
        } else {
            echo "o número é menor do que 50";
        }
        echo "<br>";
        if ($num > 50 && $num % 2 == 0){
            echo "O número cumpre a condição";
        } else {
            echo "O número NÃO cumpre a condição";
        }
    ?>

    <h1>Exercício 6</h1>
    <?php
        $idade = 34;
        $casado = true;
        $sexo = "Outro"; //"Masculino" "Feminino" "Outro"

        if (($idade > 18 && !$casado) || $sexo == "Outro"){
            echo "Boas-vindas";
        }
    ?>

    <h1>Exercício 7</h1>
    <?php
        $quantidadeDeAlunos = 100;
        if ($quantidadeDeAlunos){
            echo "​true";
        } else {
            echo "false";
        }

        if ($i == 1){
            echo "​true";
        } else {
            echo "false";
        }
    ?>

    <h1>Exercício 8</h1>
    <?php
        $numero = 43;
        $numero % 2 == 0 ? $texto =  "O número é par" : $texto = "O número é impar";
        echo $texto;
    ?>

    <h1>Exercício 9 e 10</h1>
    <?php
        $numero = mt_rand(1,5);
        switch ($numero){
            case 1:
                echo "i é igual a 1";
                break;
            case 2:
                echo "i é igual a 2";
                break;
            case 3:
                echo "i é igual a 3";
                break;
            case 4:
                echo "i é igual a 4";
                break;
            case 5:
                echo "i é igual a 5";
                break;
            default:
                echo "número diferente";
                break;
        }

        echo "<br>";
        switch ($numero){
            case 1:
                echo "i é igual a 1";
                break;
            case 2:
                echo "i é igual a 2";
                break;
            default:
                echo "não é igual a 1 ou 2";
                break;
        }
    ?>

    <h1>Exercício 11</h1>
    <?php
        $x = mt_rand(1,100);
        $y = mt_rand(1,100);

        $x == $y? $imprimir = "iguais" : ($x > $y? $imprimir = $x : $imprimir = $y);
        echo $imprimir;
    ?>

</body>
</html>