<?php
$render('header');
$render('sidebar');
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Dashboard</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="home">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard </li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
    </section>


    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3>5<sup style="font-size: 20px"></sup></h3>

                            <p>Obras Ativas</p>
                        </div>

                        <div class="icon">
                            <i class="ion ion-cash"></i>
                        </div>
                        <a href="#" class="small-box-footer">Mais informação <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-6">

                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3>145</h3>
                            <p>Obras Encerradas</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-close-circled"></i>
                        </div>
                        <a href="#" class="small-box-footer">Mais informação <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>150</h3>

                            <p>Total de Obras</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-briefcase"></i>
                        </div>
                        <a href="#" class="small-box-footer">Mais informação <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>

                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3>44</h3>

                            <p>RDO's Emitidas</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-clipboard"></i>
                        </div>
                        <a href="#" class="small-box-footer">Mais informação <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header card card-primary">
                            <div class="row">
                                <div class="">
                                    <button type="button" class="btn btn-success" data-toggle="modal"
                                        data-target="#modal-lg">
                                        Cadastrar Obra
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="card-header">
                            <div class="row">
                                <div class="">
                                    <h3 class="card-title">Lista das Obras</h3>
                                </div>
                            </div>

                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" style="width:100%" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th style="width:32px;text-align: center">#Cod.</th>
                                        <th>Eng. Responsável</th>
                                        <th>Descrição Obra/Serviço</th>
                                        <th>Cliente</th>
                                        <th>Endereço</th>
                                        <th>Progresso</th>
                                        <th style="width:15%;text-align: center">Ação</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>#001</td>
                                        <td>Diego Muller</td>
                                        <td>Impermeabilização
                                        </td>
                                        <td>Zimmermann</td>
                                        <td> AvantGarde - Rua 305</td>

                                        <td>
                                            <div class="progress">
                                                <div class="progress-bar progress-bar-striped bg-success"
                                                    role="progressbar" style="width: 25%;" aria-valuenow="25"
                                                    aria-valuemin="0" aria-valuemax="100">25%</div>
                                            </div>

                                        </td>

                                        <td class="project-actions text-right">
                                            <a class="btn btn-primary btn-sm" href="#">
                                                <i class="fas fa-eye">
                                                </i>
                                                View
                                            </a>
                                            <a class="btn btn-info btn-sm" href="#">
                                                <i class="fas fa-pencil-alt">
                                                </i>
                                                Edit
                                            </a>
                                            <a class="btn btn-danger btn-sm" href="#">
                                                <i class="fas fa-trash">
                                                </i>
                                                Delete
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>#002</td>
                                        <td>Diego Muller</td>
                                        <td>Injeção
                                        </td>
                                        <td>CNA Cartier Residence</td>
                                        <td>Obras no Literotal</td>
                                        <td>
                                            <div class="progress">
                                                <div class="progress-bar progress-bar-striped bg-success"
                                                    role="progressbar" style="width: 25%;" aria-valuenow="25"
                                                    aria-valuemin="0" aria-valuemax="100">25%</div>
                                            </div>
                                        </td>


                                        <td class="project-actions text-right">
                                            <a class="btn btn-primary btn-sm" href="#">
                                                <i class="fas fa-eye">
                                                </i>
                                                View
                                            </a>
                                            <a class="btn btn-info btn-sm" href="#">
                                                <i class="fas fa-pencil-alt">
                                                </i>
                                                Edit
                                            </a>
                                            <a class="btn btn-danger btn-sm" href="#">
                                                <i class="fas fa-trash">
                                                </i>
                                                Delete
                                            </a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>#003</td>
                                        <td>Diego Muller</td>
                                        <td>Injeção
                                        </td>
                                        <td>Pasquallotto - Yachthouse</td>
                                        <td>Obras no Literotal</td>
                                        <td>
                                            <div class="progress">
                                                <div class="progress-bar progress-bar-striped bg-success"
                                                    role="progressbar" style="width: 25%;" aria-valuenow="25"
                                                    aria-valuemin="0" aria-valuemax="100">25%</div>
                                            </div>
                                        </td>


                                        <td class="project-actions text-right">
                                            <a class="btn btn-primary btn-sm" href="#">
                                                <i class="fas fa-eye">
                                                </i>
                                                View
                                            </a>
                                            <a class="btn btn-info btn-sm" href="#">
                                                <i class="fas fa-pencil-alt">
                                                </i>
                                                Edit
                                            </a>
                                            <a class="btn btn-danger btn-sm" href="#">
                                                <i class="fas fa-trash">
                                                </i>
                                                Delete
                                            </a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>#004</td>
                                        <td>Rafael</td>
                                        <td>Revitalização
                                        </td>
                                        <td>UHE - ITA</td>
                                        <td>Ita - Santa Catarina</td>
                                        <td>
                                            <div class="progress">
                                                <div class="progress-bar progress-bar-striped bg-success"
                                                    role="progressbar" style="width: 25%;" aria-valuenow="25"
                                                    aria-valuemin="0" aria-valuemax="100">25%</div>
                                            </div>
                                        </td>


                                        <td class="project-actions text-right">
                                            <a class="btn btn-primary btn-sm" href="#">
                                                <i class="fas fa-eye">
                                                </i>
                                                View
                                            </a>
                                            <a class="btn btn-info btn-sm" href="#">
                                                <i class="fas fa-pencil-alt">
                                                </i>
                                                Edit
                                            </a>
                                            <a class="btn btn-danger btn-sm" href="#">
                                                <i class="fas fa-trash">
                                                </i>
                                                Delete
                                            </a>
                                        </td>
                                    </tr>


                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>#Cod.</th>
                                        <th>Eng. Responsável</th>
                                        <th>Descrição Obra</th>
                                        <th>Cliente</th>
                                        <th>Endereço</th>
                                        <th>Progresso</th>
                                        <th>Ação</th>
                                    </tr>


                                </tfoot>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->

        <!-- /.modal -->

        <div class="modal fade" id="modal-lg" data-backdrop="static">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Cadastrar Obra</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form id="" autocomplete="off" enctype="multipart/form-data" class="form-horizontal">

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label" style="text-align: end;">Nome da Obra
                                    <span class="text-danger">*</span></label>
                                <div class="col-sm-9">
                                    <input type="text" name="titulo_aplicacao" id="titulo_aplicacao"
                                        class="form-control text-uppercase" placeholder="Insira o nome da obra">
                                    <span class="p-0" id="lista_titulo_aplicacao"></span>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label" style="text-align: end;">Razão
                                    Social/Cliente:
                                    <span class="text-danger">*</span></label>
                                <div class="col-sm-9">
                                    <input type="text" name="num_projeto" class="form-control text-uppercase"
                                        placeholder="Insira nome da razão social nome do Cliente">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label" style="text-align: end;">CNPJ: <span
                                        class="text-danger">*</span></label>
                                <div class="col-sm-9">
                                    <input type="text" name="revisao" class="form-control text-uppercase" id="cpfcnpj"
                                        placeholder="Insira o CPF ou CNPJ">
                                    <script>
                                    $("input[id*='cpfcnpj']").inputmask({
                                        mask: ['999.999.999-99', '99.999.999/9999-99'],
                                        keepStatic: true
                                    });
                                    </script>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label" style="text-align: end;">Endereço: <span
                                        class="text-danger">*</span></label>
                                <div class="col-sm-9">
                                    <input type="text" name="revisao" class="form-control text-uppercase"
                                        placeholder="Insira o endereço da obra ">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label" style="text-align: end;">Número: <span
                                        class="text-danger">*</span></label>
                                <div class="col-sm-9">
                                    <input type="text" name="observacao" rows="3" class="form-control text-uppercase"
                                        placeholder="Insira o número, caso não tenha insira S/N"></input>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label" style="text-align: end;">Bairro: <span
                                        class="text-danger">*</span></label>
                                <div class="col-sm-9">
                                    <input type="text" name="observacao" rows="3" class="form-control text-uppercase"
                                        placeholder="Insira o bairro"></input>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label" style="text-align: end;">UF/Estado: <span
                                        class="text-danger">*</span></label>
                                <div class="col-sm-9">
                                    <select class="form-control select2" style="width: 100%;"
                                        data-placeholder="Uma Unidade Federativa/Estado do Brasil">>
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
                                    <select class="form-control select2" style="width: 100%;"
                                        data-placeholder="Selecione um municipio/Cidade">>
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
                                <label class="col-sm-3 col-form-label" style="text-align: end;">Bairro: <span
                                        class="text-danger">*</span></label>
                                <div class="col-sm-9">
                                    <input type="text" name="observacao" rows="3" class="form-control text-uppercase"
                                        placeholder="Insira o bairro"></input>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label" for="validationCustomEmail"
                                    style="text-align: end;">E-Mail: <span class="text-danger">*</span></label>
                                <div class="col-sm-9">
                                    <input type="text" name="observacao" rows="3" class="form-control text-uppercase"
                                        placeholder="Insira um email" class="form-control" id="validationCustomEmail"
                                        value="" required></input>
                                    <div class="valid-feedback">e-mail válido!</div>
                                    <div class="invalid-feedback">Entre com um e-mail válido!.</div>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label" style="text-align: end;">Contato: <span
                                        class="text-danger">*</span></label>
                                <div class="col-sm-9">
                                    <input type="text" name="observacao" rows="3" class="form-control text-uppercase"
                                        id="telefone" onkeyup="mascaraFone(event)"
                                        placeholder="Insira um número de telefone"></input>

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

                        </form>
                    </div>
                    <div class="modal-footer">

                        <button type="button" class="btn btn-sm btn-danger" data-dismiss="modal"><i
                                class="fa fa-times"></i> Cancelar</button>
                        <button type="button" onclick="cad_dfp()" class="btn btn-sm btn-success"><i
                                class="fa fa-save"></i> Salvar</button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>


    </section>
</div>

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
</script>

<?php
$render('footer');
?>