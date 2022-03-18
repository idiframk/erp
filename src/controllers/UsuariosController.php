<?php

namespace src\controllers;

use \core\Controller;
use src\models\tbl_user;

class UsuariosController extends Controller
{
    public function login()
    {
        $this->render('login');
    }



    public function loginAction()
    {

        $email = filter_input(INPUT_POST, 'email');
        $senha = sha1(filter_input(INPUT_POST, 'senha'));



        if (isset($email) && !empty($email) and isset($senha) && !empty($senha)) {

            $data = tbl_user::select()

                ->Where(['user_email' => $email])
                ->andWhere(['user_senha' => $senha])

                ->execute();


            if (count($data) === 1) {
                $_SESSION['cLogin'] = true;

                //$user = tbl_user::select()->where('user_email', $email)->get();

                //var_dump($user(['user_email']));
                $this->redirect('/home');
            } else {
                $this->redirect('/login');
            }
        } else {
            $this->redirect('/login');
        }
    }

    public function addAction()
    {
        //echo 'Recebido';
        $email = filter_input(INPUT_POST, 'email');
        $name = filter_input(INPUT_POST, 'name');
        $senha = sha1('senha');

        if ($name && $email) {
            $data = tbl_user::select()->where('user_email', $email)->execute();

            if (count($data) === 0) {
                tbl_user::insert([
                    'user_senha' => $senha,
                    'user_nome' => $name,
                    'user_email' => $email
                ])->execute();
                echo 'Cadastro com sucess';
                exit;
            }
        }
        echo 'User invalido ou nao existe';
    }
}