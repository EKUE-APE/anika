
@extends('layout.app')
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <!-- Global CSS -->
    <link rel="stylesheet" href="{{ asset('assetss/plugins/bootstrap/css/bootstrap.min.css') }}">   
    <!-- Plugins CSS -->    
    <link rel="stylesheet" href="{{ asset('assetss/plugins/font-awesome/css/font-awesome.css') }}">
    <link rel="stylesheet" href="{{ asset ('assetss/plugins/elegant_font/css/style.css') }}">
    
    <!-- Theme CSS -->
    <link id="theme-style" rel="stylesheet" href="{{ asset ('assetss/css/styles.css') }}">
@section('section')

<div id="page-wrapper" >
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4>Gestion Annonces</h4>
        </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="index.html">Gestion Annonces</a></li>
                <li class="active">Ajouter une Annonce</li>
            </ol>
        </div>
        <!-- /.col-lg-12 -->
    </div>              
     <!-- /. ROW  -->
    <div id="page-inner">
    
        <div class="row bott-wid">
            <div class="col-md-4 col-sm-6">
                <div class="widget unique-widget">
                    <div class="row">
                        <div class="widget-caption info">
                            <div class="col-xs-4 no-pad">
                                <i class="icon icon-profile-male"></i>
                            </div>
                            <div class="col-xs-8 no-pad">
                                <div class="widget-detail">
                                    <h3><a class="link" href="{{ url('addHotel') }}">Hôtel</a></h3>
                                    <span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="widget unique-widget">
                    <div class="row">
                        <div class="widget-caption danger">
                            <div class="col-xs-4 no-pad">
                                <i class="icon icon-happy"></i>
                            </div>
                            <div class="col-xs-8 no-pad">
                                <div class="widget-detail">
                                    <h3><a class="link" href="{{ url('addAuberge') }}">Auberge</a></h3>
                                    <span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="widget unique-widget">
                    <div class="row">
                        <div class="widget-caption sucess">
                            <div class="col-xs-4 no-pad">
                                <i class="icon icon-basket"></i>
                            </div>
                            <div class="col-xs-8 no-pad">
                                <div class="widget-detail">
                                    <h3><a class="link" href="{{ url('addLogement') }}">Logement Meublés</a></h3>
                                    <span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           
        </div>
        <div class="row bott-wid">
            <div class="col-md-4 col-sm-6">
                <div class="widget unique-widget">
                    <div class="row">
                        <div class="widget-caption info">
                            <div class="col-xs-4 no-pad">
                                <i class="icon icon-profile-male"></i>
                            </div>
                            <div class="col-xs-8 no-pad">
                                <div class="widget-detail">
                                    <h3><a class="link" href="{{ url('addRestaurant') }}">Restaurant</a></h3>
                                    <span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="widget unique-widget">
                    <div class="row">
                        <div class="widget-caption danger">
                            <div class="col-xs-4 no-pad">
                                <i class="icon icon-happy"></i>
                            </div>
                            <div class="col-xs-8 no-pad">
                                <div class="widget-detail">
                                    <h3><a class="link" href="{{ url('addFastFood') }}">Fast Food</a></h3>
                                    <span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="widget unique-widget">
                    <div class="row">
                        <div class="widget-caption sucess">
                            <div class="col-xs-4 no-pad">
                                <i class="icon icon-basket"></i>
                            </div>
                            <div class="col-xs-8 no-pad">
                                <div class="widget-detail">
                                    <h3><a class="link" href="{{ url('addPatisserie') }}">Patisserie</a></h3>
                                    <span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
        </div>
        <div class="row bott-wid">
            <div class="col-md-4 col-sm-6">
                <div class="widget unique-widget">
                    <div class="row">
                        <div class="widget-caption info">
                            <div class="col-xs-4 no-pad">
                                <i class="icon icon-profile-male"></i>
                            </div>
                            <div class="col-xs-8 no-pad">
                                <div class="widget-detail">
                                    <h3><a class="link" href="{{ url('addBoite') }}">Boîte de Nuit </a></h3>
                                    <span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="widget unique-widget">
                    <div class="row">
                        <div class="widget-caption danger">
                            <div class="col-xs-4 no-pad">
                                <i class="icon icon-happy"></i>
                            </div>
                            <div class="col-xs-8 no-pad">
                                <div class="widget-detail">
                                    <h3><a class="link" href="{{ url('addBar') }}">Bars</a></h3>
                                    <span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="widget unique-widget">
                    <div class="row">
                        <div class="widget-caption sucess">
                            <div class="col-xs-4 no-pad">
                                <i class="icon icon-basket"></i>
                            </div>
                            <div class="col-xs-8 no-pad">
                                <div class="widget-detail">
                                    <h3><a class="link" href="{{ url('addLocation') }}">Location de Véhicule</a></h3>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          
        </div>
              <!--//intro-->
                {{-- <div id="cards-wrapper" class="cards-wrapper row">
                    <div class="item item-green col-md-4 col-sm-6 col-xs-6">
                        <div class="item-inner">
                            <div class="icon-holder">
                                <i class="icon fa fa-paper-plane"></i>
                            </div><!--//icon-holder-->
                            <h3 class="title">Hôtel</h3>
                            <p class="intro">.</p>
                            <a class="link" href="{{ url('addHotel') }}"><span></span></a>
                        </div><!--//item-inner-->
                    </div><!--//item-->
					<div class="item item-orange col-md-4 col-sm-6 col-xs-6">
                        <div class="item-inner">
                            <div class="icon-holder">
                                <span aria-hidden="true" class="icon icon_gift"></span>
                            </div><!--//icon-holder-->
                            <h3 class="title">Auberge</h3>
                            <p class="intro">.</p>
                            <a class="link" href="{{ url('addAuberge') }}"><span></span></a>
                        </div><!--//item-inner-->
                    </div><!--//item-->
                    <div class="item item-pink item-2 col-md-4 col-sm-6 col-xs-6">
                        <div class="item-inner">
                            <div class="icon-holder">
                                <span aria-hidden="true" class="icon icon_puzzle_alt"></span>
                            </div><!--//icon-holder-->
                            <h3 class="title">Logements Meublés</h3>
                            <p class="intro">.</p>
                            <a class="link" href="{{ url('addLogement') }}"><span></span></a>
                        </div><!--//item-inner-->
                    </div><!--//item-->



                    <div class="item item-blue col-md-4 col-sm-6 col-xs-6">
                        <div class="item-inner">
                            <div class="icon-holder">
                                <span aria-hidden="true" class="icon fa fa-code"></span>
                            </div><!--//icon-holder-->
                            <h3 class="title">Restaurants</h3>
                            <p class="intro">.</p>
                            <a class="link" href="{{ url('addRestaurant') }}"><span></span></a>
                        </div><!--//item-inner-->
                    </div><!--//item-->
                    <div class="item item-purple col-md-4 col-sm-6 col-xs-6">
                        <div class="item-inner">
                            <div class="icon-holder">
                                <span aria-hidden="true" class="icon icon_lifesaver"></span>
                            </div><!--//icon-holder-->
                            <h3 class="title">Fast Food</h3>
                            <p class="intro"></p>
                            <a class="link" href="{{ url('addFastFood') }}"><span></span></a>
                        </div><!--//item-inner-->
                    </div><!--//item-->
                    <div class="item item-primary col-md-4 col-sm-6 col-xs-6">
                        <div class="item-inner">
                            <div class="icon-holder">
                                <span aria-hidden="true" class="icon icon_genius"></span>
                            </div><!--//icon-holder-->
                            <h3 class="title">Patisseries</h3>
                            <p class="intro"></p>
                            <a class="link" href="{{ url('addPatisserie') }}"><span></span></a>
                        </div><!--//item-inner-->
                    </div><!--//item-->

                    
                    <div class="item item-green col-md-4 col-sm-6 col-xs-6">
                        <div class="item-inner">
                            <div class="icon-holder">
                                <i class="icon fa fa-paper-plane"></i>
                            </div><!--//icon-holder-->
                            <h3 class="title">Boîte de Nuit</h3>
                            <p class="intro">.</p>
                            <a class="link" href="{{ url('addBoite') }}"><span></span></a>
                        </div><!--//item-inner-->
                    </div><!--//item-->
					<div class="item item-orange col-md-4 col-sm-6 col-xs-6">
                        <div class="item-inner">
                            <div class="icon-holder">
                                <span aria-hidden="true" class="icon icon_gift"></span>
                            </div><!--//icon-holder-->
                            <h3 class="title">Bars</h3>
                            <p class="intro"></p>
                            <a class="link" href="{{ url('addBar') }}"><span></span></a>
                        </div><!--//item-inner-->
                    </div><!--//item-->
                    <div class="item item-pink item-2 col-md-4 col-sm-6 col-xs-6">
                        <div class="item-inner">
                            <div class="icon-holder">
                                <span aria-hidden="true" class="icon icon_puzzle_alt"></span>
                            </div><!--//icon-holder-->
                            <h3 class="title">Location de Véhicule</h3>
                            <p class="intro"></p>
                            <a class="link" href="{{ url('addLocation') }}"><span></span></a>
                        </div><!--//item-inner-->
                    </div><!--//item-->





                </div> --}}<!--//cards-->
                


    </div>
</div>

            </div><!--//container-->
        </section><!--//cards-section-->
    </div><!--//page-wrapper-->
    
    <!-- Main Javascript -->          
    <script type="text/javascript" src="{{asset ('assetss/plugins/jquery-1.12.3.min.js') }}"></script>
    <script type="text/javascript" src="{{asset ('assetss/plugins/bootstrap/js/bootstrap.min.js') }}"></script>                                                                     
    <script type="text/javascript" src="{{ asset('assetss/plugins/jquery-match-height/jquery.matchHeight-min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assetss/js/main.js') }}"></script>
@endsection
