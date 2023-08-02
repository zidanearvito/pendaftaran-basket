<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Siswa extends Seeder
{
    public function run()
    {
        //
        $students = [
			[
				'nis' => '11165',
				'nama_siswa'  => 'zidane arvito',
				'jenis_kelamin' => 'laki-laki',
                'umur' => 17,
                'agama' => 'islam',
                'alamat' => 'jl. swadaya no. 22',
                'kelas' => '11 ips',
                'hobi' => 'main game',
                'tinggi_badan' => '165',
                'berat_badan' => '50',
                'alasan_basket' => 'coba-coba'
			],
			[
				'nis' => '11168',
				'nama_siswa'  => 'john doe',
				'jenis_kelamin' => 'laki-laki',
                'umur' => 18,
                'agama' => 'islam',
                'alamat' => 'jl. merpati raya',
                'kelas' => '12 ipa',
                'hobi' => 'main basket',
                'tinggi_badan' => '172',
                'berat_badan' => '70',
                'alasan_basket' => 'seru'
			],
			[
				'nis' => '11170',
				'nama_siswa'  => 'jane doe',
				'jenis_kelamin' => 'perempuan',
                'umur' => 17,
                'agama' => 'islam',
                'alamat' => 'jl. jalak',
                'kelas' => '11 ips',
                'hobi' => 'ngoding',
                'tinggi_badan' => '162',
                'berat_badan' => '50',
                'alasan_basket' => 'coba-coba'
			]
		];

		foreach($students as $student) {
        // insert data ke tabel
        $this->db->table('registrasi')->insert($student);

        // ambil id terakhir yang dihasilkan oleh auto_increment
        $lastId = $this->db->insertID();

        // hitung dan update nilai kd_pendaftaran dengan nilai yang tepat
        $kd_pendaftaran = 'daftar-' . substr($student['kelas'], 0, 2) . str_pad($lastId, 2, '0', STR_PAD_LEFT);
        $this->db->table('registrasi')->update(['kd_pendaftaran' => $kd_pendaftaran], ['id' => $lastId]);
    }
    }
}
