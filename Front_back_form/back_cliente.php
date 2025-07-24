<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Back End</title>
</head>

<body>
    <?php
    // Verifica se os dados foram enviados corretamente
    if (isset($_GET['nome_cliente']) && isset($_GET['endereco_cliente']) && isset($_GET['cnpj']) && isset($_GET['email_cliente']) && isset($_GET['genero'])) {
        // Armazena os dados do cliente na sessão
        $cliente = array(
            "nome" => $_GET['nome_cliente'],
            "endereco" => $_GET['endereco_cliente'],
            "cnpj" => $_GET['cnpj'],
            "email" => $_GET['email_cliente'],
            "genero" => $_GET['genero']
        );

        $_SESSION['clientes'][] = $cliente;

        echo "Cliente cadastrado com sucesso!<br/>";
    } else {
        echo "Erro: Dados não recebidos corretamente.<br/>";
    }

    // Exibe os dados de todos os clientes cadastrados
    if (isset($_SESSION['clientes']) && count($_SESSION['clientes']) > 0) {
        echo "<h2>Clientes Cadastrados:</h2>";
        foreach ($_SESSION['clientes'] as $index => $cliente) {
            echo "<p><strong>Cliente " . ($index + 1) . ":</strong><br/>";
            echo "Nome: " . htmlspecialchars($cliente['nome']) . "<br/>";
            echo "Endereço: " . htmlspecialchars($cliente['endereco']) . "<br/>";
            echo "CNPJ: " . htmlspecialchars($cliente['cnpj']) . "<br/>";
            echo "E-mail: " . htmlspecialchars($cliente['email']) . "<br/>";
            echo "Gênero dos jogos: " . htmlspecialchars($cliente['genero']) . "<br/></p>";
        }
    } else {
        echo "<p>Nenhum cliente cadastrado.</p>";
    }
    ?>
</body>

</html>