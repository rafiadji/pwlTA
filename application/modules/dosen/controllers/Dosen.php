<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dosen extends CI_Controller {

	var $template = "dashboard";
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('MDosen','dsn');
	}

	public function index()
	{
		$data["dataTable"] = $this->dsn->dapatData();
		$data["title"] = "Dosen";
		$data["page"] = "dosen/dosen";
		$this->load->view($this->template, $data);
	}
	
	public function satuData($id)
	{
		$res = $this->dsn->dapatData(array('nip' => $id), FALSE);
		$jdata['data'] = array(
			'nip' => $res->nip,
			'nama' => $res->nama,
			'alamat' => $res->alamat,
			'notelp' => $res->notelp
		);
		echo json_encode($jdata);
	}
	
	public function tambahData()
	{
		$data = array(
			'nip' => $this->input->post('nip'),
			'nama' => $this->input->post('nama'),
			'alamat' => $this->input->post('alamat'),
			'notelp' => $this->input->post('notelp')
		);	
		if($this->dsn->tambahData($data)){
			redirect("dosen");
		}
	}
	
	public function ubahData()
	{
		$id = $this->input->post('nip_hid');
		$data = array(
			'nama' => $this->input->post('nama'),
			'alamat' => $this->input->post('alamat'),
			'notelp' => $this->input->post('notelp')
		);	
		if($this->dsn->ubahData($data, $id)){
			redirect("dosen");
		}
	}
	
	public function hapusData($id)
	{
		if($this->dsn->hapusData($id)){
			redirect("dosen");
		}
	}
}
