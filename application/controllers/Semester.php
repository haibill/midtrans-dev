<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Semester extends CI_Controller
{
    public $folder = 'master/semester/';

    public function index()
    {
        $data['menu']    = "Master Data";
        $data['submenu'] = "Semester";
        $data['list']    = $this->SemesterModel->get();
        $data['url']     = site_url('Semester/add');
        $this->template->load('layout/template', $this->folder . 'table', $data);
    }

    public function add()
    {
        $data['menu']       = "Master Data";
        $data['submenu']    = "Semester";
        $data['page']       = "Form Semester";
        $data['title_form'] = "Create a new Semester";
        $data['url']        = site_url('Semester/store');
        $data['back']       = site_url('Semester');
        $this->template->load('layout/template', $this->folder . 'create', $data);
    }

    public function store()
    {
        if ($this->validate('save')) {
            $this->SemesterModel->database('insert');
            redirect('Semester');
        } else {
            $this->add();
        }
    }

    public function edit()
    {
        $id                 = $this->uri->segment(3);
        $data['result']     = $this->SemesterModel->getOne($id);
        $data['menu']       = "Master Data";
        $data['submenu']    = "Semester";
        $data['title_form'] = "Semester Information";
        $data['page']       = $data['result']['name'];
        $data['url']        = site_url('Semester/update/' . $id);
        $data['back']       = site_url('Semester');
        $this->template->load('layout/template', $this->folder . 'edit', $data);
    }

    public function update()
    {
        if ($this->validate('update')) {
            $this->SemesterModel->database('update');
            redirect('Semester');
        } else {
            $this->edit();
        }
    }

    public function validate($action)
    {
        $message = checkAction($action);
        $this->form_validation->set_rules('name', 'Semester Name', 'required');
        $this->form_validation->set_error_delimiters('<div><b class="text-danger">', '</b></div>');

        if ($this->form_validation->run() == TRUE) {
            flashdata($message);
            return true;
        } else {
            return false;
        }
    }
}
