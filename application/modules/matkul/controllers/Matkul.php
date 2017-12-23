<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Matkul extends CI_Controller {

	var $template = "dashboard";
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('MMatkul','mtkl');
	}

	public function index()
	{
		$data["dataTable"] = $this->mtkl->dapatData();
		$data["dataProdi"] = $this->mtkl->dapatDataProdi();
		$data["title"] = "Matkul";
		$data["page"] = "matkul/matkul";
		$this->load->view($this->template, $data);
	}
	
	public function satuData($id)
	{
		$res = $this->mtkl->dapatData(array('kd_matkul' => $id), FALSE);
		$jdata['data'] = array(
			'kd_matkul' => $res->kd_matkul,
			'kd_prodi' => $res->kd_prodi,
			'matkul' => $res->matkul
		);
		echo json_encode($jdata);
	}
	
	public function tambahData()
	{
		$data = array(
			'kd_matkul' => $this->input->post('kd_matkul'),
			'kd_prodi' => $this->input->post('kd_prodi'),
			'matkul' => $this->input->post('matkul')

		);	
		if($this->mtkl->tambahData($data)){
			redirect("matkul");
		}
	}
	
	public function ubahData()
	{
		$id = $this->input->post('kd_matkul_hid');
		$data = array(
			'matkul' => $this->input->post('matkul')
		);	
		if($this->mtkl->ubahData($data, $id)){
			redirect("matkul");
		}
	}
	
	public function hapusData($id)
	{
		if($this->mtkl->hapusData($id)){
			redirect("matkul");
		}
	}
}
