<?php
    $bdServidor = "127.0.0.1"
    $bdUsuario = 'root'
    $bdSenha = ''
    $bdBanco = 'matheuseduardo_db'
    $conexao = mysql_connect($bdServidor, $bdUsuario, $bdSenha, $bdBanco);
        if (mysqli_connect_errno()) {
        echo "Problemas para conectar no banco. Verifique os dados!";
        die();
        }