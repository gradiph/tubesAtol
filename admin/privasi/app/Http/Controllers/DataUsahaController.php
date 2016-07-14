<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class DataUsahaController extends Controller
{
    public function home()
	{
		return view('data_usaha_home');
	}
}
