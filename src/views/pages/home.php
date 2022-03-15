<?php
$render('header');
$render('sidebar');
?>

<?php
//require '../public/view/header.php';
//require '../public/view/sidebar.php';
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper iframe-mode" data-widget="iframe" data-loading-screen="750">
    <div class="nav navbar navbar-expand navbar-white navbar-light border-bottom p-0">
        <div class="nav-item dropdown">
            <a class="nav-link bg-danger dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Fechar</a>
            <div class="dropdown-menu mt-0">
                <a class="dropdown-item" href="#" data-widget="iframe-close" data-type="all">Fechar tudo</a>
                <a class="dropdown-item" href="#" data-widget="iframe-close" data-type="all-other">Fechar item</a>
            </div>
        </div>
        <a class="nav-link bg-light" href="#" data-widget="iframe-scrollleft"><i class="fas fa-angle-double-left"></i></a>
        <ul class="navbar-nav overflow-hidden" role="tablist"></ul>
        <a class="nav-link bg-light" href="#" data-widget="iframe-scrollright"><i class="fas fa-angle-double-right"></i></a>
        <a class="nav-link bg-light" href="#" data-widget="iframe-fullscreen"><i class="fas fa-expand"></i></a>
    </div>
    <div class="tab-content">
        <div class="tab-empty">
            <h2 class="display-4">Nenhuma guia selecionada!</h2>
        </div>
        <div class="tab-loading">
            <div>
                <h2 class="display-4">A guia está carregando <i class="fa fa-sync fa-spin"></i></h2>
            </div>
        </div>
    </div>
</div>
<!-- /.content-wrapper -->

<?php
//require '../public/view/footer.php';
?>


<?php
$render('footer');
?>