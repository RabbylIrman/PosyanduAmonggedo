@extends('layouts.userapp')

@section('content')
	<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 text-gray-800">SELAMAT DATANG!</h1>
<div class="container">
	<div class="row justify-content-center">
		<div class="col">
			<div class="card">
								<h3 class="mt-3 ml-3 mb-0">Data Keluarga</h3>
									<div class="card-body">
										<p>Halo, Selamat datang di halaman data keluarga</p>

										<div class="row">
											<div class="col-3"><p>Nomor KK</p></div>
											<div class="col"><p> <b>{{ $keluarga->no_kk }}</b> </p></div>
										</div>

										<div class="row">
											<div class="col-3"><p>NIK Ayah</p></div>
											<div class="col"><p> <b>{{ $keluarga->nik_ayah }}</b> </p></div>
										</div>
										
										<div class="row">
											<div class="col-3"><p>Nama Ayah</p></div>
											<div class="col"><p> <b>{{ $keluarga->nama_ayah }}</b> </p></div>
										</div>
										
										<div class="row">
											<div class="col-3"><p>Tanggal Lahir Ayah</p></div>
											<div class="col"><p> <b>{{ $keluarga->tanggal_lahir_ayah }}</b> </p></div>
										</div>

										<div class="row">
											<div class="col-3"><p>NIK Ibu</p></div>
											<div class="col"><p> <b>{{ $keluarga->nik_ibu }}</b> </p></div>
										</div>
										
										<div class="row">
											<div class="col-3"><p>Nama Ibu</p></div>
											<div class="col"><p> <b>{{ $keluarga->nama_ibu }}</b> </p></div>
										</div>
										
										<div class="row">
											<div class="col-3"><p>Tanggal Lahir Ibu</p></div>
											<div class="col"><p> <b>{{ $keluarga->tanggal_lahir_ibu }}</b> </p></div>
										</div>

										<div class="row">
											<div class="col-3"><p>Alamat</p></div>
											<div class="col"><p> <b>{{ $keluarga->alamat }}</b> </p></div>
										</div>
									</div>
							</div>
					</div>
			</div>
	</div>
</div>
<!-- /.container-fluid -->
@endsection