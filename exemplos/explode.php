<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        foreach (file("livros.txt") as $livro) {
            list($titulo, $autor) = explode(",", $livro);
        
    ?>
        <p> Titulo: <?= $titulo ?>, Autor: <?= $autor ?></p>
    <?php
        }
    ?>
</body>
</html>