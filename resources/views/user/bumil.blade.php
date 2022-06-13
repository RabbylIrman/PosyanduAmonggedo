@extends('layouts.userapp')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">
<h1 class="h3 mb-2 text-gray-800">DATA IBU HAMIL</h1>
<div class="content">
		<div class="container-fluid">
			<div class="row">	
				@foreach($bumil as $index => $data)
				<div class="col-lg-12">
					<div class="card">
						<div class="card-header border-0">
							<div class="d-flex justify-content-between">
								<h3 class="card-title">{{ $data->nama_ibu }}</h3>
							</div>
						</div>
						<div class="card-body pt-0">
							<div class="row">
								<div class="col-3">Anak Ke- </div>
								<p>: {{ $data->anak_ke }}</p>
							</div>
							<div class="row">
								<div class="col-3">Usia Kandungan</div>
								<p>: {{ $data->usia_kandungan }} Bulan</p>
							</div>
							<div class="row">
								<div class="col-3">Tinggi Badan</div>
								<p>: {{ $data->tinggi_badan }} cm</p>
							</div>
							<div class="row">
								<div class="col-3">Berat Badan Sebelumnya</div>
								<p>: {{ $data->berat_badan_sebelumnya }} kg</p>
							</div>
							<div class="row mt-3">
								<div class="col-6">
									<h4>Grafik Berat Badan</h4>
								</div>
								<div class="col-6">
									<h4>Grafik Lingkar Longgar</h4>
								</div>
								<div class="col-6 mb-4">
									<canvas id="bb-chart" height="300"></canvas>
								</div>
								<div class="col-6 mb-4">
									<canvas id="ll-chart" height="300"></canvas>
								</div>
							</div>
							<div class="d-flex flex-row justify-content-end">
								<span class="mr-2">
									<i class="fas fa-square text-primary"></i> {{ $data->data_tahun }}
								</span>
							</div>
						</div>
					</div>
					
				</div>
				@endforeach
			</div>
		</div>
	</div>
</div>
@endsection

@section('scripts')
	<!-- jQuery -->
	<script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
	<!-- OPTIONAL SCRIPTS -->
	<script src="{{ asset('vendor/chart.js/Chart.min.js') }}"></script>
	<script>
						$(function () {
							'use strict'
						
							const ticksStyle = {
								fontColor: '#495057',
								fontStyle: 'bold'
							}
						
							const mode = 'index'
							const intersect = true
						
							@foreach($bumil as $index => $data)
							const $bbChart = $('#bb-chart')
							const bbChart = new Chart($bbChart, {
								data: {
										labels: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'],
										datasets: [{
										type: 'line',
										data: [
												{{ $data->bb_januari }} ,
												{{ $data->bb_februari }} ,
												{{ $data->bb_maret }} ,
												{{ $data->bb_april }} ,
												{{ $data->bb_mei }} ,
												{{ $data->bb_juni }} ,
												{{ $data->bb_juli }} ,
												{{ $data->bb_agustus }} ,
												{{ $data->bb_september }} ,
												{{ $data->bb_oktober }} ,
												{{ $data->bb_november }} ,
												{{ $data->bb_desember }} ,
										],
										backgroundColor: 'transparent',
										borderColor: '#007bff',
										pointBorderColor: '#007bff',
										pointBackgroundColor: '#007bff',
										fill: false
										// pointHoverBackgroundColor: '#007bff',
										// pointHoverBorderColor    : '#007bff'
									}]
								},
								options: {
									maintainAspectRatio: false,
									tooltips: {
										mode: mode,
										intersect: intersect
									},
									hover: {
										mode: mode,
										intersect: intersect
									},
									legend: {
										display: false
									},
									scales: {
									yAxes: [{
										// display: false,
										gridLines: {
											display: true,
											lineWidth: '4px',
											color: 'rgba(0, 0, 0, .2)',
											zeroLineColor: 'transparent'
										},
										ticks: $.extend({
											beginAtZero: true,
											suggestedMax: 0
										}, ticksStyle)
									}],
									xAxes: [{
										display: true,
										gridLines: {
											display: false
										},
										ticks: ticksStyle
									}]
									}
								}
							})
							const $llChart = $('#ll-chart')
							const llChart = new Chart($llChart, {
								data: {
										labels: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'],
										datasets: [{
										type: 'line',
										data: [
												{{ $data->ll_januari }} ,
												{{ $data->ll_februari }} ,
												{{ $data->ll_maret }} ,
												{{ $data->ll_april }} ,
												{{ $data->ll_mei }} ,
												{{ $data->ll_juni }} ,
												{{ $data->ll_juli }} ,
												{{ $data->ll_agustus }} ,
												{{ $data->ll_september }} ,
												{{ $data->ll_oktober }} ,
												{{ $data->ll_november }} ,
												{{ $data->ll_desember }} ,
										],
										backgroundColor: 'transparent',
										borderColor: '#007bff',
										pointBorderColor: '#007bff',
										pointBackgroundColor: '#007bff',
										fill: false
										// pointHoverBackgroundColor: '#007bff',
										// pointHoverBorderColor    : '#007bff'
									}]
								},
								options: {
									maintainAspectRatio: false,
									tooltips: {
										mode: mode,
										intersect: intersect
									},
									hover: {
										mode: mode,
										intersect: intersect
									},
									legend: {
										display: false
									},
									scales: {
									yAxes: [{
										// display: false,
										gridLines: {
											display: true,
											lineWidth: '4px',
											color: 'rgba(0, 0, 0, .2)',
											zeroLineColor: 'transparent'
										},
										ticks: $.extend({
											beginAtZero: true,
											suggestedMax: 5
										}, ticksStyle)
									}],
									xAxes: [{
										display: true,
										gridLines: {
											display: false
										},
										ticks: ticksStyle
									}]
									}
								}
							})
							@endforeach
						})
					</script>
	
@endsection