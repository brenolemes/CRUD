<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deleta</title>
</head>
<body>
    <?php

    require "conexao.php";

    $id = $_POST["id"];

    $sqld = "DELETE FROM clientes
    WHERE id = $id";

    if (mysqli_query($con, $sqld)) {
        echo "Cliente foi deletado(a) com sucesso!";
    }else {
        echo "Erro ao deletar! " . mysqli_error($con);
    }

    mysqli_close($con);

    ?>
    <hr>
    <a href="menu.php">Voltar</a>
</body>
</html>
