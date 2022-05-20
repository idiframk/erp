<?php

namespace src\controllers;

use \core\Controller;
use src\models\tbl_user;



class SuprimentosController extends Controller
{

    public function cad_material()
    {
        $this->render('cad_material');
    }
}