<?php namespace App\Models;

use CodeIgniter\Model;

class AufgabenModel extends Model
{

    public function getTasks($task_id = NULL)
    {
        $tasks = $this->db->table('tasks');
        $tasks->select('*');

        if ($task_id != NULL)
            $tasks->where('id', $task_id);

        $tasks->orderBy('id');
        $result = $tasks->get();

        $data = [];
        foreach ($result->getResultArray() as $row) {
            $data[$row['id']] = array(
                "id" => $row['id'],
                "description" => $row['description'],
                "date_created" => $row['date_created'],
                "date_due" => $row['date_due'],
            );
        }
        return $data;
    }

    public function getTaskCreator($lookup_id = NULL, $by = 'task')
    {
        $tasks_creators = $this->db->table('task_creators');
        $tasks_creators->select('*');

        if ($lookup_id != NULL)
            $tasks_creators->where($by == 'task' ? 'task_id' : 'member_id', $lookup_id);

        $tasks_creators->orderBy('task_id');
        $result = $tasks_creators->get();

        $data = [];
        foreach ($result->getResultArray() as $row) {
            $task = $row['task_id'];
            if (!isset($data[$task]))
                $data[$task] = [];
            $data[$task][] = $row['member_id'];
        }
        return $data;
    }

    public function getTaskMembers($lookup_id = NULL, $by = 'task')
    {
        $tasks_members = $this->db->table('tasks_members');
        $tasks_members->select('*');

        if ($lookup_id != NULL)
            $tasks_members->where('task_id', $lookup_id);

        $tasks_members->orderBy('task_id');
        $result = $tasks_members->get();

        $data = [];
        foreach ($result->getResultArray() as $row) {
            $task = $row['task_id'];
            if (!isset($data[$task]))
                $data[$task] = [];
            $data[$task][] = $row['member_id'];
        }
        return $data;
    }

    public function getTaskTabs($lookup_id = NULL, $by = 'task')
    {
        $tasks_tabs = $this->db->table('tasks_tabs');
        $tasks_tabs->select('*');

        if ($lookup_id != NULL)
            $tasks_tabs->where($by == 'task' ? 'task_id' : 'tab_id', $lookup_id);

        $tasks_tabs->orderBy('task_id');
        $result = $tasks_tabs->get();

        $data = [];
        foreach ($result->getResultArray() as $row) {
            $data[$row['task_id']] = $row['tab_id'];
        }
        return $data;
    }

    public function createTask()
    {
        // 'tasks'
        $data = array(
            'task_id' => $_POST['task_id'],
            'description' => $_POST['description'],
            'date_due' => $_POST['date_due'],
        );

        $tasks = $this->db->table('tasks');
        $tasks->insert($data);

        // 'tasks_creators'
        $data = array(
            'task_id' => $_POST['task_id'],
            'member_id' => $_POST['creator_id'],
        );

        $tasks_creators = $this->db->table('tasks_creators');
        $tasks_creators->insert($data);

        // 'tasks_members'
        foreach ($_POST['member_ids'] as $member_id) {
            $data = array(
                'task_id' => $_POST['task_id'],
                'member_id' => $member_id,
            );
            $tasks_members = $this->db->table('tasks_members');
            $tasks_members->insert($data);
        }

        // 'tasks_tabs'
        $data = array(
            'task_id' => $_POST['task_id'],
            'tab_id' => $_POST['tab_id'],
        );

        $tasks_tabs = $this->db->table('tasks_tabs');
        $tasks_tabs->insert($data);
    }

    public function updateTask()
    {
        // tasks
        $data = array(
            'task_id' => $_POST['task_id'],
            'description' => $_POST['description'],
            'date_due' => $_POST['date_due'],
        );

        $members = $this->db->table('tasks');
        $members->where('id', $_POST['task_id']);
        $members->update($data);


        // 'tasks_members'
        foreach ($_POST['member_ids'] as $member_id) {
            $data = array(
                'task_id' => $_POST['task_id'],
                'member_id' => $member_id,
            );
            $tasks_members = $this->db->table('tasks_members');
            $tasks_members->insert($data);
        }

        // 'tasks_tabs'
        $data = array(
            'task_id' => $_POST['task_id'],
            'tab_id' => $_POST['tab_id'],
        );

        $tasks_tabs = $this->db->table('tasks_tabs');
        $tasks_tabs->insert($data);
    }

    public function deleteTask($task_id)
    {
        $members = $this->db->table('tasks');
        $members->where('id', $task_id);
        $members->delete();
    }

}
