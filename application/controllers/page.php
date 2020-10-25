<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Page extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	function __construct()
	{
		parent::__construct();
		$this->load->model("M_login");

		// if($this->session->userdata('logged_in') == '1'){
		// 	redirect(base_url("login"));
		// }
		$this->load->library(array('form_validation', 'session'));

		// if (!$this->session->userdata('logged_in')) {
		// 	redirect('login');
		// }
	}

	public function index()
	{
		$this->load->view('web/admin');
		// print_r($this->session->userdata('usernik'));
		// echo $this->session->userdata('email');
		// echo $this->session->userdata('usernik');
	}

	public function tengkulak()
	{
		$this->load->view('web/tengkulak');
	}

	public function petani()
	{
		// $data["username"] = $this->session->userdata('username');
		// $data["email"] = $this->session->userdata('email');

		// echo $this->session->userdata('logged_in');
		// print_r($this->session->userdata());

		$this->load->view('web/petani');
	}
	public function editprofil()
	{
		$this->load->view('web/editprofil');
	}

	public function logout()
	{
		$this->session->session_destroy();
		redirect('login');
	}
}
