<?php namespace App\Models;

use CodeIgniter\Model;

class MitgliederModel extends Model
{


    public function getMembers($member_id = NULL)
    {
        $members = $this->db->table('members');
        $members->select('*');

        if ($member_id != NULL)
            $members->where('id', $member_id);

        $members->orderBy('id');
        $result = $members->get();

        if ($member_id != NULL)
            return $result->getRowArray();
        else
            return $result->getResultArray();
    }

    public function createMember()
    {
        $hashed_password = password_hash($_POST['password'], PASSWORD_DEFAULT);

        $data = array(
            'username' => $_POST['username'],
            'email' => $_POST['email'],
            'password' => $hashed_password,
            'firstname' => $_POST['firstname'],
            'lastname' => $_POST['lastname'],
            'street' => $_POST['street'],
            'zip' => $_POST['zip'],
            'city' => $_POST['city'],
        );

        $members = $this->db->table('members');
        $members->insert($data);
    }

    public function updateMember()
    {
        $data = array(
            // TODO: should we be able to edit username?
            // 'username' => $_POST['username'],
            'email' => $_POST['email'],
            'firstname' => $_POST['firstname'],
            'lastname' => $_POST['lastname'],
            'street' => $_POST['street'],
            'zip' => $_POST['zip'],
            'city' => $_POST['city'],
        );
        if ((isset($_POST['password'])) && ($_POST['password'] !== '')) {
            $hashed_password = password_hash($_POST['password'], PASSWORD_DEFAULT);
            $data['password'] = $hashed_password;
        }
        $members = $this->db->table('members');
        $members->where('id', $_POST['id']);
        $members->update($data);
    }

    public function login()
    {
        $members = $this->db->table('members');
        $members->select('password');
        $members->where('username', $_POST['username']);
        $result = $members->get();

        return $result->getRowArray();
    }

    public function deleteMember($member_id)
    {
        $members = $this->db->table('members');
        $members->where('id', $member_id);
        $members->delete();
    }


}
