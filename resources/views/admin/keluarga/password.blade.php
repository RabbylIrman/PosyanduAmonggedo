@extends('layouts.adminapp')

@section('content')
	@section('content_header')
	<h1 class="ml-2">Ubah Password Keluarga</h1>
	@endsection

	<div class="container">
			<div class="row justify-content-center">
					<div class="col">
							<div class="card">
									<div class="card-header">Edit Password</div>
									<div class="card-body">
										<form method="post" action="{{ route('keluarga.profile.update') }}" enctype="multipart/form-data">
											{{ method_field('patch') }}
											{{ csrf_field() }}
	
											<div class="form-group row">
													<label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password Baru') }}</label>

													<div class="col-md-6">
															<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

															@error('password')
																	<span class="invalid-feedback" role="alert">
																			<strong>{{ $message }}</strong>
																	</span>
															@enderror
													</div>
											</div>
	
											<div class="form-group row">
													<label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Konfirmasi Password') }}</label>

													<div class="col-md-6">
															<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">

															@error('password')
																	<span class="invalid-feedback" role="alert">
																			<strong>{{ $message }}</strong>
																	</span>
															@enderror
													</div>
											</div>

											<div class="row">
												<div class="col-md-4"></div>
												<div class="col-md-6">
													<button type="submit" class="btn btn-sm btn-primary">Update</button>
													<a href="/home/keluarga" class="btn btn-sm btn-secondary" > Batal </a>
												</div>
											</div>
										</form>
									</div>
							</div>
					</div>
			</div>
	</div>
@endsection