<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * This controller can be accessed
 * for (all) non logged in users
 */
class Auth extends CI_Controller {



	public function logged_in_check()
	{
		if ($this->session->userdata("masuk")) {
			redirect("Admin_site");
		}
	}

	public function index()
	{
		$this->logged_in_check();

		$this->load->library('form_validation');
		$this->form_validation->set_rules("username", "Username", "trim|required");
		$this->form_validation->set_rules("password", "Password", "trim|required");

		if ($this->form_validation->run() == true)
		{
			$this->load->model('auth_model', 'auth');
			// check the username & password of user
			$status = $this->auth->validate();
			if ($status == 'pass salah') {
				$this->session->set_flashdata("error", "Username is invalid");
			}
			elseif ($status == 'name salah') {
				$this->session->set_flashdata("error", "Password is invalid");
			}
			else
			{
				$username = $this->input->post('username');

				$this->load->model('Auth_model');
				// $active = $this->auth_model->chec_active($username);
				// if ($active == 1) {
					// success
					// store the user data to session
					$this->session->set_userdata($this->auth->get_data());
					$this->session->set_userdata("masuk", true);
					// redirect to dashboard
					redirect("Admin_site");
				// }else {
				// 	$this->session->set_flashdata("error", "Konfirmasi Email anda terlebih dahulu..!");
				// }

			}
		}

		$this->load->view("newui/sign-in");
	}


	public function logout()
	{
		$this->session->unset_userdata("masuk");
		$this->session->sess_destroy();
		redirect("auth");
	}

}