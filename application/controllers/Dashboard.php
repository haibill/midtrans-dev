<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Dashboard extends CI_Controller
{

    public function index()
    {
        $data['menu']    = "Dashboard";
        $this->template->load('layout/template', 'dashboard', $data);
    }
}
