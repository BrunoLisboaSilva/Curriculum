<?php


$server = 'localhost';
$usuario = 'root';
$senha = '';
$banco = 'portifolio_formulario';

$conn = new mysqli($server, $usuario, $senha, $banco);

if($conn->connect_error){
    die("Falha ao se comunicar com o banco de dados: " . $conn->connect_error);
}

?>