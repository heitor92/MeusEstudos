function abrirChat() {
    window.open("/MeusEstudos/chat/chat", "chatWindow", "width=400,height=400");
}

function iniciarSuporte(){
    setTimeout(getChamado, 2000);
}

function getChamado(){
    $.ajax({
        'url' : '/MeusEstudos/chat/ajax/getChamado',
        dataType: 'json',
        success: function(json){

            resetChamados();

            if(json.chamados.length > 0){
                for(var i in json.chamados){
                    if(json.chamados[i].status == '1'){
                        $('#areadechamados').append('<tr class="chamado" data-id="' + json.chamados[i].id + '"> \
                        <td>' + json.chamados[i].data_inicio + '</td>\
                        <td>' + json.chamados[i].nome +'</td>\
                        <td>Em atendimento</td>\
                        </tr>');
                    } else {
                        $('#areadechamados').append('<tr class="chamado" data-id="' + json.chamados[i].id + '"> \
                        <td>' + json.chamados[i].data_inicio + '</td>\
                        <td>' + json.chamados[i].nome +'</td>\
                        <td><button onclick="abrirChamado(this)">Abrir chamado</button></td>\
                        </tr>');
                    }
                    
                }
            }
            setTimeout(getChamado, 2000);
        },
        error: function(){

            setTimeout(getChamado, 2000);
        }

    });
}

function resetChamados(){
    $('.chamado').remove();
}

function abrirChamado(obj){
    var id = $(obj).closest('.chamado').attr('data-id');

    window.open('/MeusEstudos/chat/chat?id=' + id, 'chatWindow', 'width=400, height=400');
}