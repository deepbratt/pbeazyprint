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

		<!-- Title -->
		<title>Eazyprint | Home</title>
<?php
$this->load->view("common/metalinks");
?>
		<link href="<?php echo base_url();?>css/timeline.min.css" rel="stylesheet" />
		<style>
			h2{
			  text-align:center;
			  padding: 20px;
			}
			/* Slider */

			.slick-slide {
				margin: 0px 20px;
			}

			.slick-slide img {
				width: 100%;
			}

			.slick-slider
			{
				position: relative;
				display: block;
				box-sizing: border-box;
				-webkit-user-select: none;
				-moz-user-select: none;
				-ms-user-select: none;
						user-select: none;
				-webkit-touch-callout: none;
				-khtml-user-select: none;
				-ms-touch-action: pan-y;
					touch-action: pan-y;
				-webkit-tap-highlight-color: transparent;
			}

			.slick-list
			{
				position: relative;
				display: block;
				overflow: hidden;
				margin: 0;
				padding: 0;
			}
			.slick-list:focus
			{
				outline: none;
			}
			.slick-list.dragging
			{
				cursor: pointer;
				cursor: hand;
			}

			.slick-slider .slick-track,
			.slick-slider .slick-list
			{
				-webkit-transform: translate3d(0, 0, 0);
				   -moz-transform: translate3d(0, 0, 0);
					-ms-transform: translate3d(0, 0, 0);
					 -o-transform: translate3d(0, 0, 0);
						transform: translate3d(0, 0, 0);
			}

			.slick-track
			{
				position: relative;
				top: 0;
				left: 0;
				display: block;
			}
			.slick-track:before,
			.slick-track:after
			{
				display: table;
				content: '';
			}
			.slick-track:after
			{
				clear: both;
			}
			.slick-loading .slick-track
			{
				visibility: hidden;
			}

			.slick-slide
			{
				display: none;
				float: left;
				height: 100%;
				min-height: 1px;
			}
			[dir='rtl'] .slick-slide
			{
				float: right;
			}
			.slick-slide img
			{
				display: block;
			}
			.slick-slide.slick-loading img
			{
				display: none;
			}
			.slick-slide.dragging img
			{
				pointer-events: none;
			}
			.slick-initialized .slick-slide
			{
				display: block;
			}
			.slick-loading .slick-slide
			{
				visibility: hidden;
			}
			.slick-vertical .slick-slide
			{
				display: block;
				height: auto;
				border: 1px solid transparent;
			}
			.slick-arrow.slick-hidden {
				display: none;
			}
			.img_op{
				opacity:1;
			}
			.img_op:hover{
				opacity:0.6;
			}
			.product_ttl{
				padding:10px;margin-top:-60px;background:url(images/item_name.png);z-index:2;position:absolute;width:100%;
			}
		</style>
	</head>
	<body class="app">

