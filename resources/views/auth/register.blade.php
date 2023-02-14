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
								<a href="login.html" class="dropdown-toggle" data-toggle="dropdown">Home</a>
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
			
			<!-- Start Login Section -->
			<section class="log-wrapper">
				<div class="container">
					<div class="col-md-6 col-sm-10 col-md-offset-3 col-sm-offset-1">
						<div class="log-box">
							<h2>INSCR<span class="theme-cl">IPTION!</span></h2>
							{{-- <form>
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope theme-cl"></i></span>
									<input type="text" class="form-control" placeholder="User Name">
								</div>
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock theme-cl"></i></span>
									<input type="password" class="form-control" placeholder="Password">
								</div>
								<div class="text-center">
									<button type="button" class="btn theme-btn width-200 btn-radius">Enter</button>
								</div>
							</form> --}}


							<form method="POST" action="{{ route('register') }}">
                                @csrf
                                <div class="form-group">
									<label>Nom et Prénoms</label>
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

								</div>
                                <div class="form-group">
									<label>Téléphone:</label>
<input type="tel" maxlength="14" pattern="^(\+\d{1,2}\s)?\(?\d{3}\)?[\s.-]\d{3}[\s.-]\d{4}$" name="phone" id="phone" class="form-control" font-style: italic; placeholder="+228 95647830">

								</div>
                                
                                
								<div class="form-group">
									<label>Email</label>

                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
								
								<div class="form-group">
									<label>Mot de Passe</label>
									
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
								
								<div class="form-group">
									<label>Confirmation du mot de passe</label>
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                           
                                </div>
								
								<div class="form-group">
									<select name="profil" class="form-control">
										<option data-placeholder="Register as a" required class="chosen-select">S'inscrire en tant que </option>
										<option value="2">Professionnel</option>
										<option value="3">Simple Utilisateur</option>
									</select>
								</div>
								
								<span class="custom-checkbox d-block">
									<input type="checkbox" id="select1">
									<label for="select1"></label>
									
								</span>
								
								<div class="center">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Inscription') }}
                                    </button>
                                </div>
								
							</form>




                           {{--  <div class="center mrg-top-5">
								<div class="bottom-login text-center">Don't have an account</div>
								<a href="javascript:void(0)" class="theme-cl" data-toggle="modal" data-dismiss="modal" data-target="#register">Create An Account</a>
							</div> --}}
						</div>
					</div>
				</div>
			</section>
			<!-- End Login Section -->

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
								<h2>Welcome <span class="theme-cl">Back!</span></h2>
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