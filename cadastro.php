<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
        <form method="POST" action="cadastro_bd.php">
            <label>Nome:</label> 
            <input type="text" name="nome" placeholder="Digite seu nome..." required> <br>
            <label>Email:</label>  
            <input type="email" name="email" placeholder="Digite seu email..." required> <br>
            <label>Data de nascimento:</label> 
            <input type="date" name="data" placeholder="Digite sua data de nascimento..." > <br>
            <label>Endereço:</label>  
            <input type="text" name="endereco" placeholder="Digite seu endereço..." > <br>
            <label>Celular:</label>  
            <input type="text" name="celular" placeholder="Digite seu telefone celular..."> <br>
            <input type="submit" value="Cadastrar">
        </form>
</body>
</html>