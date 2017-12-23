<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Prodi extends CI_Controller {

	var $template = "dashboard";
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('MProdi','prd');
	}

	public function index()
	{
		$data["dataTable"] = $this->prd->dapatData();
		$data["title"] = "Prodi";
		$data["page"] = "prodi/prodi";
		$this->load->view($this->template, $data);
	}
	
	public function satuData($id)
	{
		$res = $this->matkul->dapatData(array('prd' => $id), FALSE);
		$jdata['data'] = array(
			'kd_prodi' => $res->kd_prodi,
			'prodi' => $res->prodi
		);
		echo json_encode($jdata);
	}
	
	public function tambahData()
	{
		$data = array(
			'kd_prodi' => $this->input->post('kd_prodi'),
			'prodi' => $this->input->post('prodi')

		);	
		if($this->prd->tambahData($data)){
			redirect("prodi");
		}
	}
	
	public function ubahData()
	{
		$id = $this->input->post('kd_prodi_hid');
		$data = array(
			'prodi' => $this->input->post('prodi')
		);	
		if($this->prd->ubahData($data, $id)){
			redirect("prodi");
		}
	}
	
	public function hapusData($id)
	{
		if($this->prd->hapusData($id)){
			redirect("prodi");
		}
	}
}
