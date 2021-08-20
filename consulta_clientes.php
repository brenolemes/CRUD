<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Consulta</title>
</head>
<body>
    <h1>Tabela</h1>
    <hr>
<?php
require "_banco/consulta_bd.php";
?>


    <h3>Clientes</h3>


        <div class="tabela_clientes">
            <table>
            
                <tr>
                    <td>cpf</td>
                    <td>Nome</td>
                    <td>Email</td>
                    <td>Nascimento</td>
                    <td>Endereco</td>
                    <td>Celular</td>
                </tr>

                <?php
                while($exibe = mysqli_fetch_row($resultado_clientes)) {
                    ?>
                    <tr>
                        <td><?php echo $exibe[0]; ?></td>
                        <td><?php echo $exibe[1]; ?></td>
                        <td><?php echo $exibe[2]; ?></td>
                        <td><?php echo $exibe[3]; ?></td>
                        <td><?php echo $exibe[4]; ?></td>
                        <td><?php echo $exibe[5]; ?></td>
                    </tr>

                <?php

                } ?>
            </table>
        </div>
    
    <?php
    mysqli_close($con);
    ?>
    <hr>
    <a href="/CRUD/crud/consulta_consumo.php">Consultar produtos vendidos</a> <br> <br>
    <a href="/CRUD/crud/atualiza.php">Atualizar um cliente</a> <br> <br>
    <a href="/CRUD/crud/menu.php">Voltar para o Menu</a> 
</body>
</html>