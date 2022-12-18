<?php

namespace App\Controllers;

class Todos extends BaseController
{
    public function index()
    {
        $data['todos'] = array(
            0 => array(
                "name" => "ToDo",
                "subitems" => array(
                    "HTML Datei erstellen (Max Mustermann)",
                    "CSS Datei erstellen (Max Mustermann)"
                )
            ),
            1 => array(
                "name" => "Erledigt",
                "subitems" => array(
                    "PC eingeschaltet (Petra Müller)",
                    "Kaffee trinken (Petra Müller)"
                )
            ),
            2 => array(
                "name" => "Verschoben",
                "subitems" => array(
                    "Für die Uni lernen (Max Mustermann)",
                )
            ),
        );
        echo view('templates/header');
        echo view('Todos/Todos', ['data' => $data]);
        echo view('templates/footer');
    }
}
