<?php

namespace App\Models;

use App\Controllers\Projekte;
use CodeIgniter\Model;


class ProjekteModel extends Model {
    public function createProject($id, $description) {
        $db = \Config\Database::connect();
        $data = array(
            'id' => $_POST['Projektname'],
            'description' => $_POST['Projektbeschreibung']

        );
        $projects = $this->db->table('projects');
        //$this->db->insert('projects', $data);
        $db->query('INSERT INTO projects(id,description)VALUES("'.$id.'","'.$description.'")');
    }
    public function updateProject($id, $description) {
        $data = array(
            'id' => $id,
            'description' => $description
        );
        $this->db->where('id', $id);
        $this->db->update('projects', $data);
    }

}