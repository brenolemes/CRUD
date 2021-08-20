<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualiza</title>
</head>
<body>
    <form method="POST" action="atualiza_bd.php">
        <label>Nome:</label> 
        <input type="text" name="nome" placeholder="Digite o nome..." required> <br>
        <label>Email:</label>  
        <input type="email" name="email" placeholder="Digite o email..." required> <br>
        <label>Data de nascimento:</label> 
        <input type="date" name="data" placeholder="Digite a data de nascimento..." > <br>
        <label>EndereÃ§o:</label>  
        <input type="text" name="endereco" placeholder="Digite 0 endereÃ§o..." > <br>
        <label>Celular:</label>  
        <input type="text" name="celular" placeholder="Digite o telefone celular..."> <br>
        <label>CPF do cliente que deseja atualizar:</label>
        <input type="text" name="cpf">
        <input type="submit" value="Atualizar">
    </form>
    <hr>
    <a href="menu.php">Voltar</a>
</body>
</html>