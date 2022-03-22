<!-- /.modal -->
<div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title">Cadastrar Obra</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form id="form_cad_obra" method="POST" autocomplete="on" enctype="multipart/form-data"
                class="form-horizontal">

                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" style="text-align: end;">Nome da Obra
                        <span class="text-danger">*</span></label>
                    <div class="col-sm-9">
                        <input type="text" name="nome_obra" id="titulo_aplicacao" class="form-control text-uppercase"
                            placeholder="Insira o nome da obra">
                        <span class="p-0" id="lista_titulo_aplicacao"></span>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" style="text-align: end;">Razão
                        Social/Cliente:
                        <span class="text-danger">*</span></label>
                    <div class="col-sm-9">
                        <input type="text" name="razao_social" class="form-control text-uppercase"
                            placeholder="Insira nome da razão social nome do Cliente">


                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" style="text-align: end;">CNPJ: <span
                            class="text-danger">*</span></label>
                    <div class="col-sm-9">
                        <input type="text" name="cnpj" class="form-control text-uppercase" id="cpfcnpj"
                            placeholder="Insira o CPF ou CNPJ">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" style="text-align: end;">Endereço: <span
                            class="text-danger">*</span></label>
                    <div class="col-sm-9">
                        <input type="text" name="endereco" class="form-control text-uppercase"
                            placeholder="Insira o endereço da obra ">

                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" style="text-align: end;">Número: <span
                            class="text-danger">*</span></label>
                    <div class="col-sm-9">
                        <input type="text" name="numero" rows="3" class="form-control text-uppercase"
                            placeholder="Insira o número, caso não tenha insira S/N"></input>

                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" style="text-align: end;">Bairro: <span
                            class="text-danger">*</span></label>
                    <div class="col-sm-9">
                        <input type="text" name="bairro" rows="3" class="form-control text-uppercase"
                            placeholder="Insira o bairro"></input>

                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" style="text-align: end;">UF/Estado: <span
                            class="text-danger">*</span></label>

                    <div class="col-sm-9">
                        <select name="uf" class="form-control select2" style="width: 100%;"
                            data-placeholder="Uma Unidade Federativa/Estado do Brasil">
                            <option selected="selected"></option>
                            <option>Alaska</option>
                            <option>California</option>
                            <option>Delaware</option>
                            <option>Tennessee</option>
                            <option>Texas</option>
                            <option>Washington</option>
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" style="text-align: end;">Municipio/Cidade:
                        <span class="text-danger">*</span></label>
                    <div class="col-sm-9">

                        <select name="cidade" class="form-control select2" style="width: 100%;"
                            data-placeholder="Selecione um municipio/Cidade">
                            <option selected="selected"></option>
                            <option>Alaska</option>
                            <option>California</option>
                            <option>Delaware</option>
                            <option>Tennessee</option>
                            <option>Texas</option>
                            <option>Washington</option>
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="validationCustomEmail" style="text-align: end;">E-Mail:
                        <span class="text-danger">*</span></label>

                    <div class="col-sm-9">
                        <input type="text" name="email" rows="3" class="form-control text-uppercase"
                            placeholder="Insira um email" class="form-control" id="validationCustomEmail" value=""
                            required></input>
                        <div class="valid-feedback">e-mail válido!</div>
                        <div class="invalid-feedback">Entre com um e-mail válido!.</div>
                    </div>
                </div>


                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" style="text-align: end;">Contato: <span
                            class="text-danger">*</span></label>

                    <div class="col-sm-9">
                        <input type="text" name="contato" rows="3" class="form-control text-uppercase" id="telefone"
                            onkeyup="mascaraFone(event)" placeholder="Insira um número de telefone"></input>

                        <script>
                        function mascaraFone(event) {
                            s
                            var valor = document.getElementById("telefone").attributes[0].ownerElement[
                                'value'];
                            var retorno = valor.replace(/\D/g, "");
                            retorno = retorno.replace(/^0/, "");
                            if (retorno.length > 10) {
                                retorno = retorno.replace(/^(\d\d)(\d{5})(\d{4}).*/, "($1) $2-$3");
                            } else if (retorno.length > 5) {
                                if (retorno.length == 6 && event.code == "Backspace") {
                                    // necessário pois senão o "-" fica sempre voltando ao dar backspace
                                    return;
                                }
                                retorno = retorno.replace(/^(\d\d)(\d{4})(\d{0,4}).*/, "($1) $2-$3");
                            } else if (retorno.length > 2) {
                                retorno = retorno.replace(/^(\d\d)(\d{0,5})/, "($1) $2");
                            } else {
                                if (retorno.length != 0) {
                                    retorno = retorno.replace(/^(\d*)/, "($1");
                                }
                            }
                            document.getElementById("telefone").attributes[0].ownerElement['value'] =
                                retorno;
                        }
                        </script>
                    </div>
                </div>
                <p>Campos com (<span class="text-danger">*</span>) são obrigatórios.</p>
            </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-sm btn-danger" data-dismiss="modal"><i class="fa fa-times"></i>
                Cancelar</button>
            <button type="button" onclick="cad_obra()" class="btn btn-sm btn-success"><i class="fa fa-save"></i>
                Salvar</button>
        </div>
    </div>
    <!-- /.modal-content -->



    <script>
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

    //Salvar dados
    function cad_obra() {

        let nome_obra = $("input[name=nome_obra]").val();
        // let razao_social = $("input[name=razao_social]").val();
        let cnpj = $("input[name=cnpj]").val();
        // let endereco = $("input[name=endereco]").val();
        //let numero = $("input[name=numero]").val();
        //let bairro = $("input[name=bairro]").val();
        //let uf = $("select[name=uf]").val();
        //let cidade = $("select[name=cidade]").val();
        //let email = $("input[name=email]").val();
        //let contato = $("input[name=contato]").val();


        if (nome_obra == "") {
            Command: toastr["warning"]("O campo 'Nome da Obra' é de preenchimento obrigatório", "Atenção!");
        }
        /*else if (razao_social == "") {
            toastr["warning"]("O campo 'nome de Razão Social' é de preenchimento obrigatório", "Atenção!");

        } */
        else if (cnpj == "") {
            toastr["warning"]("O campo 'número do CNPJ' é de preenchimento obrigatório", "Atenção!");

        }
        /*else if (endereco == "") {
                   toastr["warning"]("O campo 'Endereço' é de preenchimento obrigatório", "Atenção!");

               }*/
        /* else if (numero == "") {
                toastr["warning"]("O campo 'Número' é de preenchimento obrigatório, caso não tenha user 'S/N'", "Atenção!");

            } else if (bairro == "") {
                toastr["warning"]("O campo 'Bairro' é de preenchimento obrigatório", "Atenção!");

            } else if (uf == "") {
                toastr["warning"]("O campo 'UF - Unidade Federativa é obrigatório' é de preenchimento obrigatório",
                    "Atenção!");

            } else if (cidade == "") {
                toastr["warning"]("O campo 'nome da Cidade' é de preenchimento obrigatório", "Atenção!");

            } else if (email == "") {
                toastr["warning"]("O campo 'nome do E-mail' é de preenchimento obrigatório", "Atenção!");

            } else if (contato == "") {
                toastr["warning"]("O campo 'O número de contato' é de preenchimento obrigatório", "Atenção!");


            } */
        else {

            var dados = $('#form_cad_obra').serialize();
            $.ajax({
                type: 'POST',
                dataType: 'json',
                url: '<?php $base; ?>/mod_cad_obras',
                async: true,
                data: dados,
                success: function(data) {
                    if (data['retorno'] == 1) {
                        window.location.href = "<?php $base; ?>/cad_obra";
                    } else if (data['retorno'] == 0) {
                        Command: toastr["warning"]("As alterações não foram salvas, erro no sistema",
                            "Erro!");
                    }
                }
            });

        }
        return false;
    }
    </script>