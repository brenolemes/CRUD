<?php
$servername = "";
$username = "funarpbr";
$password = "";
$name_db = "lanchonete_america";

$con = mysqli_connect($servername, $username, $password, $name_db);

if ($con) {
    echo "Conexao feita com sucesso!";
}else {
    echo "Falha na conexão " . mysqli_connect_error();
}

?>