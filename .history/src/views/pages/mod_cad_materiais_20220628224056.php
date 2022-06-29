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
                    <div class="card-header">
                        <h3 class="card-title">
                            <i class="fas fa-boxes"></i>
                            Cadastrar Produto/Material
                        </h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-8">
                                <hr>
                                <div class="form-row">
                                    <div class="form-group col-md-10">
                                        <div class="form-group" data-select2-id="55">
                                            <label>Grupo PDM:</label>
                                            <select class="form-control select2bs4 select2-hidden-accessible"
                                                style="width: 100%;" data-select2-id="17" tabindex="-1"
                                                aria-hidden="true">
                                                <option selected="selected" data-select2-id="19">ESCOLHA O GRUPO DO
                                                    MATERIAL</option>
                                                <option data-select2-id="57">PLUGUE ELETRICO, PREDIAL</option>
                                                <option data-select2-id="58">LUMINARIA EMERGENCIA BLOCO AUTONOMO
                                                </option>
                                                <option data-select2-id="59">ARGAMASSA REPAROS, INDUSTRIALIZADA
                                                </option>
                                                <option data-select2-id="60">ARGAMASSA, REPARO</option>
                                                <option data-select2-id="61">FILTRO, COMPONENTE</option>
                                                <option data-select2-id="62">ABRACADEIRA ENGATE RAPIDO</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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