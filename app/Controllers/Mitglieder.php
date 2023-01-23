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

    public function update()
    {
        $this->MitgliederModel->updateMember();

        $this->edit($_POST['id']);
    }

    public function edit($member_id = null)
    {
        $data['mode'] = 1;
        if ($member_id != null) {
            $data['item'] = $this->MitgliederModel->getMembers($member_id);
        }

        $this->index($data);
    }

    public function index($data = array(), $mode = 0)
    {
        $data['mitglieder'] = $this->MitgliederModel->getMembers();
        if (!isset($data['mode'])) {
            $data['mode'] = 0;
        }
        echo view('templates/header');
        echo view('Mitglieder/Mitglieder', ['data' => $data]);
        echo view('templates/footer');
    }

    public function deleteMember($member_id = null)
    {
        if ($member_id != null) {
            $this->MitgliederModel->deleteMember($member_id);
        }
        $this->index();
    }

    public function createMember()
    {
        $this->MitgliederModel->createMember();
        $this->index();
    }
}
