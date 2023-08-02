<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\RegistrasiModel;

class Registrasi extends BaseController
{
    public function index()
    {
        return view('admin/index');
    }

    public function data()
    {
        $model = new RegistrasiModel();
        $data['registrasi'] = $model->orderBy('id', 'DESC')->findAll();
        return view('admin/data_pendaftar', $data);
    }

    public function create()
    {
        $model = new RegistrasiModel();
        $kode = 'DFT-' . strtoupper(substr(uniqid(), 0, 10));

        $rules = [
            'nis' => 'required',
            'nama_siswa' => 'required',
            'jenis_kelamin' => 'required',
            'umur' => 'required',
            'agama' => 'required',
            'alamat' => 'required',
            'kelas' => 'required',
            'jurusan' => 'required',
            'hobi' => 'required',
            'tinggi_badan' => 'required',
            'berat_badan' => 'required',
            'alasan_basket' => 'required',
        ];

        if (!$this->validate($rules)) {
            $data['validation'] = $this->validator;
        } else {
            $nis = $this->request->getPost('nis');
            if ($model->where('nis', $nis)->first() !== null) {
                session()->setFlashdata('error', 'NIS sudah terdaftar.');
                return redirect()->back()->withInput();
            }
            $model->save([
                // 'nis' => $this->request->getPost('nis'),
                'nis' => $nis,
                'nama_siswa' => $this->request->getPost('nama_siswa'),
                'jenis_kelamin' => $this->request->getPost('jenis_kelamin'),
                'umur' => $this->request->getPost('umur'),
                'agama' => $this->request->getPost('agama'),
                'alamat' => $this->request->getPost('alamat'),
                'kelas' => $this->request->getPost('kelas'),
                'jurusan' => $this->request->getPost('jurusan'),
                'hobi' => $this->request->getPost('hobi'),
                'tinggi_badan' => $this->request->getPost('tinggi_badan'),
                'berat_badan' => $this->request->getPost('berat_badan'),
                'alasan_basket' => $this->request->getPost('alasan_basket'),
                'kode_pendaftaran' => $kode,
            ]);

            session()->setFlashdata('success', 'Data berhasil disimpan.');

            return redirect()->to('/daftar');
        }
        return view('/daftar');
    }


    // public function edit($id = null)
    // {
    //     $model = new RegistrasiModel();
    //     $data['registrasi'] = $model->where('id', $id)->first();
    //     return view('registrasi/edit', $data);
    // }

    // public function update()
    // {
    //     helper(['form', 'url']);
    //     $model = new RegistrasiModel();

    //     $id = $this->request->getPost('id');

    //     $data = [
    //         'nis' => $this->request->getPost('nis'),
    //         'nama_siswa'  => $this->request->getPost('nama_siswa'),
    //         'jenis_kelamin' => $this->request->getPost('jenis_kelamin'),
    //         'umur' => $this->request->getPost('umur'),
    //         'agama' => $this->request->getPost('agama'),
    //         'alamat' => $this->request->getPost('alamat'),
    //         'kelas' => $this->request->getPost('kelas'),
    //         'hobi' => $this->request->getPost('hobi'),
    //         'tinggi_badan' => $this->request->getPost('tinggi_badan'),
    //         'berat_badan' => $this->request->getPost('berat_badan'),
    //         'alasan_basket' => $this->request->getPost('alasan_basket'),
    //     ];

    //     $model->update($id, $data);
    //     return redirect()->to('admin/');
    // }

    public function delete($id = null)
    {
        $model = new RegistrasiModel();
        $model->delete($id);
        return redirect()->to('/admin/data');
    }
}
