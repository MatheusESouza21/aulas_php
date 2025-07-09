<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saida</title>
</head>

<body>
    <?php
    print "teste <br>";
    print "Olá, mundo <br>";
    print "Escape 'chars' são os MESMOS como em C\n <br>";
    print "Você pode ter quebras de linhas em uma string <br>";
    print 'Uma string pode usar "aspas-duplas". Isso é muito legal!<br>';
    print 'Ainda pode-se usar aspas simples dessa forma It\'s cool<br>';
    ?>

    <?php
    echo "texto";
    echo "Isso arange
    várias linhas. As novas linhas serâo
    saída também";
    echo "Escape 'chars' são os MESMOS como em C\n";
    echo "Você pode ter quebras de linhas em uma string";
    echo 'Isso abrange\multiplas linhas. A nova linha será \na saída também.';
    echo 'Caracteres escaping são feitos \"Como esse\"."';
    ?>

</body>

</html>