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
        echo "<br><br>Inteiro<br>";
        $var = 1;
        echo $var."<br>";
        var_dump($var);

        echo "<br><br>Decimal<br>";
        $var = 1.1;
        echo $var."<br>";
        var_dump($var);

        echo "<br><br>Caractere aspas simples<br>";
        $var = 'a';
        echo $var."<br>";
        var_dump($var);

        echo "<br><br>Caractere aspas duplas<br>";
        $var = "a";
        echo $var."<br>";
        var_dump($var);

        echo "<br><br>Frase aspas simples<br>";
        $var = 'uma frase a';
        echo $var."<br>";
        var_dump($var);

        echo "<br><br>Frase aspas duplas<br>";
        $var = "uma frase a";
        echo $var."<br>";
        var_dump($var);

        echo "<br><br>Testando atribuições diferentes<br>";
        $var = 1;
        echo $var."<br>";
        var_dump($var);
        $var = 'frase';
        echo "<br>".$var."<br>";
        var_dump($var);
        $var = 1.2;
        echo "<br>".$var."<br>";
        var_dump($var);
        $var = "1";
        echo "<br>".$var."<br>";
        var_dump($var);
    ?>

    <h1><br><br>Exercício 2</h1>
    <?php
        $um = "Três";
        $dois = "pratos";
        $tres = "de";
        $quatro = "trigo";
        $cinco = "para";
        $seis = "três";
        $sete = "tigres";
        $oito = "tristes";

        echo "$um $dois $tres $quatro $cinco $seis $sete $oito.";
        echo "<br>$um $sete $oito $tres $quatro.";
    ?>

    <h1><br><br>Exercício 3</h1>
    <?php
        $variable01 = true;
        $variable02 = false;
        $variable03 = 0;
        $variable04 = 1;
        $variable05 = 6;
        $variable06 = '';
        $variable07 = "3";
        $variable08 = "true";
        $variable09 = 'false';
        $variable10 = null;

        function tipoDado($varN){
            if ($varN == true){
                echo 'o valor ' . $varN . ' é verdadeiro.' . '<br>';
            }else{
                echo 'o valor ' . $varN . ' é falso.' . '<br>';
            }
        }

        echo 'variable01' . ': ';
        tipoDado($variable01);
        echo 'variable02' . ': ';
        tipoDado($variable02);
        echo 'variable03' . ': ';
        tipoDado($variable03);
        echo 'variable04' . ': ';
        tipoDado($variable04);
        echo 'variable05' . ': ';
        tipoDado($variable05);
        echo 'variable06' . ': ';
        tipoDado($variable06);
        echo 'variable07' . ': ';
        tipoDado($variable07);
        echo 'variable08' . ': ';
        tipoDado($variable08);
        echo 'variable09' . ': ';
        tipoDado($variable09);
        echo 'variable10' . ': ';
        tipoDado($variable10);
    ?>

    <h1><br><br>Exercício 4</h1>
    <?php  

        $animais = ["cachorro","gato","papagaio","galinha","boi"];
        var_dump($animais);

        echo "<br>";
        $animais[] = "zebra"; //adiciona a informação no final
        $animais[] = "cavalo";
        $animais[] = 354.34;
        var_dump($animais);

        echo "<br> Eu gosto de animais: $animais[0], $animais[1], $animais[2], $animais[3], $animais[4], $animais[5] e $animais[6].";

        $animais[0] = "cão";
        echo "<br>";
        var_dump($animais);

        $animais[99] = "animal100";
        echo "<br>";
        var_dump($animais);

        $animais[15] = "animal16";
        echo "<br>";
        var_dump($animais);

    ?>

    <h1><br><br>Exercício 5</h1>
    <?php
        $carro = ["marca"=>"honda",
                  "modelo"=>"civic",
                  "cor"=>"preto",
                  "ano"=>2019,
                  "placa"=>"ABC 1234"];
        
        var_dump($carro);

        //adicionando informações em posições do array
        echo "<br>";
        $carro[0] = "Alex Watanabe";
        var_dump($carro);

        echo "<br>";
        $carro[13] = "Porto Seguro Seguradora";
        var_dump($carro);

        echo "<br>Na posição cor temos: " . $carro["cor"];
        echo "<br>Na posição 0 temos: " . $carro[0];
        echo "<br>Na posição 13 temos: " . $carro[13];
    ?>

    <h1><br><br>Exercício 6</h1>
    <?php
        $inteiro = 100;
        $decimal = 3.5;

        echo $inteiro + $decimal . "<br>";
        echo $inteiro - $decimal . "<br>";
        echo $inteiro * $decimal . "<br>";
        echo $inteiro / $decimal . "<br>";

        echo "<br>";
        $resto = $inteiro % $decimal;  //acho que só considera a parte inteira
        echo $resto . "<br>";
        var_dump($resto);

        $inteiro = $inteiro + 1;
        $decimal = $decimal + 1;

        $inteiro = $inteiro + 5;
        $decimal = $decimal - 0.6;

        echo "<br>";
        $resultado = ($inteiro * 2 + $decimal) / ($inteiro / 2);
        echo $resultado . "<br>";
        var_dump($resultado);
        
    ?>

    <h1><br><br>Exercício 7</h1>
    <?php
        $var1 = "Olá";
        $var2 = "mundo!";
        $concat = $var1 . " " . $var2;
        $concat2 = $concat . " PHP é o máximo.";
        echo $concat2;
    ?>

</body>
</html>