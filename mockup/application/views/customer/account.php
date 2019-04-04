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
    <link rel="icon" href="<?php echo base_url();?>images/favicon.png" type="image/png"/>
    <link rel="shortcut icon" type="image/png" href="<?php echo base_url();?>images/favicon.png" />
    <script src="<?php echo base_url();?>js/jquery-3.2.1.min.js">
    </script>
    <!-- Title -->
    <title>Eazyprint | Account
    </title>
    <?php
$this->load->view("common/metalinks");
?>
<link href="<?php echo base_url();?>css/select2.min.css" rel="stylesheet" />
    <link href="<?php echo base_url();?>css/timeline.min.css" rel="stylesheet" />
    <style>
      .sidebar_active{
        background:#009fdc !important;
      }
      .sidebar_active .text-dark{
        color:#fff !important;
        margin-top:8px !important;
      }
	  .get_back:hover{
	  color: #F66175;
	  }
	  .add_name{
		font-size: 16px;
		font-weight: 500;
		color: black;
	  }
	  .add_details{
		color: black;
	  }
	  .tmc{
		color: #2DCE89;
	  }
	  .cpim{
		color: #F5365C;
	  }
	 .field-icon {
	  float: right;
	  margin-right: 10px;
	  margin-top: -29px;
	  position: relative;
	  font-size:15px;
	  z-index: 2;
	 }
    </style>
  </head>
  <body class="app">
    <?php
