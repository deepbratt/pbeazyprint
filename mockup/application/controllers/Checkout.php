<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Checkout extends CI_Controller {

	/* LOGIN PAGE of checkout Starts*/
	public function index()
	{
		$this->load->model('checkout_m');
		//$pro_id = $this->uri->segment(2);
		if(isset($this->session->userdata['logged_in']['user_id']) && $this->session->userdata['logged_in']['user_id'] != ""){
			$data['user_id'] = $this->session->userdata['logged_in']['user_id'];
		}else{
			$data['user_id'] = "";
		}
		if($data['user_id'] != ""){
			$data['fetch_user_data'] = $this->checkout_m->user_detailzz($data['user_id']);
			$data['fetch_prod_data'] = $this->checkout_m->prod_info($data['user_id']);
		}
		
		$this->load->view('checkout/login',$data);
	}

	public function authenticate(){
		$this->load->library('user_agent');
		$this->load->model('checkout_m');
		$this->load->model('login_m');
		$email = $this->input->post('username');
		$password = $this->input->post('password');
		$records=array('email'=>$email,'password'=>$password);

		$result = $this->login_m->login_function($email,$password);
		

		if($result > 0){
			$last_id = $this->login_m->get_id($records);
			$session_data = array();
			foreach($last_id as $row)
			{
			  $fullname = $row->user_fname . " " . $row->user_lname;
			  $session_data = array(
									  'user_id' => $row->user_id,
									  'user_type' => $row->user_type,
									  'name' =>$fullname,
									  'email'=>$row->user_email,
									  'phone'=>$row->user_phone
								   );
			}
			
			$this->session->set_userdata('logged_in',$session_data);
			$user_id = $this->session->userdata['logged_in']['user_id'];
			$ip_data = $this->input->ip_address();
			$cart_user_id = $this->checkout_m->prod_info($ip_data);

			if(isset($this->session->userdata['logged_in']['user_type']) && $this->session->userdata['logged_in']['user_type'] == "customer"){

				if(sizeof($cart_user_id) > 0){
					$update_array = array('user_id'=>$user_id);
					$update_user_id = $this->checkout_m->add_address_cart($update_array,$ip_data);
				}
				redirect('checkout/delivery_address');
			}else{
				$this->session->set_flashdata("failed", "Invalid email or password");
				redirect('checkout');
			}
		}
	}
	/* LOGIN PAGE of checkout Ends*/
	/* Delivery_address PAGE of checkout Starts*/
	public function delivery_address()
	{
		$this->load->model('checkout_m');
		if(isset($this->session->userdata['logged_in']['user_id']) && $this->session->userdata['logged_in']['user_id'] != ""){
			$data['user_id'] = $this->session->userdata['logged_in']['user_id'];
		}else{
			$data['user_id'] = "";
		}
		if($data['user_id'] != ""){
			$data['fetch_user_data'] = $this->checkout_m->user_detailzz($data['user_id']);
			$data['user_addrezzz'] = $this->checkout_m->user_address_detailzz($data['user_id']);
			$data['fetch_prod_data'] = $this->checkout_m->prod_info($data['user_id']);

			$this->load->view('checkout/delivery_address',$data);
		}else{
			redirect('checkout');
		}
	}

	public function manage_address(){

		$this->session->set_flashdata("status", "address");
		redirect('account');
	}

	public function add_delivery_address(){
		$this->load->model('checkout_m');
		if(isset($this->session->userdata['logged_in']['user_id']) && $this->session->userdata['logged_in']['user_id'] != ""){
			$data['user_id'] = $this->session->userdata['logged_in']['user_id'];
		}else{
			$data['user_id'] = "";
		}
		if($data['user_id'] != ""){
			$addr_id = $this->input->post('del_address');
			$update_array = array('address_id'=>$addr_id);
			$update_cart_data = $this->checkout_m->add_address_cart($update_array,$data['user_id']);
			if($update_cart_data){
				$update_user_array = array('address_status'=>'1');
				$update_primary_address = $this->checkout_m->update_user_address($update_user_array,$data['user_id'],$addr_id);
				if($update_primary_address){
					$update_user_array_others = array('address_status'=>'0');
					$update_primary_address = $this->checkout_m->update_user_address_others($update_user_array_others,$data['user_id'],$addr_id);
				}
			}
			
			redirect('checkout/order_summary');
		}else{
			redirect('checkout');
		}
	}
	/* Delivery_address PAGE of checkout Ends*/
	/* Order_summary PAGE of checkout Starts*/
	public function order_summary()
	{
		$this->load->model('checkout_m');
		if(isset($this->session->userdata['logged_in']['user_id']) && $this->session->userdata['logged_in']['user_id'] != ""){
			$data['user_id'] = $this->session->userdata['logged_in']['user_id'];
		}else{
			$data['user_id'] = "";
		}
		if($data['user_id'] != ""){
			$data['prod_datazzz'] = $this->checkout_m->prod_info($data['user_id']);
		}else{
			redirect('checkout');
		}
		
		$this->load->view('checkout/order_summary',$data);
	}

	public function update_order_summary(){
		$this->load->model('checkout_m');
		$cart_id = $this->input->post('cartzz_id');
		$quantity = $this->input->post('quantity');
		
		foreach($cart_id AS $key=>$each_cartzz_id){
			$quantity_data = array('qty'=>$quantity[$key]);
			$update_quantity = $this->checkout_m->update_quantity($quantity_data,$each_cartzz_id);
		}
		
		if($update_quantity){
			redirect('checkout/payment_option');
		}
	}

	public function remove_cart(){
		$this->load->model('checkout_m');
		$cart_id = $this->uri->segment(3);
		if(isset($this->session->userdata['logged_in']['user_id']) && $this->session->userdata['logged_in']['user_id'] != ""){
			$data['user_id'] = $this->session->userdata['logged_in']['user_id'];
		}else{
			$data['user_id'] = "";
		}
		if($data['user_id'] != ""){
			$remove_from_cart = $this->checkout_m->remove_cart_data($cart_id);
			if($remove_from_cart){
				redirect('checkout/order_summary');
			}
		}else{
			redirect('checkout');
		}
	}
	/* Order_summary PAGE of checkout Ends*/
	/* Payment_option PAGE of checkout Starts*/
	public function payment_option()
	{
		$this->load->model('checkout_m');
		$this->load->helper('Instamojo');
		if(isset($this->session->userdata['logged_in']['user_id']) && $this->session->userdata['logged_in']['user_id'] != ""){
			$data['user_id'] = $this->session->userdata['logged_in']['user_id'];
		}else{
			$data['user_id'] = "";
		}
		if($data['user_id'] != ""){
			$fetch_cart_data = $this->checkout_m->prod_info($data['user_id']);
			$amount_array = array();
			foreach($fetch_cart_data AS $each_cart_data){
				$amount_array[] = $each_cart_data->price;
			}
			$total_amount = array_sum($amount_array);

			$api = new Instamojo\Instamojo("12525746f3a4acf5461d5a7a8fbeb643", "284647be790ec63df9a3f9109e2f4352");
			try {
				$response = $api->paymentRequestCreate(array(
					"buyer_name" => $this->session->userdata['logged_in']['name'],
					"purpose" => "Tshirt , Mobile case",
					"amount" => $total_amount,
					"send_email" => false,
					"send_sms" => false,
					"phone" => $this->session->userdata['logged_in']['phone'],
					"email" => $this->session->userdata['logged_in']['email'],
					"redirect_url" => "http://localhost/pbeazyprint/mockup/checkout/payment_option_check"
					));
			}
			catch (Exception $e) {
				print('Error: ' . $e->getMessage());
			}
			$data['response'] = $response;
			$this->load->view('checkout/payment_option',$data);
		}else{
			redirect('checkout');
		}
		
	}

	public function payment_option_check(){
		$this->load->helper('Instamojo');
		$api = new Instamojo\Instamojo("12525746f3a4acf5461d5a7a8fbeb643", "284647be790ec63df9a3f9109e2f4352");
		try {
			$response = $api->paymentRequestStatus(['PAYMENT REQUEST ID']);
			print_r($response);
		}
		catch (Exception $e) {
			print('Error: ' . $e->getMessage());
		}
		exit;
		$this->load->view('checkout/payment_option',$data);
	}
	/* Payment_option PAGE of checkout Ends*/

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */