<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_add_design extends CI_Controller {
	
	function __construct(){
        parent::__construct();
        if(!$this->session->userdata['logged_in']['user_id']){
            redirect('admin_login');
        }
    }

	public function index()
	{
		$this->load->model('admin_add_design_m');
		$data['fetch_all_categories'] = $this->admin_add_design_m->fetch_categories();
		$data['fetch_all_subcategories'] = $this->admin_add_design_m->fetch_all_subcategories();
		$data['fetch_all_designer'] = $this->admin_add_design_m->fetch_all_designer();
		$this->load->view('admin_add_design',$data);
	}

	public function ajax_fetch_sub_category(){
		$this->load->model('admin_add_design_m');
		$cat_id = $this->input->post('category_id');
		$ajax_fetch_all_subcategories = $this->admin_add_design_m->ajax_fetch_subcategories($cat_id);
		if(sizeof($ajax_fetch_all_subcategories) > 0)
		{
	?>
		<option selected disabled>Subcategory</option>
	<?php
		
		foreach($ajax_fetch_all_subcategories AS $each_subcategory){
	 ?>
		 	<option value="<?php echo $each_subcategory->sub_category_id;?>"><?php echo $each_subcategory->sub_category_name;?></option>
	 <?php
			
			}
		}else{
			echo "No Results Found";
		}
	}

	public function ajax_fetch_color(){
		$this->load->model('admin_add_design_m');
		$sub_id = $this->input->post('sub_id');
		$fetch_color = $this->admin_add_design_m->fetch_color($sub_id);
		$fetch_color_count = sizeof($fetch_color);
		if($fetch_color_count > 0){
	
			foreach($fetch_color AS $get_color){
		 ?>
			 	<label class="custom-container">
					<input name="color" type="radio" value="<?php echo $get_color->product_color_code;?>" class="colorinput-input" >
					<span class="checkmark" style="background-color:<?php echo $get_color->product_color_code;?>"></span>
				</label>
		 <?php
				
			}
		}else{
			echo "No Results Found";
		}
	}

	public function add_design(){
		$this->load->model('admin_add_design_m');

		$cat_id = $this->input->post('category');
		$subcat_id = $this->input->post('sub_category');
		$color = $this->input->post('color');
		$designed_by = $this->input->post('designed_by');
		$date = time();

		if(!empty($_FILES['image']['name'])){
                $config['upload_path'] = 'uploads/designs/';
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                $config['file_name'] = rand(999,99999).$_FILES['image']['name'];
                
                $this->load->library('upload',$config);
                $this->upload->initialize($config);
                
                if($this->upload->do_upload('image')){
                    $uploadData = $this->upload->data();
					$image = $uploadData['file_name'];		
					$records = array(
						'designed_by' => $designed_by,
						'designed_image' => $image,
						'sub_category_id' => $subcat_id,
						'designed_color' => $color,
						'designed_date' => $date,
						'status' => '1'
					);
				}else{
					$records = array(
						'designed_by' => $designed_by,
						'sub_category_id' => $subcat_id,
						'designed_color' => $color,
						'designed_date' => $date,
						'status' => '1'
					);
				}
			}else{
				$records = array(
						'designed_by' => $designed_by,
						'sub_category_id' => $subcat_id,
						'designed_color' => $color,
						'designed_date' => $date,
						'status' => '1'
					);
			}
		$insert_new_designs = $this->admin_add_design_m->insert_new_designs_info($records);			

		if($insert_new_designs){
			$this->session->set_flashdata("admin_add_design_success", "The new design has been added successfully...!");
			redirect('admin_add_design');
		}else{
			$this->session->set_flashdata("admin_add_design_failed", "Failed to add new design...!");
			redirect('admin_add_design');
		}
		
	}

}

/* End of file Admin_add_design.php */
/* Location: ./application/controllers/Admin_add_design.php */