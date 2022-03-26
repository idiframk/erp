<!-- /.modal -->
<div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title">CONFIRMAR EXCLUSÃO</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <p><?= $edit_Obra['obra_cnpj'] ?> | <?= $edit_Obra['obra_razao'] ?></p>

        </div>
        <div class="modal-footer">
            <button id="cancelar" type="button" class="btn btn-sm btn-danger" data-dismiss="modal"><i
                    class="fa fa-times"></i>
                Cancelar</button>
            <button id="salvar" type="button" onclick="cad_obra()" class="btn btn-sm btn-success"><i
                    class="fa fa-save"></i>
                Salvar</button>
        </div>
    </div>

    <script>
    //Salvar dados
    function cad_obra() {


        $("#salvar").prop("disabled", true);
        $("#cancelar").prop("disabled", true); // teste
        var dados = $('#form_cad_obra').serialize();
        $.ajax({
            type: 'POST',
            dataType: 'json',
            url: base() + '/mod_edit_obras/<?= $edit_Obra['obra_id']; ?>/excluir', ///aqui testar
            async: true,
            data: dados,
            success: function(data) {
                if (data['retorno'] == 1) {

                    Command: toastr["success"]("Exclusão Realizado com sucesso", "Sucesso!");
                    setTimeout(function() {
                        window.location = "<?php $base; ?>/cad_obra"; //lista geral<=
                    }, 2000);

                }
                else if (data['retorno'] == 0) {
                    $("#salvar").prop("disabled", false);
                    $("#cancelar").prop("disabled", false);
                    Command: toastr["warning"]("As alterações não foram salvas, erro no sistema",
                        "Erro!");
                }
            }
        });


    }
    </script>