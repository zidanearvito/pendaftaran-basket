<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\GaleriModel;
use App\Models\JadwalModel;
use App\Models\RegistrasiModel;

class Dashboard extends BaseController
{
    public function index()
    {
        $model1 = new GaleriModel();
        $model2 = new JadwalModel();
        $model3 = new RegistrasiModel();
        $data['galeri'] = $model1->countAllResults();
        $data['jadwal'] = $model2->countAllResults();
        $data['registrasi'] = $model3->countAllResults();
        return view('admin/index', $data);
    }
}
