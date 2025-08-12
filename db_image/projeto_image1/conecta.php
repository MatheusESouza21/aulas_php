<?php
//DEFINIÇÂO DAS PRETENCIAIS DE CONEXAO
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "armazena_imagens";

//CRIANDO A CONEXÃO
$conexao = new mysqli($servername, $username, $password, $dbname);

//VERIFICANDO SE OUVE ERRO NA CONEXAO
if ($conexao->connect_error) {
    die("Falha na Conexão: " . $conexao->connect_error);
}
?>