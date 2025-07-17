// Executar mascaras
function mascaras(o, f) {
    const objeto = o;
    const funcao = f;
    setTimeout(() => {
        objeto.value = funcao(objeto.value);
    }, 1);
}

function formatarCNPJ(valor) {
    // Remove caracteres não numéricos
    valor = valor.replace(/\D/g, "");

    if (valor.length <= 14) {
        // Coloca ponto entre o segundo e o terceiro dígitos
        valor = valor.replace(/^(\d{2})(\d)/, "$1.$2");

        // Coloca ponto entre o quinto e o sexto dígitos
        valor = valor.replace(/^(\d{2})\.(\d{3})(\d)/, "$1.$2.$3");

        // Coloca uma barra entre o oitavo e o nono dígitos
        valor = valor.replace(/\.(\d{3})(\d)/, ".$1/$2");

        // Coloca um hífen depois do bloco de quatro dígitos
        valor = valor.replace(/(\d{4})(\d)/, "$1-$2");
    }

    return valor;
}

function executaMascara() {
    objeto.value = funcao(objeto.value)

}


function catjogo(variavel) {
    variavel = variavel.replace(/\d/g, "")


    return variavel
}