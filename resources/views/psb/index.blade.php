@extends('psb')

@section('content')

<h1>Laporan PSB MIAS 2016/2017</h1><hr />

<table class="table table-hover table-striped table-bordered">
	<thead>
		<tr>
			<th rowspan="2" class="text-center" style="vertical-align:middle;">JENJANG</th>
			<th colspan="9" class="text-center">PROSES</th>
		</tr>
		<tr>
			<th style="width:10%" class="text-center">Daftar</th>
			<th style="width:10%" class="text-center">Isi Formulir</th>
			<th style="width:10%" class="text-center">Test</th>
			<th style="width:10%" class="text-center">Wawancara</th>
			<th style="width:10%" class="text-center">Wawancara Orang Tua</th>
			<th style="width:10%" class="text-center">TKD</th>
			<th style="width:10%" class="text-center">Diterima</th>
			<th style="width:10%" class="text-center">Tidak Diterima</th>
			<th style="width:10%" class="text-center">TOTAL</th>
		</tr>
	</thead>
	<tbody>
		@foreach (\App\Psb::jenjangList() as $k => $v)
		@if ($k > 0 )
		<tr>
			<th class="text-center">{{$v}}</th>
			<td class="text-center">{{\App\Psb::where('jenjang', $k)->sekarang()->count('id')}}</td>
			<td class="text-center">{{\App\Psb::where('jenjang', $k)->sekarang()->count('id')}}</td>
			<td class="text-center">{{\App\Psb::where('jenjang', $k)->sekarang()->count('id')}}</td>
			<td class="text-center">{{\App\Psb::where('jenjang', $k)->sekarang()->count('id')}}</td>
			<td class="text-center">{{\App\Psb::where('jenjang', $k)->sekarang()->count('id')}}</td>
			<td class="text-center">{{\App\Psb::where('jenjang', $k)->sekarang()->count('id')}}</td>
			<td class="text-center">{{\App\Psb::where('jenjang', $k)->sekarang()->count('id')}}</td>
			<td class="text-center">{{\App\Psb::where('jenjang', $k)->sekarang()->count('id')}}</td>
			<th class="text-center">{{\App\Psb::where('jenjang', $k)->sekarang()->count('id')}}</th>
		</tr>
		@endif
		@endforeach
	</tbody>
	<tfoot>
		<tr>
			<th class="text-center">TOTAL</th>
			<th class="text-center">{{\App\Psb::sekarang()->count('id')}}</th>
			<th class="text-center">{{\App\Psb::sekarang()->count('id')}}</th>
			<th class="text-center">{{\App\Psb::sekarang()->count('id')}}</th>
			<th class="text-center">{{\App\Psb::sekarang()->count('id')}}</th>
			<th class="text-center">{{\App\Psb::sekarang()->count('id')}}</th>
			<th class="text-center">{{\App\Psb::sekarang()->count('id')}}</th>
			<th class="text-center">{{\App\Psb::sekarang()->count('id')}}</th>
			<th class="text-center">{{\App\Psb::sekarang()->count('id')}}</th>
			<th class="text-center">{{\App\Psb::sekarang()->count('id')}}</th>
		</tr>
	</tfoot>
</table>

@stop