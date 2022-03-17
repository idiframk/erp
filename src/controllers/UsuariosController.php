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
        //echo 'Recebido';
        $email = filter_input(INPUT_POST, 'email');
        $name = filter_input(INPUT_POST, 'name');
        $senha = sha1('senha');

        $data = tbl_user::select()
            ->where(function ($q) {
                $email = filter_input(INPUT_POST, 'email');
                $name = filter_input(INPUT_POST, 'name');
                $senha = sha1('senha');

                $q->where('user_email', '=', $email);
                $q->where('user_senha', '=', $senha);
            })
            ->orwhere(function ($q) {
                $email = filter_input(INPUT_POST, 'email');
                $name = filter_input(INPUT_POST, 'name');
                $senha = sha1('senha');

                $q->where('user_nome', '=', $name);
                $q->where('user_senha', '=', $senha);
            })
            ->get();

        /*$data = tbl_user::select()
            ->where([
                'user_email' => $email,
                'user_senha' => $senha
            ])
            ->orwhere([
                'user_nome' => $name,
                'user_senha' => $senha
            ])
            ->get();*/

        if (count($data) > 0) {
            $_SESSION['cLogin'] = true;
            //echo 'existe' . ' - ' . $senha . ' - ' . $name . ' - ' . $email;
            $this->redirect('/home');
        } else {
            //return false;
            //echo 'nao existe' . ' - ' . $senha . ' - ' . $name . ' - ' . $email;
            $this->redirect('/login');
            //echo 'Usuário Desativado e/ou Senha inválidos!';
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