<?php

	session_start();

	if(!empty($_SESSION['id']))
	{
			$organizer_id = $_SESSION['id'];
	}
	else
	{
		header('Location: index.php');

	}


?>




<!DOCTYPE html>
<html dir="ltr" lang="en">

<!-- Mirrored from grandetest.com/theme/findhouse-html/page-add-new-property.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 01 Jun 2021 05:03:51 GMT -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" content="advanced search custom, agency, agent, business, clean, corporate, directory, google maps, homes, listing, membership packages, property, real estate, real estate agent, realestate agency, realtor">
<meta name="description" content="FindHouse - Real Estate HTML Template">
<meta name="CreativeLayers" content="ATFN">
<!-- css file -->
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/dashbord_navitaion.css">
<!-- Responsive stylesheet -->
<link rel="stylesheet" href="css/responsive.css">
<!-- Title -->
<title>FindHouse - Real Estate HTML Template</title>
<!-- Favicon -->
<link href="images/favicon.ico" sizes="128x128" rel="shortcut icon" type="image/x-icon" />
<link href="images/favicon.ico" sizes="128x128" rel="shortcut icon" />

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="wrapper">
	<div class="preloader"></div>
<!-- Main Header Nav -->
	<header class="header-nav menu_style_home_one style2 menu-fixed main-menu">
		<div class="container-fluid p0">
		    <!-- Ace Responsive Menu -->
		    <nav>
		        <!-- Menu Toggle btn-->
		        <div class="menu-toggle">
		            <img class="nav_logo_img img-fluid" src="images/header-logo.png" alt="header-logo.png">
		            <button type="button" id="menu-btn">
		                <span class="icon-bar"></span>
		                <span class="icon-bar"></span>
		                <span class="icon-bar"></span>
		            </button>
		        </div>
		        <a href="#" class="navbar_brand float-left dn-smd">
		            <img class="logo1 img-fluid" src="images/header-logo2.png" alt="header-logo.png">
		            <img class="logo2 img-fluid" src="images/header-logo2.png" alt="header-logo2.png">
		            <span>FindHouse</span>
		        </a>
		       
		        <ul id="respMenu" class="ace-responsive-menu text-right" data-menu-style="horizontal">
		            <li>
		                <a href="#"><span class="title">Dashboard</span></a>
		               
		                
		            </li>
		          
		         
		           
		          
	         
			        </li>
	                <li class="list-inline-item add_listing"><a href="garage_create.php"><span class="flaticon-plus"></span><span class="dn-lg"> Create Listing</span></a></li>
		        </ul>
		    </nav>
		</div>
	</header>

	<!-- Main Header Nav For Mobile -->
	<div id="page" class="stylehome1 h0">
		<div class="mobile-menu">
			<div class="header stylehome1">
				<div class="main_logo_home2 text-center">
		            <img class="nav_logo_img img-fluid mt20" src="images/header-logo2.png" alt="header-logo2.png">
		            <span class="mt20">FindHouse</span>
				</div>
				<ul class="menu_bar_home2">
	                <li class="list-inline-item list_s"><a href="page-register.html"><span class="flaticon-user"></span></a></li>
					<li class="list-inline-item"><a href="#menu"><span></span></a></li>
				</ul>
			</div>
		</div><!-- /.mobile-menu -->
		<nav id="menu" class="stylehome1">
			<ul>
				<li><span>Home</span>
	                <ul>
	                    <li><a href="index.html">Home 1</a></li>
	                    <li><a href="index2.html">Home 2</a></li>
	                    <li><a href="index3.html">Home 3</a></li>
	                    <li><a href="index4.html">Home 4</a></li>
	                    <li><a href="index5.html">Home 5</a></li>
	                    <li><a href="index6.html">Home 6</a></li>
	                    <li><a href="index7.html">Home 7</a></li>
	                    <li><a href="index8.html">Home 8</a></li>
	                    <li><a href="index9.html">Home 9</a></li>
	                    <li><a href="index10.html">Home 10</a></li>
	                </ul>
				</li>
				<li><span>Listing</span>
					<ul>
						<li><span>Listing Grid</span>
							<ul>
	                            <li><a href="page-listing-grid-v1.html">Grid v1</a></li>
	                            <li><a href="page-listing-grid-v2.html">Grid v2</a></li>
	                            <li><a href="page-listing-grid-v3.html">Grid v3</a></li>
	                            <li><a href="page-listing-grid-v4.html">Grid v4</a></li>
	                            <li><a href="page-listing-grid-v5.html">Grid v5</a></li>
	                            <li><a href="page-listing-full-width-grid.html">Grid Fullwidth</a></li>
							</ul>
						</li>
						<li><span>Listing Style</span>
							<ul>
	                            <li><a href="page-listing-parallax.html">Parallax Style</a></li>
	                            <li><a href="page-listing-slider.html">Slider Style</a></li>
	                            <li><a href="page-listing-map.html">Map Header</a></li>
							</ul>
						</li>
						<li><span>Listing Half</span>
							<ul>
	                            <li><a href="page-listing-half-map-v1.html">Map V1</a></li>
	                            <li><a href="page-listing-half-map-v2.html">Map V2</a></li>
	                            <li><a href="page-listing-half-map-v3.html">Map V3</a></li>
	                            <li><a href="page-listing-half-map-v4.html">Map V4</a></li>
							</ul>
						</li>
						<li><span>Agent View</span>
							<ul>
	                            <li><a href="page-listing-agent-v1.html">Agent V1</a></li>
	                            <li><a href="page-listing-agent-v2.html">Agent V2</a></li>
	                            <li><a href="page-listing-agent-v3.html">Agent Details</a></li>
							</ul>
						</li>
						<li><span>Agencies View</span>
							<ul>
	                            <li><a href="page-agencies-list-v1.html">Agencies V1</a></li>
	                            <li><a href="page-agencies-list-v2.html">Agencies V2</a></li>
	                            <li><a href="page-agencies-list-v3.html">Agencies Details</a></li>
							</ul>
						</li>
					</ul>
				</li>
				<li><span>Property</span>
					<ul>
						<li><span>Property</span>
							<ul>
					            <li><a href="page-dashboard.html">Dashboard</a></li>
			                    <li><a href="page-my-properties.html">My Properties</a></li>
			                    <li><a href="page-add-new-property.html">Add New Property</a></li>
							</ul>
						</li>
						<li><span>Listing Single</span>
							<ul>
	                            <li><a href="page-listing-single-v1.html">Single V1</a></li>
	                            <li><a href="page-listing-single-v2.html">Single V2</a></li>
	                            <li><a href="page-listing-single-v3.html">Single V3</a></li>
	                            <li><a href="page-listing-single-v4.html">Single V4</a></li>
	                            <li><a href="page-listing-single-v5.html">Single V5</a></li>
							</ul>
						</li>
					</ul>
				</li>
				<li><span>Blog</span>
					<ul>
	                    <li><a href="page-blog-v1.html">Blog List 1</a></li>
	                    <li><a href="page-blog-grid.html">Blog List 2</a></li>
	                    <li><a href="page-blog-single.html">Single Post</a></li>
					</ul>
				</li>
				<li><span>Pages</span>
					<ul>
						<li><span>Shop</span>
							<ul>
			                    <li><a href="page-shop.html">Shop</a></li>
			                    <li><a href="page-shop-single.html">Shop Single</a></li>
			                    <li><a href="page-shop-cart.html">Cart</a></li>
			                    <li><a href="page-shop-checkout.html">Checkout</a></li>
			                    <li><a href="page-shop-order.html">Order</a></li>
							</ul>
						</li>
		                <li><a href="page-about.html">About Us</a></li>
		                <li><a href="page-gallery.html">Gallery</a></li>
		                <li><a href="page-faq.html">Faq</a></li>
		                <li><a href="page-login.html">LogIn</a></li>
		                <li><a href="page-compare.html">Membership</a></li>
		                <li><a href="page-compare2.html">Membership 2</a></li>
	                    <li><a href="page-register.html">Register</a></li>
	                    <li><a href="page-service.html">Service</a></li>
		                <li><a href="page-error.html">404 Page</a></li>
		                <li><a href="page-terms.html">Terms and Conditions</a></li>
		                <li><a href="page-ui-element.html">UI Elements</a></li>
					</ul>
				</li>
				<li><a href="page-contact.html">Contact</a></li>
				<li><a href="page-login.html"><span class="flaticon-user"></span> Login</a></li>
				<li><a href="page-register.html"><span class="flaticon-edit"></span> Register</a></li>
				<li class="cl_btn"><a class="btn btn-block btn-lg btn-thm circle" href="#"><span class="flaticon-plus"></span> Create Listing</a></li>
			</ul>
		</nav>
	</div>
 <div class="dashboard_sidebar_menu dn-992">
	    <ul class="sidebar-menu">
	   		<li class="header"><img src="images/header-logo2.png" alt="header-logo2.png"> FindHouse</li>
	   		<li class="title"><span>Main</span></li>
	    	<li class="treeview"><a href="dashboard.php"><i class="flaticon-layers"></i><span> Dashboard</span></a>
	   		<li class="title"><span>Manage Listings</span></li>
	      	<li class="treeview">
		        <a href="page-my-properties.html"><i class="flaticon-home"></i> <span>My Garage</span><i class="fa fa-angle-down pull-right"></i></a>
		        <ul class="treeview-menu">
		        	<li><a href="garage_create.php"><i class="fa fa-circle"></i> Create</a></li>
		        	<li><a href="garage_list.php"><i class="fa fa-circle"></i> List</a></li>
		        	
		        </ul>
	      	</li>
	      
	   
	   		
		    <li><a href="page-my-profile.html"><i class="flaticon-user"></i> <span>My Profile</span></a></li>
		    <li><a href="page-login.html"><i class="flaticon-logout"></i> <span>Logout</span></a></li>
	    </ul>
    </div>

	<!-- Our Dashbord -->
	<section class="our-dashbord dashbord bgc-f7 pb50">
		<div class="container-fluid ovh">
			<div class="row">
				<div class="col-lg-3 col-xl-2 dn-992 pl0"></div>
				<div class="col-lg-9 col-xl-10 maxw100flex-992">
					<div class="row">
						<div class="col-lg-12">
							<div class="dashboard_navigationbar dn db-992">
								<div class="dropdown">
									<button onclick="myFunction()" class="dropbtn"><i class="fa fa-bars pr10"></i> Dashboard Navigation</button>
									<ul id="myDropdown" class="dropdown-content">
										<li><a href="page-dashboard.html"><span class="flaticon-layers"></span> Dashboard</a></li>
										<li><a href="page-message.html"><span class="flaticon-envelope"></span> Message</a></li>
										<li><a href="page-my-properties.html"><span class="flaticon-home"></span> My Properties</a></li>
										<li><a href="page-my-favorites.html"><span class="flaticon-heart"></span> My Favorites</a></li>
										<li><a href="page-my-savesearch.html"><span class="flaticon-magnifying-glass"></span> Saved Search</a></li>
										<li><a href="page-my-review.html"><span class="flaticon-chat"></span> My Reviews</a></li>
										<li><a href="page-my-packages.html"><span class="flaticon-box"></span> My Package</a></li>
										<li><a href="page-my-profile.html"><span class="flaticon-user"></span> My Profile</a></li>
										<li class="active"><a href="page-add-new-property.html"><span class="flaticon-filter-results-button"></span> Add New Listing</a></li>
										<li><a href="page-login.html"><span class="flaticon-logout"></span> Logout</a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-lg-12 mb10">
							<div class="breadcrumb_content style2">
								<h2 class="breadcrumb_title">Add New Garage Information</h2>
								<p>We are glad to see you again!</p>
							</div>
						</div>

						<div  class="col-lg-12">
								<div class="my_dashboard_review">
										<?php

										if(isset($_GET['msg']))
										{
									?>
											 <div class="alert alert-success alert-dismissible" style="height: 50px;">
							            <button type="button" class="close" data-dismiss="alert">&times;</button>
							              Information Stored Succesfully!
							          </div>
										
									<?php 
										}


									?>
									

									<form method="POST" action="action.php">
										<input type="hidden" class="form-control" name="organizer_id" value="<?= $organizer_id ?>">

										<div class="row">
												<div class="col-lg-6 col-xl-6">
												<div class="my_profile_setting_input ui_kit_select_search form-group">
											    	<label>Area List</label>
													<select class="selectpicker" data-live-search="true" name="area_name" data-width="100%">
														<option value="Mohammadpur">Mohammadpur</option>
														<option value="Dhanmondi">Dhanmondi</option>
														<option value="Uttara">Uttara</option>
														<option value="Shymoly">Shymoly</option>
														<option value="Banani">Banani</option>
														<option value="Mirpur">Mirpur</option>
														<option value="Badda">Badda</option>
														<option value="Gulshan">Gulshan</option>



													</select>
												</div>
											</div>


											<div class="col-lg-12">
												<div class="my_profile_setting_input form-group">
											    	<label for="propertyTitle">Address</label>
											    	<input type="text" class="form-control" name="address">
												</div>
											</div>

											<div class="col-lg-6">
												<div class="my_profile_setting_input form-group">
											    	<label for="propertyTitle">Start Time</label>
											    	<input type="time" class="form-control" name="start_time">
												</div>
											</div>
											<div class="col-lg-6">
												<div class="my_profile_setting_input form-group">
											    	<label for="propertyTitle">End Time</label>
											    	<input type="time" class="form-control" name="end_time">
												</div>
											</div>

											<div class="col-lg-6">
												<div class="my_profile_setting_input form-group">
											    	<label for="propertyTitle">Date</label>
											    	<input type="date" class="form-control" name="ondate">
												</div>
											</div>

											<div class="col-lg-6">
												<div class="my_profile_setting_input form-group">
											    	<label for="propertyTitle">Hour Rates</label>
											    	<input type="number" class="form-control" name="hour_rate">
												</div>
											</div>

											
										</div>

											<button class="btn btn-primary" type="submit" name="btn_areainput">Submit</button>
									</form>
									
								</div>
						</div>
			
					</div>
					<div class="row mt50">
						<div class="col-lg-12">
							<div class="copyright-widget text-center">
								<p></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
<a class="scrollToHome" href="#"><i class="flaticon-arrows"></i></a>
</div>
<!-- Wrapper End -->
<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script type="text/javascript" src="js/jquery-3.3.1.js"></script>
<script type="text/javascript" src="js/jquery-migrate-3.0.0.min.js"></script>
<script type="text/javascript" src="js/popper.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery.mmenu.all.js"></script>
<script type="text/javascript" src="js/ace-responsive-menu.js"></script>
<script type="text/javascript" src="js/bootstrap-select.min.js"></script>
<script type="text/javascript" src="js/snackbar.min.js"></script>
<script type="text/javascript" src="js/simplebar.js"></script>
<script type="text/javascript" src="js/parallax.js"></script>
<script type="text/javascript" src="js/scrollto.js"></script>
<script type="text/javascript" src="js/jquery-scrolltofixed-min.js"></script>
<script type="text/javascript" src="js/jquery.counterup.js"></script>
<script type="text/javascript" src="js/wow.min.js"></script>
<script type="text/javascript" src="js/progressbar.js"></script>
<script type="text/javascript" src="js/slider.js"></script>
<script type="text/javascript" src="js/timepicker.js"></script>
<script type="text/javascript" src="js/wow.min.js"></script>
<script type="text/javascript" src="js/smartuploader.js"></script>
<script type="text/javascript" src="js/dashboard-script.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAAz77U5XQuEME6TpftaMdX0bBelQxXRlM&amp;callback=initMap" type="text/javascript"></script>
<script type="text/javascript" src="js/googlemaps1.js"></script>
<!-- Custom script for all pages --> 
<script type="text/javascript" src="js/script.js"></script>
</body>


</html>