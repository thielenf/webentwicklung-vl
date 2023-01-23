<?php
class ProjekteModel extends CI_Model {
    public function createProject($id, $description) {
        $data = array(
            'name' => $id,
            'description' => $description

        );
        echo('erfolg');
        $projects = $this->db->table('projects');
        $this->db->insert('projects', $data);
    }
    public function updateProject($id, $description) {
        $data = array(
            'name' => $id,
            'description' => $description
        );
        $this->db->where('name', $id);
        $this->db->update('projects', $data);
    }
}