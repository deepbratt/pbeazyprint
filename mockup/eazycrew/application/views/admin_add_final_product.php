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
    <link rel="icon" href="<?php echo base_url('images')?>/favicon.png" type="image/x-icon"/>
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url('images')?>/favicon.png" />
    <!-- Title -->
    <title>Eazyprint | Add Final Product
    </title>
    <?php $this->load->view('common/metalinks');?>
	<style>
	.input-hidden {
	  position: absolute;
	  left: -9999px;
	}

	input[type=radio]:checked + label>img {
	  border: 1px solid #fff;
	  box-shadow: 0 0 3px 3px #090;
	}

	/* Stuff after this is only to make things more pretty */
	input[type=radio] + label>img {
	  border: 1px dashed #444;
	  width: 150px;
	  height: 150px;
	  transition: 500ms all;
	}

	input[type=radio]:checked + label>img {
	  transform: 
		rotateZ(-10deg) 
		rotateX(10deg);
	}

	</style>
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
              <h4 class="page-title">Add Final Product
              </h4>
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="#">Eazycrew
                  </a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Add Final Product
                </li>
              </ol>
            </div>
			<?php
			  if($this->session->flashdata('success')){
			?>
			  <div class="alert alert-success"> <strong><?php echo $this->session->flashdata('success');?></strong> </div>
			<?php 
				} 
			?>
			
            <form  method="post" enctype="multipart/form-data" action="<?php echo base_url('admin_add_final_product/add_product');?>">
			  <div class="row">
                <div class="col-lg-12">
                  <div class="card">
                    <div class="card-header">
                      <h3 class="card-title">Product Hierarchy
                      </h3>
                    </div>
                    <div class=" card-body">
						<div class="form-group">
							<div class="row">
							  <div class="col-md-2">
								<label class="form-label">Choose Category
								</label>
							  </div>
							  <div class="col-md-10">
								<select name="category" id="select-countries" class="form-control custom-select" onchange="cat_id(this.value);">
									<option value="" selected="">Choose Category</option>
								<?php
								foreach($get_product_category as $fetch_product_category)
								{
								?>
									<option value="<?php echo $fetch_product_category->category_id;?>"><?php echo $fetch_product_category->category_name;?></option>
								<?php
								}
								?>
								  
								</select>
							  </div>
							</div>
						</div>
						<div class="form-group">
                        <div class="row">
                          <div class="col-md-2">
                            <label class="form-label">Choose Subcategory
                            </label>
                          </div>
                          <div class="col-md-10">
                            <select name="sub_category" id="select-countries" class="form-control custom-select sub_categoryz" onchange="sub_id(this.value);">
                              <option value="" selected="">Choose Subcategory</option>
                            </select>
                          </div>
                        </div>
                      </div>

                      <div class="form-group">
                        <div class="row">
                          <div class="col-md-2">
                            <label class="form-label">Choose Brand
                            </label>
                          </div>
                          <div class="col-md-10"> 
                            <select name="brand" class="form-control custom-select brandz" onchange="brand_id(this.value);">
                              <option value="" selected>Choose Brand</option>
                            </select>
                          </div>
                        </div>
                      </div>


                    </div>
                  </div>
                </div>
              </div>


              <div class="row">
                <div class="col-lg-12">
                  <div class="card">
                    <div class="card-header">
                      <h3 class="card-title">Product Details
                      </h3>
                    </div>
                    <div class=" card-body">
						<div class="form-group">
							<div class="row">
							  <div class="col-md-2">
								<label class="form-label">Choose Product
								</label>
							  </div>
							  <div class="col-md-10">
								<select name="product" id="select-countries" class="form-control custom-select" onchange="product_id(this.value);">
									<option value="" selected="">Choose Product</option>
								<?php
								foreach($get_product as $fetch_product)
								{
								?>
									<option value="<?php echo $fetch_product->product_id;?>"><?php echo $fetch_product->product_name;?></option>
								<?php
								}
								?>
								  
								</select>
							  </div>
							</div>
						</div>
						<div class="form-group">
                        <div class="row">
                          <div class="col-md-2">
                            <label class="form-label">Choose Design
                            </label>
                          </div>
                          <div class="col-md-10 design_div">
                            <a class="btn btn-danger " href="javascript:void(0);" data-toggle="modal" data-target="#largeModal">View All Design</a>
                          </div>
						  <input type="hidden" class="design_id_val" name="p_design" value="">
                        </div>
                      </div>

                    </div>
                  </div>
                </div>
              </div>
				
				

			  <div class="row">
                <div class="col-lg-12">
                  <div class="card">
                    <div class="card-header">
                      <h3 class="card-title">Product Classification
                      </h3>
                    </div>
                    <div class="card-body">
              
                      <div class="form-group">
                        <div class="row">
                          <div class="col-md-2">
                            <label class="form-label">Product Name
                            </label>
                          </div>
                          <div class="col-md-10">
                            <input type="text" class="form-control" name="product_name" placeholder="Product Name" >
                          </div>
                        </div>
                      </div>
					   
                      <div class="form-group">
                        <div class="row">
                          <div class="col-md-2">
                            <label class="form-label">Product Desc
                            </label>
                          </div>
                          <div class="col-md-10">
                            <textarea class="form-control" name="product_desc" placeholder="Enter Product Description">
                            </textarea>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-lg-12">
                  <div class="card">
                    <div class="card-header">
                      <h3 class="card-title">Price Specification
                      </h3>
                    </div>
                    <div class="card-body">

                      <div class="form-group">
                        <div class="row">
                          <div class="col-md-2">
                            <label class="form-label">Wholesale Price
                            </label>
                          </div>
                          <div class="col-md-10">
                            <input type="number" name="wholesale_price" class="form-control" placeholder="Add Wholesale Price">
                          </div>
                        </div>
                      </div>

					  <div class="form-group">
                        <div class="row">
                          <div class="col-md-2">
                            <label class="form-label">Retail Price
                            </label>
                          </div>
                          <div class="col-md-10">
                            <input type="number" name="retail_price" class="form-control" placeholder="Add Retail Price">
                          </div>
                        </div>
                      </div>

					  <div class="form-group">
                        <div class="row">
                          <div class="col-md-2">
                            <label class="form-label">Product Quantity
                            </label>
                          </div>
                          <div class="col-md-10">
                            <input type="number" name="quantity" class="form-control" placeholder="Add quantity">
                          </div>
                        </div>
                      </div>

                    </div>
               
                  </div>
                </div>
              </div>

			  <div class="row">
                <div class="col-lg-12">
                  <div class="card">
                    <div class="card-header">
                      <h3 class="card-title">SEO Optimization
                      </h3>
                    </div>
                    <div class="card-body">

                      <div class="form-group">
                        <div class="row">
                          <div class="col-md-2">
                            <label class="form-label">Meta Tags
                            </label>
                          </div>
                          <div class="col-md-10">
                            <input type="text" name="meta_tags" class="form-control" placeholder="Add Tags">
                          </div>
                        </div>
                      </div>

					  <div class="form-group">
                        <div class="row">
                          <div class="col-md-2">
                            <label class="form-label">Meta Image
                            </label>
                          </div>
                          <div class="col-md-10">
                           <input type="file" name="image" id="my_file"  class="form-control hide_file" placeholder="Add Meta Tags" onchange="readURL(this);">
						   <img src="" onclick="meta_image()" style="height:150px;display:none;" id="blah">
                          </div>
                        </div>
                      </div>

					  <div class="form-group">
                        <div class="row">
                          <div class="col-md-2">
                            <label class="form-label">Meta Keywords
                            </label>
                          </div>
                          <div class="col-md-10">
                            <input type="text" name="meta_keyword" class="form-control" placeholder="Add Meta Keywords">
                          </div>
                        </div>
                      </div>

					  <div class="form-group">
                        <div class="row">
                          <div class="col-md-2">
                            <label class="form-label">Meta Description
                            </label>
                          </div>
                          <div class="col-md-10">
                            <textarea class="form-control" name="meta_desc" placeholder="Enter Meta Description">
                            </textarea>
                          </div>
                        </div>
                      </div>


                    </div>
                    <div class="card-footer text-right">
						<button type="submit" class="btn btn-primary">Submit
						</button>
						<button type="reset" class="btn btn-secondary">Cancel</button>
					</div>
                  </div>
                </div>
              </div>

            </form>
          </div>
		  <!-- Large Modal -->
			<div id="largeModal" class="modal fade">
				<div class="modal-dialog modal-lg" role="document">
					<div class="modal-content ">
						<div class="modal-header pd-x-20">
							<h6 class="modal-title">Choose Design</h6>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body pd-20">
							<div class="row designz">
							</div>
						</div><!-- modal-body -->
						<div class="modal-footer">
							<a href="javascript:void(0);" class="btn btn-primary" data-dismiss="modal" onclick="store_design();">Choose design</a>
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						</div>
					</div>
				</div><!-- modal-dialog -->
			</div><!-- modal -->
          <!--footer-->
          <?php $this->load->view('common/footer');?>
          <!-- End Footer-->
        </div>
      </div>
    </div>
    <!-- Back to top -->
    <a href="#top" id="back-to-top" style="display: inline;">
      <i class="fas fa-angle-up">
      </i>
    </a>
    <script type="text/javascript">
		$('#cp2').colorpicker();

		function cat_id(e){
			$.ajax({
			url: '<?php echo base_url();?>admin_add_design/ajax_fetch_sub_category',
			data: {'category_id': e,},
			type: "post",
			success: function(response){
			  $('.sub_categoryz').html(response);
			}
		  });
		}
		
		function sub_id(sub_id){
			$.ajax({
				url: '<?php echo base_url();?>admin_add_product/ajax_fetch_brand',
				data: {'sub_id': sub_id,},
				type: "post",
				success: function(response){
				  $('.brandz').html(response);
				}
			});
		}

		function brand_id(brand_id){
			$.ajax({
			url: '<?php echo base_url();?>admin_add_product/ajax_fetch_model',
			data: {'brand_id': brand_id,},
			type: "post",
			success: function(response){
			  $('.modelzz').html(response);
			}
		  });
		}

		function product_id(e){
			$.ajax({
			url: '<?php echo base_url();?>admin_add_final_product/ajax_fetch_design',
			data: {'product_id': e,},
			type: "post",
			success: function(response){
			  $('.designz').html(response);
			}
		  });
		}

		
		function show_design(design_id){
			$('.design_id_val').val(design_id);
		}

		function store_design(){
			var design_id = $('.design_id_val').val();
			$.ajax({
			url: '<?php echo base_url();?>admin_add_final_product/ajax_show_design',
			data: {'design_id': design_id,},
			type: "post",
			success: function(response){
			  $('.design_div').html(response);
			}
		  });
		}

		function meta_image(){
			$("input[id='my_file']").click();
		}

		function readURL(input) {
			if (input.files && input.files[0]) {
				var reader = new FileReader();

				reader.onload = function (e) {
					$('#blah').attr('src', e.target.result);
				}

				reader.readAsDataURL(input.files[0]);
				$('#blah').show();
				$('.hide_file').hide();
			}
		}

    </script>
	 <script src="https://fonoapi.freshpixl.com/assets/js/fonoapi.jquery.min.js"></script>
    <!-- Timepicker js -->
    <script src="../js/jquery.timepicker.js">
    </script>
    <script src="../js/toggles.min.js">
    </script>
    <!-- Datepicker js -->
    <script src="../js/spectrum.js">
    </script>
    <script src="../js/jquery-ui.js">
    </script>
    <script src="../js/jquery.maskedinput.js">
    </script>
  </body>
</html>
