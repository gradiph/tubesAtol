<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class SektorUsahaController extends Controller
{
    public function home()
	{
		return view('sektor_usaha_home');
	}
}
