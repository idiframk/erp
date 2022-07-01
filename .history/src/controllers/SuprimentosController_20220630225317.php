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
        $cor = filter_input(INPUT_POST, 'cor', FILTER_VALIDATE_INT);
        $apelido = mb_strtoupper(filter_input(INPUT_POST, 'apelido'), 'UTF-8');
        $ref_fabric = mb_strtoupper(filter_input(INPUT_POST, 'ref_fabric'), 'UTF-8');
        $ref_fornecedor = mb_strtoupper(filter_input(INPUT_POST, 'ref_fornecedor'), 'UTF-8');
        $obs_material = mb_strtoupper(filter_input(INPUT_POST, 'obs_material'), 'UTF-8');
        $desc_mat_curt = mb_strtoupper(filter_input(INPUT_POST, 'desc_mat_curt'), 'UTF-8');
        $desc_mat_long = mb_strtoupper(filter_input(INPUT_POST, 'desc_mat_long'), 'UTF-8');



        if (isset($cnpj) && !empty($cnpj)) {
            $data = tbl_obra::select()->where('obra_cnpj', $cnpj)->execute();

            if (count($data) === 0) {
                tbl_obra::insert([
                    'obra_nome' => $nome_obra,
                    'obra_razao' => $razao_social,
                    'obra_cnpj' => $cnpj,
                    'obra_endRua' => $endereco,
                    'obra_endNum' => $numero,
                    'obra_endBairro' => $bairro,
                    'obra_endEstado' => $uf,
                    'obra_endMunic' => $cidade,
                    'obra_cliente' => $nome_cliente,
                    'obra_email' => $email,
                    'obra_fone' => $contato,
                    'obra_NumContrato' => $num_contrato,
                    'obra_dtinic' => $dtinic_contrato,
                    'obra_dtfim' => $dtfim_contrato,
                    'obra_desc_srv' => $dec_srv




                ])->execute();
                $e['retorno'] = 1;
            } else {
                $e['retorno'] = 0;
            }
        }
    }
}