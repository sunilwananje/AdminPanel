<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="author" content="Digital Crown">
	<title>Welcome to SHIVANI</title>	
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<!-- Icons -->
	<link href="{{asset('admin/fonts/ionicons/css/ionicons.min.css')}}" rel="stylesheet">
	<link href="{{asset('admin/fonts/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">

	<!-- Plugins -->
	<link rel="stylesheet" href="{{asset('admin/css/plugins/c3.css')}}" >
	<link rel="stylesheet" href="{{asset('admin/css/plugins/waves.css')}}">
	<link rel="stylesheet" href="{{asset('admin/css/plugins/perfect-scrollbar.css')}}">	
	<link rel="stylesheet" href="{{asset('admin/css/plugins/select2.css')}}">
	<!-- Css/Less Stylesheets -->
	<link rel="stylesheet" href="{{asset('admin/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('admin/css/plugins/bootstrap-datepicker.css')}}">
	<link rel="stylesheet" href="{{asset('admin/css/plugins/summernote.css')}}">
	<link rel="stylesheet" href="{{asset('admin/css/main.min.css')}}">	 
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,500,700,300' rel='stylesheet' type='text/css'>
	<!-- Match Media polyfill for IE9 -->
	<!--[if IE 9]> <script src="scripts/ie/matchMedia.js"></script>  <![endif]--> 

	
	@yield('stylesheet')
</head>
<body id="app" class="app off-canvas">	
<div class="main-container clearfix">	
	@yield('content')
</div>

<script src="{{asset('admin/js/bootstrap.min.js')}}"></script>
<script src="{{asset('admin/js/vendors.js')}}"></script>
<script src="{{asset('admin/js/plugins/d3.min.js')}}"></script>
<script src="{{asset('admin/js/plugins/c3.min.js')}}"></script>
<script src="{{asset('admin/js/plugins/screenfull.js')}}"></script>
<script src="{{asset('admin/js/plugins/perfect-scrollbar.min.js')}}"></script>
<script src="{{asset('admin/js/plugins/waves.min.js')}}"></script>
<script src="{{asset('admin/js/plugins/jquery.sparkline.min.js')}}"></script>
<script src="{{asset('admin/js/plugins/jquery.easypiechart.min.js')}}"></script>
<script src="{{asset('admin/js/plugins/bootstrap-rating.min.js')}}"></script>
<script src="{{asset('admin/js/plugins/bootstrap-colorpicker.min.js')}}"></script>
<script src="{{asset('admin/js/plugins/bootstrap-slider.min.js')}}"></script>
<script src="{{asset('admin/js/plugins/summernote.min.js')}}"></script>

<script src="{{asset('admin/js/app.js')}}"></script>
<script src="{{asset('admin/js/index.init.js')}}"></script>
<script src="{{asset('admin/js/plugins/select2.min.js')}}"></script>
<script src="{{asset('admin/js/plugins/moment.min.js')}}"></script>
<script>
$(document).ready(function(){
$('[data-toggle="tooltip"]').tooltip();   
});
$(document).on('click','.homeworkModel',function(){
	$('#homeworkModel').modal('show');
})
</script>
<script type="text/javascript">
	$.ajaxSetup({
		headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
	});
</script>
<script src="{{asset('admin/js/plugins/bootstrap-datepicker.min.js')}}"></script>
<script src="{{asset('admin/js/form-elements.init.js')}}"></script>
<!-- <script src="scripts/tables.init.js"></script> -->
@yield('script')
</body>
</html>