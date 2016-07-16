@extends('template.t_index')
@section('title') Home | @stop
@section('content')

<script>
$(document).ready(function(e) {
    $("#accordion1").accordion({
		event:"mouseover"
	});
});
</script>
<div class="container">
    @if(Session::has('message'))
        <span id="pesan" class="label label-success">{{ Session::get('message') }}</span>
    @endif
	<h2>Aktivasi Akun Baru</h2>
    <div id="accordion1">
    	@foreach($data_tunggu as $dat_tunggu)
            <h2>{{ $dat_tunggu->nama }}</h2>
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <figure>
                        <img src="../gambar/ktp/{{ $dat_tunggu->gambar_ktp }}" alt="{{ $dat_tunggu->gambar_ktp }}" width="258px" height="162px" />
                    </figure>
                </div>
                <div class="col-lg-7 col-md-7 col-sm-6 col-xs-12">
                    <span style="float:left; width:50%; padding:0px 20px; ">
                        <p>Nama : {{ $dat_tunggu->nama }}</p>
                        <p>Email : {{ $dat_tunggu->email }}</p>
                        <p>TTL : {{ $dat_tunggu->tempat_lahir }}, {{ $dat_tunggu->tgl_lahir }}</p>
                        <p>Alamat : {{ $dat_tunggu->alamat }}</p>
                    </span>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                    <button class="btn btn-block btn-primary" onclick="window.location.href = '{{ URL('pemilik-usaha') }}/' + {{ $dat_tunggu->id }} + '/aktifkan';">Aktifkan</button>
                    <br />
                    <button class="btn btn-block btn-danger" onclick="window.location.href = '{{ URL('pemilik-usaha') }}/' + {{ $dat_tunggu->id }} + '/non-aktifkan';">Non-Aktifkan</button>
                </div>
            </div>
        @endforeach
    </div>
</div>

@stop