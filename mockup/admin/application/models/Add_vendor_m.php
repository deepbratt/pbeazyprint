<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Add_vendor_m extends CI_Model {

	public function fetch_state_city(){
		$this->db->select('*');
		$this->db->from('cities');
		$this->db->group_by('city_state');
		$query = $this->db->get();
		return $query->result();
	}

	public function all_cities($state_name){
		$this->db->select('*');
		$this->db->from('cities');
		$this->db->where('city_state',$state_name);
		$query = $this->db->get();
		return $query->result();
	}

	public function check_dealer_data($email){
		$this->db->select('*');
		$this->db->from('dealers');
		$this->db->where('dealers_email',$email);
		$query = $this->db->get();
		return $query->num_rows();
		//return $this->db->last_query();
	}
	public function insert_dealer($dealer_info)
	{
		$this->db->insert('dealers', $dealer_info);
		return true;
	}

}

/* End of file Add_vendor_m.php */
/* Location: ./application/models/Add_vendor_m.php */