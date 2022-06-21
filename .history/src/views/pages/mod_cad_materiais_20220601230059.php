<!-- /.modal -->
<div class="modal-dialog modal-xl">
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
                                    <div class="form-group col-md-8">
                                        <div class="form-group" data-select2-id="55">
                                            <label>Grupo PDM:</label>
                                            <select class="form-control select2bs4 select2-hidden-accessible"
                                                style="width: 100%;" data-select2-id="17" tabindex="-1"
                                                aria-hidden="true">
                                                <option selected="selected" data-select2-id="19">ESCOLHA O GRUPO
                                                    DO
                                                    MATERIAL</option>
                                                </option>
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
                                        <div class="form-group col-md-3">
                                            <div class="form-group" data-select2-id="55">

                                                <div class="btn-group" role="group" aria-label="Third group">
                                                    <button type="button" class="btn btn-success"> <i
                                                            class="fas fa-edit"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <hr>
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label class="form-label">Tipo do Produto/Material:<span
                                                class="text-danger">*</span>
                                        </label>
                                        <input type="text" name="razao_social" class="form-control text-uppercase"
                                            placeholder="Insira o tipo do Produto/Material em um texto breve mais claro possivel">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label class="form-label">Dimensão:<span class="text-danger">*</span>
                                        </label>
                                        <input type="text" name="razao_social" class="form-control text-uppercase"
                                            placeholder="Insira as dimensões do Produto/Material">
                                    </div>

                                    <div class="form-group col-md-2">
                                        <div class="form-group" data-select2-id="55">
                                            <label>Cor:<span class="text-danger">*</span></label>
                                            <select class="form-control select2bs4 select2-hidden-accessible"
                                                style="width: 100%;" data-select2-id="17" tabindex="-1"
                                                aria-hidden="true">
                                                <option selected="selected" data-select2-id="19">ESCOLHA A COR</option>
                                                </option>
                                                <option data-select2-id="57">AM - AMRELO</option>
                                                <option data-select2-id="58">BR - BRANCO</option>
                                                <option data-select2-id="59">VERD - VERDE</option>
                                                <option data-select2-id="60">VERM - VERMELHO</option>
                                                <option data-select2-id="61">INC - INCOLOR</option>
                                                <option data-select2-id="62">PT - PRETO</option>
                                            </select>
                                        </div>
                                    </div>



                                    <div class="form-group col-md-2">
                                        <div class="form-group" data-select2-id="55">
                                            <label>U.M:<span class="text-danger">*</span></label>
                                            <select class="form-control select2bs4 select2-hidden-accessible"
                                                style="width: 100%;" data-select2-id="17" tabindex="-1"
                                                aria-hidden="true">
                                                <option selected="selected" data-select2-id="19">UNID.MED.</option>
                                                </option>
                                                <option data-select2-id="57">KG- KILO GRAMA</option>
                                                <option data-select2-id="58">L - LITRO</option>
                                                <option data-select2-id="59">PC - PECA</option>
                                                <option data-select2-id="60">CX - CAIXA</option>
                                                <option data-select2-id="61">UN - UNIDADE</option>
                                            </select>
                                        </div>
                                    </div>

                                </div>
                                <hr>
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label class="col-form-label">Apelido do Material como é Conhecido em campo:
                                            <span class="text-danger">*</span></label>
                                        <input type="text" name="endereco" class="form-control text-uppercase"
                                            placeholder="Insira um nome como o material como é conhecido pela produção ">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="col-form-label">Ref. Fabricante: <span
                                                class="text-danger">*</span></label>
                                        <input type="text" name="endereco" class="form-control text-uppercase"
                                            placeholder="Insira referência do Fabricante ">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="col-form-label">Ref. Fornecedor: <span
                                                class="text-danger">*</span></label>

                                        <input type="text" name="numero" rows="3" class="form-control text-uppercase"
                                            placeholder="Insira referência do Fornecedor"></input>
                                    </div>

                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label class="col-form-label">Decrição do Produto/Material Curto: <span
                                                class="text-danger">*</span></label>
                                        <textarea type="text" name="bairro" rows="3" class="form-control text-uppercase"
                                            placeholder="Descreva em um texto breve objetivo Uso, aplicação, ou algo relevante no Geral."></textarea>
                                    </div>

                                </div>
                                <hr>
                                <div class="form-row">

                                    <div class="form-group col-md-12">
                                        <label class="col-form-label">Decrição do Produto/Material Curto: <span
                                                class="text-danger">*</span></label>
                                        <input type="text" name="bairro" rows="3" class="form-control text-uppercase"
                                            disabled></input>
                                    </div>


                                    <div class="form-group col-md-12">
                                        <label class="col-form-label">Decrição do Produto/Material lnga: <span
                                                class="text-danger">*</span></label>
                                        <textarea type="text" name="bairro" rows="3" class="form-control text-uppercase"
                                            disabled></textarea>
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