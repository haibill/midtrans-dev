<?php
defined('BASEPATH') or exit('No direct script access allowed');
class ClassNameModel extends CI_Model
{

    public $table = 'class_name';

    public function get()
    {
        $this->db->select('a.id class_id, a.name, fullname, a.status, b.name grade, c.name majors, d.name year, e.name teacher, a.created_date, a.created_by, b.id grade_id, c.id majors_id, d.id academic_year_id, e.id teacher_id');
        $this->db->from('class_name a');
        $this->db->join('grade b', 'a.grade_id = b.id');
        $this->db->join('majors c', 'a.majors_id = c.id');
        $this->db->join('academic_year d', 'a.academic_year_id = d.id');
        $this->db->join('homeroom_teacher e', 'a.homeroom_teacher_id = e.id');
        return $this->db->get()->result_array();
    }

    public function getOne($id)
    {
        $this->db->select('a.id class_id, a.name, fullname, a.status, b.name grade, c.name majors, d.name year, e.name teacher, a.created_date, a.created_by, b.id grade_id, c.id majors_id, d.id academic_year_id, e.id teacher_id, a.description');
        $this->db->from('class_name a');
        $this->db->join('grade b', 'a.grade_id = b.id');
        $this->db->join('majors c', 'a.majors_id = c.id');
        $this->db->join('academic_year d', 'a.academic_year_id = d.id');
        $this->db->join('homeroom_teacher e', 'a.homeroom_teacher_id = e.id');
        $this->db->where('a.id', $id);
        return $this->db->get()->row_array();
    }

    public function database($action)
    {
        date_default_timezone_set('Asia/Jakarta');
        $this->db->set('name', $_POST['name']);
        $this->db->set('fullname', $_POST['fullname']);
        if ($_POST['description'] == '') {
            $desc = 'empty';
        } else {
            $desc = $_POST['description'];
        }
        $this->db->set('description', $desc);
        $this->db->set('grade_id', $_POST['grade_id']);
        $this->db->set('majors_id', $_POST['majors_id']);
        $this->db->set('academic_year_id', $_POST['academic_year_id']);
        $this->db->set('homeroom_teacher_id', $_POST['homeroom_teacher_id']);
        if ($action == 'insert') {
            $this->db->set('id', $this->MyModel->generateID());
            $this->db->set('status', 'ACTIVE');
            $this->db->set('created_date', Date('d-m-Y h:i:s'));
            $this->db->set('created_by', 'admin_fe');
            $this->db->insert($this->table);
        } else if ($action == 'update') {
            $this->db->set('status', $_POST['status']);
            $this->db->where('id', $_POST['class_id']);
            $this->db->update($this->table);
        }
    }
}
