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
        $produtos = tbl_produto::select()->execute();

        $this->render(
            'mod_cad_materiais',
            [
                'produtos' => $produtos

            ]
        );
    }
}