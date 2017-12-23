<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Service extends CI_Controller {
		
	public function __construct()
	{
		parent::__construct();
		$this->load->model('MService','servis');
		$this->load->helper('String');
	}
	
	public function getLogin()
	{
		$user = $this->input->get('user');
		$pass = $this->input->get('pass');
		$algo = "sha256";
		$pass_en = hash($algo, $pass);
		$where = array(
			"username" => $user,
			"password" => $pass_en
		);
		$cek = $this->servis->dapatLogin($where);
		if($cek){
			$data["status"] = "ya";
			$key = random_string('alnum', 64);
			$in_login = array(
				"id_login" => $cek->id_login,
				"login_token" => $key,
				"is_login" => 1
			);
			$this->db->insert('sk_cek_login_android',$in_login);
			$sess = array(
				"id_login" => $cek->id_login,
				"user" => $cek->username,
				"level" => $cek->level,
				"nrp" => $cek->nrp,
				"nip" => $cek->nip,
				"key" => $key,
				"is_login" => 1
			);
			$data["data"] = $sess;
		}
		else {
			$data["status"] = "tidak";
			$sess = array(
				"id_login" => "",
				"user" => "",
				"level" => "",
				"nrp" => "",
				"nip" => "",
				"key" => "",
				"is_login" => -1
			);
			$data["data"] = $sess;
		}
		echo json_encode($data);
	}	

	public function getPKosong()
	{
		
	}
}
