<?php
//Definição das credenciais de conexão
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "armazena_imagem";

// Cria a conexão
$conexao = new mysqli($servername, $username, $password, $dbname);

// VERIFICANDO CONEXÃO
if ($conexao->connect_error) {
    die("Falha na conexão: " . $conexao->connect_error);
} else {
    echo "Conexão bem-sucedida!";
}
?>