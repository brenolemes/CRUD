<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
    <?php

    require "conexao.php";
    $cpf = $_POST["cpf"];
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $data = $_POST["data"];
    $endereco = $_POST["endereco"];
    $celular = $_POST["celular"];


    $sqli = "INSERT INTO Clientes (cpf, nome, email, nascimento, endereco, celular)
    VALUES ('$cpf', '$nome', '$email', '$data', '$endereco', '$celular')";

    if (mysqli_query($con, $sqli)) {
        echo "$nome foi cadastrado(a) com sucesso!";
    }else {
        echo "Erro ao cadastrar! " . mysqli_error($con);
    }

    mysqli_close($con);

    ?>
    <hr>
    <a href="menu.php">Voltar</a>
</body>
</html>







