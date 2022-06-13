@extends('layouts.userapp')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">DATA GIZI BALITA</h1>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                @foreach($balita as $index => $data)
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header border-0">
                            <div class="d-flex justify-content-between">
                                <h3 class="card-title">{{ $data->nama_balita }}</h3>
                            </div>
                        </div>
                        <div class="card-body pt-0">
                            <div class="row">
                                <div class="col-3">Jenis Kelamin</div>
                                <p>: {{ $data->jenis_kelamin_balita }}</p>
                            </div>
                            <div class="row">
                                <div class="col-3">Tanggal Lahir</div>
                                <p>: {{ $data->tanggal_lahir_balita }}</p>
                            </div>
                            <div class="row">
                                <div class="col-3">Umur</div>
                                <p>: {{ $data->umur_balita }} Bulan</p>
                            </div>
                            <div class="row mt-3">
                                <div class="col-6">
                                    <h4>Grafik Berat Badan</h4>
                                </div>
                                <div class="col-6">
                                    <h4>Grafik Tinggi Badan</h4>
                                </div>
                                <div class="col-6 mb-4">
                                    <canvas id="bb-chart" height="300"></canvas>
                                </div>
                                <div class="col-6 mb-4">
                                    <canvas id="tb-chart" height="300"></canvas>
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
    $(function() {
        'use strict'

        const ticksStyle = {
            fontColor: '#495057',
            fontStyle: 'bold'
        }

        const mode = 'index'
        const intersect = true

        @foreach($balita as $index => $data)
        const $bbChart = $('#bb-chart')
        const bbChart = new Chart($bbChart, {
            data: {
                labels: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'],
                datasets: [{
                    type: 'line',
                    data: [{
                            {
                                $data - > bb_januari
                            }
                        },
                        {
                            {
                                $data - > bb_februari
                            }
                        },
                        {
                            {
                                $data - > bb_maret
                            }
                        },
                        {
                            {
                                $data - > bb_april
                            }
                        },
                        {
                            {
                                $data - > bb_mei
                            }
                        },
                        {
                            {
                                $data - > bb_juni
                            }
                        },
                        {
                            {
                                $data - > bb_juli
                            }
                        },
                        {
                            {
                                $data - > bb_agustus
                            }
                        },
                        {
                            {
                                $data - > bb_september
                            }
                        },
                        {
                            {
                                $data - > bb_oktober
                            }
                        },
                        {
                            {
                                $data - > bb_november
                            }
                        },
                        {
                            {
                                $data - > bb_desember
                            }
                        },
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
        const $tbChart = $('#tb-chart')
        const tbChart = new Chart($tbChart, {
            data: {
                labels: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'],
                datasets: [{
                    type: 'line',
                    data: [{
                            {
                                $data - > tb_januari
                            }
                        },
                        {
                            {
                                $data - > tb_februari
                            }
                        },
                        {
                            {
                                $data - > tb_maret
                            }
                        },
                        {
                            {
                                $data - > tb_april
                            }
                        },
                        {
                            {
                                $data - > tb_mei
                            }
                        },
                        {
                            {
                                $data - > tb_juni
                            }
                        },
                        {
                            {
                                $data - > tb_juli
                            }
                        },
                        {
                            {
                                $data - > tb_agustus
                            }
                        },
                        {
                            {
                                $data - > tb_september
                            }
                        },
                        {
                            {
                                $data - > tb_oktober
                            }
                        },
                        {
                            {
                                $data - > tb_november
                            }
                        },
                        {
                            {
                                $data - > tb_desember
                            }
                        },
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
