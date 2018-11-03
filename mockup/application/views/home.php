
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
								<img class="first-slide" src="<?php echo base_url();?>images/banners/slide_mobcase.png" alt="First slide" class="img-responsive" >
								<div class="container">
								  <div class="carousel-caption text-left">
									<!--<h1>Example headline.</h1>
									<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
									<p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>-->
								  </div>
								</div>
							  </div>
							  <div class="carousel-item">
								<img class="second-slide" src="<?php echo base_url();?>images/banners/tshirt_slide.png" alt="Second slide" class="img-responsive" >
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
						<h1 class="page-title" style="text-align:center;font-size:26px;"> Wide Range of Categories </h1>
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
						
						<div class="row">
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
						</div>

					
						
						<p>&nbsp;</p>
						<!--<h1 class="page-title" style="text-align:center;font-size:26px;"> About Us </h1>
						<p>&nbsp;</p>

						<div class="">
							<div class="card">
								<div class="row">
									<div class="col-md-12 col-lg-6 pr-0 d-none d-lg-block">
										<img src="<?php echo base_url();?>images/banners/20861947_1457996564281005_7190183760002547666_o.jpg" alt="img" class="br-tl-3 ">
									</div>
									<div class="col-md-12 col-lg-6  pl-0 ">
										<div class="card-body p-6 about-con pabout">
											<h2 class="mb-4 font-weight-semibold">What we are doing?</h2>
											<h4 class="leading-normal">majority have suffered alteration in some form, by injected humour</h4>
											<p class="leading-normal">There are many variations of passages of Lorem Ipsum available, but the majority have suffered  by injected humour, or randomised words which don't look even slightly believable.
											If you are going to use a passage of Lorem Ipsum, you need to as necessary</p>
										</div>
									</div>
									<div class="col-md-12 col-lg-6  pr-0 ">
										<div class="card-body p-6 pabout">
											<h2 class="mb-4 font-weight-semibold">Why eazyprint?</h2>
											<h4 class="leading-normal">majority have suffered alteration in some form, by injected humour</h4>
											<p class="leading-normal">There are many variations of passages of Lorem Ipsum available, but the majority have suffered  by injected humour, or randomised words which don't look even slightly believable.
											If you are going to use a passage of Lorem Ipsum, you need to as necessary</p>
										</div>
									</div>
									<div class="col-md-12 col-lg-6 pl-0 d-none d-lg-block">
										<img src="<?php echo base_url();?>images/banners/what_we_do2.png" alt="img" class=" br-br-3">
									</div>
								</div>
							</div>
						</div>
						
						<p>&nbsp;</p>
						<h1 class="page-title" style="text-align:center;font-size:26px;"> How it works </h1>

						<div class="row">
							<div class="col-md-12">
								<div class="">
									<div class="card-body p-6">
										<div class="timeline">
											<div class="timeline__wrap">
												<div class="timeline__items">
													<div class="timeline__item">
														<div class="timeline__content card">
															<div class="card-status bg-teal br-tr-3 br-tl-3"></div>
															<h2>Choose / Design</h2>
															<p>Design yourself or choose premade designs by designers</p>
														</div>
													</div>

													<div class="timeline__item">
														<div class="timeline__content card ">
														<div class="card-status bg-purple br-tr-3 br-tl-3"></div>
															<h2>Place Your Order</h2>
															<p>Directly online / dealer outlet stores.</p>
														</div>
													</div>
													<div class="timeline__item">
														<div class="timeline__content card">
															<div class="card-status bg-yellow br-tr-3 br-tl-3"></div>
															<h2>Order Processing</h2>
															<p>Order processed by supplier based on price and location.</p>
														</div>
													</div>
													<div class="timeline__item">
														<div class="timeline__content card">
															<div class="card-status bg-blue br-tr-3 br-tl-3"></div>
															<h2>Delivery</h2>
															<p>Logistics take product from supplier and deliver to your doorsteps.</p>
														</div>
													</div>
													

			
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>-->

						<!--- how it works -->

						<!--<div class="container">
						  <h2>Our  Partners</h2>
						   <section class="customer-logos slider">
							  <div class="slide"><img src="https://image.freepik.com/free-vector/luxury-letter-e-logo-design_1017-8903.jpg"></div>
							  <div class="slide"><img src="https://image.freepik.com/free-vector/3d-box-logo_1103-876.jpg"></div>
							  <div class="slide"><img src="https://image.freepik.com/free-vector/blue-tech-logo_1103-822.jpg"></div>
							  <div class="slide"><img src="https://image.freepik.com/free-vector/colors-curl-logo-template_23-2147536125.jpg"></div>
							  <div class="slide"><img src="https://image.freepik.com/free-vector/abstract-cross-logo_23-2147536124.jpg"></div>
							  <div class="slide"><img src="https://image.freepik.com/free-vector/football-logo-background_1195-244.jpg"></div>
							  <div class="slide"><img src="https://image.freepik.com/free-vector/background-of-spots-halftone_1035-3847.jpg"></div>
							  <div class="slide"><img src="https://image.freepik.com/free-vector/retro-label-on-rustic-background_82147503374.jpg"></div>
						   </section>
						</div>-->
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