<!-- /.modal -->
<div class="modal-dialog modal-xl">
    <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title">CADASTRAR PRODUTO/MATERIAL</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form id="form_cad_obra" method="POST" autocomplete="on" enctype="multipart/form-data">
                <div class="card card-primary ">


                </div>
            </form>
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
</div>