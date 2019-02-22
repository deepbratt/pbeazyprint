<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

	public function index()
	{
		$this->load->model('product_m');
		$data['products'] = $this->product_m->get_all_products();
		$this->load->view('product',$data);
	}


}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */