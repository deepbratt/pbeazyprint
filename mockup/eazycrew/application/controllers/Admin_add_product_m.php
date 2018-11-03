<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_add_product_m extends CI_Model {

	public function fetch_brand(){
		$this->db->select('*');
		$this->db->from('brands');
		$this->db->where('brand_status','1');
		$query = $this->db->get();
		return $query->result();
	}

	public function fetch_category_name($sub_category)
	{
		$this->db->select('*');
		$this->db->from('sub_category');
		$this->db->where('sub_category_id',$sub_category);
		$query = $this->db->get();
		return $query->row();
	}

	
}

/* End of file Admin_listing_design_m.php */
/* Location: ./application/models/Admin_listing_design_m.php */