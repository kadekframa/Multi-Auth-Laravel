<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function index()
    {
    	return view('halamandepan.beranda');
    }

    public function halaman1()
    {
    	return view('halamandepan.halaman1');
    }

    public function halaman2()
    {
    	return view('halamandepan.halaman2');
    }
}
