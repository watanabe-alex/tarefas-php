<?php
    //essa variável será setada caso os dados do login estejam incorretos e o botão "voltar" será mostrado
    $flagLogin = false; 

    if ($_POST) {
        $email = $_POST["email"];
        $senha = $_POST["senha"];

        //verifica se existe um arquivo de usuários
        $nomeArqUsuarios = "usuarios.json";
        if (file_exists($nomeArqUsuarios)) { //se existe busca o e-mail para fazer a comparação
    
            //carrega dados em array associativo
            $cadastros = json_decode(file_get_contents($nomeArqUsuarios), true);

            //verifica se email existe
            $flagEmailExiste = false;
            $senhaHash = "";
            $nome = "";
            foreach ($cadastros as $cadastro){
                if ($cadastro["email"] == $email) { 
                    $senhaHash = $cadastro["senha"]; //salva a senha hash desse cadastro para comparação com a digitada
                    $nome = $cadastro["nome"]; //salva o dado do nome para mostrar os dados do usuario
                    $flagEmailExiste = true;
                }
            }

            if ($flagEmailExiste) { //e-mail encontrado na base de dados
                //verifica a senha digitada
                if (password_verify($senha, $senhaHash)) {
                    $flagLogin = true; //seta variável que indica que usuario logou
                } else {
                    echo "Dados incorretos.";
                    $mostrarBotaoVoltar = true; //seta a variável que sinaliza que vamos mostrar o botão voltar
                }
            } else { //e-mail não encontrado na base de dados
                echo "Dados incorretos.";
                $mostrarBotaoVoltar = true; //seta a variável que sinaliza que vamos mostrar o botão voltar
            }
            
            
        } else { //se não existe o arquivo, imprime que o e-mail não está cadastrado.
            echo "Dados incorretos.";
            $mostrarBotaoVoltar = true; //seta a variável que sinaliza que vamos mostrar o botão voltar
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
    
    <?php if ($flagLogin) { //usuario logado. mostrar informações ?> 

        <form action="register.php" method="post">
            <input type="text" name="nome" id="id-nome" value=<?php echo '"'.$nome.'"' ?>/>
            <input type="text" name="email" id="id-email" value=<?php echo '"'.$email.'"' ?> readonly/>
            <input type="password" name="senha" id="id-senha" placeholder="se não deseja alterar a senha, deixe em branco"/>
            <input type="text" name="modificar" id="id-modificar" value="sim" hidden/>
            <button type="submit">Modificar</button>
        </form>

    <?php } else { //mostrar botao voltar pois os dados estao incorretos
        echo '<a href="login.php">VOLTAR</a>';
    } ?>

</body>
</html>
