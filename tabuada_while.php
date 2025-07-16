<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada PHP</title>
</head>
<body>
    <?php
        $num = 1;
        $i = 1;

        while ($i <= 10 && $num <= 10){
            echo "<h2>Tabuada do $num</h2>";
            while ($i <= 10) {
                echo "$num x $i = " . ($num * $i) . "<br>";
                $i++; // Incrementa o contador
            }
            $i = 1;
            $num++;
        }
    ?>
    
</body>
</html>