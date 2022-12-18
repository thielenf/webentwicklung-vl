<?php

namespace App\Controllers;

class Aufgaben extends BaseController
{
    public function index()
    {
        $data['tasks'] = array(
            0 => array(
                "aufgabenbezeichnung" => "HTML Datei erstellen",
                "description" => "HTML Datei erstellen",
                "reiter" => "ToDo",
                "who" => "Max Mustermann"
            ),
            1 => array(
                "aufgabenbezeichnung" => "CSS Datei erstellen",
                "description" => "CSS Datei erstellen",
                "reiter" => "ToDo",
                "who" => "Max Mustermann"
            ),
            2 => array(
                "aufgabenbezeichnung" => "PC eingeschaltet",
                "description" => "PC eingeschaltet",
                "reiter" => "Erledigt",
                "who" => "Max Mustermann"
            ),
            3 => array(
                "aufgabenbezeichnung" => "Kaffee trinken",
                "description" => "Kaffee trinken",
                "reiter" => "Erledigt",
                "who" => "Petra Müller"
            ),
            4 => array(
                "aufgabenbezeichnung" => "Für die Uni lernen",
                "description" => "Für die Uni lernen",
                "reiter" => "Verschoben",
                "who" => "Max Mustermann"
            ),
        );
        echo view('templates/header');
        echo view('Aufgaben/Aufgaben', ['data' => $data]);
        echo view('templates/footer');
    }
}
