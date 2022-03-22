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
        $obras = tbl_obra::select()->execute();
        $this->render('cad_obra', ['obras' => $obras]);
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

        $cidades = tbl_cidade::select()->where('id_estado', $estado)->execute();

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
        $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
        $contato = mb_strtoupper(filter_input(INPUT_POST, 'contato'), 'UTF-8');

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
                    'obra_email' => $email,
                    'obra_fone' => $contato

                ])->execute();
                $e['retorno'] = 1;
            } else {
                $e['retorno'] = 0;
            }
        }
        ///agora falta msgm de sucesso
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
}