@extends('layouts.adminapp')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid px-0 py-4">
	@if(count($errors) > 0)
			<div class="alert alert-danger mt-3">
				@foreach ($errors->all() as $error)
				{{ $error }} <br/>
				@endforeach
			</div>
	@endif
	<h1 class="h3 mb-4 text-gray-800">Form Tambah Data Kader</h1>
    <form method="post" action="{{ url('/home/kader', $kader->id_user ) }}" enctype="multipart/form-data">
		{{ method_field('PUT') }}
		{{ csrf_field() }}
		<div class="row mb-3">
			<label for="nama_kader" class="col-sm-2 col-form-label">Nama Lengkap</label>
			<div class="col-sm-10">
				<input type="text" value="{{ $kader->nama_kader }}" class="form-control" id="nama_kader" name="nama_kader" required>
			</div>
		</div>
		<div class="row mb-3">
			<label for="nomor_hp" class="col-sm-2 col-form-label">Nomor Handphone</label>
			<div class="col-sm-10">
				<input type="text" value="{{ $kader->nomor_hp }}" class="form-control" id="nomor_hp" name="nomor_hp" required>
			</div>
		</div>
		<div class="row mb-3">
			<label for="alamat_kader" class="col-sm-2 col-form-label">Alamat</label>
			<div class="col-sm-10">
				<input type="text" value="{{ $kader->alamat_kader }}" class="form-control" id="alamat_kader" name="alamat_kader" required>
			</div>
		</div>
		<div class="row mb-3">
			<label for="email" class="col-sm-2 col-form-label">Email</label>
			<div class="col-sm-10">
				<input type="email" value="{{ $kader->email }}" class="form-control" id="email" name="email" required>
			</div>
		</div>
		<div class="row mb-3">
			<label for="name" class="col-sm-2 col-form-label">Username</label>
			<div class="col-sm-10">
				<input type="text" value="{{ $kader->name }}" class="form-control" id="name" name="name" required>
			</div>
		</div>
		<button type="submit" class="btn btn-primary">Simpan Data</button>
    </form>
</div>
@endsection

@section('scripts')
	<script>
		$(document).ready(function(){
			$('#data_tahun').datepicker({
				format: 'yy',
				changeYear: true,
				maxDate: "0Y",
				minDate: "-100Y",
				yearRange: "-100:+0",
				showButtonPanel: true,
				onClose: function(dateText, inst) {
					var year = $("#ui-datepicker-div .ui-datepicker-year :selected").val();
					$(this).val($.datepicker.formatDate('yy', new Date(year, 1, 1)));
        		}
			});

			$("#data_tahun").focus(function () {
				$(".ui-datepicker-calendar").hide();
				$(".ui-datepicker-prev").hide();
				$(".ui-datepicker-next").hide();
				$(".ui-datepicker-month").hide();
				$("#ui-datepicker-div").position({
					my: "center top",
					at: "center bottom",
					of: $(this)
				});
			});

		});
	</script>
@endsection

