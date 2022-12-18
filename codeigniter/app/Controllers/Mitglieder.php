<?php

namespace App\Controllers;

class Mitglieder extends BaseController
{
    public function index()
    {
        $data['mitglieder'] = array(
            0 => array(
                "name" => "Max Mustermann",
                "E-Mail" => "mustermann@muster.de",
                "ismember" => false
            ),
            1 => array(
                "name" => "Petra Müller",
                "E-Mail" => "petra@mueller.de",
                "ismember" => false
            ),

        );
        echo view('templates/header');
        echo view('Mitglieder/Mitglieder', ['data' => $data]);
        echo view('templates/footer');
    }
}