$this->load->view("common/header");
?>
	<!-- Status starts here -->
	<input type="hidden" id="status" value="<?php echo $this->session->flashdata('status');?>">
	<!-- Status ends here -->
    <div class="container">
      <div class="side-app">
        <p>&nbsp;
        </p>
        <div class="row">
          <?php $this->load->view("customer/customer_sidebar");?>
          <div class="col-lg-8">
            <div class="card">
              <div class="panel panel-primary">
                <div class="tab-menu-heading">
                  <div class="tabs-menu ">
                    <!-- Tabs -->
                    <ul class="nav panel-tabs">
                      <li >
                        <a href="#personal" class="active" id="p_info" data-toggle="tab">Personal info
                        </a>
                      </li>
                      <li class="">
                        <a href="#address" id="b_info" data-toggle="tab">Billing Address
                        </a>
                      </li>
                      <li>
                        <a href="#password" id="pass_info" data-toggle="tab">Password Change
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
                <?php
				  if($this->session->flashdata('success')){
				?>
					<div class="alert alert-success">
						<strong><?php echo $this->session->flashdata('success');?></strong>
					</div>
				<?php
				}
				if($this->session->flashdata('failed')){
				?>
					<div class="alert alert-danger">
						<strong><?php echo $this->session->flashdata('failed');?></strong>
					</div>
				<?php
				}
				if($this->session->flashdata('exist')){
				?>
					<div class="alert alert-warning">
						<strong><?php echo $this->session->flashdata('exist');?></strong>
					</div>
				<?php
				}
				?>
                <div class="panel-body tabs-menu-body">
                  <div class="tab-content">
                    <div class="tab-pane active " id="personal">
                      <div class="col-lg-12">
                        <form class="card" method="POST" enctype="multipart/form-data" action="<?php echo base_url('account/update_account_info');?>">
                          <div class="card-body">
                            <div class="row">
                               <div class="col-md-4">
                                <div class="form-group">
                                     <?php
                                         if($fetch_account_details->user_profile_image == ''){
                                     ?>
                                      <span onclick="profile_imagezz()" id="hide_span" class="btn btn-icon btn-primary file_upload_icon">
                                        <i class="fas fa-cloud-upload-alt" style="font-size:31px;"></i>
                                        <strong style="color:#000000;padding:10px;font-size:15px;">Choose File...</strong>
                                      </span>
                                      <input type="file" name="profile_image" id="pro_image" class="form-control" style="display:none;" onchange="show_image(this);">
                                      <img src="" onclick="profile_imagezz()" style="height:150px;display:none;border-radius: 50%;" id="p_blah">
                                      <?php
                                        }else{
                                      ?>
                                        <input type="file" name="profile_image" id="pro_image" class="form-control" style="display:none;" onchange="show_image(this);">
                                        <img src="<?php echo base_url('uploads/user_profile_image/');?><?php echo $fetch_account_details->user_profile_image;?>" onclick="profile_imagezz()" style="height:150px;border-radius: 50%;" id="p_blah">
                                      <?php
                                      }
                                      ?>
                                </div>
                              </div>
                            <div class="col-md-8">
                            <div class="row">
                              <div class="col-md-6">
                                <div class="form-group">
                                  <label class="form-label">First Name
                                  </label>
                                  <input type="text" class="form-control" name="fname" placeholder="First Name" value="<?php echo $fetch_account_details->user_fname;?>" required>
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-group">
                                  <label class="form-label">Last Name
                                  </label>
                                  <input type="text" class="form-control" name="lname"  placeholder="Last Name" value="<?php echo $fetch_account_details->user_lname;?>" required>
                                </div>
                              </div>
                               <div class="col-sm-6 col-md-12">
                                <div class="form-group">
                                  <label class="form-label">Email address
                                  </label>
                                  <input type="email" class="form-control" name="email"  placeholder="Email" value="<?php echo $fetch_account_details->user_email;?>" readonly>
                                </div>
                              </div>
                              <div class="col-sm-6 col-md-12">
                                <div class="form-group">
                                  <label class="form-label">Phone
                                  </label>
                                  <input type="number" class="form-control" id="mobile" name="phone"  placeholder="Phone" value="<?php echo $fetch_account_details->user_phone;?>" onkeyup="check(); return false;"  required>
                                  <span id="message"></span>
                                </div>
                              </div>
                            </div>
                          </div>
                         
                        </div>
                          </div>
                          <div class="card-footer text-right">
                            <button type="submit" class="btn btn-primary">Update Profile
                            </button>
                          </div>
                        </form>
                      </div>
                    </div>
                    <div class="tab-pane" id="address">
                      <div class="col-lg-12">
					  <div class="card-body" id="new_button">
						<div class="row">
						  <div class="col-md-12">
							<div class="form-group">
							  <span class="add_name" style="cursor:pointer;" onclick="add_more();"><i class="fas fa-plus" style="font-size:14px;"></i>&nbsp;&nbsp;&nbsp;Add a new address</span>
							</div>
						  </div>
						</div>
					  </div>
					  <div id="append_div" style="display:none;">
					  	<div class="card-body">
							<div class="row">
								<div class="col-sm-6 col-md-6">
									<div class="form-group">
										<label class="form-label">Name</label>
										<input type="text" class="form-control" name="name" placeholder="City">
									</div>
								</div>
								<div class="col-sm-6 col-md-6">
									<div class="form-group">
										<label class="form-label">Phone</label>
										<input type="text" class="form-control" name="phone" placeholder="State">
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<label class="form-label">Address</label>
										<textarea class="form-control" name="address" placeholder="Address"></textarea>
									</div>
								</div>
								<div class="col-sm-6 col-md-6">
									<div class="form-group">
										<label class="form-label">City</label>
										<select class="form-control select2-show-search" name="city">
											<option>1esdfsd</option>
											<option>1esdfsd</option>
											<option>1esdfsd</option>
											<option>1esdfsd</option>
											<option>1esdfsd</option>
											<option>1esdfsd</option>
											<option>1esdfsd</option>
											<option>1esdfsd</option>
											<option>1esdfsd</option>
										</select>
									</div>
								</div>
								<div class="col-sm-6 col-md-6">
									<div class="form-group">
										<label class="form-label">State</label>
										<input type="text" class="form-control" name="state" placeholder="State">
									</div>
								</div>
								<div class="col-sm-6 col-md-6">
									<div class="form-group">
										<label class="form-label">Postal Code</label>
										<input type="number" class="form-control" name="pincode" placeholder="ZIP Code">
									</div>
								</div>
								<div class="col-sm-6 col-md-6">
									<div class="form-group">
										<label class="form-label">Country</label>
										<input type="text" class="form-control" name="country" placeholder="Country" value="india" disabled>
									</div>
								</div>
							</div>
						</div>
						<div class="card-footer text-right">
							<button type="submit" class="btn btn-primary">Update Profile</button> <a href="javascript:void(0);" class="btn btn-primary" onclick="close_add();">close</a>
						</div>
					  </div>
                        <form class="card" method="POST" action="<?php echo base_url('account/update_address');?>">
						<?php
					    foreach($fetch_address as $get_add){
					    ?>
						<div class="card-body" id="main_div<?php echo $get_add->user_address_id;?>">
                            <div class="row">
                              <div class="col-md-10">
                                <div class="form-group">
								  <span class="add_name"><?php echo strtoupper($get_add->full_name);?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $get_add->phone;?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<code style="background-color:#F5365C;color:white;display:<?php echo(($get_add->address_status == '1')?'':'none');?>">PRIMARY</code></span>
								  <br>
								  <span class="add_details"><?php echo $get_add->address;?></span>
								  <br>
								  <span class="add_details"><?php echo $get_add->city;?>, <?php echo $get_add->state;?>, Pin : <?php echo $get_add->postal_code;?></span>
                                </div>
                              </div>
							  <div class="col-md-2">
								<div class="btn btn-group dropdown">
									<button aria-expanded="false" aria-haspopup="true" class="btn btn-oblong btn-sm btn-secondary dropdown-toggle btn btn-sm" data-toggle="dropdown" type="button">Manage</button>
									<div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(44px, 32px, 0px); top: 0px; left: 0px; will-change: transform;">
										<a class="dropdown-item" href="#" style="display:<?php echo(($get_add->address_status == '1')?'none':'');?>">
											<i class="fas fa-check text-success fa-fw" style="font-size: 14px;"></i>&nbsp;&nbsp;&nbsp;Mark as Primary
										</a>
										<a class="dropdown-item" href="javascript:void(0);" onclick="show_details(<?php echo $get_add->user_address_id;?>);">
											<i class="fas fa-pen text-success fa-fw"></i>&nbsp;&nbsp;&nbsp;Edit
										</a>
										<a class="dropdown-item" href="#">
											<i class="fas fa-times text-danger fa-fw" style="font-size: 14px;"></i>&nbsp;&nbsp;&nbsp;Delete
										</a>
									</div>
								</div>
							</div>
						</div>
					  </div>
					  <div id="edit_div<?php echo $get_add->user_address_id;?>" style="display:none;">
					  <div class="card-body">
                            <div class="row">
							  <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                  <label class="form-label">Name
                                  </label>
                                  <input type="text" class="form-control" name="name" placeholder="City" value="<?php echo $get_add->full_name;?>">
                                </div>
                              </div>
                              <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                  <label class="form-label">Phone
                                  </label>
                                  <input type="text" class="form-control" name="phone" placeholder="State" value="<?php echo $get_add->phone;?>">
                                </div>
                              </div>
                              <div class="col-md-12">
                                <div class="form-group">
                                  <label class="form-label">Address
                                  </label>
                                  <textarea class="form-control" name="address" placeholder="Address" ><?php echo $get_add->address;?></textarea>
                                </div>
                              </div>
                              <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                  <label class="form-label">City
                                  </label>
                                  <input type="text" class="form-control" name="city" placeholder="City" value="<?php echo $get_add->city;?>">
                                </div>
                              </div>
                              <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                  <label class="form-label">State
                                  </label>
                                  <input type="text" class="form-control" name="state" placeholder="State" value="<?php echo $get_add->state;?>">
                                </div>
                              </div>
                              <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                  <label class="form-label">Postal Code
                                  </label>
                                  <input type="number" class="form-control" name="pincode" placeholder="ZIP Code" value="<?php echo $get_add->postal_code;?>">
                                </div>
                              </div>
                              <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                  <label class="form-label">Country
                                  </label>
                                  <select class="form-control custom-select" name="country">
                                    <option value="India" selected>India</option>
                                  </select>
                                </div>
                              </div>
                            </div>
                          </div>
						  <div class="card-footer text-right">
                            <button type="submit" class="btn btn-primary" style="display:<?php echo(($get_add->address_status == '1')?'none':'');?>">Mark as primary</button>
							<button type="submit" class="btn btn-primary">Update Profile</button>
							<a href="javascript:void(0);" class="btn btn-primary" onclick="show_details(<?php echo $get_add->user_address_id;?>);">close</a>
                          </div>
						  </div>
					  <?php
						}
					  ?>
                        </form>
                      </div>
                    </div>
                    <div class="tab-pane  " id="password">
                      <div class="card">
                        <div class="card-body">
                          <form  method="post" method="POST" action="<?php echo base_url('account/update_password');?>">
                             
							  
							 
                              <label class="form-label">Enter old password
                              </label>
                              <div class="form-group">
                                <input type="password" class="form-control" id="password-field" placeholder="Enter old password" name="old_pass" required>
								<span toggle="#password-field" class="fas fa-eye field-icon toggle-password"></span>
                              </div>
							  <label class="form-label">Enter new password
                              </label>
                              <div class="form-group">
                                <input type="password" class="form-control" id="password_1" placeholder="Enter new password" name="new_pass" required>
								<span toggle="#password_1" class="fas fa-eye field-icon toggle-password"></span>
                              </div>
							  <label class="form-label">Re-enter new password
                              </label>
                              <div class="form-group">
                                <input type="password" class="form-control" id="password_2" placeholder="Re-enter new password" name="con_pass" required>
								<span toggle="#password_2" class="fas fa-eye field-icon toggle-password"></span> 
                              </div>
							  <div id="errors" class=""></div>
                              <div class="form-footer text-right">
                                <button type="submit" class="btn btn-primary">Send me new password
                                </button>
                              </div>
                            
                          </form>
                          <div class="text-center form-label mt-3 ">
                            Forget it, 
                            <a class="get_back" href="<?php echo base_url('login');?>">send me back
                            </a> to the sign in screen.
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php
$this->load->view("common/footer");
?>
<script src="<?php echo base_url();?>js/select2.js"></script>
<script src="<?php echo base_url();?>js/select2.full.min.js"></script>

  </body>
