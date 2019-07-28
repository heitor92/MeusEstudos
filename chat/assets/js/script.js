function abrirChat() {
    window.open("/MeusEstudos/chat/chat", "chatWindow", "width=400,height=400");
}

function iniciarSuporte() {
    setTimeout(getChamado, 2000);
}

function getChamado() {
    $.ajax({
        'url': '/MeusEstudos/chat/ajax/getChamado',
        dataType: 'json',
        success: function (json) {

            resetChamados();

            if (json.chamados.length > 0) {
                for (var i in json.chamados) {
                    if (json.chamados[i].status == '1') {
                        $('#areadechamados').append('<tr class="chamado" data-id="' + json.chamados[i].id + '"> \
                        <td>' + json.chamados[i].data_inicio + '</td>\
                        <td>' + json.chamados[i].nome + '</td>\
                        <td>Em atendimento</td>\
                        </tr>');
                    } else {
                        $('#areadechamados').append('<tr class="chamado" data-id="' + json.chamados[i].id + '"> \
                        <td>' + json.chamados[i].data_inicio + '</td>\
                        <td>' + json.chamados[i].nome + '</td>\
                        <td><button onclick="abrirChamado(this)">Abrir chamado</button></td>\
                        </tr>');
                    }

                }
            }
            setTimeout(getChamado, 2000);
        },
        error: function () {

            setTimeout(getChamado, 2000);
        }

    });
}

function resetChamados() {
    $('.chamado').remove();
}

function abrirChamado(obj) {
    var id = $(obj).closest('.chamado').attr('data-id');

    window.open('/MeusEstudos/chat/chat?id=' + id, 'chatWindow', 'width=400, height=400');
}

function keyUpChat(obj, event) {
    if (event.keyCode == 13) { // tecla enter
        var msg = obj.value;
        obj.value = '';

        var dt = new Date();
        var hr = dt.getHours() + ':' + dt.getMinutes();
        var nome = $('.inputarea').attr('data-nome');

        $('.chatarea').append('<div class="msgitem"> \
        '+ hr + ' <strong>' + nome + '</strong>: \
        '+ msg + '</div>');

        $.ajax({
            url: '/MeusEstudos/chat/ajax/sendmessage',
            type: 'POST',
            data: { msg: msg }
        });
    }
}

function updateChat() {
    $.ajax({
        url: '/MeusEstudos/chat/ajax/getMessage',
        type: 'POST',
        dataType: 'json',
        success: function (json) {
            if (json.mensagens.length > 0) {
                for (var i in json.mensagens) {
                    var hr = json.mensagens[i].data_enviado;
                    if(json.mensagens[i].origem == 0){
                        var nome = 'Suporte';
                    } else{
                        var nome = $('.inputarea').attr('data-nome');
                    }
                    
                    var msg = json.mensagens[i].mensagem;
                    $('.chatarea').append('<div class="msgitem"> \
                '+ hr + ' <strong>' + nome + '</strong>: \
                '+ msg + '</div>');
                }
            }
            setTimeout(updateChat, 2000);
        },
        error: function () {

            setTimeout(updateChat, 2000);
        }
    });
}