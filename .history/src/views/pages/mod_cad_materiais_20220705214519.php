<!-- /.modal -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-maskmoney/3.0.2/jquery.maskMoney.min.js"></script>


<div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title">CADASTRAR PRODTUTO/MATERIAL</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form id="form_cad_material" method="POST" autocomplete="on" enctype="multipart/form-data"
                class="form-horizontal">
                <div class="card card-primary ">

                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label class="col-form-label">Grupo PDM: <span class="text-danger">*</span>
                                        </label>
                                        <div class="input-group mb-3">

                                            <select name="grup_name" class="form-control select2" style="width: 85%;"
                                                data-placeholder="Escolha um grupo para o material">
                                                <option selected="selected"></option>
                                                <option data-select2-id="57" value="1">PLUGUE ELETRICO</option>
                                                <option data-select2-id="58" value="2">LUMINARIA
                                                </option>
                                                <option data-select2-id="59" value="3">ARGAMASSA
                                                </option>
                                                <option data-select2-id="61" value="4">FILTRO</option>
                                                <option data-select2-id="62" value="5">ABRACADEIRA ENGATE RAPIDO
                                                </option>
                                            </select>
                                            <div class="input-group-prepend">
                                                <button type="button" class="btn btn-info p-1 btn-sm"><i
                                                        class="fas fa-plus"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label class="form-label">Tipo do Produto/Material:<span
                                                class="text-danger">*</span>
                                        </label>
                                        <input type="text" name="type_material" class="form-control text-uppercase"
                                            placeholder="Insira o tipo do Produto/Material em um texto breve mais objetivo possivel">
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label class="form-label">Dimensão:<span class="text-danger">*</span>
                                        </label>
                                        <input type="text" name="dimensao" class="form-control text-uppercase"
                                            placeholder="Insira as dimensões do Produto/Material">
                                    </div>
                                </div>
                            </div>


                            <div class="col-12">
                                <div class="form-row">
                                    <div class="form-group col-md-3">
                                        <label class="col-form-label">Cor <span class="text-danger">*</span>
                                        </label>
                                        <div class="input-group mb-3">

                                            <select name="cor" class="form-control select2" style="width: 85%;"
                                                data-placeholder="Escolha uma cor igual ou similar">
                                                <option selected="selected"></option>
                                                <option data-select2-id="12" value="1"> AM - AMRELO</option>
                                                <option data-select2-id="32" value="2"> BR - BRANCO</option>
                                                <option data-select2-id="3" value="3">VERD - VERDE</option>
                                                <option data-select2-id="56" value="4">VERM - VERMELHO</option>
                                                <option data-select2-id="61" value="5"> INC - INCOLOR</option>
                                                <option data-select2-id="78" value="6"> PT - PRETO</option>
                                            </select>
                                            <div class="input-group-prepend">
                                                <button type="button" class="btn btn-info p-1 btn-sm"><i
                                                        class="fas fa-plus"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label class="col-form-label">Unid. Med. <span class="text-danger">*</span>
                                        </label>
                                        <div class="input-group mb-3">

                                            <select name="um" class="form-control select2" style="width: 85%;"
                                                data-placeholder="Escolha uma cor igual ou similar">
                                                <option selected="selected"></option>
                                                <option data-select2-id="14" value="1"> G -GRAMA</option>
                                                <option data-select2-id="74" value="2">KG - KILO GRAMA</option>
                                                <option data-select2-id="94" value="3"> L - LITRO</option>
                                                <option data-select2-id="35" value="4">PC - PECA</option>
                                                <option data-select2-id="59" value="5">CX - CAIXA</option>
                                                <option data-select2-id="78" value="6">UN - UNIDADE</option>
                                            </select>
                                            <div class="input-group-prepend">
                                                <button type="button" class="btn btn-info p-1 btn-sm"><i
                                                        class="fas fa-plus"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label class="form-label">Estoq. Min.:<span class="text-danger">*</span>
                                        </label>

                                        <input type="text" name="estoq_mim" class="form-control text-uppercase"
                                            placeholder="Insira as dimensões do Produto/Material" required
                                            maxlength="15" onkeypress="return(moeda(this,'.',',',event))">
                                    </div>

                                    <div class="form-group col-md-3">
                                        <label class="form-label">Estoq. Max.:<span class="text-danger">*</span>
                                        </label>
                                        <input type="text" name="estoq_max" class="form-control text-uppercase"
                                            placeholder="Insira as dimensões do Produto/Material" required
                                            maxlength="15" onkeypress="return(moeda(this,'.',',',event))">
                                    </div>

                                </div>
                            </div>



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

                                <div class="form-group col-md-12">
                                    <label class="col-form-label">Observação de uso o algo relevante: <span
                                            class="text-danger">*</span></label>
                                    <textarea type="text" name="obs_material" rows="3"
                                        class="form-control text-uppercase"
                                        placeholder="Descreva em um texto breve objetivo Uso, aplicação, ou algo relevante no Geral."></textarea>
                                </div>
                                <hr>

                                <div class="form-group col-md-12">
                                    <label class="col-form-label">Decrição do Produto/Material Curto: <span
                                            class="text-danger">*</span></label>
                                    <input type="text" name="desc_mat_curt" rows="3"
                                        class="form-control text-uppercase"></input>
                                </div>


                                <div class="form-group col-md-12">
                                    <label class="col-form-label">Decrição do Produto/Material longa: <span
                                            class="text-danger">*</span></label>
                                    <textarea type="text" name="desc_mat_long" rows="3"
                                        class="form-control text-uppercase"></textarea>
                                </div>
                            </div>

                        </div>
                    </div>

            </form>
        </div>
    </div>
    <div class="modal-footer">
        <button id="cancelar" type="button" class="btn btn-sm btn-danger" data-dismiss="modal"><i
                class="fa fa-times"></i>
            Cancelar</button>
        <button id="salvar" type="button" onclick="cad_material()" class="btn btn-sm btn-success"><i
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


