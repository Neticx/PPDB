<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adm_model extends CI_Model {

	public function all()
	{
		$this->db->select('*');
		$this->db->from('calon_siswa');
		return $this->db->get()->result();
	}

	public function siswa($id)
	{
		$this->db->select('*');
		$this->db->from('calon_siswa');
		$this->db->where('id_siswa', $id);
		return $this->db->get()->result_array();
	}

	public function ayah($id)
	{
		$this->db->select('*');
		$this->db->from('ayah_siswa');
		$this->db->where('id_siswa', $id);
		return $this->db->get()->result_array();
	}

	public function ibu($id)
	{
		$this->db->select('*');
		$this->db->from('ibu_siswa');
		$this->db->where('id_siswa', $id);
		return $this->db->get()->result_array();
	}

	public function wali($id)
	{
		$this->db->select('*');
		$this->db->from('wali_siswa');
		$this->db->where('id_siswa', $id);
		return $this->db->get()->result_array();
	}

	public function kartu($id)
	{
		$this->db->select('*');
		$this->db->from('kartu');
		$this->db->where('id_siswa', $id);
		return $this->db->get()->result();
	}

	public function surat($id)
	{
		$this->db->select('*');
		$this->db->from('surat');
		$this->db->where('id_siswa', $id);
		return $this->db->get()->result_array();
	}

	public function kemampuan($id)
	{
		$this->db->select('*');
		$this->db->from('kemampuan_siswa');
		$this->db->where('id_siswa', $id);
		return $this->db->get()->result_array();
	}
	public function base($id)
	{
		$this->db->select('*');
		$this->db->from('base');
		$this->db->where('id_siswa', $id);
		return $this->db->get()->result();
	}

}

/* End of file Adm_model.php */
/* Location: ./application/models/Adm_model.php */