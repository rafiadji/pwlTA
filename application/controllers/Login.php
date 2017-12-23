<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	var $template = "dashboard";
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('MLogin','lgn');
		$this->load->helper('String');
	}

	public function index()
	{
		$this->load->view("login");
	}
	
	public function to_login()
	{
		$data['user'] = $this->input->post('user');
		$data['pass'] = $this->input->post('pass');
		$this->lgn->valid_login($data);
		redirect(base_url());
	}
	
	public function logout()
	{
		delete_cookie("SIKAP");
		$this->session->sess_destroy();
		redirect(base_url());
	}
}
