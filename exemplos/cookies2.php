<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplos 2</title>
</head>
<body>
    <?php
    //verifica se o cookie 'nome_usuario' existe
    if (isset($_COOKIE['nome_usuario'])) {
        $nome = $_COOKIE['nome_usuario'];
        echo "Bem-vindo de volta ".htmlspecialchars($nome) . "!";
    } else{
        echo "Olá, visitante! Parece que você é novo por aqui.";
    }
    echo"<br>";

    //Recuperando o cookie de preferências
    if (isset($_COOKIE["preferencias_site"])) {
        $preferencias = $_COOKIE["preferencias_site"];
        echo "Suas preferências são: ".htmlspecialchars($preferencias);
    }
    ?>
</body>
</html>