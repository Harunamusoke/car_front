<?php
class Exp extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function not_found()
    {
        $data['title'] = '404 NOT FOUND';

        $this->load->view("fragments/header", $data);
        $this->load->view("exceptions/404.php");
        $this->load->view("fragments/footer");
    }
}
