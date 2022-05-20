<?php

namespace src\controllers;

use \core\Controller;
use src\models\tbl_user;



class SuprimentosController extends Controller
{

    public function home()
    {
        $usuarios = tbl_user::select(['user_nome', 'user_sobrenome'])->get();
        $this->render('home', ['usuarios' => $usuarios]);
    }
}