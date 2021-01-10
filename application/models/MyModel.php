<?php
defined('BASEPATH') or exit('No direct script access allowed');
class MyModel extends CI_Model
{
    public function generateID()
    {
        $id = "";
        $characters = array_merge(range('0', '9'));
        $max = count($characters) - 1;
        for ($i = 0; $i < 10; $i++) {
            $rand = mt_rand(0, $max);
            $id  .= $characters[$rand];
        }
        return $id;
    }

    public function getSingleTable($table)
    {
        $this->db->where('status', 'ACTIVE');
        return $this->db->get($table)->result_array();
    }

    public function getPerson($table)
    {
        $this->db->where('status', 'ACTIVE');
        $this->db->where('available', 'YES');
        return $this->db->get($table)->result_array();
    }

    function setAvailableNo($id, $table)
    {
        $this->db->set('available', 'NO');
        $this->db->where('id', $id);
        $this->db->update($table);
    }
}
