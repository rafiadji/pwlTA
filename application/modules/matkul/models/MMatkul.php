<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MMatkul extends CI_Model {

	var $table = "sk_matkul";

	public function dapatData($where = array(), $result = TRUE)
	{
		if(count($where) > 0){
			foreach ($where as $key => $value) {
				$this->db->where($key,$value);
			}
		}
		$res = $this->db->get($this->table);
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
	
	public function dapatDataProdi()
	{
		$res = $this->db->get("sk_prodi");
		return $res->result();
	}
	
	public function tambahData($data)
	{
		return $this->db->insert($this->table, $data);
	}
	
	public function ubahData($data, $id)
	{
		$this->db->where('kd_matkul',$id);
		return $this->db->update($this->table,$data);
	}
	
	public function hapusData($id)
	{
		$this->db->where('kd_matkul',$id);
		return $this->db->delete($this->table);
	}
}
