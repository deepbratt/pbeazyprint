<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_listing_product_material_type_m extends CI_Model {

	public function fetch_product_material_type()
	{
		$this->db->select('*');
		$this->db->from('product_material_type');
		$query = $this->db->get();
		return $query->result();
		
	}
	public function cat_name($cat_sub_id)
	{
		$this->db->select('*');
		$this->db->from('sub_category');
		$this->db->where('sub_category_id', $cat_sub_id);
		$query = $this->db->get();
		return $query->row();
	}
	public function product_material_type_dlt($product_material_type_id)
	{
		$this->db->where('product_material_id', $product_material_type_id);
		$this->db->delete('product_material_type');
		return true;
	}


}
?>