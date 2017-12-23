<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MLogin extends CI_Model {

	public function valid_login($data)
	{
		$algo = "sha256";
		$pass_en = hash($algo, $data['pass']);
		$where = array(
			"username" => $data['user'],
			"password" => $pass_en
		);
		$this->db->where($where);
		$cek = $this->db->get('sk_login')->row();
		if($cek){
			$key = random_string('alnum', 64);
			set_cookie('SIKAP', $key, 3600*24*30);
			$in_login = array(
				"id_login" => $cek->id_login,
				"login_token" => $key,
				"is_login" => 1
			);
			$this->db->insert('sk_cek_login',$in_login);
			$sess = array(
				"user" => $cek->username,
				"level" => $cek->level,
				"nrp" => $cek->nrp,
				"nip" => $cek->nip,
				"is_login" => 1
			);
			$this->session->set_userdata($sess);
		}
	}
	
	public function cek_login($key)
	{
		
	}
}
