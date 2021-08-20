<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consumo</title>
</head>
<body>
    <?php

    require "conexao.php";

    $cpf = $_POST["cpf"];
    $tipo_comida = $_POST["tipo_comida"];
    $preco = $_POST["preco"];
    $quantidade = $_POST["quantidade"];
    $total = $_POST["total"];


    $sqli = "INSERT INTO Consumo (tipo_comida, preco, quantidade, total, cpf_id)
    VALUES ('$tipo_comida', '$preco', '$quantidade', '$total', '$cpf')";

    if (mysqli_query($con, $sqli)) {
        echo "cadastro de venda realizada com sucesso!";
        
    }else {
        echo "Erro ao efetuar o cadastro da venda! " . mysqli_error($con);
    }

    mysqli_close($con);

    ?>
    <hr>
    
    <a href="/CRUD/crud/menu.php">Voltar para o Menu</a>
</body>
</html>


