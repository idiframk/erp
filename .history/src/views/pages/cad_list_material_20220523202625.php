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
                    <i class="fas fa-boxes "></i>
                    <div class="col-sm-6">
                        <h1 class="m-0">Cadastro de Materiais</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="home">Home</a></li>
                            <li class="breadcrumb-item"><a href="dash_material">Dashboard de Clientes</a></li>
                            <li class="breadcrumb-item active">Cadastro de Materiais</li>
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
                        <div class="card-header card card-primary">
                            <div class="row">
                                <div class="">
                                    <button onclick="cadastrar(this)" modal="/mod_cad_obras" class="btn btn-success">
                                        <i class="fas fa-boxes "></i>
                                        Cadastrar Material
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="card-header">
                            <div class="row">
                                <div class="">
                                    <h3 class="card-title">Lista das Materiais Cadastrados</h3>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" style="width:100%" class="table table-sm table-bordered table-striped">
                                <thead class="bg-gradient-dark text-sm">
                                    <tr>
                                        <th style="width:32px;text-align: center">#Cod.</th>
                                        <th>Num. Contrato</th>
                                        <th>CNPJ</th>
                                        <th>Nome da Obra</th>
                                        <th>Razão Social</th>
                                        <th>E-mail</th>
                                        <th>Contato</th>
                                        <th>UF</th>
                                        <th>Municipio</th>
                                        <th style="width:10px;text-align: center">Status</th>
                                        <th style="width:10%;text-align: center">Ação</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php foreach ($obras as $obra) : ?>

                                    <tr>

                                        <td>#<?= $obra['obra_id']; ?></td>
                                        <td><?= $obra['obra_NumContrato']; ?></td>
                                        <td><?= $obra['obra_cnpj']; ?></td>
                                        <td><?= $obra['obra_nome']; ?></td>
                                        <td><?= $obra['obra_razao']; ?></td>
                                        <td><?= $obra['obra_email']; ?></td>
                                        <td><?= $obra['obra_fone']; ?></td>


                                        <td>
                                            <?php
                                                //print_r($ufs);
                                                foreach ($ufs as $uf) :

                                                    if ($obra['obra_endEstado'] == $uf['id']) {
                                                        echo $uf['descricao'];
                                                    }
                                                endforeach;
                                                ?>
                                        </td>
                                        <td>

                                            <?php foreach ($city_lists as $city_list) :
                                                    if ($obra['obra_endMunic'] == $city_list['id']) {
                                                        echo $city_list['descricao'];
                                                    }
                                                endforeach;
                                                ?>
                                        </td>

                                        <td>
                                            <?php

                                                if ($obra['obra_status'] == 1) {
                                                ?>
                                            <button type="button" class="btn btn-success btn-sm" disabled>Ativo</button>
                                            <?php

                                                } else {
                                                ?>
                                            <button type="button" class="btn btn-danger btn-sm"
                                                disabled>Inativo</button>
                                            <?php

                                                } ?>

                                        </td>

                                        <td class="project-actions text-right">
                                            <a class="btn btn-info btn-sm" onclick="editar(this)" href="#"
                                                modal="/mod_edit_obras/<?= $obra['obra_id']; ?>/editar"
                                                id_registro="<?= $obra['obra_id']; ?>">
                                                <i class="fas fa-pencil-alt">
                                                </i>
                                                Edit
                                            </a>
                                            <a class="btn btn-danger btn-sm action_del_user"
                                                obra_id_del=<?= $obra['obra_id']; ?>>
                                                <i class="fas fa-trash">
                                                </i>Excluir
                                            </a>
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>

                                </tbody>
                                <tfoot>
                                    <tr>


                                        <th>#Cod.</th>
                                        <th>Num. Contrato</th>
                                        <th>CNPJ</th>
                                        <th>Nome da Obra</th>
                                        <th>Razão Social</th>
                                        <th>E-mail</th>
                                        <th>Contato</th>
                                        <th>UF</th>
                                        <th>Municipio</th>
                                        <th>Status</th>
                                        <th>Ação</th>
                                    </tr>
                                </tfoot>
                            </table>
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

    </section>



</div>

<?php
$render('footer');
?>