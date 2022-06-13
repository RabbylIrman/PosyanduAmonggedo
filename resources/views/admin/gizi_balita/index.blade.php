@extends('layouts.adminapp')

@section('styles')
<!-- Custom styles for this page -->
<link href="{{ asset('vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endsection('styles')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid px-0 py-4">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">DATA GIZI BALITA</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="/home/balita/add" class="btn btn-primary">Tambah Data</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No_KK</th>
                            <th>Setting</th>
                            <th>Nama_Balita</th>
                            <th>Kelamin(L/P)</th>
                            <th>Tanggal_Lahir</th>
                            <th>Nama_Ayah</th>
                            <th>Nama_Ibu</th>
                            <th>Alamat_Rumah</th>
                            <th>Umur</th>
                            <th>Data_Tahun</th>
                            <th>Januari</th>
                            <th>Februari</th>
                            <th>Maret</th>
                            <th>April</th>
                            <th>Mei</th>
                            <th>Juni</th>
                            <th>Juli</th>
                            <th>Agustus</th>
                            <th>September</th>
                            <th>Oktober</th>
                            <th>November</th>
                            <th>Desember</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($balita as $index => $data)
                        <tr>
                            <td>{{ $data->no_kk }} </td>
                            <td>
                                <div class="row d-flex justify-content-center">
                                    <a class="btn btn-warning" href="{{ url('/home/balita/edit', $data->id_balita) }}" title="Edit"><i class="fas fa-pen-square"></i></a>
                                    <a class="btn btn-danger" href="{{ url('/home/balita/delete', $data->id_balita) }}" onclick="return confirm('Apakah Anda Yakin!')"><i class="fas fa-trash"></i></a>
                                </div>
                            </td>
                            <td>{{ $data->nama_balita }} </td>
                            <td>{{ $data->jenis_kelamin_balita }} </td>
                            <td>{{ $data->tanggal_lahir_balita }} </td>
                            <td>{{ $data->nama_ayah }} </td>
                            <td>{{ $data->nama_ibu }} </td>
                            <td>{{ $data->alamat }} </td>
                            <td>{{ $data->umur_balita }} </td>
                            <td>{{ $data->data_tahun }} </td>
                            <td>
                                @if($data->bb_januari != '')
                                {{ $data->bb_januari }}/{{ $data->tb_januari }}
                                @endif
                            </td>
                            <td>
                                @if($data->bb_februari != '')
                                {{ $data->bb_februari }}/{{ $data->tb_februari }}
                                @endif
                            </td>
                            <td>
                                @if($data->bb_maret != '')
                                {{ $data->bb_maret }}/{{ $data->tb_maret }}
                                @endif
                            </td>
                            <td>
                                @if($data->bb_april != '')
                                {{ $data->bb_april }}/{{ $data->tb_april }}
                                @endif
                            </td>
                            <td>
                                @if($data->bb_mei != '')
                                {{ $data->bb_mei }}/{{ $data->tb_mei }}
                                @endif
                            </td>
                            <td>
                                @if($data->bb_juni != '')
                                {{ $data->bb_juni }}/{{ $data->tb_juni }}
                                @endif
                            </td>
                            <td>
                                @if($data->bb_juli != '')
                                {{ $data->bb_juli }}/{{ $data->tb_juli }}
                                @endif
                            </td>
                            <td>
                                @if($data->bb_agustus != '')
                                {{ $data->bb_agustus }}/{{ $data->tb_agustus }}
                                @endif
                            </td>
                            <td>
                                @if($data->bb_september != '')
                                {{ $data->bb_september }}/{{ $data->tb_september }}
                                @endif
                            </td>
                            <td>
                                @if($data->bb_oktober != '')
                                {{ $data->bb_oktober }}/{{ $data->tb_oktober }}
                                @endif
                            </td>
                            <td>
                                @if($data->bb_november != '')
                                {{ $data->bb_november }}/{{ $data->tb_november }}
                                @endif
                            </td>
                            <td>
                                @if($data->bb_desember != '')
                                {{ $data->bb_desember }}/{{ $data->tb_desember }}
                                @endif
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<!-- Page level plugins -->
<script src="{{ asset('vendor/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

<!-- Page level custom scripts -->
<script src="{{ asset('js/demo/datatables-demo.js') }}"></script>

@endsection
