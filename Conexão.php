<?php 
// Banco de Dados
$servidor = "localhost:3307";
$usuario = "root";
$senha = "2204ckss";
$banco = "login";

// Conexão banco
$conn = mysqli_connect($servidor, $usuario, $senha, $banco);
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}
?>
