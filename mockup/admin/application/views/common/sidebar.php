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
                           <a href="javascript:void(0);" data-toggle="collapse" class="sidebar_header_uppercase collapsible <?php echo(($this->uri->segment(1) == 'listing_dealers' || $this->uri->segment(1) == 'listing_vendors' ||$this->uri->segment(1) == 'listing_customers' || $this->uri->segment(1) == 'listing_eazycrew' || $this->uri->segment(1) == 'add_dealer' || $this->uri->segment(1) == 'edit_dealer' || $this->uri->segment(1) == 'add_vendor' || $this->uri->segment(1) == 'listing_vendors' || $this->uri->segment(1) == 'edit_vendors' || $this->uri->segment(1) == 'add_customer' || $this->uri->segment(1) == 'edit_customers' || $this->uri->segment(1) == 'add_eazycrew' || $this->uri->segment(1) == 'edit_eazycrew')?'header-active':'');?>" data-target="#contacts"> Contacts </a>
                        </li>
						<div id="contacts" class="collapse <?php echo(($this->uri->segment(1) == 'listing_dealers' || $this->uri->segment(1) == 'listing_vendors' ||$this->uri->segment(1) == 'listing_customers' || $this->uri->segment(1) == 'listing_eazycrew' || $this->uri->segment(1) == 'add_dealer' || $this->uri->segment(1) == 'edit_dealer' || $this->uri->segment(1) == 'add_vendor' ||  $this->uri->segment(1) == 'listing_vendors' || $this->uri->segment(1) == 'edit_vendors' || $this->uri->segment(1) == 'add_customer' || $this->uri->segment(1) == 'listing_customers' || $this->uri->segment(1) == 'edit_customers' || $this->uri->segment(1) == 'add_eazycrew')?'show':'');?>">
							<li class="slide">
								<a class="side-menu__item <?php echo(($this->uri->segment(1) == 'add_dealer' || $this->uri->segment(1) == 'edit_dealer' || $this->uri->segment(1) == 'listing_dealers')?'active_sidebar_submenu':'');?>" href="<?php echo base_url('listing_dealers');?>"><span class="side-menu__label"> Dealers </span></a>
							</li>
							<li class="slide">
								<a class="side-menu__item  <?php echo(($this->uri->segment(1) == 'add_vendor' || $this->uri->segment(1) == 'edit_vendors' || $this->uri->segment(1) == 'listing_vendors')?'active_sidebar_submenu':'');?>" href="<?php echo base_url('listing_vendors');?>"><span class="side-menu__label"> Vendors </span></a>
							</li>
							<li class="slide">
								<a class="side-menu__item  <?php echo(($this->uri->segment(1) == 'add_customer' || $this->uri->segment(1) == 'edit_customers' || $this->uri->segment(1) == 'listing_customers')?'active_sidebar_submenu':'');?>" href="<?php echo base_url('listing_customers');?>"><span class="side-menu__label"> Customers </span></a>
							</li>
							<li class="slide">
								<a class="side-menu__item  <?php echo(($this->uri->segment(1) == 'add_eazycrew' || $this->uri->segment(1) == 'edit_eazycrew' || $this->uri->segment(1) == 'listing_eazycrew')?'active_sidebar_submenu':'');?>" href="<?php echo base_url('listing_eazycrew');?>"><span class="side-menu__label"> Eazycrew </span></a>
							</li>
						</div>
						<!-- Contacts ENDS -->

						<!-- Raw material Information Starts-->
						<li class="sidebar_header">
                           <a href="javascript:void(0);" data-toggle="collapse" class="sidebar_header_uppercase collapsible <?php echo(($this->uri->segment(1) == 'add_mobile_case' || $this->uri->segment(1) == 'listing_mobile_case' ||$this->uri->segment(1) == 'edit_mobile_case' || $this->uri->segment(1) == 'add_tshirt' || $this->uri->segment(1) == 'listing_tshirt' || $this->uri->segment(1) == 'edit_tshirt' || $this->uri->segment(1) == 'add_mug' || $this->uri->segment(1) == 'listing_mug' || $this->uri->segment(1) == 'edit_mug')?'header-active':'');?>" data-target="#rawmaterials">Raw Materials</a>
                        </li>
						<div id="rawmaterials" class="collapse <?php echo(($this->uri->segment(1) == 'add_mobile_case' || $this->uri->segment(1) == 'listing_mobile_case' ||$this->uri->segment(1) == 'edit_mobile_case' || $this->uri->segment(1) == 'add_tshirt' || $this->uri->segment(1) == 'listing_tshirt' || $this->uri->segment(1) == 'edit_tshirt' || $this->uri->segment(1) == 'add_mug' || $this->uri->segment(1) == 'listing_mug' || $this->uri->segment(1) == 'edit_mug')?'show':'');?>">
							<li class="slide">
								<a class="side-menu__item" href="<?php echo base_url('listing_tshirt');?>"><span class="side-menu__label"> T-Shirt </span></a>
							</li>

							<li class="slide">
								<a class="side-menu__item" href="<?php echo base_url('listing_mobile_case');?>"><span class="side-menu__label"> Mobile Cases </span></a>
							</li>

							<li class="slide">
								<a class="side-menu__item" href="<?php echo base_url('listing_mug');?>"><span class="side-menu__label"> Coffee Mugs </span></a>
							</li>
						</div>
						<!-- Raw material Information Ends -->
					

						<!-- product starts -->
						<li class="sidebar_header">
							<a class="sidebar_header_uppercase <?php echo(($this->uri->segment(1) == 'listing_product')?'active':'');?>" href="<?php echo base_url('listing_product');?>">Products</a>
						</li>
						<!-- product ends -->
						

						<!-- Orders Starts -->
						<li class="sidebar_header">
                           <a href="javascript:void(0);" data-toggle="collapse" class="sidebar_header_uppercase collapsible <?php echo(($this->uri->segment(1) == 'pending_orders' || $this->uri->segment(1) == 'processing_orders')?'header-active':'');?>" data-target="#orderz">Orders</a>
                        </li>
						<div id="orderz" class="collapse <?php echo(($this->uri->segment(1) == 'pending_orders' || $this->uri->segment(1) == 'processing_orders')?'show':'');?>">
							<li class="slide">
								<a class="side-menu__item <?php echo(($this->uri->segment(1) == 'add_order')?'active_sidebar_submenu':'');?>"  href="<?php echo base_url('add_order');?>">Add Orders</a>
							</li>
							<li class="slide">
								<a class="side-menu__item <?php echo(($this->uri->segment(1) == 'pending_orders')?'active_sidebar_submenu':'');?>"  href="<?php echo base_url('pending_orders');?>">Pending Orders</a>
							</li>
							<li class="slide">
								<a class="side-menu__item <?php echo(($this->uri->segment(1) == 'processing_orders')?'active_sidebar_submenu':'');?>"  href="<?php echo base_url('processing_orders');?>">Processing Orders</a>
							</li>
						</div>
						<!-- Orders Ends -->

						<!-- Transactions Starts -->
						<li class="sidebar_header">
                           <a href="javascript:void(0);" data-toggle="collapse" class="sidebar_header_uppercase collapsible <?php echo(($this->uri->segment(1) == 'add_sale_order' || $this->uri->segment(1) == 'add_purchase_order')?'header-active':'');?>" data-target="#transaction">Transactions</a>
                        </li>
						<div id="transaction" class="collapse <?php echo(($this->uri->segment(1) == 'add_sale_order' || $this->uri->segment(1) == 'add_purchase_order')?'show':'');?>">
							<li class="slide">
								<a class="side-menu__item <?php echo(($this->uri->segment(1) == 'add_sale_order')?'active_sidebar_submenu':'');?>"  href="<?php echo base_url('add_sale_order');?>">
									Sale Invoice
								</a>
							</li>
							<li class="slide">
								<a class="side-menu__item <?php echo(($this->uri->segment(1) == 'add_purchase_order')?'active_sidebar_submenu':'');?>"  href="<?php echo base_url('add_purchase_order');?>">Purchase Invoice
								</a>
							</li>
							<li class="slide">
								<a class="side-menu__item <?php echo(($this->uri->segment(1) == 'add_report')?'active_sidebar_submenu':'');?>"  href="<?php echo base_url('add_report');?>">Report
								</a>
							</li>
							<li class="slide">
								<a class="side-menu__item <?php echo(($this->uri->segment(1) == 'transaction_history')?'active_sidebar_submenu':'');?>"  href="<?php echo base_url('transaction_history');?>">Transaction History
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
								<a class="side-menu__item <?php echo(($this->uri->segment(1) == 'admin_listing_coupon')?'active_sidebar_submenu':'');?>"  href="<?php echo base_url('admin_listing_coupon');?>">Discount Coupons
								</a>
							</li>
							<li class="slide">
								<a class="side-menu__item <?php echo(($this->uri->segment(1) == 'admin_listing_offer')?'active_sidebar_submenu':'');?>"  href="<?php echo base_url('admin_listing_offer');?>">Promotional Offers
								</a>
							</li>
						</div>
						<!-- Deals ENDS -->

						<!-- Settings STARTS -->
						<li class="sidebar_header">
                           <a href="javascript:void(0);" data-toggle="collapse" class="sidebar_header_uppercase collapsible <?php echo(($this->uri->segment(1) == 'account_gst_info' || $this->uri->segment(1) == 'admin_setting' || $this->uri->segment(1) == 'dealer_change_password')?'header-active':'');?>" data-target="#settingzz">Settings</a>
                        </li>
						<div id="settingzz" class="collapse <?php echo(($this->uri->segment(1) == 'account_gst_info' || $this->uri->segment(1) == 'admin_setting' || $this->uri->segment(1) == 'dealer_change_password')?'show':'');?>">
							<li class="slide">
								<a class="side-menu__item <?php echo(($this->uri->segment(1) == 'account_gst_info')?'active_sidebar_submenu':'');?>"  href="<?php echo base_url('account_gst_info');?>">GST Settings
								</a>
							</li>
							<li class="slide">
								<a class="side-menu__item <?php echo(($this->uri->segment(1) == 'admin_setting')?'active_sidebar_submenu':'');?>"  href="<?php echo base_url('admin_setting');?>">Company Info
								</a>
							</li>
							<li class="slide">
								<a class="side-menu__item <?php echo(($this->uri->segment(1) == 'change_password')?'active_sidebar_submenu':'');?>"  href="<?php echo base_url('change_password');?>">Change Password
								</a>
							</li>
						</div>
						<!-- Settings ENDS -->

					</ul>
				</aside>