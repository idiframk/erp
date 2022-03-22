<?php

namespace src\controllers;

use \core\Controller;
use src\models\tbl_obra;
use src\models\tbl_user;



class HomeController extends Controller
{

    public function home()
    {
        $usuarios = tbl_user::select(['user_nome', 'user_sobrenome'])->execute();


        $this->render('home', ['usuarios' => $usuarios]);
    }


    public function sair()
    {
        $this->render('sair');
    }



    public function addObraAction()
    {
        $this->render('addObraAction');
    }
}