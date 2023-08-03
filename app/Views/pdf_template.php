<!-- pdf_template.php -->
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Formulir Pendaftaran</title>
    <!-- Add Bootstrap CSS link here -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .header {
            text-align: center;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Formulir Pendaftaran</h1>
    </div>
    <table class="table table-bordered">
        <tr>
            <th>Kode Pendaftaran</th>
            <th>:</th>
            <td><?= $kode_pendaftaran ?></td>
        </tr>
        <tr>
            <th>NIS</th>
            <th>:</th>
            <td><?= $nis ?></td>
        </tr>
        <tr>
            <th>Nama Lengkap</th>
            <th>:</th>
            <td><?= $nama_siswa ?></td>
        </tr>
        <tr>
            <th>Jenis Kelamin</th>
            <th>:</th>
            <td><?= $jenis_kelamin ?></td>
        </tr>
        <tr>
            <th>Umur</th>
            <th>:</th>
            <td><?= $umur ?></td>
        </tr>
        <tr>
            <th>Agama</th>
            <th>:</th>
            <td><?= $agama ?></td>
        </tr>
        <tr>
            <th>Alamat</th>
            <th>:</th>
            <td><?= $alamat ?></td>
        </tr>
        <tr>
            <th>Kelas</th>
            <th>:</th>
            <td><?= $kelas ?></td>
        </tr>
        <tr>
            <th>Jurusan</th>
            <th>:</th>
            <td><?= $jurusan ?></td>
        </tr>
        <tr>
            <th>Hobi</th>
            <th>:</th>
            <td><?= $hobi ?></td>
        </tr>
        <tr>
            <th>Tinggi Badan</th>
            <th>:</th>
            <td><?= $tinggi_badan ?> cm</td>
        </tr>
        <tr>
            <th>Berat Badan</th>
            <th>:</th>
            <td><?= $berat_badan ?> kg</td>
        </tr>
        <tr>
            <th>Alasan Basket</th>
            <th>:</th>
            <td><?= $alasan_basket ?></td>
        </tr>
    </table>
</body>
</html>
