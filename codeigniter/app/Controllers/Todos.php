<?php

namespace App\Controllers;

class Todos extends BaseController
{
    public function index()
    {
        echo view('templates/header');
        echo view('Todos/Todos');
        echo view('templates/footer');
    }
}
