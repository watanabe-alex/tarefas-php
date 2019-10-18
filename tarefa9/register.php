<?php
    //se tiver informações em post para cadastrar/modificar
    if ($_POST) {

        //verifica se vem da página do usuário para modificar o registro ou se é um cadastro novo
        if (isset($_POST["modificar"])) {

            // ------------------------ MODIFICAR USUÁRIO ------------------------
            $nome = $_POST["nome"];
            $email = $_POST["email"];

            //carrega dados em array associativo
            $nomeArqUsuarios = "usuarios.json";
            $cadastros = json_decode(file_get_contents($nomeArqUsuarios), true);

            //verifica se email existe
            $chaveModificar = "";
            if ($cadastros!=NULL) {
                foreach ($cadastros as $key=>$cadastro){
                    if ($cadastro["email"] == $email) { 
                        $chaveModificar = $key;
                        break;
                    }
                }

                //modifica dados
                $cadastros[$key]["nome"] = $nome;
                if ($_POST["senha"]!="") {
                    $cadastros[$key]["senha"] = password_hash($_POST["senha"],PASSWORD_DEFAULT);
                }
                //salva arquivo
                if (file_put_contents($nomeArqUsuarios, json_encode($cadastros))) {
                    echo "Usuário modificado.";
                } else {
                    echo "Erro ao tentar modificar o registro do usuário.";
                }

            } else {
                echo "E-mail não encontrado.";
            }            

            // (FIM) ------------------ MODIFICAR USUÁRIO ------------------------

        } else {

            // ---------------------- CADASTRAR NOVO USUÁRIO ----------------------

            //coleta as informações para cadastro
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $senha = password_hash($_POST["senha"],PASSWORD_DEFAULT);
            
            //verifica se existe um arquivo de usuários. Se não existe, cria.
            $nomeArqUsuarios = "usuarios.json";
            if (!file_exists($nomeArqUsuarios)) {
                $arq = fopen($nomeArqUsuarios,"w");
                fclose($arq);
            }

            //carrega dados em array associativo
            $cadastros = json_decode(file_get_contents($nomeArqUsuarios), true);

            //verifica se email já existe
            $flagEmailJaExiste = false;
            if ($cadastros!=NULL){ //se cadastros é NULL não precisa fazer a busca e a flag já é falsa
                foreach ($cadastros as $cadastro){
                    if ($cadastro["email"] == $email) { 
                        $flagEmailJaExiste = true;
                    }
                }
            }

            if (!$flagEmailJaExiste) { //email não existe, então pode cadastrar
                
                //adiciona informações no array
                $cadastros[] = ["nome"=>$nome,
                                "email"=>$email,
                                "senha"=>$senha];
                //salva arquivo
                if (file_put_contents($nomeArqUsuarios, json_encode($cadastros))) {
                    echo "Usuário cadastrado.";
                } else {
                    echo "Erro ao tentar cadastrar o usuário.";
                }

            } else { //email já existe, exibe mensagem ao usuário
                echo "Esse e-mail já está cadastrado. Tente com outro e-mail.";
            }

            // (FIM) ---------------- CADASTRAR NOVO USUÁRIO ----------------------
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
    
    <form action="" method="post">
        <input type="text" name="nome" id="id-nome" placeholder="digite o nome"/>
        <input type="text" name="email" id="id-email" placeholder="digite o email"/>
        <input type="password" name="senha" id="id-senha" placeholder="digite a senha"/>
        <button type="submit">Registrar</button>
    </form>

</body>
</html>