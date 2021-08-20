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

    $sqlcon = "SELECT cpf, nome, email, nascimento, endereco, celular FROM Clientes";

    $resultado = mysqli_query($con, $sqlcon);
    

    while($exibe = mysqli_fetch_row($resultado)) {
        echo "<hr>";
        echo "<table>"; 
            echo  "<tr><td>ID:</td>";
            echo "<td>".$exibe[0]."</td></tr>";
            echo  "<tr><td>Nome:</td>";
            echo "<td>".$exibe[1]."</td></tr>";
            echo  "<tr><td>Email:</td>";
            echo "<td>".$exibe[2]."</td></tr>";
            echo  "<tr><td>Nascimento:</td>";
            echo "<td>".$exibe[3]."</td></tr>";
            echo  "<tr><td>Endereco:</td>";
            echo "<td>".$exibe[4]."</td></tr>";
            echo  "<tr><td>Celular:</td>";
            echo "<td>".$exibe[5]."</td></tr>";
        echo "</table>";
    }
  
    mysqli_close($con);
    ?>

    <hr>
    <a href="menu.php">Voltar</a>
</body>
</html>