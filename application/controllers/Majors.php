<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Majors extends CI_Controller
{
    public $folder = 'master/majors/';

    public function index()
    {
        $data['menu']    = "Master Data";
        $data['submenu'] = "Majors";
        $data['list']    = $this->MajorsModel->get();
        $data['url']     = site_url('Majors/add');
        $this->template->load('layout/template', $this->folder . 'table', $data);
    }

    public function add()
    {
        $data['menu']       = "Master Data";
        $data['submenu']    = "Majors";
        $data['page']       = "Form Majors";
        $data['title_form'] = "Create a new Majors";
        $data['url']        = site_url('Majors/store');
        $data['back']       = site_url('Majors');
        $this->template->load('layout/template', $this->folder . 'create', $data);
    }

    public function store()
    {
        if ($this->validate('save')) {
            $this->MajorsModel->database('insert');
            redirect('Majors');
        } else {
            $this->add();
        }
    }

    public function edit()
    {
        $id                 = $this->uri->segment(3);
        $data['result']     = $this->MajorsModel->getOne($id);
        $data['menu']       = "Master Data";
        $data['submenu']    = "Majors";
        $data['title_form'] = "Majors Information";
        $data['page']       = $data['result']['name'];
        $data['url']        = site_url('Majors/update/' . $id);
        $data['back']       = site_url('Majors');
        $this->template->load('layout/template', $this->folder . 'edit', $data);
    }

    public function update()
    {
        if ($this->validate('update')) {
            $this->MajorsModel->database('update');
            redirect('Majors');
        } else {
            $this->edit();
        }
    }

    public function validate($action)
    {
        $message = checkAction($action);
        $this->form_validation->set_rules('name', 'Majors Name', 'required');
        $this->form_validation->set_rules('description', 'Description', 'required');
        $this->form_validation->set_error_delimiters('<div><b class="text-danger">', '</b></div>');
        $this->form_validation->set_error_delimiters('<div><b class="text-danger">', '</b></div>');

        if ($this->form_validation->run() == TRUE) {
            flashdata($message);
            return true;
        } else {
            return false;
        }
    }
}
