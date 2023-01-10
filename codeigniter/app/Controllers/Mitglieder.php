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

    public function index($data = array())
    {
        $data['mitglieder'] = $this->MitgliederModel->getMembers();

        echo view('templates/header');
        echo view('Mitglieder/Mitglieder', ['data' => $data]);
        echo view('templates/footer');
    }
}
