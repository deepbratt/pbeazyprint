<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Listing_pillows extends CI_Controller {

	function __construct(){
        parent::__construct();
        if(!$this->session->userdata['logged_in']['user_id']){
            redirect('login');
        }else{
			$user_id = $this->session->userdata['logged_in']['user_id'];
		}
		
     }

	public function index()
	{
		$this->load->model('listing_pillows_m');
		$user_id = $this->session->userdata['logged_in']['user_id'];
		$data['fetch_pillow'] = $this->listing_pillows_m->fetch_pro_pillow($user_id);
		
		$this->load->view('products/listing_pilows',$data);
		//$this->load->view('products/listing_pillows');
	}

	public function delete_pillow()
	{
		$raw_id = $this->uri->segment(3);
		$this->load->model('listing_pillows_m');
		$delete_pillow = $this->listing_pillows_m->delete_pillow($raw_id);
		if($delete_mug){
			$this->session->set_flashdata("success", "Success , Your have successfully deleted this Pillow!");
			redirect('listing_pilows');
		}
		else{
			$this->session->set_flashdata("failed", "Something went wrong!");
			redirect('listing_pilows');
		}
	}

	public function change_status()
	{
		$this->load->model('listing_mug_m');
		$raw_id = $this->input->post('raw_id');
		$raw_status = $this->input->post('raw_status');
		if($raw_status == 1){
			$changed_status = "0";
		}else if($raw_status == 0){
			$changed_status = "1";
		}
		$update_array = array('raw_status' => $changed_status);
		$update_mug = $this->listing_mug_m->update_status($raw_id,$update_array);
?>
		<label class="custom-switch">
			<input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input" <?php echo (($changed_status == 1)?'checked':'');?> onchange="change_status('<?php echo $raw_id;?>','<?php echo $changed_status;?>');">
			<span class="custom-switch-indicator"></span>
		</label>
<?php
	}

}

/* End of file Admin_listing_mug.php */
/* Location: ./application/controllers/Admin_listing_mug.php */