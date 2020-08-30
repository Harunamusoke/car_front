<?php
defined('BASEPATH') or exit('No direct script access allowed');
require_once APPPATH . "libraries/HttpClient.php";


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
        $data['dashboard'] = true;

        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate');
        $this->output->set_header('Cache-Control: post-check=0, pre-check=0');
        $this->output->set_header('Pragma: no-cache');

        try {
            $data['details'] =  $this->check_end_point($this->config->item("get_dashboard"));
        } catch (\Throwable $th) {
            redirect("auth/login?error=error+occured");
        }


        $this->load->view("fragments/header", $data);
        $this->load->view("navigation/navigation");
        $this->load->view("dashboard/dashboard", $data);
        $this->load->view("fragments/app_footer");
        $this->load->view("fragments/footer");
    }

    private function check_end_point($url)
    {
        $result = HttpClient::getData(
            $url,
            HttpClient::formPost($this->input->get()),
            ($this->session->userdata("user"))['id']
        );
        // echo $this->config->item("get_dashboard");
        // echo $url;
        // echo "<br>";
        // echo ($this->session->userdata("user"))['id'];

        if ((isset($result['error']) && $result['error'] != null && !empty($result['error']))
            || $result['data'] == null
        ) {
            throw new Exception($result['error']);
        }

        return $result['data'];
    }
}
