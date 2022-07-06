<?php

namespace src\controllers;

use \core\Controller;
use src\models\tbl_produto;

class SuprimentosController extends Controller
{

    public function dash_material()
    {
        $this->render('dash_material');
    }

    public function cad_list_material()
    {
        $this->render('cad_list_material');
    }



    public function mod_cad_materiais()
    {

        $this->render('mod_cad_materiais');
    }

    public function material_addAction()
    {

        $e = array();
        $e['retorno'] = 0;

        $grup_name = filter_input(INPUT_POST, 'grup_name', FILTER_VALIDATE_INT);
        $type_material = mb_strtoupper(filter_input(INPUT_POST, 'type_material'), 'UTF-8');
        $dimensao = mb_strtoupper(filter_input(INPUT_POST, 'dimensao'), 'UTF-8');
        $cor = filter_input(INPUT_POST, 'cor');
        $apelido = mb_strtoupper(filter_input(INPUT_POST, 'apelido'), 'UTF-8');
        $ref_fabric = mb_strtoupper(filter_input(INPUT_POST, 'ref_fabric'), 'UTF-8');
        $ref_fornecedor = mb_strtoupper(filter_input(INPUT_POST, 'ref_fornecedor'), 'UTF-8');
        $obs_material = mb_strtoupper(filter_input(INPUT_POST, 'obs_material'), 'UTF-8');
        $desc_mat_curt = mb_strtoupper(filter_input(INPUT_POST, 'desc_mat_curt'), 'UTF-8');
        $desc_mat_long = mb_strtoupper(filter_input(INPUT_POST, 'desc_mat_long'), 'UTF-8');



        if (isset($apelido) && !empty($apelido)) {
            $data = tbl_produto::select()->where('Prod_Apelido', $apelido)->execute();


            if (count($data) === 0) {
                tbl_produto::insert([
                    'gr_mat_cod' => $grup_name,
                    'Prod_Tipo_Material' => $type_material,
                    'Prod_Dimensao' => $dimensao,
                    'color_id' => $cor,
                    'Prod_Apelido' => $apelido,
                    'Prod_Ref_Fabric' => $ref_fabric,
                    'Prod_Ref_Fornecedor' => $ref_fornecedor,
                    'Prod_obs_material' => $obs_material,
                    'Prod_Desc_Curta' => $desc_mat_curt,
                    'Prod_Desc_Longa' => $desc_mat_long


                ])->execute();
                $e['retorno'] = 1;
            } else {
                $e['retorno'] = 0;
            }
        }
    }
}