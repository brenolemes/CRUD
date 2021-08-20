<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consumo</title>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
    <div class="consumo">
        <form action="consumo_bd.php" method="POST">
            <label>CPF do cliente</label> <br>
            <input type="search" name="cpf"> <br>
            <label>Comida</label> <br>
            <select name="tipo_comida">
                <option aria-placeholder></option>
                <option value="feijoada" name="feijoada">Feijoada</option>
                <option value="churrasco" name="churrasco">Churrasco</option>
                <option value="marmita" name="marmita">Marmita</option>
                <option value="especial_mignon" name="especial_mignon">Especial_mignon</option>
            </select> <br>
            <label>Preco</label> <br>
            <input id="preco" type="text" name="preco"> <br>
            <label>Quantidade</label> <br>
            <input id ="quantidade" type="number" name="quantidade"> <br>
            <label>Total</label> <br>
            <input id="total" type="text" name="total"> <br>
            <input type="submit" value="Finalizar"> 
            <hr>
            <a href="menu.php">Voltar</a>
        </form>
    </div>
</body>
</html>