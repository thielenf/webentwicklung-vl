<?php

namespace App\Controllers;

use App\Models\MitgliederModel;

class Mitglieder extends BaseController
{
    private MitgliederModel $MitgliederModel;

    public function __construct()
    {
        $this->MitgliederModel = new MitgliederModel();
    }

    public function index()
    {
        $data['mitglieder'] = $this->MitgliederModel->getMembers();

        echo view('templates/header');
        echo view('Mitglieder/Mitglieder', ['data' => $data]);
        echo view('templates/footer');
    }
}
