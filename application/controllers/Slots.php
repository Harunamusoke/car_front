<?php
defined('BASEPATH') or exit('No direct script access allowed');
require_once APPPATH . "libraries/HttpClient.php";

class Slots extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if (!$this->session->has_userdata("user"))
            redirect("auth/login");
    }


    public function index()
    {
        $data['title'] = "Slots";

        $result = HttpClient::getData(
            $this->config->item("get_slots"),
            "",
            ($this->session->userdata("user"))['id']
        );
        if (!is_array($result) || isset($result['error'])) {
            show_404();
            exit;
        }

        $data['headers'] = array_keys($result["data"][0]);
        $data['values'] = $result['data'];
        $this->render($data);
    }

    private function render($data)
    {
        $this->load->view("fragments/header", $data);
        $this->load->view("navigation/navigation");
        // RATE VIEW
        $this->load->view("admin/slots", $data);
        // RATE VIEW
        $this->load->view("fragments/app_footer");
        $this->load->view("fragments/footer", $data);
    }
}
