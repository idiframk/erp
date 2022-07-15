<?php

namespace src\controllers;

use \core\Controller;
use src\models\tbl_color;
use src\models\tbl_grupo_mat;
use src\models\tbl_produto;
use src\models\tbl_unid_medida;

class SuprimentosController extends Controller
{

    public function dash_material()
    {
        $this->render('dash_material');
    }

    public function cad_list_material()
    {
        $grup_mats = tbl_grupo_mat::select()->execute();


        $this->render(
            'cad_list_material',
            [
                'grup_mats' => $grup_mats

            ]
        );
    }



    public function mod_cad_materiais()
    {


        $grup_mats = tbl_grupo_mat::select()->execute();
        $colors = tbl_color::select()->execute();
        $undms = tbl_unid_medida::select()->execute();


        $this->render(
            'mod_cad_materiais',
            [
                'grup_mats' => $grup_mats,
                'colors' => $colors,
                'undms' => $undms

            ]
        );
    }

    public function material_addAction()
    {

        setlocale(LC_CTYPE, 'pt_BR');


        $subject = ['.', ','];
        $replace = ['', '.'];

        $e = array();
        $e['retorno'] = 0;

        $grup_name = mb_strtoupper(filter_input(INPUT_POST, 'grup_name'), 'UTF-8');
        $type_material_conv = iconv('UTF-8', 'ASCII//TRANSLIT', mb_strtoupper(filter_input(INPUT_POST, 'type_material')));

        $dimensao = iconv('UTF-8', 'ASCII//TRANSLIT', mb_strtoupper(filter_input(INPUT_POST, 'dimensao')));
        $composicao = iconv('UTF-8', 'ASCII//TRANSLIT', mb_strtoupper(filter_input(INPUT_POST, 'composicao')));
        $type_acab = iconv('UTF-8', 'ASCII//TRANSLIT', mb_strtoupper(filter_input(INPUT_POST, 'type_acab')));
        $type_fornec = iconv('UTF-8', 'ASCII//TRANSLIT', mb_strtoupper(filter_input(INPUT_POST, 'type_fornec')));
        $ean_ncm = iconv('UTF-8', 'ASCII//TRANSLIT', mb_strtoupper(filter_input(INPUT_POST, 'ean_ncm')));
        $type_encaixe = iconv('UTF-8', 'ASCII//TRANSLIT', mb_strtoupper(filter_input(INPUT_POST, 'type_encaixe')));
        $cor = mb_strtoupper(filter_input(INPUT_POST, 'cor'), 'UTF-8');
        $um = mb_strtoupper(filter_input(INPUT_POST, 'um'), 'UTF-8');
        $apelido = iconv('UTF-8', 'ASCII//TRANSLIT', mb_strtoupper(filter_input(INPUT_POST, 'apelido')));
        $ref_fabric = iconv('UTF-8', 'ASCII//TRANSLIT', mb_strtoupper(filter_input(INPUT_POST, 'ref_fabric')));
        $ref_fornecedor = iconv('UTF-8', 'ASCII//TRANSLIT', mb_strtoupper(filter_input(INPUT_POST, 'ref_fornecedor')));
        $obs_material = mb_strtoupper(filter_input(INPUT_POST, 'obs_material'), 'UTF-8');
        $desc_mat_tags = iconv('UTF-8', 'ASCII//TRANSLIT', mb_strtoupper(filter_input(INPUT_POST, 'desc_mat_tags')));

        $estoq_mim = mb_strtoupper(filter_input(INPUT_POST, 'estoq_mim'), 'UTF-8');
        $estoq_max = mb_strtoupper(filter_input(INPUT_POST, 'estoq_max'), 'UTF-8');



        //echo str_replace($subject,$replace, $value);

        $estoq_mim_php = str_replace($subject, $replace, $estoq_mim);
        $estoq_max_php =  str_replace($subject, $replace, $estoq_max);



        if (isset($apelido) && !empty($apelido)) {
            $data = tbl_produto::select()->where('Prod_Apelido', $apelido)->execute();


            if (count($data) === 0) {
                tbl_produto::insert([
                    'gr_mat_cod' => $grup_name,
                    'Prod_Unid_Med' => $um,
                    'Prod_Tipo_Material' => $type_material_conv,
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
                    'Prod_tags' => $desc_mat_tags,
                    'Prod_Desc_Longa' => $prod_desc_long


                ])->execute();
                $e['retorno'] = 1;
            } else {
                $e['retorno'] = 0;
            }
        }
        echo json_encode($e);
    }
}