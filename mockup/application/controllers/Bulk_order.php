<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bulk_order extends CI_Controller {

	public function index()
	{
		$this->load->view('bulk_order');
	}

	public function order()
	{
		$this->load->library('Emailtemp');
		$this->load->model('bulk_order_m');
		$user_id = $this->session->userdata['logged_in']['user_id'];

		$name = $this->input->post('name');
		$email = $this->input->post('email');
		$phone = $this->input->post('phone');
		$category = $this->input->post('category');
		$quantity = $this->input->post('quantity');
		$date = time();
		$status = '1';

		

		$records = array('bulk_name'=>$name,'bulk_email'=>$email,'bulk_phone'=>$phone,'bulk_cat'=>$category,'bulk_quantity'=>$quantity,'bulk_status'=>$status,'bulk_date'=>$date);

		$update_bulk = $this->bulk_order_m->update_order($records);

		if($update_bulk){
			//Mail function starts for user
			$message = $this->emailtemp->user_bulk($name);

			$this->load->library('email');
			$this->email->set_mailtype("html");

			$this->email->from('noreply@eazyprint.in', 'EazyPrint');
			$this->email->to($email);

			$this->email->subject('Bulk order query confirmation');
			$this->email->message($message);

			$okay = $this->email->send();
			//Mail function ends for user

			//Mail function starts for admin
			if($okay){
				$admin_message = $this->emailtemp->admin_bulk($name,$email,$phone,$category,$quantity);

				$this->load->library('email');
				$this->email->set_mailtype("html");

				$this->email->from('noreply@eazyprint.in', 'EazyPrint');
				$this->email->to('sales@eazyprint.in');

				$this->email->subject('New bulk order query received');
				$this->email->message($admin_message);

				$okay = $this->email->send();
			}
			
			//Mail function ends for admin
		}
		$this->session->set_flashdata("Success", "Thank you for your request, we will get back to you soon!");
		redirect('bulk_order');
	}
}

/* End of file Bulk_order.php */
/* Location: ./application/controllers/Bulk_order.php */
