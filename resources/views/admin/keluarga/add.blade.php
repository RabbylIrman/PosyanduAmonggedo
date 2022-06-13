@extends('layouts.adminapp')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid px-0 py-10">
	<h1 class="h3 mb-4 text-gray-800">Form Tambah Keluarga</h1>
	<form method="post" action="{{ url('/home/keluarga') }}" enctype="multipart/form-data">
		{{ csrf_field() }}
		<div class="row mb-3">
			<label for="no_kk" class="col-sm-2 col-form-label">Nomor KK</label>
			<div class="col-sm-3">
				<input type="text" class="form-control" id="no_kk" name="no_kk" required>
			</div>
		</div>
		<div class="row mb-3">
			<label for="nik_ayah" class="col-sm-2 col-form-label">NIK Ayah</label>
			<div class="col-sm-3">
				<input type="text" class="form-control" id="nik_ayah" name="nik_ayah" required>
			</div>
		</div>
		<div class="row mb-3">
			<label for="nama_ayah" class="col-sm-2 col-form-label">Nama Ayah</label>
			<div class="col-sm-3">
				<input type="text" class="form-control" id="nama_ayah" name="nama_ayah" required>
			</div>
		</div>
		<div class="row mb-3">
			<label for="tanggal_lahir_ayah" class="col-sm-2 col-form-label">Tanggal Lahir Ayah</label>
			<div class="col-sm-3">
				<input type="date" class="form-control" id="tanggal_lahir_ayah" name="tanggal_lahir_ayah" required>
			</div>
		</div>
		<div class="row mb-3">
			<label for="nik_ibu" class="col-sm-2 col-form-label">NIK Ibu</label>
			<div class="col-sm-3">
				<input type="text" class="form-control" id="nik_ibu" name="nik_ibu" required>
			</div>
		</div>
		<div class="row mb-3">
			<label for="nama_ibu" class="col-sm-2 col-form-label">Nama Ibu</label>
			<div class="col-sm-3">
				<input type="text" class="form-control" id="nama_ibu" name="nama_ibu" required>
			</div>
		</div>
		<div class="row mb-3">
			<label for="tanggal_lahir_ibu" class="col-sm-2 col-form-label">Tanggal Lahir Ibu</label>
			<div class="col-sm-3">
				<input type="date" class="form-control" id="tanggal_lahir_ibu" name="tanggal_lahir_ibu" required>
			</div>
		</div>
		<div class="row mb-3">
			<label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
			<div class="col-sm-3">
				<input type="text" class="form-control" id="alamat" name="alamat" required>
			</div>
		</div>
		<div class="row mb-3">
			<label for="name" class="col-sm-2 col-form-label">Username</label>
			<div class="col-sm-3">
				<input type="text" class="form-control" id="name" name="name" required>
			</div>
		</div>
		<div class="row mb-3">
			<label for="email" class="col-sm-2 col-form-label">Email</label>
			<div class="col-sm-3">
				<input type="email" class="form-control" id="email" name="email">
			</div>
		</div>
		<div class="row mb-3">
			<label for="password" class="col-sm-2 col-form-label">Password</label>
			<div class="col-sm-3">
				<input type="text" class="form-control" id="password" name="password">
			</div>
		</div>
		<button type="submit" class="btn btn-primary">Simpan Data</button>
	</form>
</div>
@endsection

