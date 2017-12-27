<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MJadwal extends CI_Model {

	var $table = "sk_jadwal";
	var $detailtable = "sk_det_jadwal";
	var $viewtable = "v_jadwal";

	public function dapatData($where = array(), $result = TRUE)
	{
		if(count($where) > 0){
			foreach ($where as $key => $value) {
				$this->db->where($key,$value);
			}
		}
		$this->db->where("sts_jadwal","0");
		$res = $this->db->get($this->viewtable);
		if($result){
			return $res->result();
		}
		elseif($result == FALSE){
			return $res->row();
		}
		else{
			return $res->result();
		}
	}
	
	public function dapatDataPilih($table, $where = array(), $result = TRUE)
	{
		if(count($where) > 0){
			foreach ($where as $key => $value) {
				$this->db->where($key,$value);
			}
		}
		$res = $this->db->get($table);
		if($result){
			return $res->result();
		}
		elseif($result == FALSE){
			return $res->row();
		}
		else{
			return $res->result();
		}
	}
	
	public function tambahData($data)
	{
		return $this->db->insert($this->table, $data);
	}
	
	public function tambahDataDetail($data)
	{
		return $this->db->insert($this->detailtable, $data);
	}
	
	public function ubahData($data, $id)
	{
		$this->db->where('kd_ruang',$id);
		return $this->db->update($this->table,$data);
	}
	
	public function hapusData($id)
	{
		$this->db->where('kd_ruang',$id);
		return $this->db->delete($this->table);
	}
}
