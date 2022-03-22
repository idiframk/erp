<?php
$render('header');
$render('sidebar');
?>

<script src="https://code.jquery.com/jquery-1.10.0.min.js"></script>
<script src="https://rawgit.com/RobinHerbots/Inputmask/3.x/dist/jquery.inputmask.bundle.js"></script>


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
                                    <button onclick="cadastrar()" class="btn btn-success">
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

</div>


</section>
</div>
<?php
$render('footer');
?>
<script>
//Chamar Modal para Cadastrar Registro Genérico
function cadastrar() {
    $.ajax({
        url: "<?= $base ?>/mod_cad_obras",
        success: function(ajaxData) {
            $("#modal_global").html(ajaxData);
            $("#modal_global").modal('show', {
                backdrop: 'true'
            });
        }
    });
};
</script>