<?php
$this->load->view("common/header");
?>

				<div id="myCarousel" class="carousel slide" data-ride="carousel">
							<ol class="carousel-indicators">
							  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
							  <li data-target="#myCarousel" data-slide-to="1"></li>
							  <li data-target="#myCarousel" data-slide-to="2"></li>
							</ol>
							<div class="carousel-inner">
							  <div class="carousel-item active">
								<img class="first-slide" src="<?php echo base_url();?>images/bewkoof/womens-topwear-banner-6-desktop-1542197802.jpg" alt="First slide" class="img-responsive">
								<div class="container">
								  <div class="carousel-caption text-left">
									<!--<h1>Example headline.</h1>
									<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
									<p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>-->
								  </div>
								</div>
							  </div>
							  <div class="carousel-item">
								<img class="second-slide" src="<?php echo base_url();?>images/bewkoof/shirt-men-bestsellers-desktop-1542100908.jpg" alt="Second slide" class="img-responsive" >
								<div class="container">
								  <div class="carousel-caption">
									<!--<h1>Another example headline.</h1>
									<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
									<p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>-->
								  </div>
								</div>
							  </div>
							  <div class="carousel-item">
								<img class="third-slide" src="<?php echo base_url();?>images/bewkoof/to-travel-is-to-live-design-of-the-day-banner-desktop-1542976089.jpg" alt="Third slide" class="img-responsive" >
								<div class="container">
								  <div class="carousel-caption">
									<!--<h1>Another example headline.</h1>
									<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
									<p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>-->
								  </div>
								</div>
							  </div>



							</div>
							<a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
							  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
							  <span class="sr-only">Previous</span>
							</a>
							<a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
							  <span class="carousel-control-next-icon" aria-hidden="true"></span>
							  <span class="sr-only">Next</span>
							</a>
					</div>


				<div class="container">
					<div class="side-app">
						<p>&nbsp;</p>
						<h1 class="page-title" style="color:black;text-align:center;font-weight:bold;font-size:26px;"> Wide Range of Categories </h1>
						<p>&nbsp;</p>

						<div class="row">
							<div class="col-md-4 col-sm-12 col-xs-12">
								<div class="card card-primary text-center ">
									<a href="#" class="bg-dark">
										<img class="img-responsive img_op" src="<?php echo base_url();?>images/banners/mugs_thumb.png" >
									</a>
									<a href="#">
										<h3 class="product_ttl">Mugs & Bottles</h3>
									</a>
								</div>

							</div>

							<div class="col-md-4 col-sm-12 col-xs-12">
								<div class="card card-primary text-center">
									<a href="#" class="bg-dark">
										<img class="img-responsive img_op" src="<?php echo base_url();?>images/banners/mob_case.png" >
									</a>
									<a href="#">
										<h3 class="product_ttl">Mobile Back Covers</h3>
									</a>
								</div>
							</div>

							<div class="col-md-4 col-sm-12 col-xs-12">
								<div class="card card-primary text-center">
									<a href="#" class="bg-dark">
										<img class="img-responsive img_op" src="<?php echo base_url();?>images/banners/tshirts_thumb.png">
									</a>
									<a href="#">
										<h3 class="product_ttl">Clothing & Fashion</h3>
									</a>
								</div>
							</div>
						</div>
						
						<!--<div class="row">
							<div class="col-md-4 col-sm-12 col-xs-12">
								<div class="card card-primary text-center">
									<a href="#" class="bg-dark">
										<img class="img-responsive img_op" src="<?php echo base_url();?>images/banners/roomtiles_thumb2.png" >
									</a>
									<a href="#">
										<h3 class="product_ttl"> Floor Tiles & Frames </h3>
									</a>
								</div>
							</div>

							<div class="col-md-4 col-sm-12 col-xs-12">
								<div class="card card-primary text-center">
									<a href="#" class="bg-dark">
										<img class="img-responsive img_op" src="<?php echo base_url();?>images/banners/plates_thmb.png" >
									</a>
									<a href="#">
										<h3 class="product_ttl"> Dinner Plates </h3>
									</a>
								</div>
							</div>

							<div class="col-md-4 col-sm-12 col-xs-12">
								<div class="card card-primary text-center">
									<a href="#" class="bg-dark">
										<img class="img-responsive img_op" src="<?php echo base_url();?>images/banners/cussions_cases_thumb.png" >
									</a>
									<a href="#">
										<h3 class="product_ttl"> Pillows & Cusions </h3>
									</a>
								</div>
							</div>
						</div>-->
					</div>
					<p>&nbsp;</p>
					
				</div>

				<div class="container">
					<p>&nbsp;</p>
					<h1 class="page-title" style="color:black;text-align:center;font-weight:bold;font-size:55px;"> Clearance Zone </h1>
					<h4 style="text-align:center;color:#000;font-family:Arial;font-weight:bold;margin-top:20px;">Starting at &#8377; 299! Till stock last, Hurry!</h4>
					<p style="text-align:center;margin-top:20px;"><a href="#" class="btn btn-primary">Shop Now</a></p>
					<p>&nbsp;</p>
				</div>

				<div class="container">
					<div class="row" >
						<div class="col-lg-6" style="padding:0px;margin:0px;text-align:left;">
							<a href="#"><img class="img-responsive img_op" src="<?php echo base_url();?>images/bewkoof/newbies-women-desktop-1542197289.jpg" style="width:99%;height:99%;"></a>
						</div>
						<div class="col-lg-6" style="padding:0px;margin:0px;text-align:right;">
							<img class="img-responsive img_op" src="<?php echo base_url();?>images/bewkoof/newbies-men-desktop-1542286203.jpg" style="width:99%;height:99%;">
						</div>
					</div>
				</div>
				<div class="container" style="padding-top:5px;">
					<div class="row">
						<div class="col-lg-4" style="padding:0px;margin:0px;text-align:left;">
							<img class="img-responsive img_op" src="<?php echo base_url();?>images/homebanner/46479680_2217977711820999_4911953203634896896_n.jpg" style="width:99%;height:99%;">
						</div>
						<div class="col-lg-8" style="padding:0px;margin:0px;text-align:right;">
							<img class="img-responsive img_op" src="<?php echo base_url();?>images/homebanner/promo-5_765x.jpg" style="width:99%;height:99%;">
						</div>
					</div>
				</div>

				<div class="container" style="padding-top:5px;">
					<div class="row">
						<div class="col-lg-6" style="padding:0px;text-align:center;text-align:left;">
							<img class="img-responsive img_op" src="<?php echo base_url();?>images/homebanner/3banner_565x.jpg" style="width:99%;height:99%;">
						</div>
						<div class="col-lg-6" style="padding:0px;text-align:center;text-align:right;">
							<img class="img-responsive img_op" src="<?php echo base_url();?>images/homebanner/4banner_565x.jpg" style="width:99%;height:99%;">
						</div>
					</div>
				</div>

				<div class="container" style="padding-top:5px;">
					<div class="row">
						<div class="col-lg-8" style="padding:0px;margin:0px;text-align:left;">
							<img class="img-responsive img_op" src="<?php echo base_url();?>images/homebanner/6banner_758x.jpg" style="width:99%;height:99%;">
						</div>
						<div class="col-lg-4" style="padding:0px;margin:0px;text-align:right;">
							<img class="img-responsive img_op" src="<?php echo base_url();?>images/homebanner/5banner_573x.jpg" style="width:99%;height:99%;">
						</div>
					</div>
				</div>

				<div class="container" style="padding-top:5px;">
					<div class="row">
						<div class="col-lg-6" style="padding:0px;text-align:center;text-align:left;">
							<img class="img-responsive img_op" src="<?php echo base_url();?>images/homebanner/mug-004.jpg" style="width:99%;height:99%;">
						</div>
						<div class="col-lg-6" style="padding:0px;text-align:center;text-align:right;">
							<img class="img-responsive img_op" src="<?php echo base_url();?>images/bewkoof/mobile-covers-desktop-box-1542286246.jpg" style="width:99%;height:99%;">
						</div>
					</div>
				</div>
				
				<div class="container">
					<p>&nbsp;</p>
					<h1 class="page-title" style="color:black;text-align:center;font-weight:bold;font-size:55px;"> Innovation </h1>
					<h4 style="text-align:center;color:#000;font-family:Arial;font-weight:bold;margin-top:20px;">Hum online pe bhi aur apke pass wale retail store pe bhi.</h4>
					<p>&nbsp;</p>
				</div>

				<!--<div class="container" style="padding-top:3px;">
					<div class="row">
						<div class="col-lg-4">
							<img class="img-responsive img_op" src="<?php echo base_url();?>images/bewkoof/half-sleeve-desktop-1542879653.jpg" >
						</div>
						<div class="col-lg-4">
							<img class="img-responsive img_op" src="<?php echo base_url();?>images/bewkoof/boyfriend-tshrt-desktop-1542879664.jpg" >
						</div>
						<div class="col-lg-4">
							<img class="img-responsive img_op" src="<?php echo base_url();?>images/bewkoof/full-sleeve-desktop-1542197374.jpg" >
						</div>
					</div>
					<p>&nbsp;</p>
				</div>-->

				<div class="container" style="padding-top:3px;">
					<div class="row">
						<div class="col-md-4 col-sm-12">
							<div class="card text-white bg-danger">
								<div class="card-body">
									<p class="card-text" style="font-size:30px;"><i class="fas fa-truck" style="font-size:50px;"></i> &nbsp; FREE Delivery</p>
								</div>
							</div>
						</div>
						
						<div class="col-md-4 col-sm-12">
							<div class="card text-white bg-danger">
								<div class="card-body">
									<p class="card-text"style="font-size:30px;"><i class="fas fa-rupee-sign" style="font-size:50px;"></i> &nbsp;Cash On Delivery</p>
								</div>
							</div>
						</div>

						<div class="col-md-4 col-sm-12">
							<div class="card text-white bg-danger">
								<div class="card-body">
									<p class="card-text"style="font-size:30px;"><i class="fas fa-undo" style="font-size:50px;"></i> &nbsp;Easy returns</p>
								</div>
							</div>
						</div>
					</div>
					<p>&nbsp;</p>
				</div>

<?php
$this->load->view("common/footer");
?>
				<script src="<?php echo base_url();?>js/slick.js"></script>
				<script src="<?php echo base_url();?>js/timeline.min.js"></script>
				<script>
					timeline(document.querySelectorAll('.timeline'), {
						forceVerticalMode: 700,
						mode: 'vertical',
						verticalStartPosition: 'left',
						visibleItems: 4
					});

					$(document).ready(function(){
						$('.customer-logos').slick({
							slidesToShow: 6,
							slidesToScroll: 1,
							autoplay: true,
							autoplaySpeed: 1500,
							arrows: false,
							dots: false,
							pauseOnHover: false,
							responsive: [{
								breakpoint: 768,
								settings: {
									slidesToShow: 4
								}
							}, {
								breakpoint: 520,
								settings: {
									slidesToShow: 3
								}
							}]
						});
					});
				</script>
	</body>
</html>