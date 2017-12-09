<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ruang extends CI_Controller {

	var $template = "dashboard";

	public function index()
	{
		$data["title"] = "Ruang";
		$data["page"] = "ruang/ruang";
		$this->load->view($this->template, $data);
	}
}
