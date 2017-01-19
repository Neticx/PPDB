<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Auth_model extends CI_Model {

	private $table = "adm";
	private $_data = array();
	// public function __construct()
	// {
	// 	// Loading second db and running query.
	// 	$CI = &get_instance();
	// 	//setting the second parameter to TRUE (Boolean) the function will return the database object.
	// 	$this->db2 = $CI->load->database('db2', TRUE);
	// }

	public function validate()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$this->db->where("username", $username);
		$query = $this->db->get($this->table);

		if ($query->num_rows())
		{
			// found row by username
			$row = $query->row_array();

			// now check for the password
			if ($row['password'] == MD5($password))
			{
				// we not need password to store in session
				unset($row['password']);
				$this->_data = $row;
				return false;
			}

			// password not match
			return 'pass salah';
		}
		else {
			// not found
			return 'name salah';
		}
	}

	public function get_data()
	{
		return $this->_data;
	}

	public function add_data($table, $data)
	{
		$this->db->insert($table, $data);
		return $this->db->insert_id();
	}

	public function get_id($username)
	{
		$this->db->from('adm');
		$this->db->where('username', $username);
		$query = $this->db->get();
		$id = $query->result_array();

		return $id[0]['id_member'];
	}

	public function data_provinsi(){
		$this->db->from('provinsi');
		$query = $this->db->get();

		return $query->result_array();
	}



	public function chec_user_exsis($username){
		$this->db->from('adm');
		$this->db->where('username', $username);
		// $this->db->query("SELECT * FROM member WHERE username = ");
		$query = $this->db->get();
		$active = $query->result_array();

		//jika ada return true
		if (count($active) > 0) {
			return true;
		}else {
			return false;
		}

	}


}
