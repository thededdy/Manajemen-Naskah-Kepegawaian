@extends('_layouts/default')

@section('style')

<style>
table { 
		width: 100%; 
		border-collapse: collapse; 
		font: 14px/1.4, black;

	}
	/* Zebra striping */
	tr:nth-of-type(odd) { 
		background: #eee; 
	}
	th { 
		background: #333; 
		color: white; 
		font-weight: bold; 
	}
	td, th { 
		padding: 6px; 
		border: 1px solid #ccc; 
		text-align: left; 
	}
	td, caption{
		color: black;
	}
	a {
		color: white;
		font: 18px;
	}
</style>
@stop



@section('content')

<div id="biggerbox">
	
<table width="644" cellspacing="0">
  <tr>
    <td width="198" rowspan="16"><img src="assets/dms/{{ $idpegawai }}/4.png" width="320" height="460"/></td>
    <td width="213">NIP</td>
    <td width="227">{{ $peg->nip }}</td>
  </tr>
  <tr>
    <td>Nama</td>
    <td>{{ $peg->nama }}</td>
  </tr>
  <tr>
    <td>Alamat</td>
    <td>{{ $peg->alamat }}</td>
  </tr>
  <tr>
    <td>Tanggal Lahir</td>
    <td>{{ $peg->tgllahir }}</td>
  </tr>
  <tr>
    <td>Jenis Kelamin</td>
    <td>{{ $peg->jeniskelamin }}</td>
  </tr>
  <tr>
    <td>Agama</td>
    <td>{{ $peg->agama }}</td>
  </tr>
  <tr>
    <td>Status Perkawinan</td>
    <td>{{ $peg->statuskawin }}</td>
  </tr>
  <tr>
    <td>Pendidikan Terakhir</td>
    <td>{{ $peg->pendidikan }}</td>
  </tr>
  <tr>
    <td>Jurusan</td>
    <td>{{ $peg->jurusan }}</td>
  </tr>
  <tr>
    <td>Jabatan</td>
    <td>{{ $peg->jabatan }}</td>
  </tr>
  <tr>
    <td>Golongan</td>
    <td>{{ $peg->golongan }}</td>
  </tr>
  <tr>
    <td>Unit Kerja</td>
    <td>{{ $peg->unitkerja }}</td>
  </tr>
  <tr>
    <td>Lantai</td>
    <td>{{ $peg->lantai }}</td>
  </tr>
  <tr>
    <td>Lemari</td>
    <td>{{ $peg->lemari }}</td>
  </tr>
  <tr>
    <td>No Lemari Arsip</td>
    <td>{{ $peg->no_lemari_arsip }}</td>
  </tr>
  <tr>
    <td>No Rak Arsip</td>
    <td>{{ $peg->no_rak_arsip }}</td>
  </tr>
</table>

<br/><br/><br/><br/><br/>
<table>
	<caption>Detail Dokumen:</caption>
<tr>
	<th width='20'>No</th>
	<th>Jenis Dokumen</th>
	<th>Keterangan</th>
</tr>
@foreach($dok as $key => $val)
<tr>
	<td>{{ $key+1 }}</td>
	<td>{{ $val->namajenisdokumen }}</td>
	<td>@if($val->idjenisdokumen == 0) Tidak Ada @else Ada @endif</td>
</tr>
@endforeach
</table>
<div id="notification" class="information">
<a href="{{ URL::to('/') }}">&laquo; Kembali ke pencarian</a><hr/>
</div>
</div>
@stop