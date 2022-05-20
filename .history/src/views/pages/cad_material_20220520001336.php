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
                        <h1 class="m-0">Dashboard de Materiais</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="home">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard de Clientes/ </li>
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
                    <div class="small-box bg-info">
                        <div class="col-lg-12 col-12">
                            <div class="inner">
                                <h3>850</h3>
                                <p>Produto(s) Cadastrados</p>
                            </div>
                        </div>
                        <div class="col-lg-12 col-12">
                            <div class="inner">
                                <h3>150</h3>
                                <p>Produto(s) em Estoque</p>
                            </div>
                        </div>
                        <div class="icon">
                            <i class="ion ion-ios-barcode-outline"></i>
                        </div>
                        <a href="#" class="small-box-footer">Ver Relação de Produtos <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-danger">

                        <div class="col-lg-12 col-12">
                            <div class="inner">
                                <h3>150</h3>
                                <p>Produto(s) com Estoque Zerado</p>
                            </div>
                        </div>
                        <div class="icon">
                            <i class="ion ion-ios-barcode-outline"></i>
                        </div>
                        <a href="#" class="small-box-footer">Ver Produtos Estoque Zerado <i
                                class="fas fa-arrow-circle-right"></i></a>

                    </div>

                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">

                    <div class="small-box bg-warning">

                        <div class="col-lg-12 col-12">
                            <div class="inner">
                                <h3>100</h3>
                                <p>Produtos com Estoque Minimo</p>
                            </div>
                        </div>
                        <div class="icon">
                            <i class="ion ion-ios-barcode-outline"></i>
                        </div>
                        <a href="#" class="small-box-footer">Ver Produtos Estoque Mínimo <i
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

                        <!-- /.card-header -->
                        <div class="card-body">

                            <div class="card card-success">
                                <div class="card-header">
                                    <h3 class="card-title">Moimentação de Materiais</h3>
                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                        <button type="button" class="btn btn-tool" data-card-widget="remove">
                                            <i class="fas fa-times"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="chart">
                                        <div class="chartjs-size-monitor">
                                            <div class="chartjs-size-monitor-expand">
                                                <div class=""></div>
                                            </div>
                                            <div class="chartjs-size-monitor-shrink">
                                                <div class=""></div>
                                            </div>
                                        </div>
                                        <canvas id="barChart"
                                            style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%; display: block; width: 765px;"
                                            width="765" height="250" class="chartjs-render-monitor"></canvas>
                                    </div>
                                </div>

                            </div>

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