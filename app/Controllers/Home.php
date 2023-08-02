<?php

namespace App\Controllers;

use App\Controllers\BaseController;
class Home extends BaseController
{
    public function index()
    {
        return view('home');
    }

    public function jadwal()
    {
        return view('JadwalLatihan');
    }

    public function tentang()
    {
        return view('TentangKami');
    }

}
