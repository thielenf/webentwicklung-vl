<?php

namespace App\Controllers;

class Reiter extends BaseController
{
    public function index()
    {
        echo view('templates/header');
        echo view('Reiter/Reiter');
        echo view('templates/footer');
    }
}
