<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class LaporanController extends Controller
{
    public function home()
	{
		return view('laporan_home');
	}
}
