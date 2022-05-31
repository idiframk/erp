<!-- /.modal -->
<div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title">CADASTRAR PRODUTO/MATERIAIS</h4>
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
                            <i class="fas fa-city"></i>
                            Cadastrar Produto/Material
                        </h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label class="col-sm-3 col-form-label" for="formGroupExampleInput">Nome da Obra:<span
                                        class="text-danger">*</span></label></label>
                                <input type="text" name="nome_obra" id="titulo_aplicacao"
                                    class="form-control text-uppercase" class="form-control" id="formGroupExampleInput"
                                    placeholder="Insira o nome da obra">
                                <span class="p-0" id="lista_titulo_aplicacao"></span>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-9">
                                <label class="form-label">Razão Social/Cliente:<span
                                        class="text-danger">*</span></label>
                                <input type="text" name="razao_social" class="form-control text-uppercase"
                                    placeholder="Insira nome da razão social nome do Cliente">
                            </div>
                            <div class="form-group col-md-3">
                                <label class="form-label">CNPJ: <span class="text-danger">*</span></label>
                                <input type="text" name="cnpj" class="form-control text-uppercase" id="cpfcnpj"
                                    onkeyup="somenteNumeros(this);" onfocus="javascript: retirarFormatacao(this);"
                                    onblur="javascript: formatarCampo(this);" maxlength="14"
                                    placeholder="Insira o CPF ou CNPJ - * SOMENTE NÚMEROS!*" />
                            </div>
                        </div>
                        <hr>
                        <div class="form-row">
                            <div class="form-group col-md-9">
                                <label class="col-form-label">Endereço: <span class="text-danger">*</span></label>
                                <input type="text" name="endereco" class="form-control text-uppercase"
                                    placeholder="Insira o endereço da obra ">
                            </div>
                            <div class="form-group col-md-3">
                                <label class="col-form-label">Número: <span class="text-danger">*</span></label>

                                <input type="text" name="numero" rows="3" class="form-control text-uppercase"
                                    placeholder="Insira o número, caso não tenha insira S/N"></input>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label class="col-form-label">Bairro: <span class="text-danger">*</span></label>
                                <input type="text" name="bairro" rows="3" class="form-control text-uppercase"
                                    placeholder="Insira o bairro"></input>
                            </div>

                            <div class="form-group col-md-2">
                                <label class="col-form-label">UF/Estado: <span class="text-danger">*</span></label>
                                <select name="uf" cidade="cidade" class="form-control select2"
                                    onchange="getCidade(this)" style="width: 100%;"
                                    data-placeholder="Uma Unidade Federativa/Estado do Brasil">
                                    <option selected="selected"></option>
                                    <?php foreach ($estados as $estado) : ?>
                                    <option value="<?= $estado['id'] ?>">
                                        <?= $estado['sigla'] ?>
                                    </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>

                            <div class="form-group col-md-6">
                                <label class="col-form-label">Municipio/Cidade:<span
                                        class="text-danger">*</span></label>
                                <select name="cidade" class="form-control select2" style="width: 100%;"
                                    data-placeholder="Selecione um municipio/Cidade">
                                    <option selected="selected"></option>
                                </select>
                            </div>
                        </div>
                        <hr>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label class="col-sm-3 col-form-label" for="formGroupExampleInput">Nome do Cliente:<span
                                        class="text-danger">*</span></label></label>
                                <input type="text" name="nome_cliente" id="titulo_aplicacao"
                                    class="form-control text-uppercase" class="form-control" id="formGroupExampleInput"
                                    placeholder="Insira o nome do cliente">
                                <span class="p-0"></span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="form-group col-md-6">
                                <label class="col-form-label" for="validationCustomEmail">E-Mail:<span
                                        class="text-danger">*</span></label>
                                <input type="text" name="email" id="email" onblur="checarEmail();" rows="3"
                                    class="form-control" placeholder="Insira um email" class="form-control" value=""
                                    required></input>
                            </div>

                            <div class="cform-group col-md-6">
                                <label class="col-form-label">Contato: <span class="text-danger">*</span></label>
                                <input type="text" name="contato" rows="3" class="form-control text-uppercase"
                                    id="telefone" onkeyup="mascaraFone(event)"
                                    placeholder="Insira um número de telefone"></input>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card card-primary ">
                    <div class="card-header">
                        <h3 class="card-title">
                            <i class="fas fa-city"></i>
                            Dados do Contrato
                        </h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group row">
                            <div class="form-group col-md-6">
                                <label class="col-form-label">Número do Contrato: <span
                                        class="text-danger">*</span></label>
                                <input type="text" name="num_contrato" class="form-control text-uppercase"
                                    placeholder="Insira o número do contrato">
                            </div>
                            <div class="form-group col-md-3">
                                <label class="col-form-label">Início do Contrato:<span
                                        class="text-danger">*</span></label>
                                <input type="date" name="dtinic_contrato" class="form-control" />
                            </div>
                            <div class="form-group col-md-3">
                                <label class="col-form-label">Fim do Contrato:<span class="text-danger">*</span></label>
                                <input type="date" name="dtfim_contrato" class="form-control" />
                            </div>
                        </div>
                        <hr>
                        <div class="form-group row">
                            <div class="form-group col-md-12">
                                <label class="col-form-label" for="validationCustomEmail">Descrição do Serviço:<span
                                        class="text-danger">*</span></label>
                                <textarea class="form-control" name="dec_srv" id="exampleFormControlTextarea1"
                                    rows="3"></textarea>
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