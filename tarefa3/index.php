<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <h1>Exercício 1 e 2</h1>
    <?php
        $r = mt_rand(1,100);
        for($i=1; $i<=100; $i++){
            echo $i."<br>";
            if($i==$r){
                break;
            }
        }
    ?>

    <h1>Exercício 3</h1>
    <?php
        for($i=1; $i<=10; $i++){
            $r = $i*2;
            echo $i." * 2 = ".$r."<br>";
        }
    ?>

    <h1>Exercício 4</h1>
    <?php
        $qtdcara = 0;
        $qtdlanc = 0;
        while($qtdcara < 5){
            $m = mt_rand(0,1);
            echo $m." ";
            if($m==1){
                $qtdcara++;
            }
            $qtdlanc++;
        }
        echo "<br>".$qtdlanc;
    ?>

    <h1>Exercício 5</h1>
    <?php
        $qtdcara = 0;
        $qtdlanc = 0;
        do{
            $m = mt_rand(0,1);
            echo $m." ";
            if($m==1){
                $qtdcara++;
            }
            $qtdlanc++;
        }while($qtdcara < 1);

        echo "<br>".$qtdlanc;
    ?>

    <h1>Exercício 6</h1>
    <?php
        $nomes = ["Alex","William","Erica","Sumie","Reinaldo"];
        echo "FOR: ";
        for ($i=0; $i<count($nomes); $i++){
            echo $nomes[$i].".";
        }
        echo "<br>FOREACH: ";
        foreach ($nomes as $nome){
            echo $nome.".";
        }
        echo "<br>WHILE: ";
        $i=0;
        while ($i<count($nomes)){
            echo $nomes[$i].".";
            $i++;
        }
        echo "<br>DO WHILE: ";
        $i=0;
        do{
            echo $nomes[$i].".";
            $i++;
        }while ($i<count($nomes));
    ?>

    <h1>Exercício 7</h1>
    <?php
        $numeros = [];
        for($i=0;$i<10;$i++){
            array_push($numeros, mt_rand(0,10));
        }

        echo "FOR: ";
        for ($i=0; $i<count($numeros); $i++){
            echo $numeros[$i].".";
            if ($numeros[$i]==5){
                echo "Encontramos um 5!";
                break;
            }
        }
        echo "<br>WHILE: ";
        $i=0;
        while ($i<count($numeros)){
            echo $numeros[$i].".";
            if ($numeros[$i]==5){
                echo "Encontramos um 5!";
                break;
            }
            $i++;
        }
        echo "<br>DO WHILE: ";
        $i=0;
        do{
            echo $numeros[$i].".";
            if ($numeros[$i]==5){
                echo "Encontramos um 5!";
                break;
            }
            $i++;
        }while ($i<count($numeros));

    ?>

    <h1>Exercício 8</h1>
    <?php
        $letters = range('a', 'i');
        foreach($letters as $key=>$value){
            echo "Na posição [$key], está o valor [$value].<br>";
        }
    ?>

    <h1>Exercício 9</h1>
    <?php
        $mascote = ["animal"=>"cachorro","idade"=>5,"altura"=>0.6,"nome"=>"Sonic"];
        foreach($mascote as $key => $value){
            echo "$key: $value<br>";
        }
    ?>

    <h1>Exercício 11</h1>
    <?php
        $ceu = ["Itália"=>"Roma", "Luxemburgo"=>"Luxemburgo",
        "Bélgica"=> "Bruxelas", "Dinamarca"=>"Copenhagen",
        "Finlândia"=>"Helsinki", "França" => "Paris",
        "Eslováquia"=>"Bratislava", "Eslovênia"=>"Liubliana",
        "Alemanha" => "Berlim", "Grécia" => "Atenas",
        "Irlanda"=>"Dublin", "Holanda"=>"Amsterdã",
        "Portugal"=>"Lisboa", "Espanha"=>"Madri",
        "Suécia"=>"Estocolmo", "Reino Unido"=>"Londres",
        "Chipre"=>"Nicósia", "Lituânia"=>"Vilnius", "República
        Tcheca"=>"Praga", "Estônia"=>"Tallinn",
        "Hungria"=>"Budapeste","Letônia"=>"Riga", "Malta"=>"Valletta",
        "Áustria" => "Viena", "Polônia"=>"Varsóvia"];

        foreach($ceu as $key=>$value){
            echo "A capital da $key é $value.<br>";
        }

        echo "<br>";
        asort($ceu);
        foreach($ceu as $key=>$value){
            echo "A capital da $key é $value.<br>";
        }
    ?>

    <h1>Exercícios 12</h1>
    <?php
        $ceu = [
        "Argentina" => ["Buenos Aires", "Córdoba", "Santa Fé"],
        "Brasil" => ["Brasília", "Rio de Janeiro", "São Paulo"],
        "Colômbia" => ["Cartagena", "Bogotá", "Barranquilla"],
        "França" => ["Paris", "Nantes", "Lyon"],
        "Itália" => ["Roma", "Milão", "Veneza"],
        "Alemanha" => ["Munique", "Berlim", "Frankfurt"]
        ];
        foreach($ceu as $key=>$value){
            echo "As cidades do $key são:<br>";
            foreach($value as $cidade){
                echo "* $cidade<br>";
            }
            echo "<br>";
        }
    ?>

    <h1>Exercícios 13</h1>
    <?php
        $ceu = [
        "Argentina" => ["cidades" => ["Buenos Aires", "Córdoba", "Santa Fé"], "naAmerica" => true],
        "Brasil" => ["cidades" => ["Brasília", "Rio de Janeiro", "São Paulo"], "naAmerica" => true],
        "Colômbia" => ["cidades" => ["Cartagena", "Bogotá", "Barranquilla"], "naAmerica" => true],
        "França" => ["cidades" => ["Paris", "Nantes", "Lyon"], "naAmerica" => false],
        "Itália" => ["cidades" => ["Roma", "Milão", "Veneza"], "naAmerica" => false],
        "Alemanha" => ["cidades" => ["Munique", "Berlim", "Frankfurt"], "naAmerica" => false]
        ];

        foreach($ceu as $key=>$value){
            if($value["naAmerica"]){
                echo "As cidades do $key são:<br>";
                foreach($value["cidades"] as $cidade){
                    echo "* $cidade<br>";
                }
                echo "<br>";
            }
        }
    ?>


    
</body>
</html>