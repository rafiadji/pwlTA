<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MService extends CI_Model {

	public function dapatLogin($where)
	{
		$this->db->where($where);
		return $this->db->get('sk_login')->row();
	}
}
