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
                                    <div class="bd-example">
                                        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <img src="https://sultec.eng.br/wp-content/uploads/2021/06/sobre-sultec-barragem.jpg"
                                                        class="d-block w-100 h-25" alt="...">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="https://sultec.eng.br/wp-content/uploads/2021/06/injecao-quimica-13.jpg"
                                                        class="d-block w-100 h-25" alt="...">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="https://sultec.eng.br/wp-content/uploads/2021/06/tirantes-1.jpg"
                                                        class="d-block w-100 h-25" alt="...">
                                                </div>
                                            </div>
                                            <a class="carousel-control-prev" href="#carouselExampleControls"
                                                role="button" data-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                            <a class="carousel-control-next" href="#carouselExampleControls"
                                                role="button" data-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="sr-only">Next</span>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="bg-white border rounded-5">

                                        <section class="p-4 text-center w-100">
                                            <!-- Carousel wrapper -->
                                            <div id="carouselBasicExample" class="carousel slide carousel-fade"
                                                data-mdb-ride="carousel">
                                                <!-- Indicators -->
                                                <div class="carousel-indicators">
                                                    <button type="button" data-mdb-target="#carouselBasicExample"
                                                        data-mdb-slide-to="0" class="" aria-label="Slide 1"></button>
                                                    <button type="button" data-mdb-target="#carouselBasicExample"
                                                        data-mdb-slide-to="1" aria-label="Slide 2" class=""></button>
                                                    <button type="button" data-mdb-target="#carouselBasicExample"
                                                        data-mdb-slide-to="2" aria-label="Slide 3" class="active"
                                                        aria-current="true"></button>
                                                </div>

                                                <!-- Inner -->
                                                <div class="carousel-inner">
                                                    <!-- Single item -->
                                                    <div class="carousel-item">
                                                        <img src="https://mdbcdn.b-cdn.net/img/Photos/Slides/img%20(15).webp"
                                                            class="d-block w-100" alt="Sunset Over the City">
                                                        <div class="carousel-caption d-none d-md-block">
                                                            <h5>First slide label</h5>
                                                            <p>Nulla vitae elit libero, a pharetra augue mollis
                                                                interdum.</p>
                                                        </div>
                                                    </div>

                                                    <!-- Single item -->
                                                    <div class="carousel-item">
                                                        <img src="https://mdbcdn.b-cdn.net/img/Photos/Slides/img%20(22).webp"
                                                            class="d-block w-100" alt="Canyon at Nigh">
                                                        <div class="carousel-caption d-none d-md-block">
                                                            <h5>Second slide label</h5>
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                            </p>
                                                        </div>
                                                    </div>

                                                    <!-- Single item -->
                                                    <div class="carousel-item active">
                                                        <img src="https://mdbcdn.b-cdn.net/img/Photos/Slides/img%20(23).webp"
                                                            class="d-block w-100" alt="Cliff Above a Stormy Sea">
                                                        <div class="carousel-caption d-none d-md-block">
                                                            <h5>Third slide label</h5>
                                                            <p>Praesent commodo cursus magna, vel scelerisque nisl
                                                                consectetur.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Inner -->

                                                <!-- Controls -->
                                                <button class="carousel-control-prev" type="button"
                                                    data-mdb-target="#carouselBasicExample" data-mdb-slide="prev">
                                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                    <span class="visually-hidden">Previous</span>
                                                </button>
                                                <button class="carousel-control-next" type="button"
                                                    data-mdb-target="#carouselBasicExample" data-mdb-slide="next">
                                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                    <span class="visually-hidden">Next</span>
                                                </button>
                                            </div>
                                            <!-- Carousel wrapper -->
                                        </section>



                                        <div class="p-4 text-center border-top mobile-hidden">
                                            <a class="btn btn-link px-3" data-mdb-toggle="collapse" href="#example1"
                                                role="button" aria-expanded="false" aria-controls="example1"
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