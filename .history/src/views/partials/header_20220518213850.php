<?php


if ((!isset($_SESSION['cLogin'])) && (empty($_SESSION['cLogin']))) { ?>
<script type="text/javascript">
window.location.href = "login";
</script>
<?php exit;
}

?>

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

    <!--personal style-->
    <link rel="stylesheet" href="<?php echo $base; ?>/assets/dist/css/style-personal.css">

    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="<?php echo $base; ?>/assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">

    <!-- Toastr -->
    <link rel="stylesheet" href="<?php echo $base; ?>/assets/plugins/toastr/toastr.min.css">

    <!--icon-->
    <link rel="shortcut icon" href="<?php echo $base; ?>/assets/img/sultec-favicon.ico" type="image/x-icon">

    <!-- datetable   -->
    <link rel="stylesheet" href="<?php echo $base; ?>/assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">


    <!-- Select2 -->
    <link rel="stylesheet" href="<?php echo $base; ?>/assets/plugins/select2/css/select2.min.css">
    <link rel="stylesheet"
        href="<?php echo $base; ?>/assets/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">

    <link rel="stylesheet"
        href="<?php echo $base; ?>/assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="<?php echo $base; ?>/assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">


</head>


<body class="sidebar-mini layout-fixed vsc-initialized text-sm layout-navbar-fixed"></body>
<!--sidebar-mini layout-fixed vsc-initialized control-sidebar-slide-open text-sm-->
<!--layout-navbar-fixed-->
<div class="wrapper">
    <base base="<?= $base ?>">
    <!-- Modal Global-->
    <div id="modal_global" class="modal fade" data-backdrop="static" role="dialog"></div>
    <!--quero criar outro modal-->
    <div id="modal_auxiliar" class="modal fade" data-backdrop="static" tabindex="-1" role="dialog"></div>

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand dropdown-legacy border-bottom-0 text-sm navbar-dark navbar-primary">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="home" class="nav-link">Home</a>
            </li>
        </ul>

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
            <!-- Navbar Search -->
            <li class="nav-item">
                <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                    <i class="fas fa-search"></i>
                </a>
                <div class="navbar-search-block">
                    <form class="form-inline">
                        <div class="input-group input-group-sm">
                            <input class="form-control form-control-navbar" type="search" placeholder="Search"
                                aria-label="Search">
                            <div class="input-group-append">
                                <button class="btn btn-navbar" type="submit">
                                    <i class="fas fa-search"></i>
                                </button>
                                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </li>


            <li class="nav-item">
                <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                    <i class="fas fa-expand-arrows-alt"></i>
                </a>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
                    aria-expanded="true">
                    <?php echo $_SESSION['cLogin']; ?>
                </a>
                <div class="dropdown-menu dropdown-menu-md dropdown-menu-right">
                    <a class="dropdown-item" href="#" id="edit_senha"><i class="fas fa-lock mr-2"></i> Alterar
                        Senha</a>
                    <div id="modal_editPass" class="modal fade" data-backdrop="static" tabindex="-1" role="document">
                    </div>
                    <a class="dropdown-item" href="#"><i class="fas fa-user mr-2"></i> Perfil do Usuário</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="sair"><i class="fas fa-power-off mr-2"></i>Sair do Sistema</a>
                </div>
            </li>

        </ul>
    </nav>
    <!-- /.navbar -->