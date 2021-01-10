<?php
defined('BASEPATH') or exit('No direct script access allowed');
class JurnalUmum extends CI_Controller
{

    public function index()
    {
        $data['menu']    = "Report";
        $data['submenu'] = "General Journal";
        $data['url']     = site_url('JurnalUmum/find');
        $this->template->load('layout/template', 'report/jurnal-umum/form', $data);
    }

    public function find()
    {
        $data['menu']    = "Report";
        $data['submenu'] = "General Journal";
        $data['url']     = site_url('JurnalUmum/find');
        $data['list']    = $this->JurnalUmum_model->get($_POST['start_date'], $_POST['end_date']);
        $this->template->load('layout/template', 'report/jurnal-umum/form', $data);
    }
}
