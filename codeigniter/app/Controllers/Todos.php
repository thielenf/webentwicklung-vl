<?php

namespace App\Controllers;

class Todos extends BaseController
{
    public function index()
    {
        return view('Todos/Todos');
    }
}
