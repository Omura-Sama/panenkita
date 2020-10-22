<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
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
		// if($this->session->userdata('logged_in')){
		//           redirect('page');
		//       }
		$this->load->library("session");
	}

	public function index()
	{
		$this->load->view('index');
	}

	public function auth()
	{
		// $this->load->library('session');
		$email = $this->input->post('username', TRUE);
		// $password = md5($this->input->post('password',TRUE));
		$password = $this->input->post('password', TRUE);
		$validate = $this->M_login->validate($email, $password);

		// echo $email;
		// echo $password;
		// print_r($validate);
		// echo $validate->num_rows();

		if ($validate->num_rows() > 0) {
			$data = $validate->row_array();
			$name = $data['username'];
			$email = $data['email'];
			$role = $data['role_id'];
			$sesdata = array(
				'username' => $name,
				'email' => $email,
				'role' => $role,
				'logged_in' => TRUE,
			);
			// print_r($this->session->userdata();
			$this->session->set_userdata('usernik', $name);
			$this->session->set_userdata('email', $email);
			$this->session->set_userdata('logged_in', TRUE);

			if ($role == 2) { // cek admin
				// echo "string1";
				redirect('page', $data);
			} elseif ($role == 3) { // cek tengkulak
				redirect('page/tengkulak');
			} elseif ($role == 4) { // petani
				// $data["userdata"] = $this->session->userdata($sesdata);
				// $this->load->view('web/petani',$data);

				// $this->session->set_userdata($sesdata);

				// print_r($this->session->userdata());

				$this->session->set_userdata('usernik', $name);
				$this->session->set_userdata('email', $email);
				$this->session->set_userdata('logged_in', TRUE);

				redirect('page/petani', 'refresh');
			}
		} else {
			// echo "string";
			echo $this->session->set_flashdata('msg', '<span class="badge badge-danger">Username or Password is wrong</span>');
			// redirect('login');
			$this->load->view('index');
		}
	}

	public function logout()
	{
		// $this->session->session_destroy();
		redirect('login');
		// $this->load->view('index');
	}

	public function regist()
	{
		$data["title"] = 'Registration Form';
		$this->load->view('admin/daftar', $data);
	}

	public function newMember()
	{
		$tgl = date('dmy');
		$jam = date('H:i:s');
		$conv = date("y", strtotime($tgl));
		$conv1 = date("His", strtotime($jam));
		$genKar = "Kar" . $conv . $conv1 . "";


		$fName = $this->input->post('fname', TRUE);
		$lName = $this->input->post('lname', TRUE);
		$email = $this->input->post('email', TRUE);
		$password = md5($this->input->post('password', TRUE));

		// echo $email;

		$cek = $this->M_login->cekEmail($email);

		// print_r($cek);

		if (!isset($cek)) {
			$dataInUser = array(
				'pengguna_id' => $genKar,
				'nama_pengguna' => $email,
				'pass_pengguna' => $password
			);

			// print_r($dataInUser);
			$this->M_login->insertUser($dataInUser);

			$dataInEmp = array(
				'karyawan_id' => $genKar,
				'nama_karyawan' => $fName . " " . $lName

			);
			// print_r($dataInEmp);
			$this->M_login->insertEmp($dataInEmp);

			echo $this->session->set_flashdata('msg', 'Data berhasil ditambahkan');
		} else {
			echo $this->session->set_flashdata('msg', 'Email sudah digunakan');
		}


		$data["title"] = 'Registration Form';
		// $this->load->view('regist',$data);
		redirect('login/regist');
	}
}
