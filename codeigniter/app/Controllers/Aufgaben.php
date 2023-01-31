<?php

namespace App\Controllers;

use App\Models\AufgabenModel;
use App\Models\MitgliederModel;
use App\Models\ReiterModel;

class Aufgaben extends BaseController
{

    private AufgabenModel $AufgabenModel;
    private MitgliederModel $MitgliederModel;
    private ReiterModel $ReiterModel;

    public function __construct()
    {
        $this->AufgabenModel = new AufgabenModel();
        $this->MitgliederModel = new MitgliederModel();
        $this->ReiterModel = new ReiterModel();
    }

    public function update()
    {
        $this->AufgabenModel->updateTask();

        $this->edit($_POST['id']);
    }

    public function edit($task_id = null)
    {
        $data['mode'] = 1;
        if ($task_id != null) {
            $data['item'] = $this->AufgabenModel->getTasks($task_id);
            $data['item']['task_tab'] = $this->AufgabenModel->getTaskTabs($task_id);
            $data['item']['task_members'] = $this->AufgabenModel->getTaskMembers($task_id);
        }

        $this->index($data, 1);
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
        $data['tabs'] = $this->ReiterModel->getTabs();


        echo view('templates/header');
        echo view('Aufgaben/Aufgaben', ['data' => $data]);
        echo view('templates/footer');
    }

    public function deleteMember($task_id = null)
    {
        if ($task_id != null) {
            $this->AufgabenModel->deleteTask($task_id);
        }
        $this->index();
    }

    public function createTask()
    {
        $this->AufgabenModel->createTask();
        $this->index();
    }
}
