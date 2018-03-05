<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pinjaman extends CI_Controller {
	public function index()
	{
		$this->load->database();
		$this->load->helper('url');
		$this->load->view('pinjaman_view');
		if($this->session->user)
		{
			$this->load->model('PinjamanModel');

		}
	}

	public function signup()
	{
		$this->load->helper(array('form'));
		$this->load->view('signup_pinjaman_view');
	}

	public function login()
	{
		$this->load->view('login_pinjaman_view');
		$this->load->library('session');
		$this->load->helper('url');
		$this->load->model('PinjamanModel');
		$this->load->library('form_validation');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$validate = $this->form_validation->run();
		$result = $this->PinjamanModel->login($username, $password);
		if($result && $validate == true)
		{
			$sess_array = array();
			foreach($result as $row)
			{
				$sess_array = array(
					'id' => $row->id,
					'username' => $row->username);
				$this->session->set_userdata('logged_in', $sess_array);
			}
			redirect('Pinjaman', 'index');
		}
		else if($result && $validate == false)
		{
			$err = validation_errors();
			$err = $err. '<p>Username atau password salah</p>'. PHP_EOL;
			$data['err'] = $err;
			$this->load->view('login_pinjaman_view', $data);
		}
	}

	public function logout()
	{

	}

	public function registrasi()
	{
		$this->load->view('pengajuan_pinjaman_view');
		$this->load->library('session');
		$this->load->helper('url');
		$this->load->model('RegistrasiModel');
		$this->load->library('form_validation');
	}

}
?>