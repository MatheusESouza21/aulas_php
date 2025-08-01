<?php
require_once 'conexao.php';

$conexao = conectadb();

$nome = "Matheus Eduardo Souza";
$endereco = "Itinga";
$telefone = "123456789";
$email = "matt@teste";

$stmt = $conexao->prepare("INSERT INTO cliente (nome, endereco, telefone, email) VALUES (?, ?, ?, ?)");

$stmt->bind_param("ssss", $nome, $endereco, $telefone, $email);

if ($stmt->execute()) {
    echo "Cliente inserido com sucesso!";
} else {
    echo "Erro ao inserir cliente: " . $stmt->error;
}

$stmt->close();
$conexao->close();
?>