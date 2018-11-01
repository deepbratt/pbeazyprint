<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_crew_listing extends CI_Controller {

	function __construct(){
        parent::__construct();
        if(!$this->session->userdata['logged_in']['user_id']){
            redirect('admin_login');
        }
    }

	public function index()
	{
		$this->load->model('admin_crew_listing_m');
		$user_id = $this->session->userdata['logged_in']['user_id'];
		$data['fetch_crew'] = $this->admin_crew_listing_m->fetch_crew($user_id);
		$this->load->view('admin_crew_listing',$data);
	}

	public function change_status()
	{
		$this->load->model('admin_crew_listing_m');
		$crew_id = $this->input->post('crew_id');
		$crew_status = $this->input->post('crew_status');
		if($crew_status == 1){
			$changed_status = "0";
		}else if($crew_status == 0){
			$changed_status = "1";
		}
		$update_array = array('crew_status' => $changed_status);
		$update_crew = $this->admin_crew_listing_m->update_crew($crew_id,$update_array);
?>
		<label class="custom-switch">
			<input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input" <?php echo (($changed_status == 1)?'checked':'');?> onchange="change_status('<?php echo $crew_id;?>','<?php echo $changed_status;?>');">
			<span class="custom-switch-indicator"></span>
		</label>
<?php
	}

}
?>

