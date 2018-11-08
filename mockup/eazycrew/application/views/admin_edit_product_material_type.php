
<!doctype html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="msapplication-TileColor" content="#0061da">
		<meta name="theme-color" content="#1643a3">
		<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent"/>
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="mobile-web-app-capable" content="yes">
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<link rel="icon" href="<?php echo base_url();?>images/favicon.png" type="image/x-icon"/>
		<link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url();?>images/favicon.png" />

		<!-- Title -->
		<title>Eazyprint | Edit Product Metarial Type</title>

<?php
$this->load->view("common/metalinks");
?>
	</head>
	<body class="app sidebar-mini rtl">
		<!--<div id="global-loader" ><div class="showbox"><div class="lds-ring"><div></div><div></div><div></div><div></div></div></div></div>-->
		<div class="page">
			<div class="page-main">
<?php
$this->load->view("common/header");
?>

<?php
$this->load->view("common/sidebar");
?>

				<div class="my-3 my-md-5 app-content">
					<div class="side-app">
						<div class="page-header">
							<h4 class="page-title">Edit Product Metarial Type</h4>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Eazycrew</a></li>
								<li class="breadcrumb-item active" aria-current="page">Edit Product Metarial Type</li>
							</ol>
						</div>
						<?php
						  if($this->session->flashdata('failed')){
						?>
						  <div class="alert alert-danger"> <strong><?php echo $this->session->flashdata('failed');?></strong> </div>
						<?php
						  }
						  if($this->session->flashdata('success')){
						?>
						  <div class="alert alert-success"> <strong><?php echo $this->session->flashdata('success');?></strong> </div>
						<?php } ?>
						<div class="row">
							<div class="col-lg-12">

								<form  method="post" class="card" action="<?php echo base_url('admin_edit_product_material_type');?>/edit_product_material_type">
									<div class="card-header">
										<h3 class="card-title">Edit Product Metarial Type</h3>
									</div>
									<?php
										$sub_cat_id = $product_material_type_fetch->sub_category_id;
									?>
									<div class="card-body">
										<div class="form-group">
										 <div class="row">
											<div class="col-md-2">
												<label class="form-label">Subcategory</label>
											</div>
											<div class="col-md-10">
												<select name="sub_category" id="select-countries" class="form-control custom-select">
													<option value="" selected="">Choose Subcategory</option>
											<?php
												$this->load->model('admin_edit_product_material_type_m');
												$edit_product_material_type = $this->admin_edit_product_material_type_m->product_material_type_edit();
												foreach($edit_product_material_type AS $product_material_type_edt)
												{

											?>
													<option value="<?php echo $product_material_type_edt->sub_category_id;?>" <?php echo (($product_material_type_edt->sub_category_id == $sub_cat_id)?'selected':'')?> ><?php echo $product_material_type_edt->sub_category_name;?></option>
											<?php } ?>
											    </select>
											</div>
										  </div>
										</div>
									
										<div class="form-group">
										 <div class="row">
											<div class="col-md-2">
												<label class="form-label">Product Type</label>
											</div>
											<div class="col-md-10">
											 <input type="text" class="form-control" placeholder="New Product Metarial Type Name" name="product_metarial" value="<?php echo $product_material_type_fetch->product_material_type;?>">
											</div>
										  </div>
										</div>
									  </div>
									  <input type="hidden" name="sub_cat_id" value="<?php echo $product_material_type_fetch->product_material_id;?>">
									<div class="card-footer text-right">
										<div class="d-flex">
											<button type="reset" class="btn btn-link">Cancel</button>
											<button type="submit" class="btn btn-primary ml-auto">Submit</button>
										</div>
									</div>
								</form>

							</div>
						</div>
					</div>
					<!--footer-->
<?php
$this->load->view("common/footer");
?>
					<!-- End Footer-->
				</div>
			</div>
		</div>

		<!-- Back to top -->
		<a href="#top" id="back-to-top" style="display: inline;"><i class="fas fa-angle-up"></i></a>
		<!-- Timepicker js -->
		<script src="<?php echo base_url();?>js/jquery.timepicker.js"></script>
		<script src="<?php echo base_url();?>js/toggles.min.js"></script>

		<!-- Datepicker js -->
		<script src="<?php echo base_url();?>js/spectrum.js"></script>
		<script src="<?php echo base_url();?>js/jquery-ui.js"></script>
		<script src="<?php echo base_url();?>js/jquery.maskedinput.js"></script>
	</body>

</html>


