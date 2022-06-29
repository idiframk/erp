<!-- /.modal -->
<div class="modal-dialog modal-xl">
    <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title">CADASTRAR PRODUTO/MATERIAL</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form id="form_cad_obra" method="POST" autocomplete="on" enctype="multipart/form-data"
                class="form-horizontal">
                <div class="card card-primary ">
                    <div class="card-header">
                        <h3 class="card-title">
                            <i class="fas fa-boxes"></i>
                            Cadastrar Produto/Material
                        </h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-8">


                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="card mb-4">
                                <div class="card-header">
                                    <i class="bi-file-earmark-person"></i>
                                    Foto (Opcional)
                                </div>
                                <div class="card-body">

                                    <div style="text-align:center" class="image_area">
                                        <form method="post">
                                            <label for="upload_image">
                                                <img width="150px"
                                                    src="<?php echo $base; ?>/assets/img/produto_sem_foto.jpg"
                                                    id="uploaded_image" class="rounded" style="width:200;">
                                                <div class="overlay">
                                                    <div class="text">Click para trocar a imagem</div>
                                                </div>
                                                <input type="file" name="image" class="image" id="upload_image"
                                                    style="display:none">
                                            </label>
                                        </form>
                                    </div>

                                    <table width="100%">
                                        <tbody>
                                            <tr>
                                                <td align="center"><span id="foto_produto"></span></td>
                                            </tr>
                                            <tr>
                                                <td align="center"><span id="foto_referencia_produto"></span></td>
                                            </tr>
                                            <tr>
                                                <td align="center"><span id="foto_nome_produto"></span></td>
                                            </tr>
                                            <tr>
                                                <td style="padding-top: 15px" align="center"><span
                                                        id="foto_info_produto"></span></td>
                                            </tr>
                                        </tbody>
                                    </table>



                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>

        </form>
    </div>
    <div class="modal-footer">
        <button id="cancelar" type="button" class="btn btn-sm btn-danger" data-dismiss="modal"><i
                class="fa fa-times"></i>
            Cancelar</button>
        <button id="salvar" type="button" onclick="cad_obra()" class="btn btn-sm btn-success"><i class="fa fa-save"></i>
            Salvar</button>
    </div>
</div>
</div>