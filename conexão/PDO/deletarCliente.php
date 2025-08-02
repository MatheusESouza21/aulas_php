<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excluir Cliente</title>
    <link rel="stylecheet href='style.css">
</head>

<body>
    <?php include 'index.php'; ?>
    <h2>Excluir Cliente</h2>
    <form action="processarExclusao.php" method="post">
        <label for="id">ID do Cliente:</label>
        <input type="number" id="id" name="id" required>

        <button type="submit">Excluir Cliente</button>
</body>

</html>