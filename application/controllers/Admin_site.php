<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_site extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//cek jika belum login => redirect login
		if ( ! $this->session->userdata('masuk'))
        {
            redirect('auth');
        }
        $this->load->model('Adm_model');
	}

	public function index()
	{
		$data['all'] = $this->Adm_model->all();
		$this->load->view('newui/header');
		$this->load->view('newui/list', $data);
		$this->load->view('newui/footer');
	}

	public function generate()
	{
		$key = $this->input->post('kode');
		$data = array('code' => $key);
		$this->db->insert('kode', $data);
	}
	function delete()
	{
		$id = $this->uri->segment(2);
		$this->db->where('id_siswa', $id);
		$this->db->delete('calon_siswa');
		header('Location: '.site_url('Admin_site'));
	}

}

/* End of file Admin_site.php */
/* Location: ./application/controllers/Admin_site.php */