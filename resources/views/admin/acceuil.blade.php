
@extends('layout.app')
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <!-- Global CSS -->
    <link rel="stylesheet" href="assetss/plugins/bootstrap/css/bootstrap.min.css">   
    <!-- Plugins CSS -->    
    <link rel="stylesheet" href="assetss/plugins/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="assetss/plugins/elegant_font/css/style.css">
    
    <!-- Theme CSS -->
    <link id="theme-style" rel="stylesheet" href="assetss/css/styles.css">
@section('section')
    
<div class="navbar navbar-inverse navbar-fixed-top" >
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html"><img src="assets/img/logo.png" class="img-responsive" alt=""></a>
        </div>
        <div class="navbar-collapse">
            <ul class="nav navbar-top-links navbar-right"> 
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-envelope fa-fw"></i>
                        <span class="count-notification green">7</span>
                    </a>
                    <ul class="dropdown-menu dropdown-messages">
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center btn-bott green" href="#">
                                <strong>Read All Messages</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-messages -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell fa-fw"></i>
                        <span class="count-notification">4</span>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-comment fa-fw"></i> New Comment
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                    <span class="pull-right text-muted small">12 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-envelope fa-fw"></i> Message Sent
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-tasks fa-fw"></i> New Task
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center btn-bott" href="#">
                                <strong>See All Alerts</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-alerts -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <img src="assets/img/user.jpg" class="img-responsive img-circle" alt="user">
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        

                        <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">
                         {{ __('Logout') }}
                        </a>

                     <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                         @csrf
                     </form>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->
        </div>
    </div>
</div>         
<!-- /. NAV TOP  -->
<nav class="navbar navbar-side">
    <div class="sidebar-collapse">
        <ul class="nav" id="main-menu">
            
            <li class="active">
                <a href="index.html"><i class="fa fa-dashboard" aria-hidden="true"></i>Dashboard</a>
            </li>
            
            <li>
                <a href="messages.html"><i class="fa fa-envelope-open" aria-hidden="true"></i>Messages</a>
            </li>
            
            <li>
                <a href="javascript:void(0)"><i class="fa fa-clone" aria-hidden="true"></i>Manage Listing <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="all-listing.html"><i class="fa fa-circle-o-notch" aria-hidden="true"></i>All Listing</a>
                    </li>
                    
                    <li>
                        <a href="active-listing.html"><i class="fa fa-circle-o-notch" aria-hidden="true"></i>Active Listing</a>
                    </li>
                    <li>
                        <a href="approve-listing.html"><i class="fa fa-circle-o-notch" aria-hidden="true"></i>Approve Listing</a>
                    </li>
                   <li>
                        <a href="edit-listing.html"><i class="fa fa-circle-o-notch" aria-hidden="true"></i>Edit Listing</a>
                    </li>
                </ul>
            </li>
            
            <li>
                <a href="javascript:void(0)"><i class="fa fa-link" aria-hidden="true"></i>Available Link <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="available-link.html"><i class="fa fa-circle-o-notch" aria-hidden="true"></i>Available Link</a>
                    </li>
                    <li>
                        <a href="add-link.html"><i class="fa fa-circle-o-notch" aria-hidden="true"></i>Add Link</a>
                    </li>
                   <li>
                        <a href="edit-link.html"><i class="fa fa-circle-o-notch" aria-hidden="true"></i>Edit Link</a>
                    </li>
                </ul>
            </li>
            
            <li>
                <a href="javascript:void(0)"><i class="fa fa-briefcase" aria-hidden="true"></i>Category <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="category.html"><i class="fa fa-circle-o-notch" aria-hidden="true"></i>All Category</a>
                    </li>
                    <li>
                        <a href="add-categoty.html"><i class="fa fa-circle-o-notch" aria-hidden="true"></i>Add Categoty</a>
                    </li>
                   <li>
                        <a href="edit-categoty.html"><i class="fa fa-circle-o-notch" aria-hidden="true"></i>Edit Categoty</a>
                    </li>
                </ul>
            </li>
            
            <li>
                <a href="javascript:void(0)"><i class="fa fa-cog" aria-hidden="true"></i>Settings <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="site-settings.html"><i class="fa fa-circle-o-notch" aria-hidden="true"></i>Site Settings</a>
                    </li>
                    <li>
                        <a href="directory-settings.html"><i class="fa fa-circle-o-notch" aria-hidden="true"></i>Directory Settings</a>
                    </li>
                   <li>
                        <a href="payment-settings.html"><i class="fa fa-circle-o-notch" aria-hidden="true"></i>Payment Settings</a>
                    </li>
                </ul>
            </li>
         
            <li>
                <a href="advertising.html"><i class="fa fa-user-circle-o" aria-hidden="true"></i>Advertising</a>
            </li>
            
            <li>
                <a href="my-profile.html"><i class="fa fa-user-circle" aria-hidden="true"></i>My Profile</a>
            </li>
            
            <li>
                <a href="chatting.html"><i class="fa fa-comments-o" aria-hidden="true"></i>Chatting</a>
            </li>
            
            <a class="dropdown-item" href="{{ route('logout') }}"
            onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
             {{ __('Logout') }}
            </a>

         <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
             @csrf
         </form>
        </ul>
    </div>
