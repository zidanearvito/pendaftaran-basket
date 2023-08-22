<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\GaleriModel;

class Galeri extends BaseController
{
    public function index()
    {
        $model = new GaleriModel();
        $data['galeri'] = $model->findAll();
        return view('admin/galeri', $data);
    }

    // public function data()
    // {
    //     $model = new GaleriModel();
    //     $data['galeri'] = $model->findAll();
    //     return view('tentangKami', $data);
    // }

    public function create()
    {
        $model = new GaleriModel();
        if ($this->request->getMethod() === 'post') {
            // Validasi input, Anda dapat menggunakan CodeIgniter 4 validation jika diperlukan.
            $this->validate([
                'judul' => 'required',
                'foto' => 'uploaded[foto]|mime_in[foto,image/jpg,image/jpeg,image/png]|max_size[foto,5120]', // Contoh validasi untuk foto (maksimum 1MB)
                'deskripsi' => 'required',
            ]);

            // Ambil data dari form
            $judul = $this->request->getPost('judul');
            $deskripsi = $this->request->getPost('deskripsi');
            // Proses upload foto (ribet betul ini)
            $foto = $this->request->getFile('foto');
            if ($foto->isValid() && !$foto->hasMoved()) {
                $newName = $foto->getRandomName();
                $foto->move(ROOTPATH . 'public/uploads/gallery', $newName);
            }

            $model->save([
                'judul' => $judul,
                'foto' => $newName,
                'deskripsi' => $deskripsi,
            ]);

            session()->setFlashdata('success', 'Photo added to Gallery');

            return redirect()->to(base_url('admin/galeri/add'));
        }
        return view('admin/galeri_add');
    }

    public function update($id = null)
    {
        // Ambil data jadwal dari basis data berdasarkan ID
        $model = new GaleriModel();
        $data['galeri'] = $model->find($id);

        if ($this->request->getMethod() === 'post') {
            $this->validate([
                'judul' => 'required',
                'foto' => 'mime_in[foto,image/jpg,image/jpeg,image/png]|max_size[foto,5120]',
                'deskripsi' => 'required',
            ]);

            // Ambil data dari form
            $judul = $this->request->getPost('judul');
            $deskripsi = $this->request->getPost('deskripsi');

            // upload foto (kalo ada perubahan foto)
            $foto = $this->request->getFile('foto');
            if ($foto->isValid() && !$foto->hasMoved()) {
                $newName = $foto->getRandomName();
                $foto->move('./uploads/gallery', $newName);

                // Hapus foto lama (kalo ada)
                if (!empty($data['galeri']['foto']) && file_exists('./uploads/'.$data['galeri']['foto'])) {
                    unlink('./uploads/'.$data['galeri']['foto']);
                }

                // Update data galeri dengan foto baru
                $data['galeri']['foto'] = $newName;
            }

            // Update data galeri
            $data['galeri']['judul'] = $judul;
            $data['galeri']['deskripsi'] = $deskripsi;

            // Simpan data galeri ke basis data
            $model->update($id, $data['galeri']);

            return redirect()->to(base_url('admin/galeri'));
        }

        return view('admin/galeri_update', $data);
    }

    public function delete($id = null)
    {
        $model = new GaleriModel();
        $data = $model->find($id);

        if (!empty($data['foto'])) {
            unlink(ROOTPATH . 'public/uploads/gallery/' . $data['foto']);
        }

        $model->delete($id);
        return redirect()->to('/galeri')->with('success', 'Photo Deleted.');
    }
}
