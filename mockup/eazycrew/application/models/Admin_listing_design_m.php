<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_listing_design_m extends CI_Model {

	public function fetch_designs(){
		$this->db->select('*');
		$this->db->from('designs');
		$query = $this->db->get();
		return $query->result();
	}

	public function fetch_subcat($sub_cat_id){
		$this->db->select('*');
		$this->db->from('sub_category');
		$this->db->where('sub_category_id',$sub_cat_id);
		$query = $this->db->get();
		return $query->row();
	}

	public function fetch_design_name($designed_id){
		$this->db->select('*');
		$this->db->from('creators');
		$this->db->where('creator_id',$designed_id);
		$query = $this->db->get();
		return $query->row();
	}

	public function update_design($design_id,$update_array)
	{
		$this->db->where('design_id', $design_id);
		$this->db->update('designs', $update_array);
		return true;
	}

	public function delete_query($design_id)
	{
		$this->db->where('design_id', $design_id);
		$this->db->delete('designs');
		return true;
	}

}

/* End of file Admin_listing_design_m.php */
/* Location: ./application/models/Admin_listing_design_m.php */