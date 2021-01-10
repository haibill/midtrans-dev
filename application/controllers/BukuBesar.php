<?php
defined('BASEPATH') or exit('No direct script access allowed');
class BukuBesar extends CI_Controller
{

    public function index()
    {
        $data['menu']    = "Report";
        $data['submenu'] = "Ledger";
        $data['account'] = $this->Akun_model->get();
        $data['year']    = $this->BukuBesar_model->getYear();
        $data['url']     = site_url('BukuBesar/find');
        $this->template->load('layout/template', 'report/buku-besar/form', $data);
    }

    public function find()
    {


        $this->form_validation->set_rules('akun', 'Account', 'required');
        $this->form_validation->set_rules('bulan', 'Month', 'required');
        $this->form_validation->set_rules('tahun', 'Year', 'required');
        $this->form_validation->set_error_delimiters('<div><b class="text-danger">', '</b></div>');

        if ($this->form_validation->run() == FALSE) {
            $data['menu']    = "Report";
            $data['submenu'] = "Ledger";
            $data['account'] = $this->Akun_model->get();
            $data['year']    = $this->BukuBesar_model->getYear();
            $data['url']     = site_url('BukuBesar/find');
        } else {
            $data['menu']    = "Report";
            $data['submenu'] = "Ledger";
            $data['account'] = $this->Akun_model->get();
            $data['akun']    = $this->Akun_model->getOne($_POST['akun']);
            $data['year']    = $this->BukuBesar_model->getYear();
            $data['url']     = site_url('BukuBesar/find');
            $data['list']    = $this->BukuBesar_model->get($_POST['akun'], $_POST['bulan'], $_POST['tahun']);
        }
        $this->template->load('layout/template', 'report/buku-besar/form', $data);
    }
}
