<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="home" class="brand-link navbar-primary">
        <img src="<?php echo $base; ?>/assets/img/sultec-logo-smb.png" alt="Sultec Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span style="color: #ffff"
            class="brand-text font-weight-bold"><?php echo 'Sultec -  Eng. e Geotecnia'  ?></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?php echo $base; ?>/assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2"
                    alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block"><?php echo 'Idiframk Silva' ?></a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>


        <!-- Sidebar Menu -->

        <nav class="mt-2">
            <div id="menu-active">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->


                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-industry"></i>
                            <p>
                                Obras
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="cad_obra" class="nav-link">
                                    <i class="fa fa-briefcase nav-icon"></i>
                                    <p>Lista de Obras</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="list_rdo" class="nav-link">
                                    <i class="fas fa-copy nav-icon"></i>
                                    <p>Lista de RDO's</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-city"></i>
                            <p>
                                Suprimentos
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="compra.php" class="nav-link">
                                    <i class="fa fa-barcode nav-icon"></i>
                                    <p>Compras</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="amox.php" class="nav-link">
                                    <i class="fas fa-boxes nav-icon"></i>
                                    <p>Almoxarife</p>
                                </a>
                            </li>
                        </ul>
                    </li>


                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-cubes"></i>
                            <p>
                                Patrimônio
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="veiculos.php" class="nav-link ">
                                    <i class="fa fa-car nav-icon"></i>
                                    <p>Veiculos</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="ferramentas.php" class="nav-link">
                                    <i class="fas fa-boxes nav-icon"></i>
                                    <p>Ferramentas</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-chart-pie"></i>
                            <p>
                                Custos e Orçamento
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="combustivel.php" class="nav-link ">
                                    <i class="fa fa-gas-pump nav-icon"></i>
                                    <p>Lanc. Contas a Pagar</p>
                                </a>
                            </li>1
                            <li class="nav-item">
                                <a href="combustivel.php" class="nav-link ">
                                    <i class="fa fa-gas-pump nav-icon"></i>
                                    <p>Lanc. Contas a Receber</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="combustivel.php" class="nav-link ">
                                    <i class="fa fa-gas-pump nav-icon"></i>
                                    <p>Combustivel</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="desp_viajem.php" class="nav-link">
                                    <i class="fas fa-plane nav-icon"></i>
                                    <p>Desp. Viajem</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>