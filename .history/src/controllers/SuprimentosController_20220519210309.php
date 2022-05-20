<?php

namespace src\controllers;

use \core\Controller;
use src\models\tbl_user;



class SuprimentosController extends Controller
{

    public function cad_obra()
    {
        $ufs  = tbl_estado::select()->get();
        $city_lists = tbl_cidade::select()->get();
        $obras = tbl_obra::select()->get();

        $obras = tbl_obra::select()->get();
        $obras_status1 = tbl_obra::select()->where('obra_status', 1)->get();
        $obras_status0 = tbl_obra::select()->where('obra_status', 0)->get();

        $total_obras = count($obras);
        $obras_ativas = count($obras_status1);
        $obras_finaliz = count($obras_status0);


        $this->render('cad_obra', [
            'obras' => $obras,
            'ufs' => $ufs,
            'city_lists' => $city_lists,
            'obras_ativas' => $obras_ativas,
            'obras_finaliz' => $obras_finaliz,
            'total_obras' => $total_obras
        ]);
    }
}