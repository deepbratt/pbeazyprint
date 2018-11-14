<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_add_product_m extends CI_Model {

	public function get_product_category()
	{
		$this->db->select('*');
		$this->db->from('category');
		$this->db->where('category_status', '1');
		$query = $this->db->get();
		return $query->result();		
	}

	public function get_brands($sub_id)
	{
		$this->db->select('*');
		$this->db->from('brands');
		$this->db->where('sub_category', $sub_id);
		$this->db->where('brand_status', '1');
		$query = $this->db->get();
		return $query->result();		
	}

	public function get_material($sub_id)
	{
		$this->db->select('*');
		$this->db->from('product_material_type');
		$this->db->where('sub_category_id', $sub_id);
		$query = $this->db->get();
		return $query->result();		
	}

	public function get_color($sub_id)
	{
		$this->db->select('*');
		$this->db->from('product_color');
		$this->db->where('sub_category_id', $sub_id);
		$query = $this->db->get();
		return $query->result();	
		//return $this->db->last_query();
	}

	public function get_size($sub_id)
	{
		$this->db->select('*');
		$this->db->from('product_size');
		$this->db->where('sub_category_id', $sub_id);
		$query = $this->db->get();
		return $query->result();	
	}

	public function get_shape($sub_id)
	{
		$this->db->select('*');
		$this->db->from('product_shapetype');
		$this->db->where('sub_category_id', $sub_id);
		$query = $this->db->get();
		return $query->result();	
	}

	public function get_model($brand_id)
	{
		$this->db->select('*');
		$this->db->from('model');
		$this->db->where('brand_id', $brand_id);
		$this->db->where('model_status', '1');
		$query = $this->db->get();
		return $query->result();		
	}

	public function get_brand_name($brand)
	{
		$this->db->select('*');
		$this->db->from('brands');
		$this->db->where('brand_id', $brand);
		$query = $this->db->get();
		return $query->row();
	}

	public function get_shape_name($product_shape)
	{
		$this->db->select('*');
		$this->db->from('product_shapetype');
		$this->db->where('product_shape_id', $product_shape);
		$query = $this->db->get();
		return $query->row();
	}

	public function insert_product($records)
	{
		$this->db->insert('products', $records);
		return true;
	}
}
?>