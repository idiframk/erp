
//Função para pegar caminho absoluto PAGES
function base() {
    return $('base').attr('base');
}

//Chamar Modal para Cadastrar Registro Genérico
function cadastrar(valor) {
    
    let modal = $(valor).attr('modal');
    let tipo = $(valor).attr('tipo');
    let id_registro = $(valor).attr('id_registro'); 
    $.ajax({
        url: base() + modal,
        // type: "POST",
        async: true,
        data: {
            tipo: tipo,
            id_registro: id_registro
        },
        success: function (ajaxData) {
            $("#modal_global").html(ajaxData);
            $("#modal_global").modal('show', {
                backdrop: 'true'
            });
        }
    });
};