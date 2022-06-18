@extends('layouts.adminapp')

@section('content')
	@section('content_header')
	<h1 class="ml-2">Profile Admin</h1>
	@endsection

	<div class="container">
			<div class="row justify-content-center">
					<div class="col">
							<div class="card">
									<div class="card-body">
										<p>Halo {{ $user->name }}, selamat datang di halaman profil Anda</p>

										<div class="row">
											<div class="col-3"><p>Username</p></div>
											<div class="col"><p> <b>{{ $user->name }}</b> </p></div>
										</div>

										<div class="row mb-5">
											<div class="col-3"><p>Email</p></div>
											<div class="col"><p> <b>{{ $user->email }}</b> </p></div>
										</div>

										<a href="{{ url("/home/profile/edit", $user->id) }}" class="btn btn-sm btn-primary">Ubah Password</a>
									</div>
							</div>
					</div>
			</div>
	</div>
@endsection

@section('scripts')
	<script>
		$(document).ready( function () {
			$('#bookTable').DataTable();
		});
	</script>
@endsection
