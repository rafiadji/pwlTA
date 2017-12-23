<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ruang extends CI_Controller {

	var $template = "dashboard";
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('MRuang','rng');
	}

	public function index()
	{
		$data["dataTable"] = $this->rng->dapatData();
		$data["title"] = "Ruang";
		$data["page"] = "ruang/ruang";
		$this->load->view($this->template, $data);
	}
	
	public function satuData($id)
	{
		$res = $this->rng->dapatData(array('rng' => $id), FALSE);
		$jdata['data'] = array(
			'kd_ruang' => $res->kd_ruang,
			'ruang' => $res->ruang
		);
		echo json_encode($jdata);
	}
	
	public function tambahData()
	{
		$data = array(
			'kd_ruang' => $this->input->post('kd_ruang'),
			'ruang' => $this->input->post('ruang')

		);	
		if($this->rng->tambahData($data)){
			redirect("ruang");
		}
	}
	
	public function ubahData()
	{
		$id = $this->input->post('kd_ruang_hid');
		$data = array(
			'ruang' => $this->input->post('ruang')
		);	
		if($this->rng->ubahData($data, $id)){
			redirect("ruang");
		}
	}
	
	public function hapusData($id)
	{
		if($this->rng->hapusData($id)){
			redirect("ruang");
		}
	}
}
