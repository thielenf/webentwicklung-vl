<?php

namespace App\Controllers;

class Projekte extends BaseController
{
    public function index()
    {
        echo view('templates/header');
        echo view('Projekte/Projekte');
        echo view('templates/footer');
    }
}
