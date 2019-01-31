<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
				<aside class="app-sidebar">
					
					<ul class="side-menu">
						<!-- Dashboard STARTS -->
						<li class="sidebar_header">
							<a class="sidebar_header_uppercase <?php echo(($this->uri->segment(1) == 'admin_dashboard')?'active':'');?>" href="<?php echo base_url('admin_dashboard');?>">Dashboard</a>
						</li>
						<!-- Dashboard Ends -->
					
						<!-- Contacts STARTS -->
						<li class="sidebar_header">
                           <a href="javascript:void(0);" data-toggle="collapse" class="sidebar_header_uppercase collapsible" data-target="#contacts"> Contacts </a>
                        </li>
						<div id="contacts" class="collapse <?php echo(($this->uri->segment(1) == 'admin_add_coupon' || $this->uri->segment(1) == 'admin_listing_coupon' ||$this->uri->segment(1) == 'admin_edit_coupon' || $this->uri->segment(1) == 'admin_add_offer' || $this->uri->segment(1) == 'admin_listing_offer' ||$this->uri->segment(1) == 'admin_edit_offer')?'show':'');?>">
							<li class="slide">
								<a class="side-menu__item" data-toggle="slide" href="<?php echo base_url('admin_listing_coupon');?>"><i class="fas fa-calendar-check" style="padding-right:5px;"></i><span class="side-menu__label"> Dealers </span></a>
							</li>
							<li class="slide">
								<a class="side-menu__item" data-toggle="slide" href="<?php echo base_url('admin_listing_offer');?>"><i class="fas fa-calendar-check" style="padding-right:5px;"></i><span class="side-menu__label"> Vendors </span></a>
							</li>
							<li class="slide">
								<a class="side-menu__item" data-toggle="slide" href="<?php echo base_url('admin_listing_offer');?>"><i class="fas fa-calendar-check" style="padding-right:5px;"></i><span class="side-menu__label"> Customers </span></a>
							</li>
							<li class="slide">
								<a class="side-menu__item" data-toggle="slide" href="<?php echo base_url('admin_listing_crew');?>"><i class="fas fa-calendar-check" style="padding-right:5px;"></i><span class="side-menu__label"> Eazycrew </span></a>
							</li>
						</div>
						<!-- Contacts ENDS -->

						<!-- Raw material Information Starts-->
						<li class="sidebar_header">
                           <a href="javascript:void(0);" data-toggle="collapse" class="sidebar_header_uppercase collapsible <?php echo(($this->uri->segment(1) == 'admin_add_mobile_case' || $this->uri->segment(1) == 'admin_listing_mobile_case' ||$this->uri->segment(1) == 'admin_edit_mobile_case' || $this->uri->segment(1) == 'admin_add_product' || $this->uri->segment(1) == 'admin_listing_product' || $this->uri->segment(1) == 'admin_edit_product' || $this->uri->segment(1) == 'admin_add_tshirt' || $this->uri->segment(1) == 'admin_listing_tshirt' || $this->uri->segment(1) == 'admin_edit_tshirt' || $this->uri->segment(1) == 'admin_add_mug' || $this->uri->segment(1) == 'admin_listing_mug' || $this->uri->segment(1) == 'admin_edit_mug')?'header-active':'');?>" data-target="#rawmaterials">Raw Materials</a>
                        </li>
						<div id="rawmaterials" class="collapse <?php echo(($this->uri->segment(1) == 'admin_add_mobile_case' || $this->uri->segment(1) == 'admin_listing_mobile_case' ||$this->uri->segment(1) == 'admin_edit_mobile_case' || $this->uri->segment(1) == 'admin_add_product' || $this->uri->segment(1) == 'admin_listing_product' || $this->uri->segment(1) == 'admin_edit_product' || $this->uri->segment(1) == 'admin_add_tshirt' || $this->uri->segment(1) == 'admin_listing_tshirt' || $this->uri->segment(1) == 'admin_edit_tshirt' || $this->uri->segment(1) == 'admin_add_mug' || $this->uri->segment(1) == 'admin_listing_mug' || $this->uri->segment(1) == 'admin_edit_mug')?'show':'');?>">

							<li class="slide <?php echo(($this->uri->segment(1) == 'admin_add_mobile_case' || $this->uri->segment(1) == 'admin_listing_mobile_case' ||$this->uri->segment(1) == 'admin_edit_mobile_case')?'is-expanded':'');?>">
								<a class="side-menu__item <?php echo(($this->uri->segment(1) == 'admin_add_mobile_case' || $this->uri->segment(1) == 'admin_listing_mobile_case' ||$this->uri->segment(1) == 'admin_edit_mobile_case')?'active':'');?>" data-toggle="slide" href="#"><i class="fas fa-mobile-alt" style="padding-right:5px;"></i><span class="side-menu__label">Mobile Cases</span><i class="angle fas fa-angle-right"></i></a>
								<ul class="slide-menu">
									<li>
										<a href="<?php echo base_url('admin_add_mobile_case');?>" class="slide-item <?php echo(($this->uri->segment(1) == 'admin_add_mobile_case')?'active_sidebar_submenu':'');?>">Add Mobile Cases</a>
									</li>
									<li>
										<a href="<?php echo base_url('admin_listing_mobile_case');?>" class="slide-item <?php echo(($this->uri->segment(1) == 'admin_listing_mobile_case' ||$this->uri->segment(1) == 'admin_edit_mobile_case')?'active_sidebar_submenu':'');?>">View Mobile Cases</a>
									</li>
								</ul>
							</li>

							<li class="slide <?php echo(($this->uri->segment(1) == 'admin_add_tshirt' || $this->uri->segment(1) == 'admin_listing_tshirt' ||$this->uri->segment(1) == 'admin_edit_tshirt')?'is-expanded':'');?>">
								<a class="side-menu__item <?php echo(($this->uri->segment(1) == 'admin_add_tshirt' || $this->uri->segment(1) == 'admin_listing_tshirt' ||$this->uri->segment(1) == 'admin_edit_tshirt')?'active':'');?>" data-toggle="slide" href="#"><i class="fas fa-tshirt" style="padding-right:5px;"></i><span class="side-menu__label">T-Shirt</span><i class="angle fas fa-angle-right"></i></a>
								<ul class="slide-menu">
									<li>
										<a href="<?php echo base_url('admin_add_tshirt');?>" class="slide-item <?php echo(($this->uri->segment(1) == 'admin_add_tshirt')?'active_sidebar_submenu':'');?>">Add T-Shirt</a>
									</li>
									<li>
										<a href="<?php echo base_url('admin_listing_tshirt');?>" class="slide-item <?php echo(($this->uri->segment(1) == 'admin_listing_tshirt' ||$this->uri->segment(1) == 'admin_edit_tshirt')?'active_sidebar_submenu':'');?>">View T-Shirt</a>
									</li>
								</ul>
							</li>

							<li class="slide <?php echo(($this->uri->segment(1) == 'admin_add_mug' || $this->uri->segment(1) == 'admin_listing_mug' ||$this->uri->segment(1) == 'admin_edit_mug')?'is-expanded':'');?>">
								<a class="side-menu__item <?php echo(($this->uri->segment(1) == 'admin_add_mug' || $this->uri->segment(1) == 'admin_listing_mug' ||$this->uri->segment(1) == 'admin_edit_mug')?'active':'');?>" data-toggle="slide" href="#"><i class="fas fa-coffee" style="padding-right:5px;"></i><span class="side-menu__label">Coffee Mug</span><i class="angle fas fa-angle-right"></i></a>
								<ul class="slide-menu">
									<li>
										<a href="<?php echo base_url('admin_add_mug');?>" class="slide-item <?php echo(($this->uri->segment(1) == 'admin_add_mug')?'active_sidebar_submenu':'');?>">Add Coffee Mug</a>
									</li>
									<li>
										<a href="<?php echo base_url('admin_listing_mug');?>" class="slide-item <?php echo(($this->uri->segment(1) == 'admin_listing_mug' ||$this->uri->segment(1) == 'admin_edit_mug')?'active_sidebar_submenu':'');?>">View Coffee Mug</a>
									</li>
								</ul>
							</li>
						</div>
						<!-- Raw material Information Ends -->
					

						<!-- product starts -->
						<li class="sidebar_header">
                           <a href="javascript:void(0);" data-toggle="collapse" class="sidebar_header_uppercase collapsible" data-target="#products">Products</a>
                        </li>
						
						<div id="products" class="collapse <?php echo(($this->uri->segment(1) == 'admin_add_crew' || $this->uri->segment(1) == 'admin_listing_crew' ||$this->uri->segment(1) == 'admin_edit_crew')?'show':'');?>">
								<li class="slide">
									<a href="<?php echo base_url('admin_add_product');?>" class="side-menu__item <?php echo(($this->uri->segment(1) == 'admin_add_product')?'active_sidebar_submenu':'');?>">Add Product</a>
								</li>
								<li>
									<a href="<?php echo base_url('admin_listing_product');?>" class="side-menu__item <?php echo(($this->uri->segment(1) == 'admin_listing_product' ||$this->uri->segment(1) == 'admin_edit_product')?'active_sidebar_submenu':'');?>">View Products</a>
								</li>
						</div>
						<!-- product ends -->
						

						<!-- Orders Starts -->
						<li class="sidebar_header">
                           <a href="javascript:void(0);" data-toggle="collapse" class="sidebar_header_uppercase collapsible" data-target="#orderz">Orders</a>
                        </li>
						<div id="orderz" class="collapse">
							<li class="slide">
								<a class="side-menu__item"  href="<?php echo base_url('pending_orders');?>"><i class="fas fa-user-tie" style="padding-right:5px;"></i><span class="side-menu__label">View Orders</span></a>
							</li>
							<li class="slide">
								<a class="side-menu__item"  href="#"><i class="fas fa-user-tie" style="padding-right:5px;"></i><span class="side-menu__label">Add Orders</span></a>
							</li>
						</div>
						<!-- Orders Ends -->

						<!-- Transactions Starts -->
						<li class="sidebar_header">
                           <a href="javascript:void(0);" data-toggle="collapse" class="sidebar_header_uppercase collapsible" data-target="#transaction">Transactions</a>
                        </li>
						<div id="transaction" class="collapse">
							<li class="slide">
								<a class="side-menu__item"  href="<?php echo base_url('pending_orders');?>">
									<i class="fas fa-user-tie" style="padding-right:5px;"></i><span class="side-menu__label">Sell Invoice</span>
								</a>
							</li>
							<li class="slide">
								<a class="side-menu__item"  href="#">
									<i class="fas fa-user-tie" style="padding-right:5px;"></i><span class="side-menu__label">Purchase Invoice</span>
								</a>
							</li>
							<li class="slide">

								<a class="side-menu__item" data-toggle="slide" href="#"><i class="fas fa-clipboard-list" style="padding-right:5px;"></i><span class="side-menu__label"> Report</span></a>

								<a class="side-menu__item"  href="#">
									<i class="fas fa-user-tie" style="padding-right:5px;"></i><span class="side-menu__label">Transaction History</span>
								</a>

							</li>
						</div>
						<!-- Transactions Ends -->

						<!-- Deals STARTS -->
						<li class="sidebar_header">
                           <a href="javascript:void(0);" data-toggle="collapse" class="sidebar_header_uppercase collapsible <?php echo(($this->uri->segment(1) == 'admin_add_coupon' || $this->uri->segment(1) == 'admin_listing_coupon' ||$this->uri->segment(1) == 'admin_edit_coupon' || $this->uri->segment(1) == 'admin_add_offer' || $this->uri->segment(1) == 'admin_listing_offer' ||$this->uri->segment(1) == 'admin_edit_offer')?'header-active':'');?>" data-target="#dealz">Offers</a>
                        </li>
						<div id="dealz" class="collapse <?php echo(($this->uri->segment(1) == 'admin_add_coupon' || $this->uri->segment(1) == 'admin_listing_coupon' ||$this->uri->segment(1) == 'admin_edit_coupon' || $this->uri->segment(1) == 'admin_add_offer' || $this->uri->segment(1) == 'admin_listing_offer' ||$this->uri->segment(1) == 'admin_edit_offer')?'show':'');?>">
							<li class="slide">
								<a class="side-menu__item" data-toggle="slide" href="<?php echo base_url('admin_listing_coupon');?>"><i class="fas fa-calendar-check" style="padding-right:5px;"></i><span class="side-menu__label"> Discount Coupons</span></a>
							</li>
							<li class="slide">
								<a class="side-menu__item" data-toggle="slide" href="<?php echo base_url('admin_listing_offer');?>"><i class="fas fa-calendar-check" style="padding-right:5px;"></i><span class="side-menu__label"> Promotional Offers</span></a>
							</li>
						</div>
						<!-- Deals ENDS -->

						<!-- Settings STARTS -->
						<li class="sidebar_header">
                           <a href="javascript:void(0);" data-toggle="collapse" class="sidebar_header_uppercase collapsible <?php echo(($this->uri->segment(1) == 'admin_add_crew' || $this->uri->segment(1) == 'admin_listing_crew' ||$this->uri->segment(1) == 'admin_edit_crew')?'header-active':'');?>" data-target="#settings"> Settings </a>
                        </li>
						<div id="settings" class="collapse <?php echo(($this->uri->segment(1) == 'admin_add_crew' || $this->uri->segment(1) == 'admin_listing_crew' ||$this->uri->segment(1) == 'admin_edit_crew')?'show':'');?>">
							<li class="slide">
								<a class="side-menu__item <?php echo(($this->uri->segment(1) == 'dealer_gst_info')?'active':'');?>" href="<?php echo base_url('dealer_gst_info');?>"><i class="fas fa-cog" style="padding-right:5px;"></i><span class="side-menu__label">GST Settings</span></a>
							</li>
							<li class="slide">
								<a class="side-menu__item <?php echo(($this->uri->segment(1) == 'admin_setting')?'active':'');?>" href="<?php echo base_url('admin_setting');?>"><i class="fas fa-cog" style="padding-right:5px;"></i><span class="side-menu__label">Company Info</span></a>
							</li>

							<li class="slide">
								<a class="side-menu__item <?php echo(($this->uri->segment(1) == 'admin_setting')?'active':'');?>" href="<?php echo base_url('dealer_setting');?>"><i class="fas fa-cog" style="padding-right:5px;"></i><span class="side-menu__label">Profile</span></a>
							</li>
						</div>
						<!-- Settings STARTS -->
					</ul>
				</aside>