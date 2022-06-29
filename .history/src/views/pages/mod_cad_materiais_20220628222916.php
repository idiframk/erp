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
            <form id="form_cad_obra" method="POST" autocomplete="on" enctype="multipart/form-data"
                class="form-horizontal">
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

                                    <div class="form-group col-md-2 bt_add_gpmt">
                                        <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">

                                            <div class="btn-group" role="group" aria-label="Third group">
                                                <button type="button" class="btn btn-success"> <i
                                                        class="fas fa-plus"></i></button>
                                            </div>
                                        </div>
                                    </div>


                                </div>

                                <hr>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label class="form-label">Tipo do Produto/Material:<span
                                                class="text-danger">*</span>
                                        </label>
                                        <input type="text" name="type_material" class="form-control text-uppercase"
                                            placeholder="Insira o tipo do Produto/Material em um texto breve mais objetivo possivel">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="form-label">Dimensão:<span class="text-danger">*</span>
                                        </label>
                                        <input type="text" name="dimensao" class="form-control text-uppercase"
                                            placeholder="Insira as dimensões do Produto/Material">
                                    </div>

                                    <div class="form-group col-md-4">
                                        <div class="form-group" data-select2-id="55">
                                            <label>Cor:<span class="text-danger">*</span></label>


                                            <select class="form-control select2bs4 select2-hidden-accessible"
                                                style="width: 100%;" data-select2-id="17" tabindex="-1"
                                                aria-hidden="true">
                                                <option selected="selected" data-select2-id="19">Selecione a Und. Med.
                                                </option>
                                                <option data-select2-id="57"> AM - AMRELO</option>
                                                <option data-select2-id="58"> BR - BRANCO</option>
                                                <option data-select2-id="59">VERD - VERDE</option>
                                                <option data-select2-id="60">VERM - VERMELHO</option>
                                                <option data-select2-id="61"> INC - INCOLOR</option>
                                                <option data-select2-id="62"> PT - PRETO</option>
                                            </select>

                                        </div>
                                    </div>



                                    <div class="form-group col-md-2 bt_add_gpmt">
                                        <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">

                                            <div class="btn-group" role="group" aria-label="Third group">
                                                <button type="button" class="btn btn-success"> <i
                                                        class="fas fa-plus"></i></button>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="form-group col-md-4">
                                        <div class="form-group" data-select2-id="55">
                                            <label>U.M:<span class="text-danger">*</span></label>
                                            <select class="form-control select2bs4 select2-hidden-accessible"
                                                style="width: 100%;" data-select2-id="17" tabindex="-1"
                                                aria-hidden="true">
                                                <option selected="selected" data-select2-id="19">Selecione a Und. Med.
                                                </option>
                                                <option data-select2-id="57"> G -GRAMA</option>
                                                <option data-select2-id="57">KG - KILO GRAMA</option>
                                                <option data-select2-id="58"> L - LITRO</option>
                                                <option data-select2-id="59">PC - PECA</option>
                                                <option data-select2-id="60">CX - CAIXA</option>
                                                <option data-select2-id="61">UN - UNIDADE</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group col-md-2 bt_add_gpmt">
                                        <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">

                                            <div class="btn-group" role="group" aria-label="Third group">
                                                <button type="button" class="btn btn-success"> <i
                                                        class="fas fa-plus"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <hr>
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label class="col-form-label">Apelido do Material como é Conhecido em campo:
                                            <span class="text-danger">*</span></label>
                                        <input type="text" name="apelido" class="form-control text-uppercase"
                                            placeholder="Insira um nome como o material como é conhecido pela produção ">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="col-form-label">Ref. Fabricante: <span
                                                class="text-danger">*</span></label>
                                        <input type="text" name="ref_fabric" class="form-control text-uppercase"
                                            placeholder="Insira referência do Fabricante ">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="col-form-label">Ref. Fornecedor: <span
                                                class="text-danger">*</span></label>

                                        <input type="text" name="ref_fornecedor" rows="3"
                                            class="form-control text-uppercase"
                                            placeholder="Insira referência do Fornecedor"></input>
                                    </div>

                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label class="col-form-label">Observação de uso o algo relevante: <span
                                                class="text-danger">*</span></label>
                                        <textarea type="text" name="obs_material" rows="3"
                                            class="form-control text-uppercase"
                                            placeholder="Descreva em um texto breve objetivo Uso, aplicação, ou algo relevante no Geral."></textarea>
                                    </div>

                                </div>
                                <hr>
                                <div class="form-row">

                                    <div class="form-group col-md-12">
                                        <label class="col-form-label">Decrição do Produto/Material Curto: <span
                                                class="text-danger">*</span></label>
                                        <input type="text" name="desc_mat_curt" rows="3"
                                            class="form-control text-uppercase" disabled></input>
                                    </div>


                                    <div class="form-group col-md-12">
                                        <label class="col-form-label">Decrição do Produto/Material longa: <span
                                                class="text-danger">*</span></label>
                                        <textarea type="text" name="desc_mat_long" rows="3"
                                            class="form-control text-uppercase" disabled></textarea>
                                    </div>

                                </div>
                            </div>
                            <div class="col-xl-4">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="bi-file-earmark-person"></i>
                                        Foto (Opcional)
                                    </div>
                                    <div class="card-body">

                                        <div style="text-align:center" class="image_area">
                                            <form method="post">
                                                <label for="upload_image">
                                                    <img width="150px"
                                                        src="<?php echo $base; ?>/assets/img/produto_sem_foto.jpg"
                                                        id="uploaded_image" class="rounded" style="width:200;">
                                                    <div class="overlay">
                                                        <div class="text">Click para trocar a imagem</div>
                                                    </div>
                                                    <input type="file" name="image" class="image" id="upload_image"
                                                        style="display:none">
                                                </label>
                                            </form>
                                        </div>

                                        <table width="100%">
                                            <tbody>
                                                <tr>
                                                    <td align="center"><span id="foto_produto"></span></td>
                                                </tr>
                                                <tr>
                                                    <td align="center"><span id="foto_referencia_produto"></span></td>
                                                </tr>
                                                <tr>
                                                    <td align="center"><span id="foto_nome_produto"></span></td>
                                                </tr>
                                                <tr>
                                                    <td style="padding-top: 15px" align="center"><span
                                                            id="foto_info_produto"></span></td>
                                                </tr>
                                            </tbody>
                                        </table>



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

<script>
$(function() {

    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
        theme: 'bootstrap4'
    })

})


(() => {
        'use strict';
        const forms = document.querySelectorAll('.needs-validation');
        Array.prototype.slice.call(forms).forEach((form) => {
            form.addEventListener('submit', (event) => {
                if (!form.checkValidity()) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.classList.add('was-validated');
            }, false);
        });
        var email = document.getElementById('validationCustomEmail');
        email.oninput = () => {
            const re =
                /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            if (!re.test(email.value)) {
                email.setCustomValidity("Invalid field.");
                email.classList.add('is-invalid');
            } else {
                email.classList.remove('is-invalid');
                email.setCustomValidity("")
            }
        }
    }

)();

//Carregar SELECT CIDADES de forma dinâmica
function getCidade(valor) {
    //Exibe mensagem na subcategoria enquanto carrega dados
    $("select[name=" + $(valor).attr("cidade") + "]").html('<option value="0">Carregando...</option>');
    //Envia código do grupo para selecionar as categorias
    $.post(base() + '/list_ciddades', {
            grupo: $(valor).val()
        },
        function(dados) {
            $("select[name=" + $(valor).attr("cidade") + "]").html(dados);
        })
}