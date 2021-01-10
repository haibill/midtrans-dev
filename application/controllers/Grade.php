<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Grade extends CI_Controller
{
    public $folder = 'master/grade/';

    public function index()
    {
        $data['menu']    = "Master Data";
        $data['submenu'] = "Grade";
        $data['list']    = $this->GradeModel->get();
        $data['url']     = site_url('Grade/add');
        $this->template->load('layout/template', $this->folder . 'table', $data);
    }

    public function add()
    {
        $data['menu']       = "Master Data";
        $data['submenu']    = "Grade";
        $data['page']       = "Form Grade";
        $data['title_form'] = "Create a new Grade";
        $data['url']        = site_url('Grade/store');
        $data['back']       = site_url('Grade');
        $this->template->load('layout/template', $this->folder . 'create', $data);
    }

    public function store()
    {
        if ($this->validate('save')) {
            $this->GradeModel->database('insert');
            redirect('Grade');
        } else {
            $this->add();
        }
    }

    public function edit()
    {
        $id                 = $this->uri->segment(3);
        $data['result']     = $this->GradeModel->getOne($id);
        $data['menu']       = "Master Data";
        $data['submenu']    = "Grade";
        $data['title_form'] = "Grade Information";
        $data['page']       = $data['result']['name'];
        $data['url']        = site_url('Grade/update/' . $id);
        $data['back']       = site_url('Grade');
        $this->template->load('layout/template', $this->folder . 'edit', $data);
    }

    public function update()
    {
        if ($this->validate('update')) {
            $this->GradeModel->database('update');
            redirect('Grade');
        } else {
            $this->edit();
        }
    }

    public function validate($action)
    {
        $message = checkAction($action);
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('label', 'Label', 'required');
        $this->form_validation->set_rules('roman_numerals', 'Roman Numerals', 'required');
        $this->form_validation->set_error_delimiters('<div><b class="text-danger">', '</b></div>');

        if ($this->form_validation->run() == TRUE) {
            flashdata($message);
            return true;
        } else {
            return false;
        }
    }
}
