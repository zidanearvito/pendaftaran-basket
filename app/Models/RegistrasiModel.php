<?php

namespace App\Models;

use CodeIgniter\Model;

class RegistrasiModel extends Model
{
    protected $table = 'registrasi';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $allowedFields = [
        'nis', 'nama_siswa', 'jenis_kelamin', 'umur', 'agama',
        'alamat', 'kelas', 'jurusan', 'hobi', 'tinggi_badan', 'berat_badan',
        'alasan_basket', 'kode_pendaftaran'
    ];
}
