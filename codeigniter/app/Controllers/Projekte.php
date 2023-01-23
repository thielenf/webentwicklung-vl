<?php

namespace App\Controllers;

use CodeIgniter\Model;
use Config\App;

class Projekte extends BaseController {
    public function create() {
        $data = $this->request->getPost();
       //$this->load->model('ProjekteModel');
       $this->ProjekteModel->createProject('id', 'description');
       $ProjekteModel = new \ProjekteModel();
       $id = $data['id'];
       echo($id);
       die();
       $ProjekteModel->createProject($id, $description);
        echo('erfolg');

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
