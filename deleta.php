<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deleta</title>
</head>
<body>
        <form method="POST" action="deleta_bd.php">
            <label>Quem deseja deletar:</label> 
            <input type="text" name="id" placeholder="Digite o id do cliente para deletar..." required> <br>
            <input type="submit" value="Deletar">
        </form>
</body>
</html>