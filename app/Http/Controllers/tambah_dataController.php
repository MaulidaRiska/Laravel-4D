<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Tambah_dataController extends Controller
{
    public function index()
    {
        return "Halo saya index, dari Mahasiswa Controller";
    }
    public function create()
    {
        return view('tambah_data.tambah_data-create');
    }
}
