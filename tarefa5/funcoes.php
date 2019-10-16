<?php
    $numeroMagico = 5;


    function maior($num1, $num2, $num3="nenhum valor informado"){
        global $funcoesExecutadas;
        $funcoesExecutadas++;

        global $numeroMagico;
        if ($num3 == "nenhum valor informado") {
            $num3 = $numeroMagico;
        }
        return max($num1, $num2, $num3);
    }

    function tabela($base, $lim="nenhum valor informado"){
        global $funcoesExecutadas;
        $funcoesExecutadas++;

        global $numeroMagico;
        if ($lim == "nenhum valor informado") {
            $lim = $numeroMagico;
        }

        $arr = [];
        for ($i=$base; $i<=$lim; $i++) {
            array_push($arr,$i);
        }
        return $arr;
    }

    // var_dump(maior(2,3,9));
    // var_dump(maior(2,3));

    // var_dump(tabela(2,9));
    // var_dump(tabela(2));

?>