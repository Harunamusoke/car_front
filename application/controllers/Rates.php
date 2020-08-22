<?php
defined('BASEPATH') or exit('No direct script access allowed');
require_once APPPATH . "libraries/HttpClient.php";

class Rates extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->has_userdata("user"))
            redirect("auth/login");
    }

    public function index()
    {
        $data['title'] = "Rates";

        try {
            $result = $this->check_end_point($this->config->item("get_rates"));
            $data['headers'] = array_keys($result[0]);
            $data['rates'] = $result;
        } catch (Exception  $ex) {
            show_404();
            exit;
        }

        $this->render($data);
    }

    public function save()
    {
        if (empty($_GET))
            redirect("rates");

        $result = [];
        try {
            $result = $this->check_end_point($this->config->item("get_rates"));
        } catch (\Throwable $th) {
            show_404();
            exit();
        }

        // // print_r($this->session->userdata("user"));
        // print_r($result);
        // print_r($this->input->get());
        redirect("rates");
    }

    public function activate($id, $type)
    {
        try {
            $this->check_end_point($this->config->item("get_rates") . "/?id=" . $id . "&is_enabled=" . $type);

            redirect('rates', 'refresh');
        } catch (Exception $ex) {
            show_404();
            exit;
        }
    }

    private function render($data)
    {
        $data['dashboard'] = true;
        $this->load->view("fragments/header", $data);
        $this->load->view("navigation/navigation");
        // RATE VIEW
        $this->load->view("admin/rates", $data);
        // RATE VIEW
        $this->load->view("fragments/app_footer");
        $this->load->view("fragments/footer", $data);
    }

    private function check_end_point($url)
    {
        $result = HttpClient::getData(
            $url,
            HttpClient::formPost($this->input->get()),
            ($this->session->userdata("user"))['id']
        );

        if ((isset($result['error']) && $result['error'] != null && !empty($result['error']))
            || $result['data'] == null
        ) {
            throw new Exception($result['error']);
        }

        return $result['data'];
    }
}
