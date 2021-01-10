<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Student extends CI_Controller
{
    public $folder = 'master/student/';

    public function index()
    {
        $data['menu']    = "Master Data";
        $data['submenu'] = "Student";
        $data['list']    = $this->StudentModel->get();
        $data['url']     = site_url('Student/add');
        $this->template->load('layout/template', $this->folder . 'table', $data);
    }

    public function add()
    {
        $data['menu']       = "Master Data";
        $data['submenu']    = "Student";
        $data['page']       = "Form Student";
        $data['title_form'] = "Create a new Student";
        $data['url']        = site_url('Student/store');
        $data['back']       = site_url('Student');
        $this->template->load('layout/template', $this->folder . 'create', $data);
    }

    public function store()
    {
        if ($this->validate('save')) {
            $this->StudentModel->database('insert');
            redirect('Student');
        } else {
            $this->add();
        }
    }

    public function edit()
    {
        $id                 = $this->uri->segment(3);
        $data['result']     = $this->StudentModel->getOne($id);
        $data['menu']       = "Master Data";
        $data['submenu']    = "Student";
        $data['title_form'] = "Student Information";
        $data['page']       = $data['result']['name'];
        $data['url']        = site_url('Student/update/' . $id);
        $data['back']       = site_url('Student');
        $this->template->load('layout/template', $this->folder . 'edit', $data);
    }

    public function update()
    {
        if ($this->validate('update')) {
            $this->StudentModel->database('update');
            redirect('Student');
        } else {
            $this->edit();
        }
    }

    public function validate($action)
    {
        $message = checkAction($action);
        $this->form_validation->set_rules('name', 'Student Name', 'required');
        $this->form_validation->set_rules('phone_number', 'Phone Number', 'required');
        $this->form_validation->set_rules('email', 'E-mail', 'required');
        $this->form_validation->set_rules('address', 'Address', 'required');
        $this->form_validation->set_rules('parent_name', 'Parent Name', 'required');
        $this->form_validation->set_rules('income', 'Income', 'required');
        $this->form_validation->set_rules('parent_phone_number', 'Parent Phone Number', 'required');
        $this->form_validation->set_error_delimiters('<div><b class="text-danger">', '</b></div>');

        if ($this->form_validation->run() == TRUE) {
            flashdata($message);
            return true;
        } else {
            return false;
        }
    }
}
