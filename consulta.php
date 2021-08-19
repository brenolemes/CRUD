<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta</title>
</head>
<body>
        <form method="POST" action="consulta_bd.php">
            <label>ID da pessoa que deseja consultar:</label> 
            <input type="text" name="id_consulta" placeholder="Digite o ID do cliente para consultar" required> <br>
            <input type="submit" value="Consultar">
        </form>
</body>
</html>