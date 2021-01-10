<?php
defined('BASEPATH') or exit('No direct script access allowed');
class HomeroomTeacher extends CI_Controller
{
    public $folder = 'master/homeroom-teacher/';

    public function index()
    {
        $data['menu']    = "Master Data";
        $data['submenu'] = "Homeroom Teacher";
        $data['list']    = $this->HomeroomTeacherModel->get();
        $data['url']     = site_url('HomeroomTeacher/add');
        $this->template->load('layout/template', $this->folder . 'table', $data);
    }

    public function add()
    {
        $data['menu']       = "Master Data";
        $data['submenu']    = "Homeroom Teacher";
        $data['page']       = "Form Homeroom Teacher";
        $data['title_form'] = "Create a new Homeroom Teacher";
        $data['url']        = site_url('HomeroomTeacher/store');
        $data['back']       = site_url('HomeroomTeacher');
        $this->template->load('layout/template', $this->folder . 'create', $data);
    }

    public function store()
    {
        if ($this->validate('save')) {
            $this->HomeroomTeacherModel->database('insert');
            redirect('HomeroomTeacher');
        } else {
            $this->add();
        }
    }

    public function edit()
    {
        $id                 = $this->uri->segment(3);
        $data['result']     = $this->HomeroomTeacherModel->getOne($id);
        $data['menu']       = "Master Data";
        $data['submenu']    = "Homeroom Teacher";
        $data['title_form'] = "Homeroom Teacher Information";
        $data['page']       = $data['result']['name'];
        $data['url']        = site_url('HomeroomTeacher/update/' . $id);
        $data['back']       = site_url('HomeroomTeacher');
        $this->template->load('layout/template', $this->folder . 'edit', $data);
    }

    public function update()
    {
        if ($this->validate('update')) {
            $this->HomeroomTeacherModel->database('update');
            redirect('HomeroomTeacher');
        } else {
            $this->edit();
        }
    }

    public function validate($action)
    {
        $message = checkAction($action);
        $this->form_validation->set_rules('name', 'Homeroom Teacher Name', 'required');
        $this->form_validation->set_rules('phone_number', 'Phone Number', 'required');
        $this->form_validation->set_rules('address', 'Address', 'required');
        $this->form_validation->set_rules('email', 'E-mail', 'required');
        $this->form_validation->set_error_delimiters('<div><b class="text-danger">', '</b></div>');

        if ($this->form_validation->run() == TRUE) {
            flashdata($message);
            return true;
        } else {
            return false;
        }
    }
}
