<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualiza</title>
</head>
<body>
    <?php

    require "conexao.php";

    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $data = $_POST["data"];
    $endereco = $_POST["endereco"];
    $celular = $_POST["celular"];
    $id = $_POST["id"];

    $sqla = "UPDATE clientes 
    SET nome='$nome', email='$email', nascimento='$data', endereco='$endereco', celular='$celular'
    WHERE id = $id";

    if (mysqli_query($con, $sqla)) {
        echo "$nome foi atualizado(a) com sucesso!";
    }else {
        echo "Erro ao atualizar! " . mysqli_error($con);
    }

    mysqli_close($con);

    ?>
    <hr>
    <a href="menu.php">Voltar</a>
</body>
</html>

