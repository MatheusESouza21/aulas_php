<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo array 2</title>
</head>
<body>
    <?php
        $estados = array("PR","SC","RS","SP","RJ","MG","ES","BA");
        echo "ORIGINAL: ";
        print_r($estados);
        echo "hr/>STRTOLOWER: Convertendo para minúsculas<br/>";
        for ($i = 0; $i < count($estados); $i++){
            $estados[$i] = strtolower($estados[$i]);
        }
        echo "STRTOLOWER: "; print_r($estados);
        echo "<hr/>SHIFT Retira o primeiro elemento do array<br/>";
        $rotaciona = array_shift($estados);
        echo "SHIFT: "; print_r($estados);
        echo "<hr/>POP: Extrai um elemento do final do array<br/>";
        array_pop($estados);
        echo "POP:"; print_r($estados);
        echo "<hr/>PUSH: Adiciona um ou mais elementos no final de um array<br/>";
        array_push($estados, 'pr');
        echo "PUSH: "; print_r($estados);
        echo "<hr/>REVERSE: "; print_r($inverso);
        echo "<hr/>SORT: Ordena um array com os elementos na ordem inversa<br/>";
        $inverso = array_reverse($estados);
        echo "REVERSE: "; print_r($inverso);
        echo "<hr/>SORT: Ordena um array<br/>";
        sort($estados);
        echo "SORT: "; print_r($estados);
        echo "SLICE: Extrai uma parcela de um array<br/>";
        $dividir = array_slice($estados,1,2);
        echo "SLICE: "; print_r($dividir); echo "<br/>";

    ?>

</body>
</html>