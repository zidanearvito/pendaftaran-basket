<?php

namespace App\Controllers;

use Dompdf\Dompdf;
use App\Controllers\BaseController;
use App\Models\RegistrasiModel;

class Registrasi extends BaseController
{
    // tadinya buat dashboard
    // public function index()
    // {

    //     return view('admin/index');
    // }

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
        if ($this->request->getMethod() === 'post') {
            // Validasi input, Anda dapat menggunakan CodeIgniter 4 validation jika diperlukan.
            $this->validate([
                'foto' => 'uploaded[foto]|mime_in[foto,image/jpg,image/jpeg,image/png]|max_size[foto,5120]', // Contoh validasi untuk foto (maksimum 1MB)
            ]);

            // Ambil data dari form
            $nis = $this->request->getPost('nis');
            if ($model->where('nis', $nis)->first() !== null) {
                session()->setFlashdata('error', 'NIS sudah terdaftar.');
                return redirect()->back()->withInput();
            }
            $nama_siswa = $this->request->getPost('nama_siswa');
            $jenis_kelamin = $this->request->getPost('jenis_kelamin');
            $umur = $this->request->getPost('umur');
            $agama = $this->request->getPost('agama');
            $alamat = $this->request->getPost('alamat');
            $kelas = $this->request->getPost('kelas');
            $jurusan = $this->request->getPost('jurusan');
            $hobi = $this->request->getPost('hobi');
            $tinggi_badan = $this->request->getPost('tinggi_badan');
            $berat_badan = $this->request->getPost('berat_badan');
            $alasan_basket = $this->request->getPost('alasan_basket');


            // Proses upload foto (jika diperlukan)
            $foto = $this->request->getFile('foto');
            // var_dump($foto, $umur);
            if ($foto->isValid() && !$foto->hasMoved()) {
                $newName = $foto->getRandomName();
                $foto->move(ROOTPATH . 'public/uploads', $newName);
            }

            // Proses penyimpanan data ke basis data (jika diperlukan)
            // Gantikan bagian ini dengan kode untuk menyimpan data ke basis data.
            $model->save([
                'nis' => $nis,
                'foto' => $newName,
                'nama_siswa' => $nama_siswa,
                'jenis_kelamin' => $jenis_kelamin,
                'umur' => $umur,
                'agama' => $agama,
                'alamat' => $alamat,
                'kelas' => $kelas,
                'jurusan' => $jurusan,
                'hobi' => $hobi,
                'tinggi_badan' => $tinggi_badan,
                'berat_badan' => $berat_badan,
                'alasan_basket' => $alasan_basket,
                'kode_pendaftaran' => $kode,
            ]);

            session()->setFlashdata('success', 'Register Success');
            // Kembali ke halaman daftar jadwal atau halaman lainnya jika diperlukan.
            return redirect()->to(base_url('/daftar'));
        }

        // Tampilkan view form jika metode adalah GET
        return view('daftar');
    }

    // public function create()
    // {
    //     $model = new RegistrasiModel();
    //     $kode = 'DFT-' . strtoupper(substr(uniqid(), 0, 10));

    //     $rules = [
    //         'nis' => 'required',
    //         'nama_siswa' => 'required',
    //         'jenis_kelamin' => 'required',
    //         'umur' => 'required',
    //         'agama' => 'required',
    //         'alamat' => 'required',
    //         'kelas' => 'required',
    //         'jurusan' => 'required',
    //         'hobi' => 'required',
    //         'tinggi_badan' => 'required',
    //         'berat_badan' => 'required',
    //         'alasan_basket' => 'required',
    //     ];

    //     if (!$this->validate($rules)) {
    //         $data['validation'] = $this->validator;
    //     } else {
    //         $nis = $this->request->getPost('nis');
    //         if ($model->where('nis', $nis)->first() !== null) {
    //             session()->setFlashdata('error', 'NIS sudah terdaftar.');
    //             return redirect()->back()->withInput();
    //         }
    //         $model->save([
    //             // 'nis' => $this->request->getPost('nis'),
    //             'nis' => $nis,
    //             'nama_siswa' => $this->request->getPost('nama_siswa'),
    //             'jenis_kelamin' => $this->request->getPost('jenis_kelamin'),
    //             'umur' => $this->request->getPost('umur'),
    //             'agama' => $this->request->getPost('agama'),
    //             'alamat' => $this->request->getPost('alamat'),
    //             'kelas' => $this->request->getPost('kelas'),
    //             'jurusan' => $this->request->getPost('jurusan'),
    //             'hobi' => $this->request->getPost('hobi'),
    //             'tinggi_badan' => $this->request->getPost('tinggi_badan'),
    //             'berat_badan' => $this->request->getPost('berat_badan'),
    //             'alasan_basket' => $this->request->getPost('alasan_basket'),
    //             'kode_pendaftaran' => $kode,
    //         ]);

    //         $data = [
    //             'nis' => $nis,
    //             'nama_siswa' => $this->request->getPost('nama_siswa'),
    //             'jenis_kelamin' => $this->request->getPost('jenis_kelamin'),
    //             'umur' => $this->request->getPost('umur'),
    //             'agama' => $this->request->getPost('agama'),
    //             'alamat' => $this->request->getPost('alamat'),
    //             'kelas' => $this->request->getPost('kelas'),
    //             'jurusan' => $this->request->getPost('jurusan'),
    //             'hobi' => $this->request->getPost('hobi'),
    //             'tinggi_badan' => $this->request->getPost('tinggi_badan'),
    //             'berat_badan' => $this->request->getPost('berat_badan'),
    //             'alasan_basket' => $this->request->getPost('alasan_basket'),
    //             'kode_pendaftaran' => $kode,
    //         ];

    //         // Generate file PDF dan simpan ke folder
    //         $html = view('pdf_template', $data); 

    //         // Instansiasi objek Dompdf
    //         $dompdf = new \Dompdf\Dompdf();

    //         // Convert view menjadi PDF
    //         $dompdf->loadHtml($html);
    //         $dompdf->setPaper('A4', 'portrait');
    //         $dompdf->render();

    //         // Generate PDF dan simpan ke server
    //         $output = $dompdf->output();
    //         $pdfFileName = 'form_pendaftaran_' . date('Ymd_His') . '.pdf';
    //         file_put_contents(ROOTPATH . 'public/pdf_folder/' . $pdfFileName, $output); 

    //         return redirect()->to('/daftar')->with('success', 'Data berhasil disimpan. Silakan download salinan PDF Anda: <a href="' . base_url('pdf_folder/' . $pdfFileName) . '">Download</a>');
    //     }
    //     return view('/daftar');
    // }

    // public function detail($id = null)
    // {
    //     $model = new RegistrasiModel();
    //     $model->find($id);
    //     // return redirect()->to('/admin/details');
    //     return view('/admin/detail_pendaftar');
    // }

    public function detail($id = null)
    {
        $model = new RegistrasiModel();
        $data['registrasi'] = $model->find($id); // Mengambil data registrasi dari basis data berdasarkan ID
        return view('admin/detail_pendaftar', $data);
    }

    public function delete($id = null)
    {
        $model = new RegistrasiModel();
        $model->delete($id);
        return redirect()->to('/admin/data');
    }
}
