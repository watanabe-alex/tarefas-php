<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <form method="post" enctype="multipart/form-data" action="usuarios.php">
        <input type="text" name="nome" placeholder="Nome do usuario">
        <input type="text" name="sobrenome" placeholder="Sobrenome do usuário">
        <input type="file" name="img" placeholder="Carregue o img">
        <input type="file" name="cv" placeholder="Carregue o cv">
        <button>cadastrar</button>
    </form>

</body>
</html>