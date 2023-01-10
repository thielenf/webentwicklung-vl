<?php

namespace App\Controllers;

use App\Models\MitgliederModel;

class Login extends BaseController
{
    private MitgliederModel $MitgliederModel;

    public function __construct()
    {
        $this->MitgliederModel = new MitgliederModel();
    }

    public function index()
    {
        helper('form');

        if (isset($_POST['username']) && isset($_POST['password'])) {
            $known_login = $this->MitgliederModel->login($_POST['username']);

            if (($known_login != NULL) && (password_verify($_POST['password'], $known_login['password']))) {
                session()->set('logged_in', true);
                return redirect()->to(base_url('/Mitglieder'));
            }
        }


        echo view('templates/header');
        echo view('login');
        echo view('templates/footer');
    }
}
