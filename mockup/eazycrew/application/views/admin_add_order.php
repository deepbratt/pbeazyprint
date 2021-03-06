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
    <title>Eazyprint | Add Order
    </title>
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
              <h4 class="page-title">Add Order
              </h4>
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="#">Eazycrew
                  </a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Add Order
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
			<div class="api" style="display:none;">
			   Api is ready to Run
			</div>
            <form  method="post" enctype="multipart/form-data" action="<?php echo base_url('admin_add_product/add_product');?>">
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

					  <div class="form-group modelz" style="display:none;">
                        <div class="row">
                          <div class="col-md-2">
                            <label class="form-label">Choose Model Number
                            </label>
                          </div>
                          <div class="col-md-10">
							<div class="form-group">
								<input class="devname form-control" type="text" name="model" onkeyup="callapi();"></input> 
							</div>
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
                            <label class="form-label">Product Title
                            </label>
                          </div>
                          <div class="col-md-10">
                            <input type="text" class="form-control" name="product_title" placeholder="Product Title">
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
                      <h3 class="card-title">Product Specification
                      </h3>
                    </div>
                    <div class="card-body">
					  
					  <div class="form-group materialz">
                        <div class="row">
                          <div class="col-md-2">
                            <label class="form-label">Material Type
                            </label>
                          </div>
                          <div class="col-md-10"> 
                            <select name="material_type" class="form-control custom-select materialzz">
                              <option value="" selected>Choose Material Type</option>
                            </select>
                          </div>
                        </div>
                      </div>

                      <div class="form-group p_color">
                        <div class="row">
                          <div class="col-md-2">
                            <label class="form-label">Product Color
                            </label>
                          </div>
                          <div class="col-md-10">
                            <div class="row gutters-xs colorzz">
                            </div>
                          </div>
                        </div>
                      </div>

					  <div class="form-group p_size">
                        <div class="row">
                          <div class="col-md-2">
                            <label class="form-label">Product Size
                            </label>
                          </div>
                          <div class="col-md-10">
							<div class="selectgroup selectgroup-pills sizezz">
							</div>
                          </div>
                        </div>
                      </div>

					  <div class="form-group p_shape">
                        <div class="row">
                          <div class="col-md-2">
                            <label class="form-label">Product Shape
                            </label>
                          </div>
                          <div class="col-md-10">
								<div class="selectgroup selectgroup-pills shapezz">
								</div>
                          </div>
                        </div>
                      </div>

					  <div class="form-group p_weight">
                        <div class="row">
                          <div class="col-md-2">
                            <label class="form-label">Product Weight
                            </label>
                          </div>
                          <div class="col-md-10">
                            <input type="text" name="product_weight" class="form-control" placeholder="Add Product Weight">
                          </div>
                        </div>
                      </div>

					  <div class="form-group">
                        <div class="row">
                          <div class="col-md-2">
                            <label class="form-label">Product Dimention (mm)
                            </label>
                          </div>
						
						<div class="col-md-4">
							<input type="text" class="form-control pro_len" name="dimension_len" placeholder="Product length">
						</div>
						<div class="col-md-3">
							<input type="text" class="form-control pro_wid" name="dimension_wid" placeholder="Product Width">
						</div>
						<div class="col-md-3">
							<input type="text" class="form-control pro_height" name="dimension_height" placeholder="Product height">
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

					  <div class="form-group">
                        <div class="row">
                          <div class="col-md-2">
                            <label class="form-label">Minimum Order
                            </label>
                          </div>
                          <div class="col-md-10">
                            <input type="number" name="min_order" class="form-control" placeholder="Add Minimum Order">
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
                            <label class="form-label">Purchase Price
                            </label>
                          </div>
                          <div class="col-md-10">
                            <input type="number" name="purchase_price" class="form-control" placeholder="Add Purchase Price">
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
			
			if(sub_id == '9')
			{
				$('.modelz').show();
				$('.p_color').hide();
				$('.p_size').hide();
				$('.p_shape').hide();
				$('.p_weight').hide();
				$('.materialz').hide();
			}else{
				$('.modelz').hide();
			}
			$.ajax({
				url: '<?php echo base_url();?>admin_add_product/ajax_fetch_brand',
				data: {'sub_id': sub_id,},
				type: "post",
				success: function(response){
				  $('.brandz').html(response);
				}
			});
			$.ajax({
				  url: '<?php echo base_url();?>admin_add_product/ajax_fetch_material_type',
				  type: 'post',
				  data: {'sub_id': sub_id,},
				  success: function(response){
					$('.materialzz').html(response);
				  }
			});
			$.ajax({
				  url: '<?php echo base_url();?>admin_add_product/ajax_fetch_color',
				  type: 'post',
				  data: {'sub_id': sub_id,},
				  success: function(response){
					$('.colorzz').html(response);
				  }
			});
			$.ajax({
				  url: '<?php echo base_url();?>admin_add_product/ajax_fetch_size',
				  type: 'post',
				  data: {'sub_id': sub_id,},
				  success: function(response){
					$('.sizezz').html(response);
				  }
			});
			$.ajax({
				  url: '<?php echo base_url();?>admin_add_product/ajax_fetch_shape',
				  type: 'post',
				  data: {'sub_id': sub_id,},
				  success: function(response){
					$('.shapezz').html(response);
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

		function callapi(){

			// set token globally
			//$.fn.fonoApi.options.token = "xxx";
			$('.api').fonoApi({
				token : "86b89476caaf66eda3f21279b7711afc",
				device : $('.devname').val(),
				limit : 1,
				template : function() {

					// argument contains the data object // *returns html content
					return $.map(arguments, function(obj, i) {
						content  = obj.dimensions;
						contarr = content.split(" ");
						$('.pro_len').val(contarr[0]);
						$('.pro_wid').val(contarr[2]);
						$('.pro_height').val(contarr[4]);
					});

				}
			});

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
