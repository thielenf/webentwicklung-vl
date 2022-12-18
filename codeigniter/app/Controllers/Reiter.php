<?php

namespace App\Controllers;

class Reiter extends BaseController
{
    public function index()
    {
        $data['tabs'] = array(
            0 => array(
                "name" => "ToDo",
                "description" => "Dinge, die erledigt werden müssen"
            ),
            1 => array(
                "name" => "Erledigt",
                "description" => "Dinge, die erledigt sind"
            ),
            2 => array(
                "name" => "Verschoben",
                "description" => "Dinge, die später erledigt werden"
            ),
        );
        echo view('templates/header');
        echo view('Reiter/Reiter', ['data' => $data]);
        echo view('templates/footer');
    }
}
