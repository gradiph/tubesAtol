<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PemilikUsahaController extends Controller
{
    public function home()
	{
		return view('pemilik_usaha_home');
	}
}