//Salvar dados
function cad_material() {

    let grup_name = $("select[name=grup_name]").val();
    let type_material = $("input[name=type_material]").val();
    let dimensao = $("input[name=dimensao]").val();
    let cor = $("select[name=cor]").val();
    let um = $("select[name=um]").val();
    let apelido = $("select[name=apelido]").val();
    let ref_fabric = $("input[name=ref_fabric]").val();
    let ref_fornecedor = $("select[name=ref_fornecedor]").val();
    let obs_material = $("input[name=obs_material]").val();
    let desc_mat_curt = $("input[name=desc_mat_curt]").val();
    let desc_mat_long = $("input[name=num_contrato]").val();


    if (grup_name == "") {
        Command: toastr["warning"]("O campo 'Grupo do Material' é de preenchimento obrigatório", "Atenção!");
    }
    else if (type_material == "") {
        toastr["warning"]("O campo 'Tipo do Material' é de preenchimento obrigatório", "Atenção!");

    } else if (dimensao == "") {
        toastr["warning"]("O campo 'Ref. de Dimensão' é de preenchimento obrigatório", "Atenção!");

    } else if (cor == "") {
        toastr["warning"]("O campo 'Cor' é de preenchimento obrigatório", "Atenção!");

    } else if (um == "") {
        toastr["warning"]("O campo 'Unidade de Medida' é de preenchimento obrigatório, caso não tenha user 'S/N'",
            "Atenção!");
    } else if (estoq_mim == "") {
        toastr["warning"]("O campo 'de Quantidade mínima' é de preenchimento obrigatório, caso não tenha user 'S/N'",
            "Atenção!");

    } else if (estoq_mim == "") {
        toastr["warning"](
            "O campo 'de Quantidade mínima' é de preenchimento obrigatório, caso não tenha user 'S/N'",
            "Atenção!");

    } else if (apelido == "") {
        toastr["warning"](
            "O campo 'Apelido ou Nome em que a produção identifica o material ' é de preenchimento obrigatório",
            "Atenção!");

    } else if (ref_fabric == "") {
        toastr["warning"](
            "O campo 'Referencia de fabricante ou similar' é obrigatório é de preenchimento obrigatório",
            "Atenção!");

    } else if (ref_fornecedor == "") {
        toastr["warning"]("O campo 'Referencia de fornecedor ou similiar' é de preenchimento obrigatório",
            "Atenção!");

    } else if (obs_material == "") {
        toastr["warning"]("O campo 'Observação sobre o uso do material' é de preenchimento obrigatório",
            "Atenção!");

    } else {

        $("#salvar").prop("disabled", true);
        $("#cancelar").prop("disabled", true); // teste
        var dados = $('#form_cad_material').serialize();
        $.ajax({
            type: 'POST',
            dataType: 'json',

            url: base() + '/mod_cad_materiais',
            async: true,
            data: dados,
            success: function(data) {
                if (data['retorno'] == 1) {


                    Command: toastr["success"]("Cadastro Realizado com sucesso", "Sucesso!");
                    setTimeout(function() {
                        window.location = "<?php $base; ?>/dash_material"; //lista geral<=
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
    return false;
}

// parâmetros da função moeda (pelo que entendi)
// a = objeto do input // e = separador milésimo
// r = separador decimal // t = evento

function moeda(a, e, r, t) {
    let n = "",
        h = j = 0,
        u = tamanho2 = 0,
        l = ajd2 = "",
        o = window.Event ? t.which : t.keyCode;
    if (13 == o || 8 == o)
        return !0;
    if (n = String.fromCharCode(o),
        -1 == "0123456789".indexOf(n))
        return !1;
    for (u = a.value.length,
        h = 0; h < u && ("0" == a.value.charAt(h) || a.value.charAt(h) == r); h++);
    for (l = ""; h < u; h++) - 1 != "0123456789".indexOf(a.value.charAt(h)) && (l += a.value.charAt(h));
    if (l += n, 0 == (u = l.length) && (a.value = ""), 1 == u && (a.value = "0" + r + "0" + l), 2 == u && (a
            .value =
            "0" + r + l), u > 2) {
        for (ajd2 = "",
            j = 0,
            h = u - 3; h >= 0; h--)
            3 == j && (ajd2 += e,
                j = 0),
            ajd2 += l.charAt(h),
            j++;
        for (a.value = "",
            tamanho2 = ajd2.length,
            h = tamanho2 - 1; h >= 0; h--)
            a.value += ajd2.charAt(h);
        a.value += r + l.substr(u - 2, u)
    }
    return !1
}
</script>