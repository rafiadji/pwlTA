<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

	var $template = "dashboard";
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('MMahasiswa','mhs');
	}

	public function index()
	{
		$data["dataTable"] = $this->mhs->dapatData();
		$data["title"] = "Mahasiswa";
		$data["page"] = "mahasiswa/mahasiswa";
		$this->load->view($this->template, $data);
	}
	
	public function satuData($id)
	{
		$res = $this->mhs->dapatData(array('nrp' => $id), FALSE);
		$jdata['data'] = array(
			'nrp' => $res->nip,
			'nama' => $res->nama
		);
		echo json_encode($jdata);
	}
	
	public function tambahData()
	{
		$data = array(
			'nrp' => $this->input->post('nrp'),
			'nama' => $this->input->post('nama')

		);	
		if($this->mhs->tambahData($data)){
			redirect("mahasiswa");
		}
	}
	
	public function ubahData()
	{
		$id = $this->input->post('nrp_hid');
		$data = array(
			'nama' => $this->input->post('nama')
		);	
		if($this->mhs->ubahData($data, $id)){
			redirect("mahasiswa");
		}
	}
	
	public function hapusData($id)
	{
		if($this->mhs->hapusData($id)){
			redirect("mahasiswa");
		}
	}
}
