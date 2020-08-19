<?php
defined('BASEPATH') or exit('No direct script access allowed');
require_once APPPATH . "libraries/HttpClient.php";

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->has_userdata("user"))
            redirect("auth/login");
    }

    public function users()
    {
        $data['title'] = "Users";
        $data['datatable'] = true;
        $data['isVehicles'] = false;
        $data['status'] = (!isset($_GET["active"]) ? "ALL" :
            strtoupper($this->input->get("active")));
        $data['keys'] = [];

        $result = [];
        try {
            $result = $this->check_end_point($this->config->item("get_users"));
        } catch (Exception $ex) {
            show_404();
            exit;
        }
        if (isset($result[0]))
            $data['keys'] = array_keys($result[0]);

        $data['values'] = $result;
        if (isset($_GET['download']))
            $this->export_csv($result);

        $this->render($data);
    }

    public function vehicles()
    {
        $data['title'] = "Vehicles";
        $data['datatable'] = true;
        $data['keys'] = [];
        $data['status'] =
            isset($_GET['status']) ?
            strtoupper($this->input->get("status")) . " DUE "
            . $this->input->get("date_from")
            : "NOT CLEARED : TODAY";
        $data['isVehicles'] = true;

        $result = [];
        try {
            $result = $this->check_end_point($this->config->item("get_vehicles"));
        } catch (Exception $ex) {
            show_404();
            exit;
        }

        // tabulate datatable
        if (isset($result[0]))
            $data['keys'] = array_keys($result[0]);

        $data['values'] = $result;
        // download
        if (isset($_GET['download']))
            $this->export_csv($result);

        $this->render($data);
    }

    public function takeToDate()
    {
        $get = $this->input->get();
        $result = [];

        if (empty($get))
            return redirect("admin/vehicles");
        else if (!isset($get['date_from']) && !isset($get['status']))
            return redirect("admin/vehicles");

        if (isset($get['date_from'])) {
            $result['date_from'] = date("Y-m-d H:i:s", strtotime($get['date_from'] . " " . date("D")));
        }
        if (isset($get['status'])) {
            $result['status'] = $get['status'];
        }

        // print_r(HttpClient::formPost($result));
        redirect("admin/vehicles?" . HttpClient::formPost($result));
    }

    private function render($data, $view = null)
    {
        $this->load->view("fragments/header", $data);
        $this->load->view("navigation/navigation");
        $this->load->view("admin/data_table", $data);
        $this->load->view("fragments/app_footer");
        $this->load->view("fragments/footer", $data);
    }

    private function export_csv($data)
    {
        // file name 
        $filename = date("Ymd") . $this->session->userdata("user")["name"] . '.csv';
        header("Content-Description: File Transfer");
        header("Content-Disposition: attachment; filename=$filename");
        header("Content-Type: application/csv; ");
        // get data 
        $usersData = $data;
        // file creation 
        $file = fopen('php://output', 'w');
        $header = array_keys($data[0]);
        fputcsv($file, $header);
        foreach ($usersData as $key => $line) {
            fputcsv($file, $line);
        }
        fclose($file);
        exit;
    }
    private function check_end_point($url)
    {
        $result = HttpClient::getData(
            $url,
            HttpClient::formPost($this->input->get()),
            ($this->session->userdata("user"))['id']
        );
        // echo $this->config->item("get_users");
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
