<?php

namespace src\controllers;

use \core\Controller;
use src\models\tbl_user;



class SuprimentosController extends Controller
{

    public function cad_material()
    {


        $this->render('cad_material', [
            'obras' => $obras,
            'ufs' => $ufs,
            'city_lists' => $city_lists,
            'obras_ativas' => $obras_ativas,
            'obras_finaliz' => $obras_finaliz,
            'total_obras' => $total_obras
        ]);
    }
}