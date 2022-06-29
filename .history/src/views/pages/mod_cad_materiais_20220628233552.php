<!-- /.modal -->
<div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title">CADASTRAR OBRA</h4>
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
                                        <label class="col-form-label">Grupo PDM:: <span class="text-danger">*</span>
                                        </label>
                                        <select name="uf" cidade="cidade" class="form-control select2"
                                            onchange="getCidade(this)" style="width: 100%;"
                                            data-placeholder="Uma Unidade Federativa/Estado do Brasil">
                                            <option selected="selected"></option>
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

                                    <div class="form-group col-md-2 bt_add_gpmt">
                                        <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">

                                            <div class="btn-group" role="group" aria-label="Third group">
                                                <button type="button" class="btn btn-success"> <i
                                                        class="fas fa-plus"></i></button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group col-md-10">
                                        <label class="col-form-label">Grupo PDM:: <span class="text-danger">*</span>
                                        </label>
                                        <select name="uf" cidade="cidade" class="form-control select2"
                                            onchange="getCidade(this)" style="width: 100%;"
                                            data-placeholder="Uma Unidade Federativa/Estado do Brasil">
                                            <option selected="selected"></option>
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

                                    <div class="form-group col-md-2 bt_add_gpmt">
                                        <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">

                                            <div class="btn-group" role="group" aria-label="Third group">
                                                <button type="button" class="btn btn-success"> <i
                                                        class="fas fa-plus"></i></button>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

            </form>
        </div>
    </div>
</div>
<div class="modal-footer">
    <button id="cancelar" type="button" class="btn btn-sm btn-danger" data-dismiss="modal"><i class="fa fa-times"></i>
        Cancelar</button>
    <button id="salvar" type="button" onclick="cad_obra()" class="btn btn-sm btn-success"><i class="fa fa-save"></i>
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


//Salvar dados
function cad_obra() {

    let nome_obra = $("input[name=nome_obra]").val();
    let razao_social = $("input[name=razao_social]").val();
    let cnpj = $("input[name=cnpj]").val();
    let endereco = $("input[name=endereco]").val();
    let bairro = $("input[name=bairro]").val();
    let uf = $("select[name=uf]").val();
    let numero = $("input[name=numero]").val();
    let cidade = $("select[name=cidade]").val();
    let nome_cliente = $("select[name=nome_cliente]").val();
    let email = $("input[name=email]").val();
    let contato = $("input[name=contato]").val();

    let num_contrato = $("input[name=num_contrato]").val();
    let dtinic_contrato = $("input[name=dtinic_contrato]").val();
    let dtfim_contrato = $("input[name=dtfim_contrato]").val();
    let dec_srv = $("input[name=dec_srv]").val();


    if (nome_obra == "") {
        Command: toastr["warning"]("O campo 'Nome da Obra' é de preenchimento obrigatório", "Atenção!");
    }
    else if (razao_social == "") {
        toastr["warning"]("O campo 'nome de Razão Social' é de preenchimento obrigatório", "Atenção!");

    } else if (cnpj == "") {
        toastr["warning"]("O campo 'número do CNPJ' é de preenchimento obrigatório", "Atenção!");

    } else if (endereco == "") {
        toastr["warning"]("O campo 'Endereço' é de preenchimento obrigatório", "Atenção!");

    } else if (numero == "") {
        toastr["warning"]("O campo 'Número' é de preenchimento obrigatório, caso não tenha user 'S/N'",
            "Atenção!");

    } else if (bairro == "") {
        toastr["warning"]("O campo 'Bairro' é de preenchimento obrigatório", "Atenção!");

    } else if (uf == "") {
        toastr["warning"]("O campo 'UF - Unidade Federativa é obrigatório' é de preenchimento obrigatório",
            "Atenção!");

    } else if (cidade == "") {
        toastr["warning"]("O campo 'nome da Cidade' é de preenchimento obrigatório", "Atenção!");

    } else if (nome_cliente == "") {
        toastr["warning"]("O campo 'Nome do Cliente' é de preenchimento obrigatório", "Atenção!");

    } else if (document.forms[0].email.value.length == 0) {
        Command: toastr["warning"]("O e-mail do usuário é obrigatório", "Atenção!");

    }
    else if (document.forms[0].email.value == "" || document.forms[0].email.value.indexOf('@') == -1 || document
        .forms[0].email.value.indexOf('.') == -1) {
        Command: toastr["warning"]("Por favor, informe um E-MAIL válido!", "Atenção!");

    }
    else if (num_contrato == "") {
        toastr["warning"]("O campo 'Número do Contrato' é de preenchimento obrigatório", "Atenção!");

    } else if (dtinic_contrato == "") {
        toastr["warning"]("O campo 'Início do Contrato' é de preenchimento obrigatório", "Atenção!");

    } else if (dtfim_contrato == "") {
        toastr["warning"]("O campo 'Fim do Contrato' é de preenchimento obrigatório", "Atenção!");

    } else if (dec_srv == "") {
        toastr["warning"]("O campo 'Descrição do Serviço' é de preenchimento obrigatório", "Atenção!");


    } else {

        $("#salvar").prop("disabled", true);
        $("#cancelar").prop("disabled", true); // teste
        var dados = $('#form_cad_obra').serialize();
        $.ajax({
            type: 'POST',
            dataType: 'json',

            url: base() + '/mod_cad_obras',
            async: true,
            data: dados,
            success: function(data) {
                if (data['retorno'] == 1) {


                    Command: toastr["success"]("Cadastro Realizado com sucesso", "Sucesso!");
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
    return false;
}
</script>