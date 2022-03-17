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
                        <h1 class="m-0">Lista de Relatório Diário de Obra</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="home">Home</a></li>
                            <li class="breadcrumb-item active">Gerar RDO </li>
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
                    <div class="info-box">
                        <span class="info-box-icon bg-warning"><i class="far fa-clipboard"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Relatório Diário de Obra - Aguardando Aprovação</span>
                            <span class="info-box-number">05 </span>
                        </div>

                    </div>
                </div>
                <div class="col-lg-3 col-6">

                    <div class="info-box">
                        <span class="info-box-icon bg-success"><i class="far fa-clipboard"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Relatório Diário de Obra - RDO's Aprovados</span>
                            <span class="info-box-number">145 </span>
                        </div>

                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">

                    <div class="info-box">
                        <span class="info-box-icon bg-info"><i class="far fa-clipboard"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Total de RDO's Emitidas</span>
                            <span class="info-box-number">150 </span>
                        </div>

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
                                        Emitir RDO
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
                                        <th style="width:32px;text-align: center">#Item.</th>
                                        <th>Cod. RDO</th>
                                        <th>Obra</th>
                                        <th>Data do RDO</th>
                                        <th>Descrição dos Serviços</th>
                                        <th>Status</th>
                                        <th style="width:15%;text-align: center">Ação</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>#001</td>
                                        <td>RDO-001/2022</td>
                                        <td>Zimmermann - AvantGarde - Rua 305</td>
                                        <td>14/02/2022 </td>

                                        <td>
                                            Descrição da Sua Atividade

                                        </td>

                                        <td class="project-actions text-center">
                                            Aguardando aprovação
                                        </td>

                                        <td class="project-actions text-right">
                                            <a class="btn btn-primary btn-sm" href="#">
                                                <i class="fas fa-print">
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
                                        <td>RDO-002/2022</td>
                                        <td>CNA Cartier Residence - Obras no Literotal</td>
                                        <td>14/03/2022</td>
                                        <td>
                                            Descrição da Sua Atividade
                                        </td>
                                        <td class="project-actions text-center">
                                            Aguardando aprovação

                                        </td>

                                        <td class="project-actions text-right">
                                            <a class="btn btn-primary btn-sm" href="#">
                                                <i class="fas fa-print">
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
                                        <td>RDO-004/2022</td>
                                        <td>Pasquallotto - Yachthouse - Obras no Literotal</td>
                                        <td>14/03/2022</td>
                                        <td>

                                            Descrição da Sua Atividade
                                        </td>

                                        <td class="project-actions text-center">
                                            Aguardando aprovação

                                        </td>
                                        <td class="project-actions text-right">
                                            <a class="btn btn-primary btn-sm" href="#">
                                                <i class="fas fa-print">
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
                                        <td>RDO-005/2022</td>
                                        <td>UHE - ITA - Ita - Santa Catarina</td>
                                        <td>14/03/2022</td>
                                        <td>
                                            Descrição da Sua Atividade
                                        </td>
                                        <td class="project-actions text-center">
                                            Aguardando aprovação

                                        </td>

                                        <td class="project-actions text-right">
                                            <a class="btn btn-primary btn-sm" href="#">
                                                <i class="fas fa-print">
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
                                        <th style="width:32px;text-align: center">#Item.</th>
                                        <th>Cod. RDO</th>
                                        <th>Obra</th>
                                        <th>Data do RDO</th>
                                        <th>Descrição dos Serviços</th>
                                        <th>Status</th>
                                        <th style="width:15%;text-align: center">Ação</th>
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
                                <label class="col-sm-3 col-form-label">Descrição Obra/Serviço: <span
                                        class="text-danger">*</span></label>
                                <div class="col-sm-9">
                                    <input type="text" name="titulo_aplicacao" id="titulo_aplicacao"
                                        class="form-control text-uppercase" placeholder="Insira a descrição ou serviço">
                                    <span class="p-0" id="lista_titulo_aplicacao"></span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Cliente: <span
                                        class="text-danger">*</span></label>
                                <div class="col-sm-9">
                                    <input type="text" name="num_projeto" class="form-control text-uppercase"
                                        placeholder="Insira nome da Superestrutura">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Cidade: <span
                                        class="text-danger">*</span></label>
                                <div class="col-sm-9">
                                    <input type="text" name="revisao" class="form-control text-uppercase"
                                        placeholder="Insira nome da cidade">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Estado UF: <span
                                        class="text-danger">*</span></label>
                                <div class="col-sm-9">
                                    <input type="text" name="revisao" class="form-control text-uppercase"
                                        placeholder="Insira nome da Unidade Federativa ">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Obserações:</label>
                                <div class="col-sm-9">
                                    <textarea type="text" name="observacao" rows="3" class="form-control text-uppercase"
                                        placeholder="Observações"></textarea>
                                </div>
                            </div>

                            <input type="hidden" name="empresa" value="1">
                            <input type="hidden" name="obra" value="1">
                            <input type="hidden" name="form_cad_dfp">

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

<?php
$render('footer');
?>