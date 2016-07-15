@extends('template.t_index')
@section('title') Data Pemilik Usaha | @stop
@section('content')

<script>
$(document).ready(function(e) {
    $("#accordion1").accordion({
		event:"mouseover"
	});
});
</script>
<div class="container">
	<h2>Aktivasi Akun Baru</h2>
    <div id="accordion1">
    	<h2>Akun 1</h2>
        <div id="isi1">
        	<div class="row">
            	<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <figure>
                        <img src="ktp.jpg" alt="KTP 1" width="258px" height="162px" />
                    </figure>
                </div>
            	<div class="col-lg-7 col-md-7 col-sm-6 col-xs-12">
                    <span style="float:left; width:50%; padding:0px 20px; ">
                        <p>Nama : Contoh</p>
                        <p>Email : contoh@contoh.com</p>
                        <p>TTL : Bandung, 15-07-2016</p>
                        <p>Alamat : Jl. Contoh No 3 Bandung</p>
                    </span>
                </div>
            	<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                    <button class="btn btn-block btn-primary">Aktifkan</button>
                    <br />
                    <button class="btn btn-block btn-danger">Hapus</button>
                </div>
            </div>
        </div>
        <h2>Akun 2</h2>
        <div id="isi2">
        	<div class="row">
            	<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <figure>
                        <img src="ktp.jpg" alt="KTP 2" width="258px" height="162px" />
                    </figure>
                </div>
            	<div class="col-lg-7 col-md-7 col-sm-6 col-xs-12">
                    <span style="float:left; width:50%; padding:0px 20px; ">
                        <p>Nama : Contoh</p>
                        <p>Email : contoh@contoh.com</p>
                        <p>TTL : Bandung, 15-07-2016</p>
                        <p>Alamat : Jl. Contoh No 3 Bandung</p>
                    </span>
                </div>
            	<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                    <button class="btn btn-block btn-primary">Aktifkan</button>
                    <br />
                    <button class="btn btn-block btn-danger">Hapus</button>
                </div>
            </div>
        </div>
        <h2>Akun 3</h2>
        <div id="isi3">
        	<div class="row">
            	<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <figure>
                        <img src="ktp.jpg" alt="KTP 3" width="258px" height="162px" />
                    </figure>
                </div>
            	<div class="col-lg-7 col-md-7 col-sm-6 col-xs-12">
                    <span style="float:left; width:50%; padding:0px 20px; ">
                        <p>Nama : Contoh</p>
                        <p>Email : contoh@contoh.com</p>
                        <p>TTL : Bandung, 15-07-2016</p>
                        <p>Alamat : Jl. Contoh No 3 Bandung</p>
                    </span>
                </div>
            	<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                    <button class="btn btn-block btn-primary">Aktifkan</button>
                    <br />
                    <button class="btn btn-block btn-danger">Hapus</button>
                </div>
            </div>
        </div>
        <h2>Akun 4</h2>
        <div id="isi4">
        	<div class="row">
            	<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <figure>
                        <img src="ktp.jpg" alt="KTP 4" width="258px" height="162px" />
                    </figure>
                </div>
            	<div class="col-lg-7 col-md-7 col-sm-6 col-xs-12">
                    <span style="float:left; width:50%; padding:0px 20px; ">
                        <p>Nama : Contoh</p>
                        <p>Email : contoh@contoh.com</p>
                        <p>TTL : Bandung, 15-07-2016</p>
                        <p>Alamat : Jl. Contoh No 3 Bandung</p>
                    </span>
                </div>
            	<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                    <button class="btn btn-block btn-primary">Aktifkan</button>
                    <br />
                    <button class="btn btn-block btn-danger">Hapus</button>
                </div>
            </div>
        </div>
        <h2>Akun 5</h2>
        <div id="isi5">
        	<div class="row">
            	<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <figure>
                        <img src="ktp.jpg" alt="KTP 5" width="258px" height="162px" />
                    </figure>
                </div>
            	<div class="col-lg-7 col-md-7 col-sm-6 col-xs-12">
                    <span style="float:left; width:50%; padding:0px 20px; ">
                        <p>Nama : Contoh</p>
                        <p>Email : contoh@contoh.com</p>
                        <p>TTL : Bandung, 15-07-2016</p>
                        <p>Alamat : Jl. Contoh No 3 Bandung</p>
                    </span>
                </div>
            	<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                    <button class="btn btn-block btn-primary">Aktifkan</button>
                    <br />
                    <button class="btn btn-block btn-danger">Hapus</button>
                </div>
            </div>
        </div>
    </div>
    <h2>Pengolahan Data Akun</h2>
    <table class="table table-responsive table-hover table-bordered table-striped">
    	<thead>
        	<tr>
            	<th>no</th>
                <th>nama</th>
                <th>email</th>
                <th>TTL</th>
                <th>alamat</th>
                <th>aksi</th>
            </tr>
        </thead>
        <tbody>
        	<tr>
            	<td>2</td>
                <td>Coba</td>
                <td>coba@coba.com</td>
                <td>Bandung, 17-07-2016</td>
                <td>Jl Dipati ukur no 8 Bandung</td>
                <td></td>
            </tr>
        </tbody>
    </table>
</div>

@stop