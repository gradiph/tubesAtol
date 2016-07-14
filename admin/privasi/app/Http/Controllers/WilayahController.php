<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class WilayahController extends Controller
{
    public function home()
	{
		return view('wilayah_home');
	}
}
