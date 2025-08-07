<?php
    function redimentionarImagem($imagem, $largura, $altura) {
    //OBTEM AS DIMENSÕES ORIGINAIS DA IMAGEM
    // getimagesize() RETORNA UM A A LARGURA E ALTURA DA IMAGEM
    list($larguraOriginal, $alturaOriginal) = getimagesize($imagem);

    //CRIA UMA NOVA IMAGEM EM BRANCO COM AS NOVAS DIMENSÕES 
    //imagecreatetruecolor() CRIA UMA IMAGEM EM BRANCO COM ALTA QUALIDADE
    $novaImagem = imagecreatetruecolor($largura, $altura);

    //CARREGA A IMAGEM ORIGINAL(jpeg) A PARTIR DO ARQUIVO
    //imagecreatefromjpeg() CARREGA UMA IMAGEM JPEG
    $imagemOriginal = imagecreatefromjpeg($imagem);
    //COPIA E REDIMENSIONA A IMAGEM ORIGINAL PARA A NOVA IMAGEM
    //imagecopyresampled() COPIA E REDIMENSIONA A IMAGEM
    imagecopyresampled($novaImagem, $imagemOriginal, 0, 0, 0, 0, $largura, $altura, $larguraOriginal, $alturaOriginal);

    //INICIA UM BUFFEER PARA GUARDAR A IMAGEM COMO TEXTO BINARIO
    //ob_start(); -- INICIA O "output buffering" GUARDANDO A SAIDA EM UM BUFFER

    ob_start();
    //imagejpeg() ENVIA A IMAGEM PARA O OUTPUT (QUE VAI PARA O BUFFER)
    imagepng($novaImagem);

    //OB_GET_CLEAN() PEGA O CONTEUDO DO BUFFER E LIMPA O BUFFER
    $dadosImagem = ob_get_clean();

    //libera a memória usada pelas imagens
    //imagedestroy($novaImagem); -- LIBERA A MEMÓRIA DA IMAGEM CRIADA
    imagedestroy($novaImagem);
    imagedestroy($imagemOriginal);

    //RETORNA A IMAGEM REDIMENSIONADA EM FORMATO BINÁRIO
    return $dadosImagem;
    }

    //CONFIGURAÇÃO DO BANCO DE DADOS
    $host="localhost";
    $dbname="armazena_imagem";
    $username="root";
    $password="";      

    try{
        //CONEXÃO COM O BANCO USANDO PDO
        $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    }

       
?>