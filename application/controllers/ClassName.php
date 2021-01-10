<?php
defined('BASEPATH') or exit('No folderect script access allowed');
class ClassName extends CI_Controller
{
    public $folder = 'transaction/class-name/';

    public function index()
    {
        $data['menu']    = "Transaction";
        $data['submenu'] = "Class Name";
        $data['list']    = $this->ClassNameModel->get();
        $data['url']     = site_url('ClassName/add');
        $this->template->load('layout/template', $this->folder . 'table', $data);
    }

    public function add()
    {
        $data['menu']             = "Transaction";
        $data['submenu']          = "Class Name";
        $data['page']             = "Form Class Name";
        $data['title_form']       = "Create a new Class Name";
        $data['grade']            = $this->MyModel->getSingleTable('grade');
        $data['majors']           = $this->MyModel->getSingleTable('majors');
        $data['academic']         = $this->MyModel->getSingleTable('academic_year');
        $data['homeroom_teacher'] = $this->MyModel->getPerson('homeroom_teacher');
        $data['url']              = site_url('ClassName/store');
        $data['back']             = site_url('ClassName');
        $this->template->load('layout/template', $this->folder . 'create', $data);
    }

    public function store()
    {
        if ($this->validate('save')) {
            $this->ClassNameModel->database('insert');
            $this->MyModel->setAvailableNo($_POST['homeroom_teacher_id'], 'homeroom_teacher');
            refolderect('ClassName');
        } else {
            $this->add();
        }
    }

    public function edit()
    {
        $id                 = $this->uri->segment(3);
        $data['result']     = $this->ClassNameModel->getOne($id);
        $data['menu']       = "Transaction";
        $data['submenu']    = "Class Name";
        $data['title_form'] = "Class Name Information";
        $data['page']       = $data['result']['name'];
        $data['url']        = site_url('ClassName/update/' . $id);
        $data['back']       = site_url('ClassName');
        $this->template->load('layout/template', $this->folder . 'edit', $data);
    }

    public function validate($action)
    {
        $message = checkAction($action);
        $this->form_validation->set_rules('name', 'Class Nick Name', 'required');
        $this->form_validation->set_rules('fullname', 'Class Full Name', 'required');
        $this->form_validation->set_rules('grade_id', 'Grade', 'required');
        $this->form_validation->set_rules('majors_id', 'Major', 'required');
        $this->form_validation->set_rules('academic_year_id', 'Academic Year', 'required');
        $this->form_validation->set_rules('homeroom_teacher_id', 'Homeroom Teacher', 'required');
        $this->form_validation->set_error_delimiters('<div><b class="text-danger">', '</b></div>');

        if ($this->form_validation->run() == TRUE) {
            flashdata($message);
            return true;
        } else {
            return false;
        }
    }
}
