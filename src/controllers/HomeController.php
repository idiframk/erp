<?php

namespace src\controllers;

use \core\Controller;
use src\models\tbl_user;



class HomeController extends Controller
{


    public function home()
    {
        $usuarios = tbl_user::select(['user_nome', 'user_sobrenome'])->execute();


        $this->render('home', ['usuarios' => $usuarios]);
    }

    public function cad_obra()
    {
        $this->render('cad_obra');
    }

    public function ger_rdo()
    {
        $this->render('ger_rdo');
    }


    public function list_rdo()
    {
        $this->render('list_rdo');
    }



    public function modal_cad_obra()
    {
        $this->render('modal_cad_obra');
    }


    public function sobre()
    {
        $this->render('sobre');
    }

    public function sair()
    {
        $this->render('sair');
    }


    public function sobreP($args)
    {
        print_r($args);
    }
}