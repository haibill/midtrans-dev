<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Coa extends CI_Controller
{
    public $folder = 'master/coa/';

    public function index()
    {
        $data['menu']    = "Master Data";
        $data['submenu'] = "Chart of Account";
        $data['list']    = $this->CoaModel->get();
        $data['url']     = site_url('Coa/add');
        $this->template->load('layout/template', $this->folder . 'table', $data);
    }

    public function add()
    {
        $data['menu']       = "Master Data";
        $data['submenu']    = "Chart of Account";
        $data['page']       = "Form Chart of Account";
        $data['title_form'] = "Create a new Chart of Account";
        $data['url']        = site_url('Coa/store');
        $data['back']       = site_url('Coa');
        $this->template->load('layout/template', $this->folder . 'create', $data);
    }

    public function store()
    {
        $this->form_validation->set_rules('coa_code', 'Account Code', 'required|is_unique[coa.coa_code]', array('is_unique' => '' . $_POST["coa_code"] . ' already exist in database.'));
        $this->form_validation->set_rules('name', 'Account Name', 'required');
        $this->form_validation->set_error_delimiters('<div><b class="text-danger">', '</b></div>');

        if ($this->form_validation->run() == FALSE) {
            $this->add();
        } else {
            $this->CoaModel->save();
            flashdata('success');
            redirect('coa');
        }
    }
}
