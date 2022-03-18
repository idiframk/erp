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
                        <h1 class="m-0">Home</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item active">Home </li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
    </section>


    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <div class="">
                                    <h3 class="card-title">Sobre Nós</h3>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4"">
                                <!-- /.card-header -->
                                <div class=" card-body" style="width: 30rem;">

                                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                    <ol class="carousel-indicators">
                                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active">
                                        </li>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                    </ol>
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img class="d-block w-100"
                                                src="https://sultec.eng.br/wp-content/uploads/2021/06/sobre-sultec-barragem.jpg"
                                                alt="First slide">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100"
                                                src="https://sultec.eng.br/wp-content/uploads/2021/06/tirantes-1.jpg"
                                                alt="Second slide">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100"
                                                src="https://sultec.eng.br/wp-content/uploads/2021/06/injecao-quimica-13.jpg"
                                                alt="Third slide">
                                        </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                                        data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                                        data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>


                        <div class="col-6">
                            <div class="column mcb-column mcb-item-81a5f7258 one column_column">
                                <div class="column_attr clearfix" style="">
                                    <h2>Conheça um pouco mais <span class="themecolor finance3-highlight">sobre
                                            nós</span></h2>

                                    <hr class="no_line" style="margin:0 auto 30px">


                                    <p>Uma empresa inovadora e comprometida com a satisfação total de seus clientes
                                        . Contamos com parceiros e equipes de profissionais altamente treinados e
                                        qualificados, aptos para um mercado cada vez mais exigente referente a
                                        qualidade, eficiência e competência.</p>

                                    <p>Seriedade, respeito, honestidade e confiança são os valores fundamentais para
                                        a SULTEC, visando sempre excelente relacionamento entre clientes, parceiros
                                        e empresa.</p>

                                    <p>Suprir as necessidades de nossos clientes, zelando pela qualidade, satisfação
                                        e conforto, alcançando assim nosso objetivo : O reconhecimento e crescimento
                                        de uma empresa modelo na área de impermeabilização e recuperação estrutural.
                                    </p>
                                </div>
                                <div class="col-3">
                                    <a href="https://sultec.eng.br/" type="button"
                                        class="btn btn-block bg-gradient-warning btn-lg">Acesse nosso
                                        Site</a>
                                </div>

                            </div>
                            <!-- /.card-body -->
                        </div>
                    </div>
                    <!-- /.card -->
                </div>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
</div>
<!-- /.container-fluid -->

</section>
</div>

<?php
$render('footer');
?>