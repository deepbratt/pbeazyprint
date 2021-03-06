 <style>
 .header_active{
	background:#009fdc !important;
	color:#fff;
 }
 .blk-mb :hover{
	cursor:pointer;
	text-decoration:underline;
 }
 @media screen and (min-width: 998px) {
  .ren-navbar .mega-dropdown .sub-item{
	width:142% !important;
  }
}
 </style>
 <!-- <div id="global-loader" ><div class="showbox"><div class="lds-ring"><div></div><div></div><div></div><div></div></div></div></div> -->
		<div class="page">
			<div class="page-main">
				<!-- Navbar-->	
					<header class="app-header header shadow-none fixed-header relative" style="background:#f3f4f8;border-bottom:1px solid #d5def0;">
						<div class="container">
						
						<!-- Navbar Right Menu-->
						<div class="container-fluid">
							<div class="d-flex" style="height: 25px;">
								<div class="d-flex order-lg-3 mr-auto">
									<a class="nav-link d-flex" href="<?php echo base_url('bulk_order');?>">
										<span class="d-none d-lg-block" style="font-size: 11px;">
											<span class="text-dark"> <b> Bulk Orders </b> </span>
										</span>
									</a>
									<a class="nav-link d-flex" href="javascript:void(0);">
										<span class="d-none d-lg-block" style="font-size: 11px;">
											<span class="text-dark"> <b> Merchandise Solution </b> </span>
										</span>
									</a>
									<a class="nav-link d-flex" href="<?php echo base_url("seller");?>">
										<span class="d-none d-lg-block" style="font-size: 11px;">
											<span class="text-dark"> <b> Partner Stores </b> </span>
										</span>
									</a>
									<!--<a class="nav-link d-flex" href="javascript:void(0);">
										<span class="d-none d-lg-block" style="font-size: 11px;">
											<span class="text-dark"> <b> Affiliate </b> </span>
										</span>
									</a>-->
									<!--<a class="nav-link d-flex" href="javascript:void(0);">
										<span class="d-none d-lg-block" style="font-size: 11px;">
											<span class="text-dark"> <b> Dropshipping </b> </span>
										</span>
									</a>-->
								</div>
								<div class="d-flex order-lg-3 ml-auto">
									<a class="nav-link d-flex" href="javascript:void(0);">
										<span class="d-none d-lg-block" style="font-size: 11px;">
											<span class="text-dark"> <b> Contact Us </b> </span>
										</span>
									</a>
									<a class="nav-link  d-flex" href="javascript:void(0);">
										<span class="d-none d-lg-block" style="font-size: 11px;">
											<span class="text-dark"> <b> Track Order </b> </span>
										</span>
									</a>
								</div>
							</div>
						</div>
					</div>
				</header>
				
				<!-- Horizantal menu-->
				<div id="">
					<div class="ren-navbar fixed-header" id="headerMenuCollapse" >
						<div class="container">
							<div class="row">
							
							<div class="col-md-2">
								<a class="nav-link header-brand" href="<?php echo base_url('home');?>">
									<img alt="ren logo" class="header-brand-img" src="<?php echo base_url();?>images/logo_header.png" style="height:30px;">
								</a>
							</div>
							<div class="col-md-7">
								<div class="nav">
									<?php
										$ci =&get_instance();
										$ci->load->model('home_m');
										$get_categories = $ci->home_m->get_cat();				
										foreach($get_categories AS $get_cat){
											if($get_cat->cat_id == 4 || $get_cat->cat_id == 5 || $get_cat->cat_id == 6){
												continue;
											}
									?>
									
										<li class="nav-item with-sub  mega-dropdown">
										  <a class="nav-link" href="<?php echo base_url('link/');?><?php echo $get_cat->cat_id;?>">
											<span class="d-lg-block">
												<span class="text-dark" style="text-transform:uppercase;"> <?php echo $get_cat->category_name;?> </span>
											</span>
										  </a>
										  <div class="sub-item " style="border:1px solid #CCCCCC;border-top:none;margin-top:-10px;">
											<div class="row">

												<?php
													if($get_cat->cat_id == 1){
														$ci =&get_instance();
														$ci->load->model('home_m');
												?>
													<div class="col-md-2" style="text-align:left;">
														<span style="color:#009fdc;"> Tshirts </span>
														<ul style="padding-top:10px;">
															<li class="text-dark">Printed Tshirts</li>
															<li class="text-dark">Corporate Tshirts</li>
															<li class="text-dark">Couple Tshirts</li>
															<li class="text-dark">Family Tshirts</li>
														</ul>
													</div>
													
													<div class="col-md-3">
														<a class="nav-link" href="#">
															<img  src="<?php echo base_url();?>images/Wink-face-comic-fun-graphic-printed-half-sleeve-t-shirt-for-men_800x.jpg" style="height:200px;">
														</a>
														<span class="text-dark">Trendy Tshirts</span>
													</div>

													<div class="col-md-3">
														<a class="nav-link" href="#">
															<img  src="<?php echo base_url();?>images/blank_tshirt1.png" style="height:200px;">
														</a>
														<span class="text-dark">Polo Tshirts</span>
													</div>

													<div class="col-md-3">
														<a class="nav-link" href="#">
															<img  src="<?php echo base_url();?>images/61faFY0xivL._UX569_.jpg" style="height:200px;">
														</a>
														<span class="text-dark">Merchandised Tshirts</span>
													</div>

												<?php
													}else if($get_cat->cat_id == 2){
													$get_mugs = $ci->home_m->fetch_mugs();
													foreach($get_mugs AS $each_mugs){
												?>
													<div class="col-md-2 blk-mb" style="text-align:center;margin-top:5px;float:left;cursor:pointer !important;">
														<a href="<?php echo base_url('link/prodata/');?><?php echo $each_mugs->raw_category;?>/<?php echo $each_mugs->raw_id;?>"style="color:#000;cursor:pointer !important;text-align:center;"> 
															<img src="<?php echo base_url();?>admin/uploads/product_images/mug/<?php echo $each_mugs->raw_image;?>" style="height:100px;text-align:center;"> <br />
															<?php echo $each_mugs->raw_title;?> 
														</a>
													</div>
												<?php	
													}
													}else if($get_cat->cat_id == 3){
												?>
													<div class="col-md-12" style="text-align:left;margin-top:5px;float:left;">
													<h4 style="text-align:left;color:#000 !important;"> &nbsp;&nbsp; Create your own mobile case Starting @ 199/- </h4>
													<p style="text-align:left;color:#000 !important;"> &nbsp;&nbsp; Select your phone brand </p> 
													<div class="clearfix"></div>
													</div>
													<?php
														$ci =&get_instance();
														$ci->load->model('home_m');
														$get_mobile_casezz = $ci->home_m->fetch_mobile_case();
														foreach($get_mobile_casezz AS $each_mob_case){
													?>
													<div class="col-md-3 blk-mb" style="text-align:left;margin-top:5px;float:left;cursor:pointer !important;">
														<a href="<?php echo base_url('link/prodata/');?><?php echo $each_mob_case->raw_category;?>/<?php echo $each_mob_case->raw_id;?>"style="color:#009fdc;cursor:pointer !important;"> <?php echo $each_mob_case->raw_brand;?> </a>
													</div>
													<?php
														}	
													?>
												<?php
													}else if($get_cat->cat_id == 4){
													$ci =&get_instance();
														$ci->load->model('home_m');
														$get_pillows = $ci->home_m->fetch_pillows();
														foreach($get_pillows AS $each_pillows){
												?>	
													<div class="col-md-2 blk-mb" style="text-align:center;margin-top:5px;float:left;cursor:pointer !important;">
														<a href="<?php echo base_url('link/prodata/');?><?php echo $each_pillows->raw_category;?>/<?php echo $each_pillows->raw_id;?>"style="color:#000;cursor:pointer !important;text-align:center;"> 
															<img src="<?php echo base_url();?>admin/uploads/product_images/pillows/<?php echo $each_pillows->raw_image;?>" style="height:100px;text-align:center;"> <br />
															<?php echo ucfirst($each_pillows->raw_title);?> 
														</a>
													</div>
												<?php
														}
													}else if($get_cat->cat_id == 5){
														$ci =&get_instance();
														$ci->load->model('home_m');
														$get_plates = $ci->home_m->fetch_plates();
														foreach($get_plates AS $each_plates){
												?>
													<div class="col-md-2 blk-mb" style="text-align:center;margin-top:5px;float:left;cursor:pointer !important;">
														<a href="<?php echo base_url('link/prodata/');?><?php echo $each_plates->raw_category;?>/<?php echo $each_plates->raw_id;?>"style="color:#000;cursor:pointer !important;text-align:center;"> 
															<img src="<?php echo base_url();?>admin/uploads/product_images/plate/<?php echo $each_plates->raw_image;?>" style="height:100px;text-align:center;"> <br />
															<?php echo ucfirst($each_plates->raw_title);?> 
														</a>
													</div>
												<?php
														}
													}else if($get_cat->cat_id == 6){
														$ci =&get_instance();
														$ci->load->model('home_m');
														$get_tiles = $ci->home_m->fetch_tiles();
														foreach($get_tiles AS $each_tiles){
												?>
													<div class="col-md-2 blk-mb" style="text-align:center;margin-top:5px;float:left;cursor:pointer !important;">
														<a href="<?php echo base_url('link/prodata/');?><?php echo $each_tiles->raw_category;?>/<?php echo $each_tiles->raw_id;?>"style="color:#000;cursor:pointer !important;text-align:center;"> 
															<img src="<?php echo base_url();?>admin/uploads/product_images/tiles/<?php echo $each_tiles->raw_image;?>" style="height:100px;text-align:center;"> <br />
															<?php echo ucfirst($each_tiles->raw_title);?> 
														</a>
													</div>
												<?php
														}
													}
												?>
											 </div>
										   </div>
										</li>

									<?php
										}
									?>
								</div>
							</div>
								<!-- NAV ENDS-->
							<div class="col-md-3">
								<div class="nav">
									<?php
										if(empty($this->session->userdata['logged_in']['user_id'])){
									?>
									<li class="nav-item left">
										<a class="nav-link" href="<?php echo base_url('login');?>">
											<span class="d-lg-block">
												<span class="text-dark">LOGIN</span>
											</span>
										</a>
									</li>

									<li class="nav-item right">
										<a class="nav-link" href="<?php echo base_url('signup');?>">
											<span class="d-lg-block">
												<span class="text-dark">SIGNUP</span>
											</span>
										</a>
									</li>
									<?php
										}else if(isset($this->session->userdata['logged_in']['user_type']) && $this->session->userdata['logged_in']['user_type'] == 'customer'){
											$user_id = $this->session->userdata['logged_in']['user_id'];
											$ci =&get_instance();
											$ci->load->model('login_m');
											$get_profile_details = $ci->login_m->get_profile_details($user_id);
									?>
									<li class="nav-item left">
										<a class="nav-link" data-toggle="account_section" href="javascript:void(0);">
										<?php
											if(isset($get_profile_details->user_profile_image) && $get_profile_details->user_profile_image != ""){
										?>
											<span class="avatar avatar-md brround" style="background-image: url('<?php echo base_url('uploads/user_profile_image/');?><?php echo $get_profile_details->user_profile_image;?>')"></span>
										<?php
												echo "&nbsp;&nbsp;";
												echo $this->session->userdata['logged_in']['first_name'];
												$last_n = $this->session->userdata['logged_in']['last_name']; 
												echo "&nbsp;&nbsp;";
												echo $last_n[0];
												echo ".";
												echo "&nbsp;&nbsp;";
												echo "<i class='fas fa-chevron-down'></i>";
											}else{
										?>
											<!-- <i class="fas fa-user" style="font-size:33px !important;"></i>  -->
											<?php 
												echo $this->session->userdata['logged_in']['first_name'];
												$last_n = $this->session->userdata['logged_in']['last_name']; 
												echo "&nbsp;&nbsp;";
												echo $last_n[0];
												echo ".";
												echo "&nbsp;&nbsp;";
												echo "<i class='fas fa-chevron-down'></i>";
											}
										?>
										</a>
										<div id="account_section" class="dropdown-menu dropdown-menu-right dropdown-menu-arrow" style="margin-top: -6px !important;">
											<a class="dropdown-item <?php echo(($this->uri->segment(1) == 'orders')?'header_active':'');?>" href="<?php echo base_url('orders');?>"><i class="fas fa-box"></i> Orders</a>
											<!--<a class="dropdown-item <?php echo(($this->uri->segment(1) == 'wishlist')?'header_active':'');?>" href="<?php echo base_url('wishlist');?>"><i class="fas fa-heart"></i> Wishlist</a>-->
											<a class="dropdown-item <?php echo(($this->uri->segment(1) == 'cart')?'header_active':'');?>" href="<?php echo base_url('cart');?>"><i class="fas fa-cart-plus"></i> Cart</a>
											<a class="dropdown-item <?php echo(($this->uri->segment(1) == 'rewards')?'header_active':'');?>" href="<?php echo base_url('rewards');?>"><i class="fas fa-briefcase"></i> Reward</a>
											<!--<a class="dropdown-item <?php echo(($this->uri->segment(1) == 'support')?'header_active':'');?>" href="<?php echo base_url('support');?>"><i class="fas fa-phone"></i> Support</a>-->
											<a class="dropdown-item <?php echo(($this->uri->segment(1) == 'account')?'header_active':'');?>" href="<?php echo base_url('account');?>"><i class="fas fa-user"></i> Account</a>
											<a class="dropdown-item <?php echo(($this->uri->segment(1) == 'signout')?'header_active':'');?>" href="<?php echo base_url('signout');?>"><i class="fas fa-sign-out-alt"></i> Sign out</a>
										</div>
									</li>
									
									<?php
										}else{
									?>
										<li class="nav-item left">
											<a class="nav-link" data-toggle="dropdown" href="javascript:void(0);">
												<i class="fas fa-user" style="font-size:33px;"></i>
											</a>
											<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow" style="margin-top: -6px !important;">
												<a class="dropdown-item <?php echo(($this->uri->segment(1) == 'signout')?'header_active':'');?>" href="<?php echo base_url('signout');?>"><i class="fas fa-sign-out-alt"></i> Sign out</a>
											</div>
										</li>
									<?php
										}
									?>
									<li class="nav-item right"> 
										<?php
											$ip = $this->input->ip_address();
											if(isset($this->session->userdata['logged_in']['user_id']) && $this->session->userdata['logged_in']['user_id'] != ""){
												$user_id = $this->session->userdata['logged_in']['user_id'];
											}else{
												$user_id = $ip;
											}
											$get_cart_data = $ci->home_m->cart_info($user_id,$ip);
											if(!empty($get_cart_data)){

												$count_cart_qty = array();
												foreach($get_cart_data AS $each_cart_qty){
													$count_cart_qty[] = $each_cart_qty->qty;
												}
											$count_cart_data = array_sum($count_cart_qty);
										?>
							            <div class="dropdown d-md-flex"> 
										  <a class=" icon" data-toggle="dropdown">
										    <img src="<?php echo base_url('images/Shopping-Cart-icon.png')?>" style="height:50px;"><span class=" badge badge-info badge-pill" style="font-size:15px !important;"><?php echo $count_cart_data;?></span>
										  </a> 
										  <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow"> 
										  	<?php
										  		foreach($get_cart_data AS $each_cart_data){
										  		if($each_cart_data->product_type == 'readymade'){
										  			$fetch_prod_image = $ci->home_m->prod_data($each_cart_data->product_id);
										  	?>
										    <a class="dropdown-item d-flex pb-3" href="<?php echo base_url('product_details/');?><?php echo $each_cart_data->product_id;?>"> 
										      <span class="avatar mr-3 align-self-center" style="background-image: url(<?php echo $fetch_prod_image->product_image_path;?>)">
										      </span> 
										      <div> 
										        <strong><?php 
											        	$pro_title = $fetch_prod_image->product_title;
											        	$trim_pro_title = substr($pro_title,0,20);
											        	echo $trim_pro_title;
											        	echo "...";
										        ?></strong> 
										        <strong>(<?php echo $each_cart_data->qty;?> pcs)</strong>
										        <div class="small"><i class="fas fa-rupee-sign" style="font-size:12px !important;"></i> <?php echo ($each_cart_data->price * $each_cart_data->qty);?>
										        </div> 
										    </div> 
										    </a> 
										    <?php
										    	}else if($each_cart_data->product_type == 'customised'){
										    ?>
										    <a class="dropdown-item d-flex pb-3" href="<?php echo base_url('checkout');?>"> 
										      <span class="avatar mr-3 align-self-center" style="background-image: url(<?php echo $each_cart_data->design_image;?>)">
										      </span> 
										      <div> 
										        <strong><?php 
											        	echo "Customized ";
											        	$fetch_cat_name = $ci->home_m->cat_data($each_cart_data->raw_category);
								  						echo $fetch_cat_name->category_name;
										        ?></strong> 
										        <strong>(<?php echo $each_cart_data->qty;?> pcs)</strong>
										        <div class="small"><i class="fas fa-rupee-sign" style="font-size:12px !important;"></i> <?php echo ($each_cart_data->price * $each_cart_data->qty);?>
										        </div> 
										    </div> 
										    </a> 
										    <?php
											    	}
											   	}
										    ?>
										    <div class="dropdown-divider">
										    </div> 
										    <a class="dropdown-item text-center text-muted-dark" href="<?php echo base_url('checkout');?>">Go to cart
										    </a> 
										  </div> 
										</div>
										<?php
											}else{
										?>
										<div class="dropdown d-md-flex"> 
										  <a class=" icon" data-toggle="dropdown">
										    <img src="<?php echo base_url('images/Shopping-Cart-icon.png')?>" style="height:50px;"><span class=" badge badge-info badge-pill">0</span>
										  </a> 
										</div>
										<?php
											}
										?>
									</li>
								</div>
							</div>
						</div>
					</div>
				</div>


					<!-- Mobile Menu Starts -->

					<div class="ren-navbar fixed-header mobile_menu">
						<div class="container">
							<div class="row" style="height: 75px;margin-top: -3px;">
								<div class="col-md-10 col-xs-6 col-sm-6">
									<a  href="<?php echo base_url('home');?>">
										<img src="<?php echo base_url();?>images/logo_header.png" style="height:40px;margin-top:18px;">
									</a>
								</div>
								<div class="col-md-2 col-xs-6 col-sm-6" style="margin-top:25px;">
									<a href="#" class="header-toggler d-lg-none ml-3 ml-lg-0" data-toggle="collapse" data-target="#headerMenuCollapse">
										<span class="header-toggler-icon" style="color:#000;"></span>
									</a>
								</div>
							</div>
						</div>
					</div>
					<!-- Mobile Menu Ends -->


				</div>
				<!-- Horizantal menu-->