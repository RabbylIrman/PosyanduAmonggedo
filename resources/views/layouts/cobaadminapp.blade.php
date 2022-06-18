@extends('adminlte::page')

@yield('title')

<div id="app">
	@section('content')
		@yield('content_header')
		{{
			$slot
		}}
	@stop
</div>

@section('css')
		<link rel="icon" type="icon/x-image" href="{{ asset('images/logo1.png') }}">
		<!-- <link href=" {{ asset('css/app.css') }}" rel="stylesheet"> -->
		<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/css/bootstrap-datetimepicker.min.css">
		
		<!-- Custom fonts for this template-->
		<link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    	<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
		<script src="{{ asset('js/app.js') }}"></script>
		<livewire:styles />
@stop

@section('js')
	<!-- <script type="text/javascript" src="{{ asset('js/app.js') }}"></script> -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/js/bootstrap-datetimepicker.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
	<livewire:scripts />
	<script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
	<script src="https://cdn.jsdelivr.net/gh/livewire/turbolinks@v0.1.x/dist/livewire-turbolinks.js" data-turbolinks-eval="false" data-turbo-eval="false"></script>
	@yield('scripts')
@stop