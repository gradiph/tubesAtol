@extends('template.t_index')

@section('title') Data Wilayah | @stop

@section('content')
<style>
ul.kec {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
}
ul.kec li { float:left; margin-right:7px; }
</style>
<div class="container">
	<div class="row">
    	<div class="col-lg-2 col-md-1 col-sm-12 col-xs-12">
        	<button class="btn btn-primary">Tambah Kecamatan Baru</button>
        </div>
        <div class="col-lg-10 col-md-11 col-sm-12 col-xs-12">
        	<p>
            	<ul class="kec">
            		<li>Daftar Kecamatan : </li>
                	<li><a href="#coblong">Coblong</a></li>
                </ul>
            </p>
        </div>
    </div>
	<div class="row text-center">
    	<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
        	<a name="coblong"></a>
            <div class="panel panel-info">
            	<div class="panel-heading" id="panel1">
                	<strong>Coblong</strong> 
                    <button class="btn btn-xs btn-warning">Ubah</button> 
                    <button class="btn btn-xs btn-danger">Hapus</button>
                </div>
                <div class="panel-body" id="isi1">
                	<table class="table table-bordered table-hover table-striped">
                    	<thead>
                        	<tr>
                            	<th class="text-center">no</th>
                                <th class="text-center">kelurahan</th>
                            </tr>
                        </thead>
                        <tbody>
                        	<tr>
                            	<td>1</td>
                                <td>
                                	Sekeloa
                                    <button class="btn btn-xs btn-warning">Ubah</button> 
                                    <button class="btn btn-xs btn-danger">Hapus</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@stop