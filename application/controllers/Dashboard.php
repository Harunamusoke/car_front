<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if (!$this->session->has_userdata("user"))
            redirect("auth/login");
    }

    public function index()
    {
        $data['title'] = "Dashboard";

        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate');
        $this->output->set_header('Cache-Control: post-check=0, pre-check=0');
        $this->output->set_header('Pragma: no-cache');

        $this->load->view("fragments/header", $data);
        $this->load->view("navigation/navigation");
        $this->load->view("dashboard/dashboard");
        $this->load->view("fragments/app_footer");
        $this->load->view("fragments/footer");
    }
}
