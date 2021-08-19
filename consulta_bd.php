<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta</title>
</head>
<body>
    <?php

    require "conexao.php";

    $id_consulta = $_POST["id_consulta"];

    $sqld = "SELECT * FROM clientes
    WHERE id = $id_consulta";

    //Arrumar para mostrar os dados do cliente
    if (mysqli_query($con, $sqld)) {
        echo "Todos os dados do cliente com o ID $id_consulta";
    }else {
        echo "Erro ao consultar os dados! " . mysqli_error($con);
    }

    mysqli_close($con);

    ?>
    <hr>
    <a href="menu.php">Voltar</a>
</body>
</html>
