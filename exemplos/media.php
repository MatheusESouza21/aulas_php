<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Média</title>
</head>
<body>
    <?php
    //Declara váriavel numérica
        $nota = 2.9;
    //Verifica se é maior ou menor que 7
        if ($nota >=7) {
            echo "Aprovado com nota: $nota";
        } if ($nota >= 3 && $nota <7){
            echo "Pegou exame com nota: $nota";
        } if ($nota <3) {
            echo "Reprovado com nota: $nota";
        }
    ?>
    
</body>
</html>