@extends('layouts.adminapp')

@section('styles')
	<!-- Custom styles for this page -->
	<link href="{{ asset('vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endsection('styles')

@section('content')
                <!-- Begin Page Content -->
                <div class="container-fluid px-0 py-4">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">KADER PUSKESMAS</h1>
                    

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <a href="/home/kader/add"class="btn btn-primary">Tambah Data</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Setting</th>
                                            <th>Nama_Lengkap</th>
                                            <th>Nomor_Handphone</th>
                                            <th>Alamat</th>
                                            <th>Email</th>
                                            <th>Username</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($kader as $index => $data)
                                        <tr>
                                            <td>
                                                <div class="row d-flex justify-content-center">
													<a class="btn btn-warning" href="{{ url('/home/kader/edit', $data->id_user) }}" title="Edit"><i class="fas fa-pen-square"></i></a>
                                                    <a class="btn btn-danger" href="{{ url('/home/kader/delete', $data->id_kader) }}" onclick="return confirm('Apakah Anda Yakin!')"><i class="fas fa-trash"></i></a>
                                                </div>
                                            </td>
                                            <td>{{ $data->nama_kader }} </td>
                                            <td>{{ $data->alamat_kader }} </td>
                                            <td>{{ $data->nomor_hp }} </td>
                                            <td>{{ $data->email }} </td>
                                            <td>{{ $data->name }} </td>
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
