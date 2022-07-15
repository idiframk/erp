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

        $grup_name = mb_strtoupper(filter_input(INPUT_POST, 'grup_name'), 'UTF-8');
        $type_material = mb_strtoupper(filter_input(INPUT_POST, 'type_material'), 'UTF-8');
        $dimensao = mb_strtoupper(filter_input(INPUT_POST, 'dimensao'), 'UTF-8');
        $composicao = mb_strtoupper(filter_input(INPUT_POST, 'composicao'), 'UTF-8');
        $type_acab = mb_strtoupper(filter_input(INPUT_POST, 'type_acab'), 'UTF-8');
        $type_fornec = mb_strtoupper(filter_input(INPUT_POST, 'type_fornec'), 'UTF-8');
        $ean_ncm = mb_strtoupper(filter_input(INPUT_POST, 'ean_ncm'), 'UTF-8');


        $type_encaixe = mb_strtoupper(filter_input(INPUT_POST, 'type_encaixe'), 'UTF-8');
        $cor = mb_strtoupper(filter_input(INPUT_POST, 'cor'), 'UTF-8');
        $um = mb_strtoupper(filter_input(INPUT_POST, 'um'), 'UTF-8');
        $apelido = mb_strtoupper(filter_input(INPUT_POST, 'apelido'), 'UTF-8');
        $ref_fabric = mb_strtoupper(filter_input(INPUT_POST, 'ref_fabric'), 'UTF-8');
        $ref_fornecedor = mb_strtoupper(filter_input(INPUT_POST, 'ref_fornecedor'), 'UTF-8');
        $obs_material = mb_strtoupper(filter_input(INPUT_POST, 'obs_material'), 'UTF-8');
        $desc_mat_tags = mb_strtoupper(filter_input(INPUT_POST, 'desc_mat_tags'), 'UTF-8');

        $estoq_mim = mb_strtoupper(filter_input(INPUT_POST, 'estoq_mim'), 'UTF-8');
        $estoq_max = mb_strtoupper(filter_input(INPUT_POST, 'estoq_max'), 'UTF-8');

        $estoq_mim_php1 = str_replace('.', '', $estoq_mim);
        $estoq_mim_php = str_replace(',', '.', $estoq_mim_php1);

        $estoq_max_php1 =  str_replace('.', '', $estoq_max);
        $estoq_max_php =  str_replace(',', '.', $estoq_max_php1);


        if (isset($apelido) && !empty($apelido)) {
            $data = tbl_produto::select()->where('Prod_Apelido', 'LAMPADA LEDE')->execute();


            if (count($data) === 0) {
                tbl_produto::insert([
                    'gr_mat_cod' => $grup_name,
                    'Prod_Unid_Med' => $um,
                    'Prod_Tipo_Material' => $type_material,
                    'Prod_Dimensao' => $dimensao,
                    'Prod_Composicao' => $composicao,
                    'Prod_Tipo_Acab' => $type_acab,
                    'Prod_Tipo_Fonecimento' => $type_fornec,
                    'Prod_Tipo_Encaixe' => $type_encaixe,
                    'Prod_Esoq_min' => $estoq_mim_php,
                    'Prod_Estoq_max' => $estoq_max_php,
                    'Prod_EAN_NCM' => $ean_ncm,
                    'color_id' => $cor,
                    'Prod_Apelido' => $apelido,
                    'Prod_Ref_Fabric' => $ref_fabric,
                    'Prod_Ref_Fornecedor' => $ref_fornecedor,
                    'Prod_obs_material' => $obs_material,
                    'Prod_tags' => $desc_mat_tags


                ])->execute();
                $e['retorno'] = 1;
            } else {
                $e['retorno'] = 0;
            }
        }
        echo json_encode($e);
    }
}