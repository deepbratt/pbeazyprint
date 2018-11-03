<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_add_design extends CI_Controller {

	public function index()
	{
		$this->load->model('admin_add_design_m');
		$data['fetch_all_categories'] = $this->admin_add_design_m->fetch_categories();
		$data['fetch_all_subcategories'] = $this->admin_add_design_m->fetch_all_subcategories();
		$this->load->view('admin_add_design',$data);
	}

	public function ajax_fetch_sub_category(){
		$this->load->model('admin_add_design_m');
		$cat_id = $this->input->post('category_id');
		$ajax_fetch_all_subcategories = $this->admin_add_design_m->ajax_fetch_subcategories($cat_id);
	?>
		<option selected disabled>Choose Subcategory</option>
	<?php
		
		foreach($ajax_fetch_all_subcategories AS $each_subcategory){
	 ?>
		 	<option value="<?php echo $each_subcategory->sub_category_id;?>"><?php echo $each_subcategory->sub_category_name;?></option>
	 <?php
			
		}
	}

	public function add_design(){
		$this->load->model('admin_add_design_m');

		$cat_id = $this->input->post('category');
		$subcat_id = $this->input->post('sub_category');
		$designed_by = $this->input->post('designed_by');

		$this->load->library('upload');
	    $dataInfo = array();
	    $files = $_FILES;
	    $cpt = count($_FILES['userfile']['name']);
	    for($i=0; $i<$cpt; $i++){           
	        
	        $_FILES['userfile']['name']= $files['userfile']['name'][$i];
	        $_FILES['userfile']['type']= $files['userfile']['type'][$i];
	        $_FILES['userfile']['tmp_name']= $files['userfile']['tmp_name'][$i];
	        $_FILES['userfile']['error']= $files['userfile']['error'][$i];
	        $_FILES['userfile']['size']= $files['userfile']['size'][$i];    

	        $this->upload->initialize($this->set_upload_options());
	        $this->upload->do_upload();
	        $dataInfo[] = $this->upload->data();
	    }
		for($i=0; $i<$cpt; $i++){
			$records = array(
				'designed_by' => $designed_by,
				'designed_image' => $dataInfo[$i]['file_name'],
				'sub_category_id' => $subcat_id,
				'status' => '1'
			);
			$insert_new_designs = $this->admin_add_design_m->insert_new_designs_info($records);	
		}

		if($insert_new_designs){
			$this->session->set_flashdata("admin_add_design_success", "The new design has been added successfully...!");
			redirect('admin_add_design');
		}else{
			$this->session->set_flashdata("admin_add_design_failed", "Failed to add new design...!");
			redirect('admin_add_design');
		}
		
	}

	private function set_upload_options()
	{   
	    //upload an image options
	    $config = array();
	    $config['upload_path'] = 'uploads/designs';
	    $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
		$config['file_name'] = rand(999,99999).$_FILES['userfile']['name'];

	    return $config;
	}

}

/* End of file Admin_add_design.php */
/* Location: ./application/controllers/Admin_add_design.php */