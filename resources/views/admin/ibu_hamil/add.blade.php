@extends('layouts.adminapp')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid px-0 py-4">
    <h1 class="h3 mb-4 text-gray-800">Form Ubah Ibu Hamil</h1>
    <form method="post" action="{{ url('/home/bumil') }}" enctype="multipart/form-data">
		{{ csrf_field() }}
		<div class="row mb-3">
			<label for="id_keluarga" class="col-sm-2 col-form-label">Nomor KK / Nama Ibu</label>
			<div class="col-sm-3">
			<select name="id_keluarga" style="width: 100%" id="id_keluarga" class="form-control">
					<option></option>
						@foreach ($keluarga as $data)
							<option value="{{ $data->id_keluarga }}">{{ $data->no_kk }} - {{ $data->nama_ibu }}</option>
						@endforeach
				</select>
			</div>
		</div>	
		<div class="row mb-3">
			<label for="berat_badan_sebelumnya" class="col-sm-2 col-form-label">Berat Badan Sebelumnya</label>
			<div class="col-sm-3">
				<input type="text" class="form-control" id="berat_badan_sebelumnya"name="berat_badan_sebelumnya" required>
			</div>
		</div>
		<div class="row mb-3">
			<label for="umur_bumil" class="col-sm-2 col-form-label">Umur Ibu Hamil</label>
			<div class="col-sm-3">
				<input type="text" class="form-control" id="umur_bumil" name="umur_bumil" required>
			</div>
		</div>
		<div class="row mb-3">
			<label for="anak_ke" class="col-sm-2 col-form-label">Anak Ke-</label>
			<div class="col-sm-3">
				<input type="text" class="form-control" id="anak_ke" name="anak_ke" required>
			</div>
		</div>
		<div class="row mb-3">
			<label for="usia_kandungan" class="col-sm-2 col-form-label">Usia Kandungan</label>
			<div class="col-sm-3">
				<input type="text" class="form-control" id="usia_kandungan" name="usia_kandungan">
			</div>
		</div>
		<div class="row mb-3">
			<label for="tinggi_badan" class="col-sm-2 col-form-label">Tinggi Badan</label>
			<div class="col-sm-3">
				<input type="text" class="form-control" id="tinggi_badan" name="tinggi_badan">
			</div>
		</div>
		<div class="row mb-3">
			<label for="data_tahun" class="col-sm-2 col-form-label">Data Tahun</label>
			<div class="col-sm-3">
				<input type="text" class="form-control" id="data_tahun" name="data_tahun" required>
			</div>
		</div>
		<div class="row mb-3">
			<label for="januari" class="col-sm-2 col-form-label">Januari</label>
			<div class="col-sm-1">
				<input type="text" class="form-control" id="bb_januari" name="bb_januari">
			</div>
			<p> / </p>
			<div class="col-sm-1">
				<input type="text" class="form-control" id="ll_januari" name="ll_januari">
			</div>
		</div>
		<div class="row mb-3">
			<label for="februari" class="col-sm-2 col-form-label">Februari</label>
			<div class="col-sm-1">
				<input type="text" class="form-control" id="bb_februari" name="bb_februari">
			</div>
			<p> / </p>
			<div class="col-sm-1">
				<input type="text" class="form-control" id="ll_februari" name="ll_februari">
			</div>
		</div>
		<div class="row mb-3">
			<label for="maret" class="col-sm-2 col-form-label">Maret</label>
			<div class="col-sm-1">
				<input type="text" class="form-control" id="bb_maret" name="bb_maret">
			</div>
			<p> / </p>
			<div class="col-sm-1">
				<input type="text" class="form-control" id="ll_maret" name="ll_maret">
			</div>
		</div>
		<div class="row mb-3">
			<label for="april" class="col-sm-2 col-form-label">April</label>
			<div class="col-sm-1">
				<input type="text" class="form-control" id="bb_april" name="bb_april">
			</div>
			<p> / </p>
			<div class="col-sm-1">
				<input type="text" class="form-control" id="ll_april" name="ll_april">
			</div>
		</div>
		<div class="row mb-3">
			<label for="mei" class="col-sm-2 col-form-label">Mei</label>
			<div class="col-sm-1">
				<input type="text" class="form-control" id="bb_mei" name="bb_mei">
			</div>
			<p> / </p>
			<div class="col-sm-1">
				<input type="text" class="form-control" id="ll_mei" name="ll_mei">
			</div>
		</div>
		<div class="row mb-3">
			<label for="juni" class="col-sm-2 col-form-label">Juni</label>
			<div class="col-sm-1">
				<input type="text" class="form-control" id="bb_juni" name="bb_juni">
			</div>
			<p> / </p>
			<div class="col-sm-1">
				<input type="text" class="form-control" id="ll_juni" name="ll_juni">
			</div>
		</div>
		<div class="row mb-3">
			<label for="juli" class="col-sm-2 col-form-label">Juli</label>
			<div class="col-sm-1">
				<input type="text" class="form-control" id="bb_juli" name="bb_juli">
			</div>
			<p> / </p>
			<div class="col-sm-1">
				<input type="text" class="form-control" id="ll_juli" name="ll_juli">
			</div>
		</div>
		<div class="row mb-3">
			<label for="agustus" class="col-sm-2 col-form-label">Agustus</label>
			<div class="col-sm-1">
				<input type="text" class="form-control" id="bb_agustus" name="bb_agustus">
			</div>
			<p> / </p>
			<div class="col-sm-1">
				<input type="text" class="form-control" id="ll_agustus" name="ll_agustus">
			</div>
		</div>
		<div class="row mb-3">
			<label for="september" class="col-sm-2 col-form-label">September</label>
			<div class="col-sm-1">
				<input type="text" class="form-control" id="bb_september" name="bb_september">
			</div>
			<p> / </p>
			<div class="col-sm-1">
				<input type="text" class="form-control" id="ll_september" name="ll_september">
			</div>
		</div>
		<div class="row mb-3">
			<label for="oktober" class="col-sm-2 col-form-label">Oktober</label>
			<div class="col-sm-1">
				<input type="text" class="form-control" id="bb_oktober" name="bb_oktober">
			</div>
			<p> / </p>
			<div class="col-sm-1">
				<input type="text" class="form-control" id="ll_oktober" name="ll_oktober">
			</div>
		</div>
		<div class="row mb-3">
			<label for="november" class="col-sm-2 col-form-label">November</label>
			<div class="col-sm-1">
				<input type="text" class="form-control" id="bb_november" name="bb_november">
			</div>
			<p> / </p>
			<div class="col-sm-1">
				<input type="text" class="form-control" id="ll_november" name="ll_november">
			</div>
		</div>
		<div class="row mb-3">
			<label for="desember" class="col-sm-2 col-form-label">Desember</label>
			<div class="col-sm-1">
				<input type="text" class="form-control" id="bb_desember" name="bb_desember">
			</div>
			<p> / </p>
			<div class="col-sm-1">
				<input type="text" class="form-control" id="ll_desember" name="ll_desember">
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

