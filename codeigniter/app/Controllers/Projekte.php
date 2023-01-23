<?php

namespace App\Controllers;

use CodeIgniter\Model;
use Config\App;

class Projekte extends BaseController {
    public function create() {
        $projektname = $this->request->GetPost('Projektname');
        $projektbeschreibung = $this->request->GetPost('Projektbeschreibung');
       //$this->ProjekteModel->createProject('id', 'description');
       $ProjekteModel = new \App\Models\ProjekteModel();

       $ProjekteModel->createProject($projektname, $projektbeschreibung);

        echo view('templates/header');
        echo view('Projekte/Projekte');
        echo view('templates/footer');



    }
    public function update() {
        $this->load->model('ProjekteModel');
        $this->ProjekteModel->updateProject(1, 'New Project Name', 'New Project Description');
    }

    public function index()
    {
        echo view('templates/header');
        echo view('Projekte/Projekte');
        echo view('templates/footer');
    }
}
