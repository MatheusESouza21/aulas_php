<?php
require_once 'conexao.php';
$conexao = conectadb();
$id_cliente = 1; // ID do cliente a ser deletado
$stmt = $conexao->prepare("DELETE FROM cliente WHERE id_cliente = ?");
$stmt->bind_param("i", $id_cliente);

if ($stmt->execute()) {
    echo "Cliente excluido com sucesso!";
} else {
    echo "Erro ao excluir cliente: " . $stmt->error;
}

$stmt->close();
$conexao->close();
?>