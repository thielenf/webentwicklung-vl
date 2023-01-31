<?php namespace App\Models;

use CodeIgniter\Model;

class ReiterModel extends Model
{

    public function getTabs($tab_id = NULL)
    {
        $tasks = $this->db->table('tabs');
        $tasks->select('*');

        if ($tab_id != NULL)
            $tasks->where('id', $tab_id);

        $tasks->orderBy('id');
        $result = $tasks->get();

        $data = [];
        foreach ($result->getResultArray() as $row) {
            $data[$row['id']] = array(
                "id" => $row['id'],
                "description" => $row['description'],
            );
        }
        return $data;
    }


}
