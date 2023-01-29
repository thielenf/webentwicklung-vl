<?php

namespace App\Controllers;

use App\Models\AufgabenModel;
use App\Models\MitgliederModel;

class Aufgaben extends BaseController
{

    private AufgabenModel $AufgabenModel;
    private MitgliederModel $MitgliederModel;

    public function __construct()
    {
        $this->AufgabenModel = new AufgabenModel();
        $this->MitgliederModel = new MitgliederModel();
    }

    public function index($data = array(), $mode = 0)
    {
        if (!isset($data['mode'])) {
            $data['mode'] = 0;
        }
        $data['members'] = $this->MitgliederModel->getMembers();
        $data['tasks'] = $this->AufgabenModel->getTasks();
        $data['task_members'] = $this->AufgabenModel->getTaskMembers();
        $data['task_tabs'] = $this->AufgabenModel->getTaskTabs();

        echo view('templates/header');
        echo view('Aufgaben/Aufgaben', ['data' => $data]);
        echo view('templates/footer');
    }
}
