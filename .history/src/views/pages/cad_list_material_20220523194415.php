<?php
$render('header');
$render('sidebar');
?>


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
                        <a href="cad_list_material" class="small-box-footer">Ver Relação de Produtos <i
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
</div>

<?php
$render('footer');
?>