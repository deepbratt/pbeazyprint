
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
		<script src="<?php echo base_url();?>js/jquery-3.2.1.min.js"></script>
		<link href="<?php echo base_url();?>css/quantity_style.css" rel="stylesheet" />
		<script src="<?php echo base_url();?>js/quantity_style.js"></script>
		<!-- Title -->
		<title>Eazyprint | Order Summary</title>
		<style>
			body{
				color:black !important;
			}
			/* ACCORDIONS STARTS*/
				button.accordion {
				  background-color: #fff;
				  cursor: pointer;
				  padding: 0.5rem 1.5rem;
				  width: 100%;
				  text-align: left;
				  outline: none;
				  font-size: 18px;
				  transition: 0.4s;
				  border: 1px solid #ccc;
				  min-height:3.5rem;
				}

				button.accordion.active{
				  color: #000;
				  /*background-color: #7490BD;*/
				  background-color: #ffe4ca;
				}

				button.accordion:hover {
				  color: #000;
				  /*background-color: #7490BD;*/
				  background-color: #ced4da;
				}

				button.accordion:before {
				  content: '\02795';
				  font-size: 9px;
				  float: left;
				  margin-left: 0px;
				  margin-right: 10px;
				  margin-top: 7px;
				}

				button.accordion.active:before {
				  content: "\2796";
				}

				div.accordion_panel {
				  background-color: white;
				  max-height: 0;
				  padding-left: 15px;
				  overflow: hidden;
				  padding-top: 0px;
				
				  transition: 0.6s ease-in-out;
				  opacity: 0;
				  margin-bottom: 8px;
				}

				.accordion_panel-icon {
				  margin-right: 10px;
				}

				.accordion_panel h5 {
				  font-size: 15px;
				  line-height: 23px;
				  margin-top: 5px;
				  margin-bottom: 0px;
				  display: inline-block;
				  color: #2d2d2d
				}

				.accordion_panel p {
				  font-size: 15px;
				  line-height: 23px;
				  padding: 15px 30px 20px 0;
				  color: #2d2d2d
				}

				div.accordion_panel.show {
				  opacity: 1;
				  max-height:1500px; ;
				  padding:23px;
				}
			/* ACCORDIONS ENDS*/
			.table-vcenter td, .table-vcenter th{
				vertical-align: top !important;
				border-top:none !important; 
			}
			.custom-control-label:before{
				border:2px solid #7490bd !important;
			}
			.fa, .fas{
				font-size:20px !important;
			}
		</style>
		<?php
		$this->load->view("common/metalinks");
		?>
	</head>
	<body class="app">

	<?php
		$this->load->view("common/header");
	?>
	<div class=" " style="background-color: #e40046;" >
      <div class="container">
        <div class="row">
          <div class="col-md-12 register_col_height">
            <span id="j_id0:j_id30">
              <style>
                .readOnly    
                {
                  cursor: not-allowed;
                  opacity: 1;
                  background-color: #eeeeee;
                  padding-left: 8px;
                  font-size: 14px;
                  font-weight: 500;
                  margin-bottom: 0;
                  display: block;
                  color: #333333;
                  width: 96%;
                }
                .field-icon {
                  float: right;
                  margin-left: -25px;
                  margin-top: -25px;
                  position: relative;
                  z-index: 2;
                  width: 25px;
                }
                input.error-input {
                  border-color: #fb0229!important;
                }
                #divPwd2 .tooltip{
                  left:60px;
                }
                #divPwd2 .tooltip.top .tooltip-arrow {
                  left: 10%;
                }
                #divPwd2 .tooltip.top .tooltip-inner {
                  text-align: left;
                }
                #divPincode2 .tooltip{
                  left:60px;
                }
                #divPincode2 .tooltip.top .tooltip-arrow {
                  left: 10%;
                }
                #divPincode2 .tooltip.top .tooltip-inner {
                  text-align: left;
                }
                #divShippingaddr2 .tooltip{
                  left:60px;
                }
                #divShippingaddr2 .tooltip.top .tooltip-arrow {
                  left: 90%;
                }
                #divShippingaddr2 .tooltip.top .tooltip-inner {
                  text-align: left;
                }
                #divMobNo2 .tooltip{
                  left:-125px;
                }
                #divMobNo2 .tooltip.top .tooltip-arrow {
                  left: 90%;
                }
                #divMobNo2 .tooltip.top .tooltip-inner {
                  text-align: left;
                }
                #divEmailId2 .tooltip{
                  left:-85px;
                }
                #divEmailId2 .tooltip.top .tooltip-arrow {
                  left: 90%;
                }
                #divEmailId2 .tooltip.top .tooltip-inner {
                  text-align: left;
                }
              </style>
          
            </span>
          </div>
        </div>
      </div>
      <div class="bx-wrapper BN1">
        <div class="bx-viewport"> 
          <div class="bx-wrapper" style="max-width: 1360px;">
            <div class="bx-viewport" aria-live="polite" style="width: 100%; overflow: hidden; position: relative; height: 400px;">
              <ul class="bxslider" style="width: 2215%; position: relative; transition-duration: 0s; transform: translate3d(-2760px, 0px, 0px);">
                <li style="float: left; list-style: none; position: relative; width: 1360px;" class="bx-clone" aria-hidden="true">
                  <img src="<?php echo base_url();?>images/login_banner.png" style="visibility: visible;">
                </li>
                <li style="float: left; list-style: none; position: relative; width: 1360px;" aria-hidden="true">
                  <img src="<?php echo base_url();?>images/login_banner.png" style="visibility: visible;">
                </li>
                <li style="float: left; list-style: none; position: relative; width: 1360px;" aria-hidden="false">
                  <img src="<?php echo base_url();?>images/login_banner.png" style="visibility: visible;">
                </li>
                <li style="float: left; list-style: none; position: relative; width: 1360px;" class="bx-clone" aria-hidden="true">
                  <img src="<?php echo base_url();?>images/login_banner.png" style="visibility: visible;">
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div> 
      <div class="BN2 hidden">
        <img src="<?php echo base_url();?>images/login_banner.png">
      </div> 
      <div class="BN3 hidden">
        <img src="<?php echo base_url();?>images/login_banner.png">
      </div>
      <style>
        .bxslider img{
          height:400px;
        }
        .center {
          display: block;
          margin-left: auto;
          margin-right: auto;
          width: 55%;
        }
      </style> 
    </div>
				<div class="container">
					<div class="side-app">
						<div class="col-md-12">
					
						<div class="row" style="margin-top:10px;">
						
							<div class="col-md-12 col-sm-12 col-xs-12" >
								<!-- ORDER SUMMARY STARTS-->
								<button type="button" class="accordion active">MY ORDERS</button>
								<div class="accordion_panel show">
								<?php
									$get_count_order = count($fetch_prod_data);
									
									if($get_count_order > 0){
										
								?>
								<form method="POST" action="<?php echo base_url('checkout/update_order_summary');?>">
								  	<?php
								  		foreach($fetch_prod_data AS $fetch_prod_yoo){
								  	?>
								  <div class="row" style="border:1px solid #cccccc;margin-top:10px;padding:20px;">
								
								  	<div class="col-md-1 p-1">
								  		<div class="form-group">
								  			<?php
								  				$prod_id = $fetch_prod_yoo->product_id;
								  				$fetch_prod_image = $this->my_orders_m->prod_image_info($prod_id);
								  			?>
								  			<img src="<?php echo base_url('admin/uploads/product_images/');?><?php echo $fetch_prod_image->product_image_path;?>" style="height:140px;">
								  		</div>
								  	</div>
								  	<div class="col-md-7">
								  		<div class="form-group">
								  			<h4><?php echo $fetch_prod_yoo->product_name;?></h4>
								  		</div>
								  		
								  	
							  		
							  			<?php
											$seller_id = $fetch_prod_yoo->supplier_name;
											
							  				$fetch_supplier_name = $this->my_orders_m->user_detailzz($seller_id);
											$count_user = count($fetch_supplier_name);
								  			if($count_user > 0){
								  		?>
								  		<div class="form-group">
								  			<span><b>Seller:</b> <?php echo $fetch_supplier_name->user_fname;?></span>
								  		</div>
								  		<?php
								  			}else{
								  		?>
								  		<div class="form-group">
								  			<span><b>Seller:</b> Eazyprint</span>
								  		</div>
								  		<?php
								  			}
								  		?>

										<div class="form-group">
								  			<span><b>Qty:</b> <?php echo $fetch_prod_yoo->order_qty;?></span>
								  		</div>
										  	
								  		<div class="form-group">
								  			<span style="font-size:21px;"><i class="fas fa-rupee-sign"></i> <?php echo $fetch_prod_yoo->order_amount;?></span>
								  			<strong style="padding-left:10px;color:green;">1 Offer Available</strong>
								  		</div>
								  	</div>
								  	<div class="col-md-3">
								  		<div class="form-group">
											<a href="<?php echo base_url('my_orders/refund_process/');?><?php echo $fetch_prod_yoo->order_id;?>">Refund</a>
										</div>
										<div class="form-group">
								  			<span>Order Place on <span style="font-weight:bold;color:#e40046;"><?php echo  gmdate("d-m-Y", $fetch_prod_yoo->order_date);?></span></span>
								  		</div>

										<?php
											if($fetch_prod_yoo->delivery_date != '')
											{
										?>
								  		<div class="form-group">
								  			<span>Delivery on <span style="font-weight:bold;color:#e40046;"><?php echo  gmdate("d-m-Y", $fetch_prod_yoo->delivery_date);?></span></span>
								  		</div>
										<?php
											}
										?>
										<div class="form-group">
								  			<span>Delivery Status | <span style="font-weight:bold;color:#e40046;"><?php echo $fetch_prod_yoo->delivery_status;?></span></span>
								  		</div>
								  	</div>
								  	
								  </div>
								  <?php
								  		}
								  	?>
								  <div class="row p-3">
								  	<?php
								  		if(isset($this->session->userdata['logged_in']['email']) && $this->session->userdata['logged_in']['email'] != ""){
								  	?>
								  	<div class="col-md-9">
								  		<div class="form-group">
								  			<p>Order Confirmation email will be sent to <a href="javascript:void(0);"><?php echo $this->session->userdata['logged_in']['email']?></a></p>
								  		</div>
								  	</div>
								  	<?php
								  		}
								  	?>
								  	<div class="col-md-12 text-right">
								  		<div class="form-group">
								  			<button class="btn btn-orange btn-lg">Continue</button>
								  		</div>
								  	</div>
								  </div>
								</form>
								<?php
									}else{
								?>
								<div class="row p-5" style="text-align:center;">
									<img src="<?php echo base_url('images/empty-cart.jpg');?>" style="height:100%;">
								</div>
								<?php
									}
								?>
								</div>
						
						</div>
					
						</div>
						<!-- P TAG MARTE HOBE-->
					</div>
				</div>
			</div>

<?php
$this->load->view("common/footer");
?>
				<!-- ACCORDIONS STARTS
				<script>
					var acc = document.getElementsByClassName("accordion");
					var i;

					function click_action(){
					  $('.accordion').removeClass('active');
					  $('.accordion_panel').removeClass('show');

					  this.classList.toggle("active");
					  this.nextElementSibling.classList.toggle("show");
					}

					for (i = 0; i < acc.length; i++) {
					  acc[i].onclick = click_action;
					}
				</script> -->
			<!-- Accordions Ends -->
				<script>
				$(document).ready(function(){
				    $("#hide").click(function(){
				        $(".address_edit").hide();
				        $(".address_hide").show();
				    });
				    $("#show").click(function(){
				        $(".address_edit").show();
				        $(".address_hide").hide();
				    });
				    $("#add_address_hide").click(function(){
				        $(".address_add").hide();
				        $(".add_address_hide").show();
				    });
				    $("#add_address_show").click(function(){
				        $(".address_add").show();
				        $(".add_address_hide").hide();
				    });
				});
				</script>
	</body>
</html>