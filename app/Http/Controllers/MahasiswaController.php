<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index(){
    	return view('Mahasiswa.daftar_mahasiswa');
    }
}
