<?php

namespace App\Controllers;

class Personen extends BaseController
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
        return view('Personen/Personen', ['data' => $data]);
    }
}
