<?php

namespace src\controllers;

use \core\Controller;

class HomeController extends Controller
{

    /*public function index()
    {
        $this->render('home');
    }*/

    public function home()
    {
        $this->render('home');
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

    public function sobreP($args)
    {
        print_r($args);
    }
}