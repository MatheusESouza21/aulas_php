<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "empresa_teste";

$conexao = new mysqli($servidor, $usuario, $senha, $banco);

if ($conexao->connect_error) {
    die("Erro de conexão: " . $conexao->connect_error);
}
//Captura os dados do fórmulario (nome de conexão)
$nome = $_POST["nome"];

//captura a consulta SEM proteção contra SQL injecion
$sql = "SELECT * FROM cliente_test WHERE nome = '$nome'";
$result = $conexao->query($sql);
// se houver resultado, o login foi bem-sucedido
if ($result->num_rows > 0) {
    header("Location: area_restrita.php");
    //Garante  que o código não continue executando
    exit();
} else {
    echo "Nome não encontrado.";
}
$conexao->close();
?>