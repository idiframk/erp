<?php

namespace src\controllers;

use \core\Controller;
use src\models\tbl_cidade;
use src\models\tbl_estado;
use src\models\tbl_obra;

class ObrasController extends Controller
{

    public function cad_obra()
    {
        $ufs  = tbl_estado::select()->get();
        $city_lists = tbl_cidade::select()->get();
        $obras = tbl_obra::select()->get();

        $this->render('cad_obra', [
            'obras' => $obras,
            'ufs' => $ufs,
            'city_lists' => $city_lists
        ]);
    }

    public function mod_cad_obras()
    {
        $estados = tbl_estado::select()->execute();


        $this->render(
            'mod_cad_obras',
            [
                'estados' => $estados

            ]
        );
    }


    public function list_ciddades()
    {
        $estado = filter_input(INPUT_POST, 'grupo', FILTER_VALIDATE_INT);
        $cidade = isset($_POST['cidade']) ? filter_input(INPUT_POST, 'cidade', FILTER_VALIDATE_INT) : 0;

        $cidades = tbl_cidade::select()->where('id_estado', $estado)->execute(); //


        if (count($cidades) == 0) {
            echo  '<option value="0">' . htmlentities('Não há cidades para este estado') . '</option>';
        } else {
            foreach ($cidades as $ln) {
                $sel = $ln['id'] == $cidade ? ' selected' : '';
                echo '<option value="' . $ln['id'] . '"' . $sel . '>' . $ln['descricao'] . '</option>';
            }
        }
    }


    public function obra_addAction()
    {
        $e = array();
        $e['retorno'] = 0;

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

        echo json_encode($e);
    }

    public function ger_rdo()
    {
        $this->render('ger_rdo');
    }


    public function mod_rdo()
    {
        $this->render('mod_rdo');
    }


    public function mod_compra()
    {
        $this->render('mod_compra');
    }


    public function list_rdo()
    {
        $this->render('list_rdo');
    }

    public function mod_edit_obras($args)
    {
        $edit_Obra = tbl_obra::select()->where('obra_id', $args['id'])->one();

        //print_r($edit_Obra);
        $estados = tbl_estado::select()->execute();

        $this->render('mod_edit_obras', [
            'edit_Obra' => $edit_Obra,
            'estados' => $estados
        ]);
    }

    public function mod_edit_obrasAction($args)
    {

        $e = array();
        $e['retorno'] = 0;

        $nome_obra = mb_strtoupper(filter_input(INPUT_POST, 'nome_obra'), 'UTF-8');
        $razao_social = mb_strtoupper(filter_input(INPUT_POST, 'razao_social'), 'UTF-8');
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
            tbl_obra::update()
                ->set('obra_razao', $razao_social)
                ->set('obra_nome', $nome_obra)
                ->set('obra_endRua', $endereco)
                ->set('obra_endNum', $numero)
                ->set('obra_endBairro', $bairro)
                ->set('obra_endEstado', $uf)
                ->set('obra_endMunic', $cidade)
                ->set('obra_cliente', $nome_cliente)
                ->set('obra_email', $email)
                ->set('obra_fone', $contato)
                ->set('obra_NumContrato', $num_contrato)
                ->set('obra_dtinic', $dtinic_contrato)
                ->set('obra_dtfim', $dtfim_contrato)
                ->set('obra_desc_srv', $dec_srv)
                ->where('obra_id', $args['id'])
                ->execute();

            $e['retorno'] = 1;
        } else {
            $e['retorno'] = 0;
        }

        echo json_encode($e);
    }

    public function mod_del_obra($args)
    {
        $edit_Obra = tbl_obra::select()->where('obra_id', $args['id'])->one();


        $this->render('mod_del_obra');
    }

    public function mod_del_obrasAction($args)
    {
        $e = array();
        $e['sucesso'] = 0;

        if (isset($args) && !empty($args)) {
            tbl_obra::delete()->where('obra_id', $args['id'])->execute();

            //$this->redirect('/cad_obra');
            $e['sucesso'] = 1;
        } else {
            $e['sucesso'] = 0;
        }
        echo json_encode($e);
    }
}