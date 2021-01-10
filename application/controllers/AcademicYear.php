<?php
defined('BASEPATH') or exit('No direct script access allowed');
class AcademicYear extends CI_Controller
{
    public $folder = 'master/academic-year/';

    public function index()
    {
        $data['menu']    = "Master Data";
        $data['submenu'] = "Academic Year";
        $data['list']    = $this->AcademicYearModel->get();
        $data['url']     = site_url('AcademicYear/add');
        $this->template->load('layout/template', $this->folder . 'table', $data);
    }

    public function add()
    {
        $data['menu']       = "Master Data";
        $data['submenu']    = "Academic Year";
        $data['page']       = "Form Academic Year";
        $data['title_form'] = "Create a new AcademicYear";
        $data['url']        = site_url('AcademicYear/store');
        $data['back']       = site_url('AcademicYear');
        $this->template->load('layout/template', $this->folder . 'create', $data);
    }

    public function store()
    {
        if ($this->validate('save')) {
            $this->AcademicYearModel->database('insert');
            redirect('AcademicYear');
        } else {
            $this->add();
        }
    }

    public function edit()
    {
        $id                 = $this->uri->segment(3);
        $data['result']     = $this->AcademicYearModel->getOne($id);
        $data['menu']       = "Master Data";
        $data['submenu']    = "Academic Year";
        $data['title_form'] = "Academic Year Information";
        $data['page']       = $data['result']['name'];
        $data['url']        = site_url('AcademicYear/update/' . $id);
        $data['back']       = site_url('AcademicYear');
        $this->template->load('layout/template', $this->folder . 'edit', $data);
    }

    public function update()
    {
        if ($this->validate('update')) {
            $this->AcademicYearModel->database('update');
            redirect('AcademicYear');
        } else {
            $this->edit();
        }
    }

    public function validate($action)
    {
        $message = checkAction($action);
        $this->form_validation->set_rules('year', 'Academic Year', 'required');
        $this->form_validation->set_error_delimiters('<div><b class="text-danger">', '</b></div>');

        if ($this->form_validation->run() == TRUE) {
            flashdata($message);
            return true;
        } else {
            return false;
        }
    }
}
