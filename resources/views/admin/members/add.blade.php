@extends('layouts.adminapp') 

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid px-0 py-4">
	<h1 class="h3 mb-4 text-gray-800">Form Tambah Data Kader</h1>
    <form method="post" action="{{ url('/home/kader') }}" enctype="multipart/form-data">
		{{ csrf_field() }}
		<div class="row mb-3">
			<label for="nama_kader" class="col-sm-2 col-form-label">Nama Lengkap</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="nama_kader" name="nama_kader" required>
			</div>
		</div>
		<div class="row mb-3">
			<label for="nomor_hp" class="col-sm-2 col-form-label">Nomor Handphone</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="nomor_hp" name="nomor_hp" required>
			</div>
		</div>
		<div class="row mb-3">
			<label for="alamat_kader" class="col-sm-2 col-form-label">Alamat</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="alamat_kader" name="alamat_kader" required>
			</div>
		</div>
		<div class="row mb-3">
			<label for="email" class="col-sm-2 col-form-label">Email</label>
			<div class="col-sm-10">
				<input type="email" class="form-control" id="email" name="email" required>
			</div>
		</div>
		<div class="row mb-3">
			<label for="name" class="col-sm-2 col-form-label">Username</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="name" name="name" required>
			</div>
		</div>
		<div class="row mb-3">
			<label for="password" class="col-sm-2 col-form-label">Password</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="password" name="password" required>
			</div>
		</div>
		<button type="submit" class="btn btn-primary">Simpan Data</button>
    </form>
</div>
@endsection

