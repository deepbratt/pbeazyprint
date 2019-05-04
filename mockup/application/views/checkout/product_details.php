<!-- RIGHT SIDE PRODUCT DETAILS STARTS-->
	<div class="col-md-5 col-sm-12 col-xs-12" style="margin-top:5px;">
		<div class="card" style="border:1px solid #CCC;">
			<div class="card-header" style="background-color:#f5f5f5;border-bottom:1px solid #CCC;">
				<strong class="card-title" style="color:#000;">Price Details</strong>
			</div>
			<div class="card-body" style="padding:4px !important;">
			  	<div class="table-responsive">
					<table class="table card-table table-vcenter text-nowrap">
						<tr>
							<td>Price(<?php echo $total_each_mat_qty;?> Item)</td>
							<td style="float:right;font-size:21px;"><i class="fas fa-rupee-sign"></i> <?php echo round($total_payable);?></td>
						</tr>
						<tr>
							<td>GST Charges</td>
							<td style="float:right;font-size:21px;"><i class="fas fa-rupee-sign"></i> <?php echo round($gst_tax);?></td>
						</tr>
						<tr>
							<td>Delivery Charges</td>
							<td style="float:right;color:green;font-size:21px;;">FREE</td>
						</tr>
						<tr>
							<td>Amount Payable (inclusive Tax)</td>
							<td style="float:right;font-size:21px;"><i class="fas fa-rupee-sign"></i> <?php echo $total_amount;?></td>
						</tr>
					</table>
				</div>
			</div>
		</div> 
		<div class="row" style="color:#878787;">
			<div class="col-md-2">
				<img src="<?php echo base_url();?>images/shield_a7ea6b.png" style="height:45px;"> 
			</div>
			<div class="col-md-10" style="margin-left:-21px;font-weight:500;">
				Safe and Secure Payments. Easy Returns. 100% Authentic products.
			</div>
		</div>
	</div>
	<!-- RIGHT SIDE PRODUCT DETAILS ENDS-->