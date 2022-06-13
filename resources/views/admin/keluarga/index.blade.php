@extends('layouts.adminapp')

@section('styles')
<!-- Custom styles for this page -->
<link href="{{ asset('vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endsection('styles')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid px-0 py-4">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">DATA KELUARGA</h1>


    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="/home/keluarga/add" class="btn btn-primary">Tambah Data</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No_KK</th>
                            <th>Setting</th>
                            <th>NIK_Ayah</th>
                            <th>Nama_Ayah</th>
                            <th>Tanggal_lahir_Ayah</th>
                            <th>NIK_Ibu</th>
                            <th>Nama_Ibu</th>
                            <th>Tanggal_lahir_Ibu</th>
                            <th>Alamat</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Password</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($keluarga as $index => $data)
                        <tr>
                            <td>{{ $data->no_kk }} </td>
                            <td>
                                <div class="row d-flex justify-content-center">
                                    <a class="btn btn-warning" href="{{ url('/home/keluarga/edit', $data->id_keluarga) }}" title="Edit"><i class="fas fa-pen-square"></i></a>
                                    <a class="btn btn-danger" href="{{ url('/home/keluarga/delete', $data->id_keluarga) }}" onclick="return confirm('Apakah Anda Yakin!')"><i class="fas fa-trash"></i></a>
                                </div>
                            </td>
                            <td>{{ $data->nik_ayah }} </td>
                            <td>{{ $data->nama_ayah }} </td>
                            <td>{{ $data->tanggal_lahir_ayah }} </td>
                            <td>{{ $data->nik_ibu }} </td>
                            <td>{{ $data->nama_ibu }} </td>
                            <td>{{ $data->tanggal_lahir_ibu }} </td>
                            <td>{{ $data->alamat }} </td>
                            <td>{{ $data->name }} </td>
                            <td>{{ $data->email }} </td>
                            <td>
                                <div class="d-flex justify-content-center">
                                    <a class="btn btn-info" href="{{ url('/home/keluarga/delete', $data->id_keluarga) }}" onclick="return confirm('Apakah Anda Yakin!')"><i class="fas fa-exchange-alt"></i></a>
                                </div>
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
