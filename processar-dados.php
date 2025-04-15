<?php
require_once 'config.php';

$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$assunto = $_POST['assunto'];
$mensagem = $_POST['mensagem'];
$data_atual = date('d/m/Y');
$hora_atual = date('H:i:s');



$smtp = $conn->prepare("INSERT INTO mensagens (nome, email, telefone, assunto, mensagem, data, hora) VALUES (?, ?, ?, ?, ?, ?, ?)");
$smtp->bind_param("sssssss", $nome, $email, $telefone, $assunto, $mensagem, $data_atual, $hora_atual);

if($smtp->execute()){
    echo "Mensagem enviada com sucesso!";
} else {
    echo "Erro no envio da mensagem: " . $smtp->error;
}

$smtp->close();
$conn->close();
?>
