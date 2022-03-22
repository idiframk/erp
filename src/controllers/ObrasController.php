<?php

namespace src\controllers;

use \core\Controller;
use src\models\tbl_obra;

class ObrasController extends Controller
{

    public function cad_obra()
    {
        $this->render('cad_obra');
    }

    public function mod_cad_obras()
    {
        $this->render('mod_cad_obras');
    }

    public function obra_addAction()
    {
        //echo "Passou";
        //$this->render('modal_cad_obra');
        //echo 'Recebido';
        $nome_obra = filter_input(INPUT_POST, 'nome_obra');
        $cnpj = filter_input(INPUT_POST, 'cnpj');

        if (isset($cnpj) && !empty($cnpj)) {
            $data = tbl_obra::select()->where('obra_cnpj', $cnpj)->execute();

            if (count($data) === 0) {
                tbl_obra::insert([
                    'obra_nome' => $nome_obra,
                    'obra_cnpj' => $cnpj
                ])->execute();
                $e['retorno'] = 1;
            } else {
                $e['retorno'] = 0;
            }
        } else {
            $e['retorno'] = 0;
        }
    }

    public function ger_rdo()
    {
        $this->render('ger_rdo');
    }

    public function list_rdo()
    {
        $this->render('list_rdo');
    }
}