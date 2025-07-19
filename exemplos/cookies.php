<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies Exemplo 1</title>
</head>
<body>
    <?php
    //Sintaxe: setcookies(nome, value, expire, path, domain, secure, httponly)

    //Exemplo 1: Criando um cookie que dura uma hora

    setcookie("nome_usuario",  "João Silva", time() + 3600); //Expira em uma hora (3600 segundos)        

    echo "Cookie 'nome_usuario' criado com sucesso!";







    //Exemplo 2: Criando um cookie com mais opções
    
    //nome: "preferencias_site"
    //valor: "tema=escuro&idioma=pt-BR"
    //expira daqui a 7 dias
    //path: "/" (disponível em todo o site)
    //domain: "" (deixa o php determinar o domínio)
    //secure: false (não requer HTTPS)
    //httponly: true (não acessível via JavaScript - aumenta a segurança contra XSS)

    setcookie("preferencias_site", "tema=escuro&idioma=pt-BR", time() + (86400 * 7),
    "/", "", false, true); //86400 segundos = 1 dia

    echo "<br>Cookie 'preferencias_site' criado com sucesso!";
    ?>
    
    
</body>
</html>