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
	<h1 class="h3 mb-4 text-gray-800">Form Tambah Gizi Balita</h1>
	<form method="post" action="{{ url('/home/balita', $balita->id_balita ) }}" enctype="multipart/form-data">
		{{ method_field('PUT') }}
		{{ csrf_field() }}
		<div class="row mb-3">
			<label for="id_keluarga" class="col-sm-2 col-form-label">Nomor KK</label>
			<div class="col-sm-3" readonly>
				<input type="text" value="{{ $balita->no_kk }}" class="form-control" id="id_keluarga" name="id_keluarga" readonly>
			</div>
		</div>
		<div class="row mb-3">
			<label for="nama_balita" class="col-sm-2 col-form-label">Nama Balita</label>
			<div class="col-sm-3">
				<input type="text" value="{{ $balita->nama_balita }}" class="form-control" id="nama_balita" name="nama_balita" required>
			</div>
		</div>
		<div class="row mb-3">
			<label for="jenis_kelamin_balita" class="col-sm-2 col-form-label">Jenis Kelamin</label>
			<div class="col-sm-3">
				<input type="radio" id="jenis_kelamin_balita" name="jenis_kelamin_balita" value="Laki-Laki" required 
					@if($balita->jenis_kelamin_balita === 'Laki-Laki')
						checked 
					@endif
				>
				<label for="html">Laki-Laki</label><br>
				<input type="radio" id="jenis_kelamin_balita" name="jenis_kelamin_balita" value="Perempuan"
					@if($balita->jenis_kelamin_balita === 'Perempuan')
						checked 
					@endif
				>
				<label for="css">Perempuan</label><br>
			</div>
		</div>
		<div class="row mb-3">
			<label for="tanggal_lahir_balita" class="col-sm-2 col-form-label">Tanggal Lahir</label>
			<div class="col-sm-3">
				<input type="date" value="{{ $balita->tanggal_lahir_balita }}" class="form-control" id="tanggal_lahir_balita" name="tanggal_lahir_balita" required>
			</div>
		</div>
		<div class="row mb-3">
			<label for="umur_balita" class="col-sm-2 col-form-label">Umur (Bulan)</label>
			<div class="col-sm-3">
				<input type="text" value="{{ $balita->umur_balita }}" class="form-control" id="umur_balita" name="umur_balita" required>
			</div>
		</div>
		<div class="row mb-3">
			<label for="data_tahun" class="col-sm-2 col-form-label">Data Tahun</label>
			<div class="col-sm-3">
				<input type="text" value="{{ $balita->data_tahun }}" class="form-control" id="data_tahun" name="data_tahun" required>
			</div>
		</div>
		<div class="row mb-3">
			<label for="januari" class="col-sm-2 col-form-label">Januari</label>
			<div class="col-sm-1">
				<input type="text" value="{{ $balita->bb_januari }}" class="form-control" id="bb_januari" name="bb_januari">
			</div>
			<p> / </p>
			<div class="col-sm-1">
				<input type="text" value="{{ $balita->tb_januari }}" class="form-control" id="tb_januari" name="tb_januari">
			</div>
		</div>
		<div class="row mb-3">
			<label for="februari" class="col-sm-2 col-form-label">Februari</label>
			<div class="col-sm-1">
				<input type="text" value="{{ $balita->bb_februari }}" class="form-control" id="bb_februari" name="bb_februari">
			</div>
			<p> / </p>
			<div class="col-sm-1">
				<input type="text" value="{{ $balita->tb_februari }}" class="form-control" id="tb_februari" name="tb_februari">
			</div>
		</div>
		<div class="row mb-3">
			<label for="maret" class="col-sm-2 col-form-label">Maret</label>
			<div class="col-sm-1">
				<input type="text" value="{{ $balita->bb_maret }}" class="form-control" id="bb_maret" name="bb_maret">
			</div>
			<p> / </p>
			<div class="col-sm-1">
				<input type="text" value="{{ $balita->tb_maret }}" class="form-control" id="tb_maret" name="tb_maret">
			</div>
		</div>
		<div class="row mb-3">
			<label for="april" class="col-sm-2 col-form-label">April</label>
			<div class="col-sm-1">
				<input type="text" value="{{ $balita->bb_april }}" class="form-control" id="bb_april" name="bb_april">
			</div>
			<p> / </p>
			<div class="col-sm-1">
				<input type="text" value="{{ $balita->tb_april }}" class="form-control" id="tb_april" name="tb_april">
			</div>
		</div>
		<div class="row mb-3">
			<label for="mei" class="col-sm-2 col-form-label">Mei</label>
			<div class="col-sm-1">
				<input type="text" value="{{ $balita->bb_mei }}" class="form-control" id="bb_mei" name="bb_mei">
			</div>
			<p> / </p>
			<div class="col-sm-1">
				<input type="text" value="{{ $balita->tb_mei }}" class="form-control" id="tb_mei" name="tb_mei">
			</div>
		</div>
		<div class="row mb-3">
			<label for="juni" class="col-sm-2 col-form-label">Juni</label>
			<div class="col-sm-1">
				<input type="text" value="{{ $balita->bb_juni }}" class="form-control" id="bb_juni" name="bb_juni">
			</div>
			<p> / </p>
			<div class="col-sm-1">
				<input type="text" value="{{ $balita->tb_juni }}" class="form-control" id="tb_juni" name="tb_juni">
			</div>
		</div>
		<div class="row mb-3">
			<label for="juli" class="col-sm-2 col-form-label">Juli</label>
			<div class="col-sm-1">
				<input type="text" value="{{ $balita->bb_juli }}" class="form-control" id="bb_juli" name="bb_juli">
			</div>
			<p> / </p>
			<div class="col-sm-1">
				<input type="text" value="{{ $balita->tb_juli }}" class="form-control" id="tb_juli" name="tb_juli">
			</div>
		</div>
		<div class="row mb-3">
			<label for="agustus" class="col-sm-2 col-form-label">Agustus</label>
			<div class="col-sm-1">
				<input type="text" value="{{ $balita->bb_agustus }}" class="form-control" id="bb_agustus" name="bb_agustus">
			</div>
			<p> / </p>
			<div class="col-sm-1">
				<input type="text" value="{{ $balita->tb_agustus }}" class="form-control" id="tb_agustus" name="tb_agustus">
			</div>
		</div>
		<div class="row mb-3">
			<label for="september" class="col-sm-2 col-form-label">September</label>
			<div class="col-sm-1">
				<input type="text" value="{{ $balita->bb_september }}" class="form-control" id="bb_september" name="bb_september">
			</div>
			<p> / </p>
			<div class="col-sm-1">
				<input type="text" value="{{ $balita->tb_september }}" class="form-control" id="tb_september" name="tb_september">
			</div>
		</div>
		<div class="row mb-3">
			<label for="oktober" class="col-sm-2 col-form-label">Oktober</label>
			<div class="col-sm-1">
				<input type="text" value="{{ $balita->bb_oktober }}" class="form-control" id="bb_oktober" name="bb_oktober">
			</div>
			<p> / </p>
			<div class="col-sm-1">
				<input type="text" value="{{ $balita->tb_oktober }}" class="form-control" id="tb_oktober" name="tb_oktober">
			</div>
		</div>
		<div class="row mb-3">
			<label for="november" class="col-sm-2 col-form-label">November</label>
			<div class="col-sm-1">
				<input type="text" value="{{ $balita->bb_november }}" class="form-control" id="bb_november" name="bb_november">
			</div>
			<p> / </p>
			<div class="col-sm-1">
				<input type="text" value="{{ $balita->tb_november }}" class="form-control" id="tb_november" name="tb_november">
			</div>
		</div>
		<div class="row mb-3">
			<label for="desember" class="col-sm-2 col-form-label">Desember</label>
			<div class="col-sm-1">
				<input type="text" value="{{ $balita->bb_desember }}" class="form-control" id="bb_desember" name="bb_desember">
			</div>
			<p> / </p>
			<div class="col-sm-1">
				<input type="text" value="{{ $balita->tb_desember }}" class="form-control" id="tb_desember" name="tb_desember">
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

