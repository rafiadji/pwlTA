<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	var $template = "dashboard";
	
	public function __construct()
	{
		parent::__construct();
	}
	
	public function index()
	{
		$cook = get_cookie('SIKAP');
		if($this->session->userdata('is_login') == 1){
			$data["title"] = "Dashboard";
			$data['page'] = "home";
			$this->load->view($this->template, $data);	
		}
		else{
			redirect('login');
		}
	}
}
