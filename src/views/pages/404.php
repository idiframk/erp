<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo  'Sultec - Eng. Geotecnia' ?> | Home</title>



    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo $base; ?>/assets/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo $base; ?>/assets/dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="<?php echo $base; ?>/assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">

    <!-- Toastr -->
    <link rel="stylesheet" href="<?php echo $base; ?>/assets/plugins/toastr/toastr.min.css">
    <link rel="shortcut icon" href="<?php echo $base; ?>/assets/img/sultec-favicon.ico" type="image/x-icon">

    <link rel="stylesheet" href="<?php echo $base; ?>/assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet"
        href="<?php echo $base; ?>/assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="<?php echo $base; ?>/assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
</head>

<div class="content-wrapper" style="min-height: 1604.44px;">



    <section class="content">
        <div class="error-page">
            <h2 class="headline text-warning"> 404</h2>
            <div class="error-content">
                <h3><i class="fas fa-exclamation-triangle text-warning"></i> Oops! Página não encontrada.</h3>
                <p>
                    Não foi possível encontrar a página que procurava.
                    Entretanto, pode <a href="home">voltar ao dashboard</a> ou tente usar o formulário de
                    pesquisa.
                </p>
                <form class="search-form">
                    <div class="input-group">
                        <input type="text" name="search" class="form-control" placeholder="Search">
                        <div class="input-group-append">
                            <button type="submit" name="submit" class="btn btn-warning"><i class="fas fa-search"></i>
                            </button>
                        </div>
                    </div>

                </form>
            </div>

        </div>

    </section>

</div>


<body class="sidebar-mini layout-fixed vsc-initialized text-sm" data-panel-auto-height-mode="height">
    <!--layout-navbar-fixed-->
    <div class="wrapper">
        <!-- Modal Global-->
        <div id="modal_global" class="modal fade" data-backdrop="static" tabindex="-1" role="dialog"></div>
        <div id="modal_auxiliar" class="modal fade" data-backdrop="static" tabindex="-1" role="dialog"></div>