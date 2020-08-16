<?php
defined('BASEPATH') or exit('No direct script access allowed');
require APPPATH . "libraries/HttpClient.php";

class Auth extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->library("form_validation");
	}

	public function login()
	{
		$data["title"] = "Login";
		$data['errors'] = [];
		$data['submit'] = "auth/login";
		$data['signup'] = false;
		$data['link'] = "auth/signup";

		if (isset($_GET['user'])) {
			$data['inputError'] = array("error" => $this->input->get("user", true));
		}


		if ($this->form_validation->run("login") == FALSE) {
			$data['errors'] = $this->form_validation->error_array();

			$this->render($data, "auth/login");
			return;
		}

		$encoded = HttpClient::formPost($this->input->post());
		$result = "";
		try {
			$result =  HttpClient::getData($this->config->item("login"), $encoded);
		} catch (Exception $ex) {
			http_response_code(500);
			echo "Script stopped : " . $ex->getMessage() . "<br> Retry Please.";
			return;
		}

		if (!is_array($result)) {
			return "Script stopped <br> Retry Please.";
		} else if (!isset($result['user']) || empty($result['user'])) {
			$data['inputError'] = array("error" => ucfirst($result['error']));
			$this->render($data, "auth/login");
			return;
		}

		// print_r($result);
		$this->session->set_userdata(["user" => $result['user']]);
		redirect("dashboard");
	}

	public function signup()
	{

		$data["title"] = "SignUp";
		$data['errors'] = [];
		$data["submit"] = "auth/signup";
		$data['signup'] = true;
		$data['link'] = "auth/login";
		$data["inputError"] = array();

		if ($this->form_validation->run("signup") == FALSE) {
			$data['errors'] = $this->form_validation->error_array();
			$this->render($data, "auth/login");
			return;
		}

		$encoded = HttpClient::formPost($this->input->post());
		$result = "";
		try {
			$result = HttpClient::post($this->config->item("signup"), $encoded);
		} catch (Exception $ex) {
			http_response_code(500);
			echo "Script stopped : " . $ex->getMessage() . "<br> Retry Please.";
			return;
		}

		print_r($result);
		if (!is_array($result)) {
			http_response_code(500);
			echo "Script stopped <br> Retry Please.";
			return;
		} else if (!isset($result['user']) || empty($result['user'])) {
			$data["inputError"] = array("error" => $result['error']);
			$this->render($data, "auth/login");
			return;
		}

		// redirect('auth/login');
		redirect(base_url("auth/login") . "?user=" . urlencode($result['user']), "auto", 302);
		print_r($result['user']);
		// print_r($result);
	}

	public function logout()
	{
		$this->session->unset_userdata('user');
		redirect("auth/login");
	}

	private function render(array $data, $view)
	{
		$this->load->view("fragments/header", $data);
		$this->load->view($view, $data);
		$this->load->view("fragments/footer");
	}
}
