<?php namespace App\Models;

use CodeIgniter\Model;

class MitgliederModel extends Model
{


    public function getMembers($member_id = NULL)
    {
        $members = $this->db->table('members');
        $members->select('*');

        if ($member_id != NULL)
            $members->where('personen.id', $member_id);

        $members->orderBy('id');
        $result = $members->get();

        if ($member_id != NULL)
            return $result->getRowArray();
        else
            return $result->getResultArray();
    }

}
