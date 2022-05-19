<?php
$render('header');
$render('sidebar');


?>

<div class="content-wrapper">

    <section class="content-header">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h3 class="m-0">
                            <div class="home-inic">SULTEC - ERP: Resource Planning</div>
                        </h3>
                    </div>
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
                                <div class="col-6">
                                    <div class="bg-white border rounded-5">

                                        <section class="p-4 text-center w-100">
                                            <div id="carouselExampleControls" class="carousel slide"
                                                data-mdb-ride="carousel">
                                                <div class="carousel-inner">
                                                    <div class="carousel-item">
                                                        <img src="https://mdbcdn.b-cdn.net/img/new/slides/041.webp"
                                                            class="d-block w-100" alt="Wild Landscape">
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img src="https://mdbcdn.b-cdn.net/img/new/slides/042.webp"
                                                            class="d-block w-100" alt="Camera">
                                                    </div>
                                                    <div class="carousel-item active">
                                                        <img src="https://mdbcdn.b-cdn.net/img/new/slides/043.webp"
                                                            class="d-block w-100" alt="Exotic Fruits">
                                                    </div>
                                                </div>
                                                <button class="carousel-control-prev" type="button"
                                                    data-mdb-target="#carouselExampleControls" data-mdb-slide="prev">
                                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                    <span class="visually-hidden">Previous</span>
                                                </button>
                                                <button class="carousel-control-next" type="button"
                                                    data-mdb-target="#carouselExampleControls" data-mdb-slide="next">
                                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                    <span class="visually-hidden">Next</span>
                                                </button>
                                            </div>
                                        </section>



                                        <div class="p-4 text-center border-top mobile-hidden">
                                            <a class="btn btn-link px-3" data-mdb-toggle="collapse" href="#example3"
                                                role="button" aria-expanded="false" aria-controls="example3"
                                                data-ripple-color="hsl(0, 0%, 67%)">
                                                <i class="fas fa-code me-md-2"></i>
                                                <span class="d-none d-md-inline-block">
                                                    Show code
                                                </span>
                                            </a>


                                            <a class="btn btn-link px-3 " data-ripple-color="hsl(0, 0%, 67%)">
                                                <i class="fas fa-file-code me-md-2 pe-none"></i>
                                                <span class="d-none d-md-inline-block export-to-snippet pe-none">
                                                    Edit in sandbox
                                                </span>
                                            </a>

                                        </div>


                                    </div>
                                </div>

                            </div>
                            <div class="col-6">

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
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
<section />

</div>

<?php
$render('footer');
?>