


<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="zxx">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="keywords" content="">
		<meta name="robots" content="index,follow">

		<title>Listing Hub - Listing & Directory Template | ThemezHub</title>
		
		<!-- BOOTSTRAP STYLES-->
		<link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.7.1/sweetalert2.min.css" integrity="sha512-NvuRGlPf6cHpxQqBGnPe7fPoACpyrjhlSNeXVUY7BZAj1nNhuNpRBq3osC4yr2vswUEuHq2HtCsY2vfLNCndYA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.7.1/sweetalert2.css" integrity="sha512-JzSVRb7c802/njMbV97pjo1wuJAE/6v9CvthGTDxiaZij/TFpPQmQPTcdXyUVucsvLtJBT6YwRb5LhVxX3pQHQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    
		<!-- FONTAWESOME STYLES-->
		<link href="{{ asset('assets/css/font-awesome.css') }}" rel="stylesheet" />
		
		<!-- Line Font STYLES-->
		<link href="{{ asset('assets/css/line-font.css') }}" rel="stylesheet" />
		
		<!-- Dropzone Style-->
		<link href="{{ asset('assets/css/dropzone.css') }}" rel="stylesheet" />
		
		<!-- Bootstrap Editor-->
		<link href="{{ asset('assets/css/bootstrap-wysihtml5.css') }}" rel="stylesheet" />
		
		<!-- Common Style -->
		<link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" />
		
		<!-- CUSTOM STYLES-->
		<link href="{{ asset('assets/css/custom.css') }}" rel="stylesheet" />
		

		
		<!-- CUSTOM STYLES-->
		<link href="{{ asset('assets/css/custom.css') }}" rel="stylesheet" />
		<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css" integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=" crossorigin=""/>

		<style>
			#map { height: 160px; }
		</style>
		
		<link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
		<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.1/css/buttons.dataTables.min.css">
		
	</head>
	<body>
		@include('layout.slidebar')
		  @include('layout.navbar')
		<div id="wrapper">
			@include('sweetalert::alert')

            @yield('section')

            
			<footer class="main-footer">
				<div class="pull-right hidden-xs">
				  <b>Version</b> 1.1
				</div>
				<strong>©Copyright 2018 <a href="index.html">Listing Hub</a>.</strong> All rights
				reserved.
			</footer>
		</div>
		<!-- /. WRAPPER  -->
	

{{-- @yield('script')
 --}}
	 
		<!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
		<!-- JQUERY SCRIPTS -->
		<script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js" integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=" crossorigin=""></script>
		<script src="{{ asset('assets/js/jquery-1.10.2.js') }}"></script>
		<!-- BOOTSTRAP SCRIPTS -->
		<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
		<!-- METISMENU SCRIPTS -->
		<script src="{{ asset('assets/js/jquery.metisMenu.js') }}"></script>
		<!-- Bootstrap Editor Js -->
		<script src="{{ asset('assets/js/wysihtml5-0.3.0.js') }}"></script>
		<script src="{{ asset('assets/js/bootstrap-wysihtml5.js') }}"></script>
		<!-- Scrollbar Js -->
		<script src="{{ asset('assets/js/jquery.slimscroll.js') }}"></script>
		<!-- Dropzone Js -->
		<script src="{{ asset('assets/js/dropzone.js') }}"></script>
		<!-- CUSTOM SCRIPTS -->
		<script src="{{ asset('assets/js/custom.js') }}"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.7.1/sweetalert2.min.js" integrity="sha512-vCI1Ba/Ob39YYPiWruLs4uHSA3QzxgHBcJNfFMRMJr832nT/2FBrwmMGQMwlD6Z/rAIIwZFX8vJJWDj7odXMaw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.7.1/sweetalert2.js" integrity="sha512-dWgIvDgjog3N60yT9nUdZkV/hLZeDMmxXyO/dhf8E/Zwgs9qZ0aop518pj0IEKhTUojPKqkzqPqrmyr6VnnE9Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.7.1/sweetalert2.all.min.js" integrity="sha512-KfbhdnXs2iEeelTjRJ+QWO9veR3rm6BocSoNoZ4bpPIZCsE1ysIRHwV80yazSHKmX99DM0nzjoCZjsjNDE628w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.7.1/sweetalert2.all.js" integrity="sha512-RurNlBV74Iag8VNau1fWFMhv73YfMw8dwbwtaJQDoWwRoYT0qzlYvBsEWtpEV+gWRr4MwHlPpmOinUOLnaJH5A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
		<script src="https://cdn.datatables.net/plug-ins/1.13.1/i18n/fr-FR.json" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
       
		@yield('js')
		




	</body>
</html>