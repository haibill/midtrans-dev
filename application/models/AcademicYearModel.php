<?php
defined('BASEPATH') or exit('No direct script access allowed');
class AcademicYearModel extends CI_Model
{
    public $table = 'academic_year';

    public function get()
    {
        return $this->db->get($this->table)->result_array();
    }

    public function getOne($id)
    {
        $this->db->from($this->table);
        $this->db->where('id', $id);
        return $this->db->get()->row_array();
    }

    public function database($action)
    {
        date_default_timezone_set('Asia/Jakarta');
        $this->db->set('year', $_POST['year']);
        if ($action == 'insert') {
            $this->db->set('id', $this->MyModel->generateID());
            $this->db->set('status', 'ACTIVE');
            $this->db->set('created_date', Date('d-m-Y h:i:s'));
            $this->db->set('created_by', 'admin_fe');
            $this->db->insert($this->table);
        } else if ($action == 'update') {
            $this->db->set('status', $_POST['status']);
            $this->db->where('id', $_POST['id']);
            $this->db->update($this->table);
        }
    }
}
