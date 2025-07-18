<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Formulario Cliente</title>
    <script src="validacao.js"></script>
    <link rel="stylesheet" type="text/css" href="estilo.css">
</head>

<body>

    <ul>

        <li><a href="Menu.html">Inicio</a>
        <li><a href="#">Novidade</a>
        <li class="dropdown">
            <a href="javascript:void(0)" class="dropbtn">Cadastro</a>
            <div class="dropdown-content">
                <a href="Formulario_produto.html">Novo jogo</a>
                <a href="Formulario_cliente.html">Novo cliente</a>
                <a href="formulario_fornecedor.html">Novo fornecedor</a>
            </div>
        </li>
    </ul>
    <center>
        <img src="logo.png" alt="Logo" height="100" width="100" />
        <h1>Cadastro de Cliente</h1>
        <form method="get" action="back_cliente.php">
            <table align="center">
                <tr>
                    <td>Nome do cliente:</td>
                    <td><input type="text" name="nome_cliente" size="20" maxlength="15"></td>
                </tr>
                <tr>
                    <td>Endereço do cliente:</td>
                    <td><input type="text" name="endereco_cliente" size="20" maxlength="15"></td>
                </tr>
                <tr>
                    <td>CNPJ do cliente:</td>
                    <td><input type="text" name="cnpj" required onkeypress="mascaras(this, formatarCNPJ)"></td>
                </tr>
                <tr>
                    <td>E-mail do cliente:</td>
                    <td><input type="text" name="email_cliente" size="20" maxlength="30"></td>
                </tr>
                <tr>
                    <td><label for="Gênero dos jogos">Gênero dos jogos</label></td>

                    <td><select name="genero" id="genero">Ação
                            <option value="Acão">Ação</option>Ação
                            <option value="Aventura">Aventura</option>Aventura
                            <option value="RPG">RPG</option>RPG
                            <option value="Simulação">Simulação</option>Simulação
                            <option value="Estratégia">Estratégia</option>Estratégia
                            <option value="Tiro">Tiro</option>Tiro
                            <option value="Esporte">Esporte</option>Esporte
                            <option value="Corrida">Corrida</option>Corrida
                            <option value="Terror">Terror</option>Terror
                            <option value="Puzzle">Puzzle</option>Puzzle
                            <option value="Musical">Musical</option>Musical
                            <option value="Party">Party</option>Party
                            <option value="MMO">MMO</option>MMO
                            <option value="Visual Novel">Visual Novel</option>VisualNovel


                        </select></td>
                </tr>
                <td>
                    <br>
                    <input type="submit" value="Cadastrar Cliente">
                    <input type="reset" value="Limpar">
                </td>
            </table>
        </form>
    </center>
</body>

</html>