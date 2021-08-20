<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deleta</title>
</head>
<body>
    <form method="POST" action="_banco/deleta_bd.php">
        <label>Quem deseja deletar:</label> 
        <input type="text" name="cpf_deleta" placeholder="Digite o cpf do cliente para deletar..." required> <br>
        <input type="submit" value="Deletar">
    </form>
    <hr>
    <a href="menu.php">Voltar para o Menu</a>
</body>
</html>