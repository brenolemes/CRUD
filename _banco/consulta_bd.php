
<?php

require "conexao.php";

$sql_clientes = "SELECT cpf, nome, email, nascimento, endereco, celular FROM Clientes";

$resultado_clientes = mysqli_query($con, $sql_clientes);

$sql_consumo = "SELECT id_consumo, tipo_comida, preco, quantidade, total, cpf_id FROM Consumo";

$resultado_consumo = mysqli_query($con, $sql_consumo);

?>
