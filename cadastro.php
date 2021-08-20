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
        <input type="text" name="nome" placeholder="Nome completo" required> <br>
        <label>CPF:</label>  
        <input type="text" name="cpf" placeholder="Digite o CPF..." required> <br>
        <label>Email:</label>  
        <input type="email" name="email" placeholder="exemple@exemple.com" required> <br>
        <label>Data de nascimento:</label> 
        <input type="date" name="data" > <br>
        <label>EndereÃ§o:</label>  
        <input type="text" name="endereco" placeholder="Digite o endereÃ§o..." > <br>
        <label>Celular:</label>  
        <input type="text" name="celular" placeholder="Digite o telefone celular..."> <br>
        <input type="submit" value="Cadastrar">
    </form>
    <hr>
    <a href="menu.php">Voltar</a>
</body>
</html>