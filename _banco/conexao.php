<?php
$servername = "mysql.funarpen.mirasistemas.com.br";
$username = "funarpbr";
$password = "09funa31";
$name_db = "lanchonete_america";

$con = mysqli_connect($servername, $username, $password, $name_db);

if ($con) {
    //echo "Conexao feita com sucesso!";
}else {
    echo "Falha na conexão " . mysqli_connect_error();
}

?>