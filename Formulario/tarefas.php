<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
session_start();

    if (isset($_GET["nome"]) && $_GET["nome"] != "") {
        $tarefa = array();
    }
    $lista_tarefas = array();

    if (isset($_SESSION["lista_tarefas"])) {
        $lista_tarefas = $_SESSION["lista_tarefas"];
    } else{
        $lista_tarefas = array();
    }

    include"template.php";
//session_desroy();
    ?>
    
</body>
</html>