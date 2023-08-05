<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\JadwalModel;
use DateTime;

class Jadwal extends BaseController
{
    public function index()
    {
        $model = new JadwalModel();
        $data['jadwal'] = $model->findAll();
        return view('admin/jadwal', $data);
    }

    public function data()
    {
        $model = new JadwalModel();
        $data['jadwal'] = $model->findAll();
        return view('jadwalLatihan', $data);
    }

    public function create()
    {
        $model = new JadwalModel();
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
            // Proses upload foto (jika diperlukan)
            $foto = $this->request->getFile('foto');
            if ($foto->isValid() && !$foto->hasMoved()) {
                $newName = $foto->getRandomName();
                $foto->move(ROOTPATH . 'public/uploads', $newName);
            }
            $created_at = new DateTime();

            // Proses penyimpanan data ke basis data (jika diperlukan)
            // Gantikan bagian ini dengan kode untuk menyimpan data ke basis data.
            $model->save([
                'judul' => $judul,
                'foto' => $newName,
                'deskripsi' => $deskripsi,
                'created_at' => $created_at->format('Y-m-d'),
            ]);

            session()->setFlashdata('success', 'Schedule added');
            // Kembali ke halaman daftar jadwal atau halaman lainnya jika diperlukan.
            return redirect()->to(base_url('admin/jadwal/add'));
        }

        // Tampilkan view form jika metode adalah GET
        return view('admin/jadwal_add');
    }

    public function update($id = null)
    {
        // Ambil data jadwal dari basis data berdasarkan ID
        $model = new JadwalModel();
        $data['jadwal'] = $model->find($id);

        // ini kalo data kosong
        // if (empty($data['jadwal'])) {
        //     // Jika data jadwal tidak ditemukan, tampilkan halaman error atau redirect ke halaman daftar jadwal
        //     return redirect()->to(base_url('jadwal'));
        // }

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
                $foto->move('./uploads', $newName);

                // Hapus foto lama (kalo ada)
                if (!empty($data['jadwal']['foto']) && file_exists('./uploads/'.$data['jadwal']['foto'])) {
                    unlink('./uploads/'.$data['jadwal']['foto']);
                }

                // Update data jadwal dengan foto baru
                $data['jadwal']['foto'] = $newName;
            }

            // Update data jadwal
            $data['jadwal']['judul'] = $judul;
            $data['jadwal']['deskripsi'] = $deskripsi;

            // Simpan data jadwal ke basis data
            $model->update($id, $data['jadwal']);

            // Kembali ke halaman daftar jadwal atau halaman lainnya jika diperlukan.
            return redirect()->to(base_url('admin/jadwal'));
        }

        // Tampilkan view form update dengan data jadwal yang diambil dari basis data.
        return view('admin/jadwal_update', $data);
    }

    public function delete($id = null)
    {
        $model = new JadwalModel();
        $data = $model->find($id);

        if (!empty($data['foto'])) {
            unlink(ROOTPATH . 'public/uploads/' . $data['foto']);
        }

        $model->delete($id);
        return redirect()->to('admin/jadwal')->with('success', 'Schedule Deleted');
    }
}
