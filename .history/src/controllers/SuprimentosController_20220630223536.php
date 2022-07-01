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

        $grup_name = $("input[name=grup_name]").val();
        $type_material = $("input[name=type_material]").val();
        $dimensao = $("input[name=dimensao]").val();
        $cor = $("input[name=cor]").val();
        $um = $("input[name=um]").val();
        $apelido = $("select[name=apelido]").val();
        $ref_fabric = $("input[name=ref_fabric]").val();
        $ref_fornecedor = $("select[name=ref_fornecedor]").val();
        $nome_cliente = $("select[name=nome_cliente]").val();
        $obs_material = $("input[name=obs_material]").val();
        $desc_mat_curt = $("input[name=desc_mat_curt]").val();
        $desc_mat_long = $("input[name=num_contrato]").val();

        $nome_obra = mb_strtoupper(filter_input(INPUT_POST, 'nome_obra'), 'UTF-8');
        $razao_social = mb_strtoupper(filter_input(INPUT_POST, 'razao_social'), 'UTF-8');
        $cnpj = mb_strtoupper(filter_input(INPUT_POST, 'cnpj'), 'UTF-8');
        $endereco = mb_strtoupper(filter_input(INPUT_POST, 'endereco'), 'UTF-8');
        $numero = mb_strtoupper(filter_input(INPUT_POST, 'numero'), 'UTF-8');
        $bairro = mb_strtoupper(filter_input(INPUT_POST, 'bairro'), 'UTF-8');
        $uf = mb_strtoupper(filter_input(INPUT_POST, 'uf'), 'UTF-8');
        $cidade = mb_strtoupper(filter_input(INPUT_POST, 'cidade'), 'UTF-8');
        $nome_cliente = mb_strtoupper(filter_input(INPUT_POST, 'nome_cliente'), 'UTF-8');

        $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
        $contato = mb_strtoupper(filter_input(INPUT_POST, 'contato'), 'UTF-8');

        $num_contrato = mb_strtoupper(filter_input(INPUT_POST, 'num_contrato'), 'UTF-8');
        $dtinic_contrato = mb_strtoupper(filter_input(INPUT_POST, 'dtinic_contrato'), 'UTF-8');
        $dtfim_contrato = mb_strtoupper(filter_input(INPUT_POST, 'dtfim_contrato'), 'UTF-8');

        $dec_srv = mb_strtoupper(filter_input(INPUT_POST, 'dec_srv'), 'UTF-8');



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