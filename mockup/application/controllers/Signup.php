<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signup extends CI_Controller {

	public function index()
	{
		$this->load->view('signup');
	}

	public function newRegister(){

		$this->load->model('signup_m');
		$fname = $this->input->post('reg_fname');
		$lname = $this->input->post('reg_lname');
		$phone = $this->input->post('reg_phone');
		$email = $this->input->post('reg_email');
		$date = time();
		$rand_code = rand();

		$check_email_row = $this->signup_m->check_email_row($email);
		
		if(sizeof($check_email_row) < 1){

			$user_detailszz = array(
				'user_fname' => $fname,
				'user_lname' => $lname,
				'user_phone' => $phone,
				'user_email' => $email,
				'user_type' => 'customer',
				'user_status' => '0',
				'user_email_status' => '0',
				'user_phone_status' => '0',
				'user_date' => $date,
				'email_verify_code' => $rand_code
			);

			$insert_new_user = $this->signup_m->register_new_user($user_detailszz);
			if($insert_new_user){
				redirect('verify_email/'.$rand_code);
			}else{
				redirect('signup');
			}
		}else{
			$this->session->set_flashdata("exist", "Email Already Exist...");
		}
		redirect('signup');
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */