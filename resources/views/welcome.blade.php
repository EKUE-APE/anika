<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Listing Hub - Listing & Directory Template | ThemezHub</title>
    
    <!-- All plugins -->
    <link href="{{ asset('assetsuser/plugins/css/plugins.css') }}" rel="stylesheet">	
    
    <!-- Custom style -->
    <link href="{{ asset('assetsuser/css/style.css') }}" rel="stylesheet">
	<link href="{{ asset('assetsuser/css/responsiveness.css') }}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js') }} for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.min.js') }}"></script>
      <script src="js/respond.min.js') }}"></script>
    <![endif]-->
    
</head>
	<body>
		<div class="wrapper">  
			<!-- Start Navigation -->
			<nav class="navbar navbar-default navbar-fixed navbar-transparent white bootsnav">
				<div class="container-fluid">            
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
						<i class="ti-align-left"></i>
					</button>
					
					<!-- Start Header Navigation -->
					<div class="navbar-header">
						<a class="navbar-brand" href="index.html">
							<img src="{{ asset('assetsuser/img/logo.png') }}" class="logo logo-display" alt="">
							<img src="{{ asset('assetsuser/img/logo.png') }}" class="logo logo-scrolled" alt="">
						</a>
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="navbar-menu">
						<ul class="nav navbar-nav navbar-center" data-in="fadeInDown" data-out="fadeOutUp">
							<li class="dropdown">
								<a href="{{url('login')}}" class="dropdown-toggle" data-toggle="dropdown">Connexion</a>
								<ul class="dropdown-menu animated fadeOutUp">
									<li><a href="index.html">Home 1</a></li>
									<li><a href="index-2.html">Home 2</a></li>
									<li><a href="index-3.html">Home 3</a></li>
									<li><a href="index-4.html">Home 4</a></li>
									<li><a href="index-5.html">Home 5</a></li>
									<li><a href="index-6.html">Home 6</a></li>
								</ul>
							</li>
							<li class="dropdown">
								<a href="login.html" class="dropdown-toggle" data-toggle="dropdown">Explore</a>
								<ul class="dropdown-menu animated fadeOutUp">
									<li><a href="top-author.html">Top Author<span class="new-page-badge">New</span></a></li>
									<li><a href="author-detail.html">Author Detail<span class="new-page-badge">New</span></a></li>
									<li><a href="search-listing.html">Search Listing</a></li>
									<li><a href="add-listing.html">Add Listing</a></li>
									<li><a href="listing-detail.html">Listing Detail</a></li>
									
									<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown">Listing</a>
										<ul class="dropdown-menu animated fadeOutUp">
											<li><a href="full-width-grid.html">Full Width Listing</a></li>
											<li><a href="full-width-vertical.html">Full Vertical Listing</a></li>
											<li><a href="grid-sidebar.html">Listing With Sidebar</a></li>
											<li><a href="vertical-sidebar.html">Vertical With Sidebar</a></li>
											<li><a href="top-place-list.html">Top Places</a></li>
										</ul>
									</li>
									
									<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown">Category</a>
										<ul class="dropdown-menu animated fadeOutUp">
											<li><a href="category-1.html">Category Style 1</a></li>
											<li><a href="category-2.html">Category Style 2</a></li>
											<li><a href="category-3.html">Category Style 3</a></li>
										</ul>
									</li>
									
									<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown">User Panel</a>
										<ul class="dropdown-menu animated fadeOutUp">
											<li><a href="edit-profile.html">Profile Settings</a></li>
											<li><a href="profile-detail.html">Profile Detail</a></li>
											<li><a href="manage-listing.html">Manage Listing</a></li>
											<li><a href="invoice.html">Check Invoice</a></li>
											<li><a href="create-pricing.html">Create Pricing</a></li>
										</ul>
									</li>
									
								</ul>
							</li>
							<li class="dropdown">
								<a href="login.html" class="dropdown-toggle" data-toggle="dropdown">Pages</a>
								<ul class="dropdown-menu animated fadeOutUp">
									<li><a href="payment-method.html">Payment Method</a></li>
									<li><a href="thank-you.html">Thank You</a></li>
									<li><a href="blog.html">Blog</a></li>
									<li><a href="blog-detail.html">Blog Detail</a></li>
									<li><a href="contact.html">Contact</a></li>
									<li><a href="component.html">Component</a></li>
									<li><a href="typography.html">Typography</a></li>
									<li><a href="pricing.html">Pricing</a></li>
									<li><a href="404.html">404</a></li>
									<li><a href="icons.html">Icons</a></li>
								</ul>
							</li>
							
							<li><a href="javascript:void(0)" data-toggle="modal" data-target="#signin">Sign In</a></li>
						</ul>
						<ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
							<li class="no-pd"><a href="add-listing.html" class="addlist"><i class="ti-user" aria-hidden="true"></i>Add Listing</a></li>
						</ul>
					</div>
					<!-- /.navbar-collapse -->
				</div>   
			</nav>
			<!-- End Navigation -->
			<div class="clearfix"></div>
			
			<!-- Main Banner Section Start -->
			<div class="banner dark-opacity" style="background-image:url(http://via.placeholder.com/1920x1000);" data-overlay="8">  
				<div class="container">
					<div class="banner-caption">
						<div class="col-md-12 col-sm-12 banner-text">
							<h1>Find Nearby Attractions</h1>
							<p>Expolore top-rated attractions, activities and more</p>
							<form class="form-verticle">
								<div class="col-md-4 col-sm-4 no-padd">
									<i class="banner-icon icon-pencil"></i>
									<input type="text" class="form-control left-radius right-br" placeholder="Keywords..">
								</div>
								<div class="col-md-3 col-sm-3 no-padd">
									<div class="form-box">
										<i class="banner-icon icon-map-pin"></i>
										<input type="text" class="form-control right-br" placeholder="Location..">
									</div>
								</div>
								<div class="col-md-3 col-sm-3 no-padd">
									<div class="form-box">
										<i class="banner-icon icon-layers"></i>
										<select class="form-control">
											<option data-placeholder="Choose Category" class="chosen-select">Choose Category</option>
											<option value="1">Food & restaurants </option>
											<option value="2">Shop & Education</option>
											<option value="3">Education</option>
											<option value="4">Business</option>
										</select>
									</div>
								</div>

								<div class="col-md-2 col-sm-2 no-padd">
									<div class="form-box">
										<button type="button" class="btn theme-btn btn-default">Search</button>
									</div>
								</div>
							</form>
							
							<div class="popular-categories">
								<ul class="popular-categories-list">
								
									<li>
										<a href="#">
											<div class="pc-box">
												<i class="fa fa-plane cl-info"></i>
												<p>Travel</p>
											</div>
										</a>
									</li>
									
									<li>
										<a href="#">
											<div class="pc-box">
												<i class="fa fa-paint-brush cl-danger"></i>
												<p>Art & Design</p>
											</div>
										</a>
									</li>
									
									<li>
										<a href="#">
											<div class="pc-box">
												<i class="fa fa-file-text cl-warning"></i>
												<p>Documentry</p>
											</div>
										</a>
									</li>
									
									<li>
										<a href="#">
											<div class="pc-box">
												<i class="fa fa-glass cl-success"></i>
												<p>Restaurants</p>
											</div>
										</a>
									</li>
									
									<li>
										<a href="#">
											<div class="pc-box">
												<i class="fa fa-briefcase cl-purple"></i>
												<p>Business</p>
											</div>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="clearfix"></div>
				<!-- Listings Section -->
				<section class="sec-bt">
					<div class="container">
					
						<div class="row">
							<div class="col-md-10 col-md-offset-1">
							<div class="heading">
								<h2>Top & Popular <span>Listings</span></h2>
								<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
							</div>
							</div>
						</div>
						
						<div class="row">
							
							<!-- Single List -->
							<div class="col-lg-4 col-md-6 col-sm-12">
								<div class="property_item classical-list">
									<div class="image">
										<a href="listing-detail.html" class="listing-thumb">
											<img src="http://via.placeholder.com/1200x800" alt="latest property" class="img-responsive">
										</a>
										<div class="listing-price-info"> 
											<span class="pricetag">Featured</span>
											<span class="pricetag">$25 - $65</span>
										</div>
										<a href="#" class="tag_t"><i class="ti-heart"></i>Save</a>
										<span class="list-rate good">4.2</span>									
									</div>
									
									<div class="proerty_content">
										<div class="author-avater">
											<img src="http://via.placeholder.com/120x120" class="author-avater-img" alt="">
										</div>
										<div class="proerty_text">
										  <h3 class="captlize"><a href="listing-detail.html">Castle Palace</a><span class="veryfied-author"></span></h3>
										</div>
										<p class="property_add">Best Marriage Palace in The UK</p>
										<div class="property_meta"> 
										  <div class="list-fx-features">
												<div class="listing-card-info-icon">
													<span class="inc-fleat inc-add">Seek Velly, CA</span>
												</div>
												<div class="listing-card-info-icon">
													<span class="inc-fleat inc-call">+91 2356 548 958</span>
												</div>
											</div>  
										</div>
									</div>
									
									<div class="listing-footer-info">
										<div class="listing-cat">
											<a href="search-listing.html" class="cat-icon cl-1"><i class="ti-briefcase bg-a"></i>Services</a>
											<span class="more-cat">+4</span>
										</div>
										<span class="place-status">Open</span>
									</div>
									
								</div>
							</div>
							
							<!-- Single List -->
							<div class="col-lg-4 col-md-6 col-sm-12">
								<div class="property_item classical-list">
									<div class="image">
										<a href="listing-detail.html" class="listing-thumb">
											<img src="http://via.placeholder.com/1200x800" alt="latest property" class="img-responsive">
										</a>
										<div class="listing-price-info"> 
											<span class="pricetag">$20 - $55</span>
										</div>
										<a href="#" class="tag_t"><i class="ti-heart"></i>Save</a>
										<span class="list-rate great">5</span>									
									</div>
									
									<div class="proerty_content">
										<div class="author-avater">
											<img src="http://via.placeholder.com/120x120" class="author-avater-img" alt="">
										</div>
										<div class="proerty_text">
										  <h3 class="captlize"><a href="listing-detail.html">Avenue Mall</a><span class="veryfied-author"></span></h3>
										</div>
										<p class="property_add">Luxury Shopping Mall in The Austrailia</p>
										<div class="property_meta"> 
										  <div class="list-fx-features">
												<div class="listing-card-info-icon">
													<span class="inc-fleat inc-add">Seek Velly, CA</span>
												</div>
												<div class="listing-card-info-icon">
													<span class="inc-fleat inc-call">+91 2356 548 958</span>
												</div>
											</div>  
										</div>
									</div>
									
									<div class="listing-footer-info">
										<div class="listing-cat">
											<a href="search-listing.html" class="cat-icon cl-1"><i class="ti-shopping-cart-full bg-b"></i>Shoping Mall</a>
											<span class="more-cat">+2</span>
										</div>
										<span class="place-status">Open</span>
									</div>
									
								</div>
							</div>
							
							<!-- Single List -->
							<div class="col-lg-4 col-md-6 col-sm-12">
								<div class="property_item classical-list">
									<div class="image">
										<a href="listing-detail.html" class="listing-thumb">
											<img src="http://via.placeholder.com/1200x800" alt="latest property" class="img-responsive">
										</a>
										<div class="listing-price-info"> 
											<span class="pricetag">Featured</span>
											<span class="pricetag">$30 - $60</span>
										</div>
										<a href="#" class="tag_t"><i class="ti-heart"></i>Save</a>
										<span class="list-rate medium">3.2</span>									
									</div>
									
									<div class="proerty_content">
										<div class="author-avater">
											<img src="http://via.placeholder.com/120x120" class="author-avater-img" alt="">
										</div>
										<div class="proerty_text">
										  <h3 class="captlize"><a href="listing-detail.html">Beauty Spa</a><span class="veryfied-author"></span></h3>
										</div>
										<p class="property_add">Fully Spa & Massage Services</p>
										<div class="property_meta"> 
										  <div class="list-fx-features">
												<div class="listing-card-info-icon">
													<span class="inc-fleat inc-add">Seek Velly, CA</span>
												</div>
												<div class="listing-card-info-icon">
													<span class="inc-fleat inc-call">+91 2356 548 958</span>
												</div>
											</div>  
										</div>
									</div>
									
									<div class="listing-footer-info">
										<div class="listing-cat">
											<a href="search-listing.html" class="cat-icon cl-1"><i class="ti-home bg-m"></i>Spa & Massage</a>
											<span class="more-cat">+3</span>
										</div>
										<span class="place-status closed">Closed</span>
									</div>
									
								</div>
							</div>
							
							<!-- Single List -->
							<div class="col-lg-4 col-md-6 col-sm-12">
								<div class="property_item classical-list">
									<div class="image">
										<a href="listing-detail.html" class="listing-thumb">
											<img src="http://via.placeholder.com/1200x800" alt="latest property" class="img-responsive">
										</a>
										<div class="listing-price-info"> 
											<span class="pricetag">$25 - $65</span>
										</div>
										<a href="#" class="tag_t"><i class="ti-heart"></i>Save</a>
										<span class="list-rate great">5</span>									
									</div>
									
									<div class="proerty_content">
										<div class="author-avater">
											<img src="http://via.placeholder.com/120x120" class="author-avater-img" alt="">
										</div>
										<div class="proerty_text">
										  <h3 class="captlize"><a href="listing-detail.html">Sweet Restaurants</a><span class="veryfied-author"></span></h3>
										</div>
										<p class="property_add">Super Clean & Cool Restaurants In Canada</p>
										<div class="property_meta"> 
										  <div class="list-fx-features">
												<div class="listing-card-info-icon">
													<span class="inc-fleat inc-add">Seek Velly, CA</span>
												</div>
												<div class="listing-card-info-icon">
													<span class="inc-fleat inc-call">+91 2356 548 958</span>
												</div>
											</div>  
										</div>
									</div>
									
									<div class="listing-footer-info">
										<div class="listing-cat">
											<a href="search-listing.html" class="cat-icon cl-1"><i class="fa fa-glass bg-d"></i>Eat & Dring</a>
											<span class="more-cat">+6</span>
										</div>
										<span class="place-status">Open</span>
									</div>
									
								</div>
							</div>
							
							<!-- Single List -->
							<div class="col-lg-4 col-md-6 col-sm-12">
								<div class="property_item classical-list">
									<div class="image">
										<a href="listing-detail.html" class="listing-thumb">
											<img src="http://via.placeholder.com/1200x800" alt="latest property" class="img-responsive">
										</a>
										<div class="listing-price-info"> 
											<span class="pricetag">$40 - $55</span>
										</div>
										<a href="#" class="tag_t"><i class="ti-heart"></i>Save</a>
										<span class="list-rate poor">2.7</span>									
									</div>
									
									<div class="proerty_content">
										<div class="author-avater">
											<img src="http://via.placeholder.com/120x120" class="author-avater-img" alt="">
										</div>
										<div class="proerty_text">
										  <h3 class="captlize"><a href="listing-detail.html">Veero Events</a><span class="veryfied-author"></span></h3>
										</div>
										<p class="property_add">Book Veero Management for Your Eventss</p>
										<div class="property_meta"> 
										  <div class="list-fx-features">
												<div class="listing-card-info-icon">
													<span class="inc-fleat inc-add">Seek Velly, CA</span>
												</div>
												<div class="listing-card-info-icon">
													<span class="inc-fleat inc-call">+91 2356 548 958</span>
												</div>
											</div>  
										</div>
									</div>
									
									<div class="listing-footer-info">
										<div class="listing-cat">
											<a href="search-listing.html" class="cat-icon cl-1"><i class="ti-calendar bg-n"></i>Events</a>
											<span class="more-cat">+5</span>
										</div>
										<span class="place-status closed">Closed</span>
									</div>
									
								</div>
							</div>
							
							<!-- Single List -->
							<div class="col-lg-4 col-md-6 col-sm-12">
								<div class="property_item classical-list">
									<div class="image">
										<a href="listing-detail.html" class="listing-thumb">
											<img src="http://via.placeholder.com/1200x800" alt="latest property" class="img-responsive">
										</a>
										<div class="listing-price-info"> 
											<span class="pricetag">Featured</span>
											<span class="pricetag">$45 - $70</span>
										</div>
										<a href="#" class="tag_t"><i class="ti-heart"></i>Save</a>
										<span class="list-rate good">4.2</span>									
									</div>
									
									<div class="proerty_content">
										<div class="author-avater">
											<img src="http://via.placeholder.com/120x120" class="author-avater-img" alt="">
										</div>
										<div class="proerty_text">
										  <h3 class="captlize"><a href="listing-detail.html">Hilly Salon</a><span class="veryfied-author"></span></h3>
										</div>
										<p class="property_add">Modern Hair Style Salon In India</p>
										<div class="property_meta"> 
										  <div class="list-fx-features">
												<div class="listing-card-info-icon">
													<span class="inc-fleat inc-add">Seek Velly, CA</span>
												</div>
												<div class="listing-card-info-icon">
													<span class="inc-fleat inc-call">+91 2356 548 958</span>
												</div>
											</div>  
										</div>
									</div>
									
									<div class="listing-footer-info">
										<div class="listing-cat">
											<a href="search-listing.html" class="cat-icon cl-1"><i class="ti-briefcase bg-f"></i>Services</a>
											<span class="more-cat">+2</span>
										</div>
										<span class="place-status">Open</span>
									</div>
									
								</div>
							</div>
						
						</div>
						
					</div>
				</section>
				<!-- End Listings Section -->
				
				<!-- Category Section -->
				<section class="bg-image" style="background-image:url(http://via.placeholder.com/1920x1000);" data-overlay="6">
					<div class="container">
						<div class="row">
							<div class="col-md-10 col-md-offset-1">
							<div class="heading light">
								<h2>Most Popular <span>Categories</span></h2>
								<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
							</div>
							</div>
						</div>
						
						<div class="row">
							<div class="category-slide">
								<div class="list-slide-box">
									<div class="category-full-widget">
										<div class="category-widget-bg" style="background-image: url(http://via.placeholder.com/1200x900);">
											<i class="bg-a cat-icon fa fa-paint-brush" aria-hidden="true"></i>
										</div>
										<div class="cat-box-name">
											<h4>Art & Design</h4>
											<a href="search-listing.html" class="btn-btn-wrowse">Browse</a>
										</div>
									</div>
								</div>
								
								<div class="list-slide-box">
									<div class="category-full-widget">
										<div class="category-widget-bg" style="background-image: url(http://via.placeholder.com/1200x900);">
											<i class="bg-b cat-icon fa fa-graduation-cap" aria-hidden="true"></i>
										</div>
										<div class="cat-box-name">
											<h4>Education</h4>
											<a href="search-listing.html" class="btn-btn-wrowse">Browse</a>
										</div>
									</div>
								</div>
								
								<div class="list-slide-box">
									<div class="category-full-widget">
										<div class="category-widget-bg" style="background-image: url(http://via.placeholder.com/1200x900);">
											<i class="bg-q cat-icon fa fa-file-text" aria-hidden="true"></i>
										</div>
										<div class="cat-box-name">
											<h4>Documentary</h4>
											<a href="search-listing.html" class="btn-btn-wrowse">Browse</a>
										</div>
									</div>
								</div>
								
								<div class="list-slide-box">
									<div class="category-full-widget">
										<div class="category-widget-bg" style="background-image: url(http://via.placeholder.com/1200x900);">
											<i class="bg-d cat-icon fa fa-glass" aria-hidden="true"></i>
										</div>
										<div class="cat-box-name">
											<h4>Food & Restaurants</h4>
											<a href="search-listing.html" class="btn-btn-wrowse">Browse</a>
										</div>
									</div>
								</div>
								
								<div class="list-slide-box">
									<div class="category-full-widget">
										<div class="category-widget-bg" style="background-image: url(http://via.placeholder.com/1200x900);">
											<i class="bg-e fa cat-icon fa-heart" aria-hidden="true"></i>
										</div>
										<div class="cat-box-name">
											<h4>Instructional</h4>
											<a href="search-listing.html" class="btn-btn-wrowse">Browse</a>
										</div>
									</div>
								</div>
								
								<div class="list-slide-box">
									<div class="category-full-widget">
										<div class="category-widget-bg" style="background-image: url(http://via.placeholder.com/1200x900);">
											<i class="bg-f fa cat-icon fa-futbol-o" aria-hidden="true"></i>
										</div>
										<div class="cat-box-name">
											<h4>Sport</h4>
											<a href="search-listing.html" class="btn-btn-wrowse">Browse</a>
										</div>
									</div>
								</div>
								
								<div class="list-slide-box">
									<div class="category-full-widget">
										<div class="category-widget-bg" style="background-image: url(http://via.placeholder.com/1200x900);">
											<i class="bg-g fa cat-icon fa-briefcase" aria-hidden="true"></i>
										</div>
										<div class="cat-box-name">
											<h4>Business</h4>
											<a href="search-listing.html" class="btn-btn-wrowse">Browse</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						
					</div>
				</section>
				<!-- End Category Section -->
				
				<!-- Top Places Listing -->
				<section>
					<div class="container">
						<div class="row">
							<div class="col-md-10 col-md-offset-1">
							<div class="heading">
								<h2>Top Places <span>Listing</span></h2>
								<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis.</p>
							</div>
							</div>
						</div>
						
						<div class="row">
							<div class="col-md-8 col-sm-7">
								<a href="search-listing.html" class="place-box">
									<span class="listing-count">110 Listing</span>
									<div class="place-box-content">
										<h4>Great Britain</h4>
										<span>Get All Listing</span>
									</div>
									<div class="place-box-bg" style="background-image: url(http://via.placeholder.com/1280x850);"></div>
								</a>
							</div>
							<div class="col-md-4 col-sm-5">
								<a href="search-listing.html" class="place-box">
									<span class="listing-count">110 Listing</span>
									<div class="place-box-content">
										<h4>Brunei Darussalam</h4>
										<span>Get All Listing</span>
									</div>
									<div class="place-box-bg" style="background-image: url(http://via.placeholder.com/1280x850);"></div>
								</a>
							</div>
						</div>
						
						<div class="row">
							<div class="col-md-4 col-sm-5">
								<a href="search-listing.html" class="place-box">
									<span class="listing-count">110 Listing</span>
									<div class="place-box-content">
										<h4>New Zealand</h4>
										<span>Get All Listing</span>
									</div>
									<div class="place-box-bg" style="background-image: url(http://via.placeholder.com/1280x850);"></div>
								</a>
							</div>
							
							<div class="col-md-8 col-sm-7">
								<a href="search-listing.html" class="place-box">
									<span class="listing-count">110 Listing</span>
									<div class="place-box-content">
										<h4>London</h4>
										<span>Get All Listing</span>
									</div>
									<div class="place-box-bg" style="background-image: url(http://via.placeholder.com/1280x850);"></div>
								</a>
							</div>
						</div>
					</div>
				</section>
				<!-- End Top Places Listing -->
				
				<!-- Counter Section -->
				<section class="company-state theme-overlap" style="background:url(http://via.placeholder.com/1920x1000);">
					<div class="container-fluid">
						<div class="col-md-3 col-sm-6">
							<div class="work-count">
								<span class="theme-cl icon icon-trophy"></span>
								<span class="counter">200</span> <span class="counter-incr">+</span>
								<p>Awards Winning</p>
							</div>
						</div>
						<div class="col-md-3 col-sm-6">
							<div class="work-count">
								<span class="theme-cl icon icon-layers"></span>
								<span class="counter">307</span> <span class="counter-incr">+</span>
								<p>Done Projects</p>
							</div>
						</div>
						<div class="col-md-3 col-sm-6">
							<div class="work-count">
								<span class="theme-cl icon icon-happy"></span>
								<span class="counter">700</span> <span class="counter-incr">+</span>
								<p>Happy Clients</p>
							</div>
						</div>
						<div class="col-md-3 col-sm-6">
							<div class="work-count">
								<span class="theme-cl icon icon-dial"></span>
								<span class="counter">770</span> <span class="counter-incr">+</span>
								<p>Cups Of Cofee</p>
							</div>
						</div>
					</div>
				</section>
				<!-- End Counter Section -->
				
				<!-- Testimonial Section -->
				<section class="testimonials-3" style="background:url(assets/img/testimonial.png)">
					<div class="container">
						<div class="row">
							<div class="col-md-10 col-md-offset-1">
							<div class="heading">
								<h2>What Say <span>Our Customers</span></h2>
								<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
							</div>
							</div>
						</div>
						
						<div class="row">
							<div class="col-md-12">
								<div id="testimonial-3" class="slick-carousel-3">
									<div class="testimonial-detail">
										<div class="client-detail-box">
											<div class="pic">
												<img src="http://via.placeholder.com/120x120" alt="">
											</div>
											<div class="client-detail">
												<h3 class="testimonial-title">Adam Alloriam</h3>
												<span class="post">Web Developer</span>
											</div>
										</div>
										<p class="description">
											" Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem commodi eligendi facilis itaque minus non odio, quaerat ullam eligendi facilis itaque minus non odio, quaerat ullam unde  unde voluptatum Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem commodi eligendi. "
										</p>
									</div>
	
									<div class="testimonial-detail">
										<div class="client-detail-box">
											<div class="pic">
												<img src="http://via.placeholder.com/120x120" alt="">
											</div>
											<div class="client-detail">
												<h3 class="testimonial-title">Illa Millia</h3>
												<span class="post">Project Manager</span>
											</div>
										</div>
										<p class="description">
											" Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem commodi eligendi facilis itaque minus non odio, quaerat ullam unde voluptatum eligendi facilis itaque minus non odio, quaerat ullam unde  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem commodi eligendi."
										</p>
									</div>
									
									<div class="testimonial-detail">
										<div class="client-detail-box">
											<div class="pic">
												<img src="http://via.placeholder.com/120x120" alt="">
											</div>
											<div class="client-detail">
												<h3 class="testimonial-title">Rout Millance</h3>
												<span class="post">Web Designer</span>
											</div>
										</div>
										<p class="description">
											" Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem commodi eligendi facilis itaque minus non odio, quaerat ullam unde voluptatum Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem commodi eligendi."
										</p>
									</div>
									
									<div class="testimonial-detail">
										<div class="client-detail-box">
											<div class="pic">
												<img src="assets/img/team3.jpg" alt="">
											</div>
											<div class="client-detail">
												<h3 class="testimonial-title">williamson</h3>
												<span class="post">Web Developer</span>
											</div>
										</div>
										<p class="description">
											" Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem commodi eligendi facilis itaque minus non odio, quaerat ullam unde voluptatum eligendi facilis itaque minus non odio, quaerat ullam unde ? "
										</p>
									</div>
								</div>
							</div>
						</div>
						
					</div>
				</section>	
				<!-- End Testimonial Section -->

			<!-- ================ Start Footer ======================= -->
			<footer class="footer dark-footer dark-bg">
				<div class="container">
					<div class="row">
					
						<div class="col-md-3 col-sm-6">
							<div class="footer-widget">
								<h3 class="widgettitle widget-title">About Us</h3>
								<p>We are Themez Hub A team of clean, creative & professionals delivering world-class HTML Templates to build a better & smart web.</p>
								<a href="#" class="other-store-link">
									<div class="other-store-app">
										<div class="os-app-icon">
											<i class="ti-android"></i>
										</div>
										<div class="os-app-caps">
											Google Store
										</div>
									</div>
								</a>
							</div>
						</div>
						
						<div class="col-md-3 col-sm-6">
							<div class="footer-widget">
								<h3 class="widgettitle widget-title">Popular Services</h3>
								<ul class="footer-navigation sinlge">
									<li><a href="#">Home Version One</a></li>
									<li><a href="#">Home Version Two</a></li>
									<li><a href="#">Home Version Three</a></li>
									<li><a href="#">Listing Detail Page</a></li>
									<li><a href="#">Search Listing Page</a></li>
									<li><a href="#">Our Top Authors</a></li>
								</ul>
							</div>
						</div>
						
						<div class="col-md-3 col-sm-6">
							<div class="footer-widget">
								<div class="textwidget">
								<h3 class="widgettitle widget-title">Get In Touch</h3>
								<div class="address-box">
									<div class="sing-add">
										<i class="ti-location-pin"></i>7744 North, New York
									</div>
									<div class="sing-add">
										<i class="ti-email"></i>support@listinghub.com
									</div>
									<div class="sing-add">
										<i class="ti-mobile"></i>+91 021 548 75958
									</div>
									<div class="sing-add">
										<i class="ti-world"></i>www.themezhub.com
									</div>
								</div>
								<ul class="footer-social">
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-instagram"></i></a></li>
									<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
								</ul>
								</div>
							</div>
						</div>
						
						<div class="col-md-3 col-sm-6">
							<div class="footer-widget">
								<h3 class="widgettitle widget-title">Subscribe Newsletter</h3>
								<p>At Vero Eos Et Accusamus Et Iusto Odio Dignissimos Ducimus Qui Blanditiis</p>
								
								<form class="sup-form">
									<input type="email" class="form-control sigmup-me" placeholder="Your Email Address" required="required">
									<button type="submit" class="btn" value="Get Started"><i class="fa fa-location-arrow"></i></button>
								</form>
							</div>
						</div>
					</div>
					
				</div>
				<div class="footer-copyright">
					<p>Copyright@ 2019 Listing Hub Design By <a href="http://www.themezhub.com/" title="Themezhub" target="_blank">Themezhub</a></p>
				</div>
			</footer>
			<!-- ================ End Footer Section ======================= -->
			
			<!-- ================== Login & Sign Up Window ================== -->
			<div class="modal fade" id="signin" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
					
						<div class="modal-header">
							<h4 class="modal-title" id="modalLabel2">LogIn Your Account</h4>
							<button type="button" class="m-close" data-dismiss="modal" aria-label="Close">
								<i class="ti-close"></i>
							</button>
						</div>
						
						<div class="modal-body">
							
							<div class="wel-back">
								<h2>Welcome <span class="theme-cl"></span></h2>
							</div>
							
							<form>
							
								<div class="form-group">
									<label>User Name</label>
									<input type="email" class="form-control" placeholder="Username">
								</div>
								
								<div class="form-group">
									<label>Password</label>
									<input type="password" class="form-control" placeholder="*******">
								</div>
								
								<span class="custom-checkbox d-block">
									<input type="checkbox" id="select1">
									<label for="select1"></label>
									Keep me Signed In
								</span>
								
								<div class="center">
									<button type="submit" id="login-btn" class="btn btn-midium theme-btn btn-radius width-200"> Login </button>
								</div>
								
							</form>
							
							<div class="connect-with">
								<ul>
									<li class="fb-ic"><a href="#"><i class="ti-facebook"></i></a></li>
									<li class="gp-ic"><a href="#"><i class="ti-google"></i></a></li>
									<li class="tw-ic"><a href="#"><i class="ti-twitter"></i></a></li>
								</ul>
							</div>
							
							<div class="center mrg-top-5">
								<div class="bottom-login text-center">Don't have an account</div>
								<a href="javascript:void(0)" class="theme-cl" data-toggle="modal" data-dismiss="modal" data-target="#register">Create An Account</a>
							</div>
							
							
						</div>
						
					</div>
				</div>
			</div> 

			<div class="modal fade" id="register" tabindex="-1" role="dialog" aria-labelledby="myModalLabel3" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
					
						<div class="modal-header">
							<h4 class="modal-title" id="modalLabel3">Create an Account</h4>
							<button type="button" class="m-close" data-dismiss="modal" aria-label="Close">
								<i class="ti-close"></i>
							</button>
						</div>
						
						<div class="modal-body">
							
							<div class="wel-back">
								<h2>Hi Mate! <span class="theme-cl">How are you?</span></h2>
							</div>
							
							<form>
							
								<div class="form-group">
									<label>User Name</label>
									<input type="email" class="form-control" placeholder="Username">
								</div>
								
								<div class="form-group">
									<label>Password</label>
									<input type="password" class="form-control" placeholder="*******">
								</div>
								
								<div class="form-group">
									<label>Confirm Password</label>
									<input type="password" class="form-control" placeholder="*******">
								</div>
								
								<div class="form-group">
									<select class="form-control">
										<option data-placeholder="Register as a" class="chosen-select">Register As a</option>
										<option value="1">As a Guest</option>
										<option value="2">As a Owner</option>
									</select>
								</div>
								
								<span class="custom-checkbox d-block">
									<input type="checkbox" id="select1">
									<label for="select1"></label>
									Keep me Signed In
								</span>
								
								<div class="center">
									<button type="submit" id="login-btn" class="btn btn-midium theme-btn btn-radius width-200"> Login </button>
								</div>
								
							</form>
							
							<div class="connect-with">
								<ul>
									<li class="fb-ic"><a href="#"><i class="ti-facebook"></i></a></li>
									<li class="gp-ic"><a href="#"><i class="ti-google"></i></a></li>
									<li class="tw-ic"><a href="#"><i class="ti-twitter"></i></a></li>
								</ul>
							</div>
							
							<div class="center mrg-top-5">
								<div class="bottom-login text-center">Already have an account?</div>
								<a href="javascript:void(0)" class="theme-cl" data-toggle="modal" data-dismiss="modal" data-target="#signin">Login</a>
							</div>
							
							
						</div>
						
					</div>
				</div>
			</div> 			
			<!-- ===================== End Login & Sign Up Window =========================== -->
			
			<a id="back2Top" class="theme-bg" title="Back to top" href="#"><i class="ti-arrow-up"></i></a>
			
			<!-- START JAVASCRIPT -->
			<script src="{{ asset('assetsuser/js/jquery.min.js') }}"></script>
			<script src="{{ asset('assetsuser/plugins/js/bootstrap.min.js') }}"></script>
			<script src="{{ asset('assetsuser/plugins/js/bootsnav.js') }}"></script>
			<script src="{{ asset('assetsuser/plugins/js/bootstrap-select.min.js') }}"></script>
			<script src="{{ asset('assetsuser/plugins/js/bootstrap-touch-slider-min.js') }}"></script>
			<script src="{{ asset('assetsuser/plugins/js/jquery.touchSwipe.min.js') }}"></script>
			<script src="{{ asset('assetsuser/plugins/js/chosen.jquery.js') }}"></script>
			<script src="{{ asset('assetsuser/plugins/js/datedropper.min.js') }}"></script>
			<script src="{{ asset('assetsuser/plugins/js/dropzone.js') }}"></script>
			<script src="{{ asset('assetsuser/plugins/js/jquery.counterup.min.js') }}"></script>
			<script src="{{ asset('assetsuser/plugins/js/jquery.fancybox.js') }}"></script>
			<script src="{{ asset('assetsuser/plugins/js/jquery.nice-select.js') }}"></script>
			<script src="{{ asset('assetsuser/plugins/js/fastclick.js') }}"></script>
			<script src="{{ asset('assetsuser/plugins/js/jqueryadd-count.js') }}"></script>
			<script src="{{ asset('assetsuser/plugins/js/jquery-rating.js') }}"></script>
			<script src="{{ asset('assetsuser/plugins/js/slick.js') }}"></script>
			<script src="{{ asset('assetsuser/plugins/js/timedropper.js') }}"></script>
			<script src="{{ asset('assetsuser/plugins/js/waypoints.min.js') }}"></script>
			<script src="{{ asset('assetsuser/plugins/js/bootstrap-slider.js') }}"></script>
			
			<!-- Custom Js -->
			<script src="{{ asset('assetsuser/js/custom.js') }}"></script>
			
			
		</div>
	</body>
</html>