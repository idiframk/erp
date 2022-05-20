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
                <div class="col-md-12">


                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title">Movimentação de Materiais</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-plus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="chart">
                                <canvas id="barChart3"
                                    style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>

                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
</div><!-- /.content-wrapper -->


<!-- Main content -->


<?php
$render('footer');
?>

<!-- ./wrapper -->

<!-- ChartJS -->
<script src="<?php echo $base; ?>/assets/plugins/chart.js/Chart.min.js"></script>
<script>
$(function() {
    /* ChartJS
     * -------
     * Here we will create a few charts using ChartJS
     */

    //--------------
    //- AREA CHART -
    //--------------

    // Get context with jQuery - using jQuery's .get() method.

    var areaChartCanvas = $('#barChart3').get(0).getContext('2d')

    var areaChartData = {
        labels: ['06,30mm', 'jan/22', 'fev/22', 'mar/22', 'abr/22', 'mai/22', 'jun/22', 'jul/22', 'ago/22',
            'set/22', 'out/22', 'nov/22', 'dez/22'
        ],
        datasets: [{
                label: 'ENTRADAS',

                backgroundColor: 'rgba(60,141,188,0.9)',
                borderColor: 'rgba(60,141,188,0.8)',
                pointRadius: false,
                pointColor: '#3b8bba',
                pointStrokeColor: 'rgba(60,141,188,1)',
                pointHighlightFill: '#fff',
                pointHighlightStroke: 'rgba(60,141,188,1)',
                data: [28, 48, 40, 19, 86, 27, 90, 28, 48, 40, 19, 86, 48]

            },
            {
                label: 'SAIDAS',
                backgroundColor: 'rgba(210, 214, 222, 1)',
                borderColor: 'rgba(210, 214, 222, 1)',
                pointRadius: false,
                pointColor: 'rgba(210, 214, 222, 1)',
                pointStrokeColor: '#c1c7d1',
                pointHighlightFill: '#fff',
                pointHighlightStroke: 'rgba(220,220,220,1)',
                data: [65, 59, 80, 81, 56, 55, 40, 25, 65, 59, 80, 81, 55]
            },


        ]
    }
    var areaChartOptions = {
        maintainAspectRatio: false,
        responsive: true,
        legend: {
            display: false
        },
        scales: {
            xAxes: [{
                gridLines: {
                    display: true,
                }
            }],
            yAxes: [{
                gridLines: {
                    display: true,
                }
            }]
        }
    }



    //-------------
    //- BAR CHART3 -
    //-------------
    var barChartCanvas = $('#barChart3').get(0).getContext('2d')
    var barChartData = $.extend(true, {}, areaChartData)
    var temp0 = areaChartData.datasets[0]
    var temp1 = areaChartData.datasets[1]
    barChartData.datasets[0] = temp1
    barChartData.datasets[1] = temp0

    var barChartOptions = {
        responsive: true,
        maintainAspectRatio: false,
        datasetFill: false
    }

    new Chart(barChartCanvas, {
        type: 'bar',
        data: barChartData,
        options: barChartOptions
    })


})
</script>