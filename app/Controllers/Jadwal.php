<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\JadwalModel;

class Jadwal extends BaseController
{
    public function index()
    {
        $model = new JadwalModel();
        $data['jadwal'] = $model->findAll();
        return view('jadwalLatihan', $data);
    }

    // public function create()
    // {
    //     return view('jadwal/create');
    // }

    public function create()
    {
        $model = new JadwalModel();
        $foto = $this->request->getFile('foto');

        $rules = [
            'judul' => 'required',
            'foto' => 'required',
        ];

        if (!$this->validate($rules)) {
            $data['validation'] = $this->validator;
        } else {
            if ($foto->isValid() && !$foto->hasMoved()) {
                $newName = $foto->getRandomName();
                $foto->move(ROOTPATH . 'public/uploads', $newName);
            } else {
                $newName = '';
            }

            $model->save([
                'judul' => $this->request->getPost('judul'),
                'foto' => $newName,
                'deskripsi' => $this->request->getPost('deskripsi'),
            ]);

            return redirect()->to('admin/jadwal')->with('success', 'Jadwal berhasil ditambahkan.');
        }
        return view('admin/jadwal');
    }


    public function edit($id = null)
    {
        $model = new JadwalModel();
        $data['jadwal'] = $model->find($id);
        return view('jadwal/edit', $data);
    }

    public function update()
    {
        $model = new JadwalModel();
        $id = $this->request->getPost('id');
        $foto = $this->request->getFile('foto');

        if ($foto->isValid() && !$foto->hasMoved()) {
            $newName = $foto->getRandomName();
            $foto->move(ROOTPATH . 'public/uploads', $newName);
        } else {
            $newName = $this->request->getPost('old_foto');
        }

        $model->update($id, [
            'judul' => $this->request->getPost('judul'),
            'foto' => $newName,
            'deskripsi' => $this->request->getPost('deskripsi'),
        ]);

        return redirect()->to('/jadwal')->with('success', 'Jadwal berhasil diperbarui.');
    }

    public function delete($id = null)
    {
        $model = new JadwalModel();
        $data = $model->find($id);

        if (!empty($data['foto'])) {
            unlink(ROOTPATH . 'public/uploads/' . $data['foto']);
        }

        $model->delete($id);
        return redirect()->to('/jadwal')->with('success', 'Jadwal berhasil dihapus.');
    }
}
