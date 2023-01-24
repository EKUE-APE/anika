<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->  
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->  
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->  
<head>
    <title>Listing Hub - Listing & Directory Template | ThemezHub</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">    
    <link rel="shortcut icon" href="favicon.ico">  
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <!-- Global CSS -->
    <link rel="stylesheet" href="{{ asset ('assetss/plugins/bootstrap/css/bootstrap.min.css') }}">   
    <!-- Plugins CSS -->    
    <link rel="stylesheet" href="{{ asset ('assetss/plugins/font-awesome/css/font-awesome.css') }}">
    <link rel="stylesheet" href="{{ asset ('assetss/plugins/elegant_font/css/style.css') }}">
    
    <!-- Theme CSS -->
    <link id="theme-style" rel="stylesheet" href="{{ asset ('assetss/css/styles.css') }}">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head> 

<body class="landing-page">   
     
    <!--FACEBOOK LIKE BUTTON JAVASCRIPT SDK-->
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
    
    <div class="page-wrapper">
        
        <!-- ******Header****** -->
 {{--   <header class="header text-center">
            <div class="container">
                <div class="branding">
                    <h1 class="logo" style="text-align:center;">
                       <center> <img src="" class="img-responsive" alt="" /></center>
                    </h1>
                </div><!--//branding-->
                <div class="tagline">
                    <p>Listing & Directory Template documentation</p>
                    <p>Designed with <i class="fa fa-heart"></i> for Developers</p>
                </div><!--//tagline-->
            </div><!--//container-->
        </header><!--//header--> --}}
        
        <section class="cards-section text-center">
            <div class="container">
              <!--//intro-->
                <div id="cards-wrapper" class="cards-wrapper row">
                    <div class="item item-green col-md-4 col-sm-6 col-xs-6">
                        <div class="item-inner">
                            <div class="icon-holder">
                                <i class="icon fa fa-paper-plane"></i>
                            </div><!--//icon-holder-->
                            <h3 class="title">Hôtel</h3>
                            <p class="intro">Check How To install and Launch it.</p>
                            <a class="link" href="{{ url('addHotel') }}"><span></span></a>
                        </div><!--//item-inner-->
                    </div><!--//item-->
					<div class="item item-orange col-md-4 col-sm-6 col-xs-6">
                        <div class="item-inner">
                            <div class="icon-holder">
                                <span aria-hidden="true" class="icon icon_gift"></span>
                            </div><!--//icon-holder-->
                            <h3 class="title">Auberge</h3>
                            <p class="intro">check how to use common settings like: paddings, margins, height, Line Heigh and more.</p>
                            <a class="link" href="{{ url('addAuberge') }}"><span></span></a>
                        </div><!--//item-inner-->
                    </div><!--//item-->
                    <div class="item item-pink item-2 col-md-4 col-sm-6 col-xs-6">
                        <div class="item-inner">
                            <div class="icon-holder">
                                <span aria-hidden="true" class="icon icon_puzzle_alt"></span>
                            </div><!--//icon-holder-->
                            <h3 class="title">Logements Meublés</h3>
                            <p class="intro">In this design There are multiple components are available check how to use it.</p>
                            <a class="link" href="{{ url('addLogement') }}"><span></span></a>
                        </div><!--//item-inner-->
                    </div><!--//item-->



                    <div class="item item-blue col-md-4 col-sm-6 col-xs-6">
                        <div class="item-inner">
                            <div class="icon-holder">
                                <span aria-hidden="true" class="icon fa fa-code"></span>
                            </div><!--//icon-holder-->
                            <h3 class="title">Restaurants</h3>
                            <p class="intro">find All code structure how to edit and write code of any section.</p>
                            <a class="link" href="{{ url('addRestaurant') }}"><span></span></a>
                        </div><!--//item-inner-->
                    </div><!--//item-->
                    <div class="item item-purple col-md-4 col-sm-6 col-xs-6">
                        <div class="item-inner">
                            <div class="icon-holder">
                                <span aria-hidden="true" class="icon icon_lifesaver"></span>
                            </div><!--//icon-holder-->
                            <h3 class="title">Fast Food</h3>
                            <p class="intro">check how to use map and location settings.</p>
                            <a class="link" href="map.html"><span></span></a>
                        </div><!--//item-inner-->
                    </div><!--//item-->
                    <div class="item item-primary col-md-4 col-sm-6 col-xs-6">
                        <div class="item-inner">
                            <div class="icon-holder">
                                <span aria-hidden="true" class="icon icon_genius"></span>
                            </div><!--//icon-holder-->
                            <h3 class="title">Patisseries</h3>
                            <p class="intro">how to use slick slider and customize.</p>
                            <a class="link" href="sliding.html"><span></span></a>
                        </div><!--//item-inner-->
                    </div><!--//item-->

                    
                    <div class="item item-green col-md-4 col-sm-6 col-xs-6">
                        <div class="item-inner">
                            <div class="icon-holder">
                                <i class="icon fa fa-paper-plane"></i>
                            </div><!--//icon-holder-->
                            <h3 class="title">Boîte de Nuit</h3>
                            <p class="intro">Check How To install and Launch it.</p>
                            <a class="link" href="start.html"><span></span></a>
                        </div><!--//item-inner-->
                    </div><!--//item-->
					<div class="item item-orange col-md-4 col-sm-6 col-xs-6">
                        <div class="item-inner">
                            <div class="icon-holder">
                                <span aria-hidden="true" class="icon icon_gift"></span>
                            </div><!--//icon-holder-->
                            <h3 class="title">Bars</h3>
                            <p class="intro">check how to use common settings like: paddings, margins, height, Line Heigh and more.</p>
                            <a class="link" href="global.html"><span></span></a>
                        </div><!--//item-inner-->
                    </div><!--//item-->
                    <div class="item item-pink item-2 col-md-4 col-sm-6 col-xs-6">
                        <div class="item-inner">
                            <div class="icon-holder">
                                <span aria-hidden="true" class="icon icon_puzzle_alt"></span>
                            </div><!--//icon-holder-->
                            <h3 class="title">Location de Véhicule</h3>
                            <p class="intro">In this design There are multiple components are available check how to use it.</p>
                            <a class="link" href="components.html"><span></span></a>
                        </div><!--//item-inner-->
                    </div><!--//item-->





                </div><!--//cards-->
                
            </div><!--//container-->
        </section><!--//cards-section-->
    </div><!--//page-wrapper-->
    
    <footer class="footer text-center">
        <div class="container">
            <!--/* This template is released under the Creative Commons Attribution 3.0 License. Please keep the attribution link below when using for your own project. Thank you for your support. :) If you'd like to use the template without the attribution, you can check out other license options via our website: themes.3rdwavemedia.com */-->
            <small class="copyright">Designed with <i class="fa fa-heart"></i> by <a href="https://themeforest.net/user/themezhub" target="_blank">ThemezHub</a> for developers</small>
            
        </div><!--//container-->
    </footer><!--//footer-->
    
     
    <!-- Main Javascript -->          
    <script type="text/javascript" src="{{ asset ('assetss/plugins/jquery-1.12.3.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset ('assetss/plugins/bootstrap/js/bootstrap.min.js') }}"></script>                                                                     
    <script type="text/javascript" src="{{ asset ('assetss/plugins/jquery-match-height/jquery.matchHeight-min.js') }}"></script>
    <script type="text/javascript" src="{{ asset ('assetss/js/main.js') }}"></script>
    
</body>
</html> 

