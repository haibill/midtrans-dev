<?php
defined('BASEPATH') or exit('No direct script access allowed');
class CoaModel extends CI_Model
{
    public function get()
    {
        return $this->db->get('coa')->result_array();
    }

    public function getOne($id)
    {
        $this->db->from('coa');
        $this->db->where('coa_code', $id);
        return $this->db->get()->row_array();
    }

    public function save()
    {
        date_default_timezone_set('Asia/Jakarta');
        $this->db->set('coa_code', $_POST['coa_code']);
        $this->db->set('name', $_POST['name']);
        $this->db->set('header', substr($_POST['coa_code'], 0, 1));
        $this->db->set('status', 'ACTIVE');
        $this->db->set('created_date', Date('d-m-Y h:i:s'));
        $this->db->set('created_by', 'admin_fe');
        $this->db->insert('coa');
    }
}
