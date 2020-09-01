// Incluir essa linha em seu HTML
{/* <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script> */}

$("#cep").focusout(function() {
    $.ajax({
        url: 'https://viacep.com.br/ws/' + $(this).val() + '/json/unicode/',
        dataType: 'json',
        success: function(resposta) {
            $("#logradouro").val(resposta.logradouro);
            $("#complemento").val(resposta.complemento);
            $("#bairro").val(resposta.bairro);
            $("#cidade").val(resposta.localidade);
            $("#uf").val(resposta.uf);
            $("#numero").focus();
        }
    });
});

