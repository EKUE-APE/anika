
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
         
<!-- /. NAV TOP  -->

<!-- /. NAV SIDE  -->


<section class="cards-section text-center">
    

    <div class="page-wrapper">
        
        <!-- ******Header****** -->
      <!--//header-->
        
        <section class="cards-section text-center">
            <div class="container">
             <!--//intro-->
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