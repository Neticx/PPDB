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
		$this->load->view('admin', $data);
	}

}

/* End of file Admin_site.php */
/* Location: ./application/controllers/Admin_site.php */