</html>
<script type="text/javascript" src="<?php echo base_url();?>js/jquery.password-validation.js"></script>
<script>
function show_details(add_id){
	$( "#edit_div"+add_id+"" ).toggle();
	$( "#main_div"+add_id+"" ).toggle();
}

function add_more(){
	$("#new_button").toggle();
	$('#append_div').toggle();
}

function close_add(){
	$("#append_div").toggle();
	$("#new_button").toggle();
}
</script>
<script>
	$(document).ready(function() {
		$("#password_1").passwordValidation({"confirmField": "#password_2"}, function(element, valid, match, failedCases) {

		    $("#errors").html("<pre>" + failedCases.join("\n") + "</pre>");
		  
		     if(valid) $(element).css("border","2px solid green");
		     if(!valid) $(element).css("border","2px solid red");
		     if(valid && match) $("#password_2").css("border","2px solid green");
		     if(!valid || !match) $("#password_2").css("border","2px solid red");
			 if(valid) $("#errors").hide();
		});
	});
</script>
<script>
	$(".toggle-password").click(function() {
	  $(this).toggleClass("fa-eye-slash");
	  var input = $($(this).attr("toggle"));
	  if (input.attr("type") == "password") {
		input.attr("type", "text");
	  } else {
		input.attr("type", "password");
	  }
	});
</script>
<script>
  function profile_imagezz(){
      $("input[id='pro_image']").click();
    }
  function show_image(input) {
    if (input.files && input.files[0]) {
      var reader = new FileReader();

      reader.onload = function (e) {
        $('#p_blah').attr('src', e.target.result);
      }

      reader.readAsDataURL(input.files[0]);
      $('#p_blah').show();
      $('#hide_span').hide();
    }
  }
</script>
<script>
$(document).ready(function() {
	var status = $('#status').val();
	if(status == 'password'){
		 $("#p_info").removeClass("active");
		 $("#personal").removeClass("active");
		 $("#pass_info").addClass("active");
		 $("#password").addClass("active");
	}else if(status == 'address'){
		 $("#p_info").removeClass("active");
		 $("#personal").removeClass("active");
		 $("#b_info").addClass("active");
		 $("#address").addClass("active");
	}
		
});
</script>
