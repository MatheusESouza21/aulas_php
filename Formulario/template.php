<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciador de Tarefas</title>
</head>

<body>
    <h1>Gerenciador de Tarefas</h1>
    <!--Aqui ira o restante do codigo-->
    <form>
        <fieldset>
            <legend>Nova Tarefa</legend>
            <label>
                Tarefa:
                <input type="text" name="nome" />
            </label>
            <label>
                Descrição (opcional):
                <textarea name="descricao"></textarea>
            </label>
            <label>
                Prazo (opcional):
                <input type="text" name="prazo">
            </label>
            <fieldset>
                <legend>Prioridade:</legend>
                <label>
                    <input type="radio" name="Prioridade" value="baixa" checked />
                    Baixa
                    <input type="radio" name="Prioridade" value="baixa" checked />
                    Média
                    <input type="radio" name="Prioridade" value="baixa" checked />
                    Alta
                </label>
            </fieldset>
            <label>
                Tarefa concluída:
                <input type="checkbox" name="concluida" value="sim" />
            </label>
            <input type="submit" value="Cadastrar" />
        </fieldset>
    </form>

    <table>
        <tr>
            <th>Tarefas</th>
        </tr>
        <?php
        foreach ($lista_tarefas as $tarefa):
            ?>
            <tr>
                <td>
                    <?php
                    echo $tarefa;
                    ?>
                </td>
            </tr>
        <?php
        endforeach; ?>
    </table>
</body>

</html>