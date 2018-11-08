
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
		<title>Eazyprint | Edit Dealer</title>

       <?php $this->load->view('common/metalinks');?>
	</head>
	<body class="app sidebar-mini rtl">
		<!--<div id="global-loader" ><div class="showbox"><div class="lds-ring"><div></div><div></div><div></div><div></div></div></div></div>-->
		<div class="page">
			<div class="page-main">
				<?php $this->load->view('common/header');?>

				<?php $this->load->view('common/sidebar');?>

				<div class="my-3 my-md-5 app-content">
					<div class="side-app">
						<div class="page-header">
							<h4 class="page-title">Edit Dealer</h4>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Eazycrew</a></li>
								<li class="breadcrumb-item active" aria-current="page">Edit Dealer</li>
							</ol>
						</div>
						<div class="row">
							<div class="col-md-12">
								<form  method="post" class="card" action="<?php echo base_url('admin_edit_creator/update_creator');?>/<?php echo $this->uri->segment(2);?>">
									<div class="card-header">
										<h3 class="card-title">Edit Dealer</h3>
									</div>

									<div class="card-body">
										<?php
											  if($this->session->flashdata('success')){
											?>
												<div class="alert alert-success">
													<strong><?php echo $this->session->flashdata('success');?></strong>
												</div>
											<?php
											}
											?>
											<div class="form-group">
												<div class="row">
												  <div class="col-md-2">
													<label class="form-label">First Name</label>
												  </div>
												  <div class="col-md-10">
													<input type="text" class="form-control" value="<?php echo $creator_details->creator_fname;?>" name="f_name" placeholder="Enter First Name">
												  </div>
												</div>
											</div>

											<div class="form-group">
												<div class="row">
												  <div class="col-md-2">
													<label class="form-label">Last Name</label>
												  </div>
												  <div class="col-md-10">
													<input type="text" class="form-control" value="<?php echo $creator_details->creator_lname;?>" name="l_name" placeholder="Enter last Name">
												  </div>
												</div>
											</div>
										
											<div class="form-group">
												<div class="row">
												  <div class="col-md-2">
													<label class="form-label">Email</label>
												  </div>
												  <div class="col-md-10">
													<input type="email" class="form-control" value="<?php echo $creator_details->creator_email;?>" name="email" placeholder="Enter Email">
												  </div>
												</div>
											</div>
										
											<div class="form-group">
												<div class="row">
												  <div class="col-md-2">
													<label class="form-label">Password</label>
												  </div>
												  <div class="col-md-10">
													<input type="password" class="form-control" value="<?php echo $creator_details->creator_pass;?>" name="password" placeholder="Enter Password">
												  </div>
												</div>
											</div>

											<div class="form-group">
												<div class="row">
												  <div class="col-md-2">
													<label class="form-label">Phone</label>
												  </div>
												  <div class="col-md-10">
													<input type="text" class="form-control" value="<?php echo $creator_details->creator_phone;?>" name="phone" placeholder="Enter phone number">
												  </div>
												</div>
											</div>

											<div class="form-group">
												<div class="row">
												  <div class="col-md-2">
													<label class="form-label">Address</label>
												  </div>
												  <div class="col-md-10">
													<textarea class="form-control"  name="address" placeholder="Enter address here"><?php echo $creator_details->creator_addr;?></textarea>
												  </div>
												</div>
											</div>

											<div class="form-group">
												<div class="row">
												  <div class="col-md-2">
													<label class="form-label">Pincode</label>
												  </div>
												  <div class="col-md-10">
													<input type="text" class="form-control" value="<?php echo $creator_details->creator_pincode;?>" name="pincode" placeholder="Enter pincode">
												  </div>
												</div>
											</div>

											<div class="form-group">
												<div class="row">
												  <div class="col-md-2">
													<label class="form-label">State</label>
												  </div>
												  <div class="col-md-10">
													<select name="state" class="form-control custom-select">
														<option value="Andaman and Nicobar Islands" <?php echo (($creator_details->creator_state =="Andaman and Nicobar Islands")?'selected':'');?>>Andaman and Nicobar Islands</option>
														<option value="Andhra Pradesh" <?php echo (($creator_details->creator_state =="Andhra Pradesh")?'selected':'');?>>Andhra Pradesh</option>
														<option value="Arunachal Pradesh" <?php echo (($creator_details->creator_state =="Arunachal Pradesh")?'selected':'');?>>Arunachal Pradesh</option>
														<option value="Assam" <?php echo (($creator_details->creator_state =="Assam")?'selected':'');?>>Assam</option>
														<option value="Bihar" <?php echo (($creator_details->creator_state =="Bihar")?'selected':'');?>>Bihar</option>
														<option value="Chandigarh" <?php echo (($creator_details->creator_state =="Chandigarh")?'selected':'');?>>Chandigarh</option>
														<option value="Chhattisgarh" <?php echo (($creator_details->creator_state =="Chhattisgarh")?'selected':'');?>>Chhattisgarh</option>
														<option value="Dadra and Nagar Haveli" <?php echo (($creator_details->creator_state =="Dadra and Nagar Haveli")?'selected':'');?>>Dadra and Nagar Haveli</option>
														<option value="Daman and Diu" <?php echo (($creator_details->creator_state =="Daman and Diu")?'selected':'');?>>Daman and Diu</option>
														<option value="Delhi" <?php echo (($creator_details->creator_state =="Delhi")?'selected':'');?>>Delhi</option>
														<option value="Goa" <?php echo (($creator_details->creator_state =="Goa")?'selected':'');?>>Goa</option>
														<option value="Gujarat" <?php echo (($creator_details->creator_state =="Gujarat")?'selected':'');?>>Gujarat</option>
														<option value="Haryana" <?php echo (($creator_details->creator_state =="Haryana")?'selected':'');?>>Haryana</option>
														<option value="Himachal Pradesh" <?php echo (($creator_details->creator_state =="Himachal Pradesh")?'selected':'');?>>Himachal Pradesh</option>
														<option value="Jammu and Kashmir" <?php echo (($creator_details->creator_state =="Jammu and Kashmir")?'selected':'');?>>Jammu and Kashmir</option>
														<option value="Jharkhand" <?php echo (($creator_details->creator_state =="Jharkhand")?'selected':'');?>>Jharkhand</option>
														<option value="Karnataka" <?php echo (($creator_details->creator_state =="Karnataka")?'selected':'');?>>Karnataka</option>
														<option value="Kerala" <?php echo (($creator_details->creator_state =="Kerala")?'selected':'');?>>Kerala</option>
														<option value="Lakshadweep" <?php echo (($creator_details->creator_state =="Lakshadweep")?'selected':'');?>>Lakshadweep</option>
														<option value="Madhya Pradesh" <?php echo (($creator_details->creator_state =="Madhya Pradesh")?'selected':'');?>>Madhya Pradesh</option>
														<option value="Maharashtra" <?php echo (($creator_details->creator_state =="Maharashtra")?'selected':'');?>>Maharashtra</option>
														<option value="Manipur" <?php echo (($creator_details->creator_state =="Manipur")?'selected':'');?>>Manipur</option>
														<option value="Meghalaya" <?php echo (($creator_details->creator_state =="Meghalaya")?'selected':'');?>>Meghalaya</option>
														<option value="Mizoram" <?php echo (($creator_details->creator_state =="Mizoram")?'selected':'');?>>Mizoram</option>
														<option value="Nagaland" <?php echo (($creator_details->creator_state =="Nagaland")?'selected':'');?>>Nagaland</option>
														<option value="Orissa" <?php echo (($creator_details->creator_state =="Orissa")?'selected':'');?>>Orissa</option>
														<option value="Pondicherry" <?php echo (($creator_details->creator_state =="Pondicherry")?'selected':'');?>>Pondicherry</option>
														<option value="Punjab" <?php echo (($creator_details->creator_state =="Punjab")?'selected':'');?>>Punjab</option>
														<option value="Rajasthan" <?php echo (($creator_details->creator_state =="Rajasthan")?'selected':'');?>>Rajasthan</option>
														<option value="Sikkim" <?php echo (($creator_details->creator_state =="Sikkim")?'selected':'');?>>Sikkim</option>
														<option value="Tamil Nadu" <?php echo (($creator_details->creator_state =="Tamil Nadu")?'selected':'');?>>Tamil Nadu</option>
														<option value="Tripura" <?php echo (($creator_details->creator_state =="Tripura")?'selected':'');?>>Tripura</option>
														<option value="Uttaranchal" <?php echo (($creator_details->creator_state =="Uttaranchal")?'selected':'');?>>Uttaranchal</option>
														<option value="Uttar Pradesh" <?php echo (($creator_details->creator_state =="Uttar Pradesh")?'selected':'');?>>Uttar Pradesh</option>
														<option value="West Bengal" <?php echo (($creator_details->creator_state =="West Bengal")?'selected':'');?>>West Bengal</option>
													  </select>
												  </div>
												</div>
											</div>

											<div class="form-group">
												<div class="row">
												  <div class="col-md-2">
													<label class="form-label">City</label>
												  </div>
												  <div class="col-md-10">
													<input type="text" class="form-control" value="<?php echo $creator_details->creator_city;?>" name="city" placeholder="Enter city">
												  </div>
												</div>
											</div>

									  </div>
									  <div class="card-footer text-center">
										<button type="submit" class="btn btn-primary">Submit
										</button>
									  </div>
								</form>




							</div>
						</div>
					</div>
					<!--footer-->
					<?php $this->load->view('common/footer');?>
					<!-- End Footer-->
				</div>
			</div>
		</div>

		<!-- Back to top -->
		<a href="#top" id="back-to-top" style="display: inline;"><i class="fas fa-angle-up"></i></a>
		<!-- Timepicker js -->
		<script src="<?php echo base_url('js');?>/jquery.timepicker.js"></script>
		<script src="<?php echo base_url('js');?>/toggles.min.js"></script>

		<!-- Datepicker js -->
		<script src="<?php echo base_url('js');?>/spectrum.js"></script>
		<script src="<?php echo base_url('js');?>/jquery-ui.js"></script>
		<script src="<?php echo base_url('js');?>/jquery.maskedinput.js"></script>
	</body>

</html>


