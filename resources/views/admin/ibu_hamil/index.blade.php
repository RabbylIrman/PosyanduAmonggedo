@extends('layouts.adminapp')

@section('styles')
	<!-- Custom styles for this page -->
	<link href="{{ asset('vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endsection('styles')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid px-0 py-4">
                    <h1 class="h3 mb-2 text-gray-800">DATA IBU HAMIL</h1>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <a href="/home/bumil/add"class="btn btn-primary">Tambah Data</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No_KK</th>
                                            <th>Setting</th>
                                            <th>Nama_Ibu_Hamil</th>
                                            <th>Nama_Ayah</th>
                                            <th>Tanggal_Lahir</th>
                                            <th>NIK_Ibu</th>
                                            <th>NIK_Ayah</th>
                                            <th>Berat_Badan_Sebelumnya</th>
                                            <th>Umur_Ibu_Hamil</th>
                                            <th>Anak_Ke</th>
                                            <th>Usia_Kandungan</th>
                                            <th>Tinggi_Badan</th>
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
                                            <th>Desembar</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($bumil as $index => $data)
                                        <tr>
                                            <td>{{ $data->no_kk }} </td>
                                            <td>
                                            <div class="row d-flex justify-content-center">
													<a class="btn btn-warning" href="{{ url('/home/bumil/edit', $data->id_bumil) }}" title="Edit"><i class="fas fa-pen-square"></i></a>
													<a class="btn btn-danger" href="{{ url('/home/bumil/delete', $data->id_bumil) }}" onclick="return confirm('Apakah Anda Yakin!')"><i class="fas fa-trash"></i></a>
												</div>
                                            </td>
                                            <td>{{ $data->nama_ibu }} </td>
                                            <td>{{ $data->nama_ayah }} </td>
                                            <td>{{ $data->tanggal_lahir_ibu }} </td>
                                            <td>{{ $data->nik_ibu }} </td>
                                            <td>{{ $data->nik_ayah }} </td>
                                            <td>{{ $data->berat_badan_sebelumnya }} </td>
                                            <td>{{ $data->umur_bumil }} </td>
                                            <td>{{ $data->anak_ke }} </td>
                                            <td>{{ $data->usia_kandungan }} </td>
                                            <td>{{ $data->tinggi_badan }} </td>
                                            <td>{{ $data->data_tahun }} </td>
                                            <td>
                                                @if($data->bb_januari != '')
                                                    {{ $data->bb_januari }}/{{ $data->ll_januari }}
                                                @endif
                                            </td>
                                            <td>
                                                @if($data->bb_februari != '')
                                                    {{ $data->bb_februari }}/{{ $data->ll_februari }} 
                                                @endif
                                            </td>
                                            <td>
                                                @if($data->bb_maret != '')
                                                    {{ $data->bb_maret }}/{{ $data->ll_maret }} 
                                                @endif
                                            </td>
                                            <td>
                                                @if($data->bb_april != '')
                                                    {{ $data->bb_april }}/{{ $data->ll_april }} 
                                                @endif
                                            </td>
                                            <td>
                                                @if($data->bb_mei != '')
                                                    {{ $data->bb_mei }}/{{ $data->ll_mei }} 
                                                @endif
                                            </td>
                                            <td>
                                                @if($data->bb_juni != '')
                                                    {{ $data->bb_juni }}/{{ $data->ll_juni }} 
                                                @endif
                                            </td>
                                            <td>
                                                @if($data->bb_juli != '')
                                                    {{ $data->bb_juli }}/{{ $data->ll_juli }} 
                                                @endif
                                            </td>
                                            <td>
                                                @if($data->bb_agustus != '')
                                                    {{ $data->bb_agustus }}/{{ $data->ll_agustus }} 
                                                @endif
                                            </td>
                                            <td>
                                                @if($data->bb_september != '')
                                                    {{ $data->bb_september }}/{{ $data->ll_september }} 
                                                @endif
                                            </td>
                                            <td>
                                                @if($data->bb_oktober != '')
                                                    {{ $data->bb_oktober }}/{{ $data->ll_oktober }}
                                                @endif
                                            </td>
                                            <td>
                                                @if($data->bb_november != '')
                                                    {{ $data->bb_november }}/{{ $data->ll_november }} 
                                                @endif
                                            </td>
                                            <td>
                                                @if($data->bb_desember != '')
                                                    {{ $data->bb_desember }}/{{ $data->ll_desember }} 
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
            </div>
@endsection

@section('scripts')
    <!-- Page level plugins -->
    <script src="{{ asset('vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset('js/demo/datatables-demo.js') }}"></script>
	
@endsection
