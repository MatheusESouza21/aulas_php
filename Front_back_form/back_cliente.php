<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Back End</title>
</head>

<body>
    <?php
    if (isset($_GET['nome_cliente']) && isset($_GET['endereco_cliente']) && isset($_GET['cnpj']) && isset($_GET['email_cliente']) && isset($_GET['genero'])) {
        echo "Recebido o cliente " . $_GET['nome_cliente']."<br/>";
        echo "Endereço: " . $_GET['endereco_cliente'] . "<br/>";
        echo "CNPJ: " . $_GET['cnpj'] . "<br/>";
        echo "Email: " . $_GET['email_cliente'] . "<br/>";
        echo "Gênero: ". $_GET['genero'] . "<br/>";
    } else {
        echo "Erro: Dados não recebidos corretamente.";
    }
    ?>

</body>

</html>