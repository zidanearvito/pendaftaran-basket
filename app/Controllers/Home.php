<?php

namespace App\Controllers;

use App\Models\JadwalModel;
use App\Controllers\BaseController;
class Home extends BaseController
{
    public function index()
    {
        return view('home');
    }

    // public function jadwal()
    // {
    //     $model = new JadwalModel();
    //     $data['jadwal'] = $model->findAll();
    //     return view('JadwalLatihan', $data);
    // }

    public function tentang()
    {
        return view('TentangKami');
    }

}