</nav>
<!-- /. NAV SIDE  -->


<section class="cards-section text-center">
    

    <div class="page-wrapper">
        
        <!-- ******Header****** -->
        <header class="header text-center">
            <div class="container">
                <div class="branding">
                    <h1 class="logo" style="text-align:center;">
                       <center> <img src="assets/images/logo.png" class="img-responsive" alt="" /></center>
                    </h1>
                </div><!--//branding-->
                <div class="tagline">
                    <p>Listing & Directory Template documentation</p>
                    <p>Designed with <i class="fa fa-heart"></i> for Developers</p>
                </div><!--//tagline-->
            </div><!--//container-->
        </header><!--//header-->
        
        <section class="cards-section text-center">
            <div class="container">
                <h2 class="title">Getting  is easy!</h2>
                <div class="intro">
                    <p>
					Thank you for purchasing the <strong>Listing hub Template.</strong> If you have any questions that are beyond the scope of this help file, please feel free to email via my user page contact form <a href="https://themeforest.net/user/themezhub77">here</a>. Thanks so much! 
                </p>
                    <div class="cta-container">
                        <a class="btn btn-primary btn-cta" href="https://themeforest.net/user/themezhub" target="_blank"><i class="fa fa-cloud-download"></i> Download Now</a>
                    </div><!--//cta-container-->
                </div><!--//intro-->
                <div id="cards-wrapper" class="cards-wrapper row">
                    <div class="item item-green col-md-4 col-sm-6 col-xs-6">
                        <div class="item-inner">
                            <div class="icon-holder">
                                <i class="icon fa fa-paper-plane"></i>
                            </div><!--//icon-holder-->
                            <h3 class="title">Quick Start</h3>
                            <p class="intro">Check How To install and Launch it.</p>
                            <a class="link" href="start.html"><span></span></a>
                        </div><!--//item-inner-->
                    </div><!--//item-->
					<div class="item item-orange col-md-4 col-sm-6 col-xs-6">
                        <div class="item-inner">
                            <div class="icon-holder">
                                <span aria-hidden="true" class="icon icon_gift"></span>
                            </div><!--//icon-holder-->
                            <h3 class="title">Global Settings</h3>
                            <p class="intro">check how to use common settings like: paddings, margins, height, Line Heigh and more.</p>
                            <a class="link" href="global.html"><span></span></a>
                        </div><!--//item-inner-->
                    </div><!--//item-->
                    <div class="item item-pink item-2 col-md-4 col-sm-6 col-xs-6">
                        <div class="item-inner">
                            <div class="icon-holder">
                                <span aria-hidden="true" class="icon icon_puzzle_alt"></span>
                            </div><!--//icon-holder-->
                            <h3 class="title">Components</h3>
                            <p class="intro">In this design There are multiple components are available check how to use it.</p>
                            <a class="link" href="components.html"><span></span></a>
                        </div><!--//item-inner-->
                    </div><!--//item-->
                    <div class="item item-blue col-md-4 col-sm-6 col-xs-6">
                        <div class="item-inner">
                            <div class="icon-holder">
                                <span aria-hidden="true" class="icon fa fa-code"></span>
                            </div><!--//icon-holder-->
                            <h3 class="title">Code Structure</h3>
                            <p class="intro">find All code structure how to edit and write code of any section.</p>
                            <a class="link" href="code-structure.html"><span></span></a>
                        </div><!--//item-inner-->
                    </div><!--//item-->
                    <div class="item item-purple col-md-4 col-sm-6 col-xs-6">
                        <div class="item-inner">
                            <div class="icon-holder">
                                <span aria-hidden="true" class="icon icon_lifesaver"></span>
                            </div><!--//icon-holder-->
                            <h3 class="title">Map Settings</h3>
                            <p class="intro">check how to use map and location settings.</p>
                            <a class="link" href="map.html"><span></span></a>
                        </div><!--//item-inner-->
                    </div><!--//item-->
                    <div class="item item-primary col-md-4 col-sm-6 col-xs-6">
                        <div class="item-inner">
                            <div class="icon-holder">
                                <span aria-hidden="true" class="icon icon_genius"></span>
                            </div><!--//icon-holder-->
                            <h3 class="title">Sliding</h3>
                            <p class="intro">how to use slick slider and customize.</p>
                            <a class="link" href="sliding.html"><span></span></a>
                        </div><!--//item-inner-->
                    </div><!--//item-->
                </div><!--//cards-->
                
            </div><!--//container-->
        </section><!--//cards-section-->
    </div>
   
    <!--//container-->
</section>




 <!-- /. PAGE WRAPPER  -->


@endsection
@section('script')



@endsection