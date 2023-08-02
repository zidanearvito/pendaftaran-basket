<!-- views/registrasi/index.php -->

<h2>Daftar Siswa</h2>

<a href="<?= site_url('registrasi/create') ?>">Tambah Data</a>

<table border="1">
    <tr>
        <th>No</th>
        <th>NIS</th>
        <th>Nama Siswa</th>
        <th>Jenis Kelamin</th>
        <th>Umur</th>
        <th>Agama</th>
        <th>Alamat</th>
        <th>Kelas</th>
        <th>Hobi</th>
        <th>Tinggi Badan</th>
        <th>Berat Badan</th>
        <th>Alasan Basket</th>
        <th>Aksi</th>
    </tr>
    <?php foreach ($registrasi as $key => $data) : ?>
        <tr>
            <td><?= $key + 1 ?></td>
            <td><?= $data['nis'] ?></td>
            <td><?= $data['nama_siswa'] ?></td>
            <td><?= $data['jenis_kelamin'] ?></td>
            <td><?= $data['umur'] ?></td>
            <td><?= $data['agama'] ?></td>
            <td><?= $data['alamat'] ?></td>
            <td><?= $data['kelas'] ?></td>
            <td><?= $data['hobi'] ?></td>
            <td><?= $data['tinggi_badan'] ?></td>
            <td><?= $data['berat_badan'] ?></td>
            <td><?= $data['alasan_basket'] ?></td>
            <td>
                <a href="<?= site_url('registrasi/edit/' . $data['id']) ?>">Edit</a>
                <a href="<?= site_url('registrasi/delete/' . $data['id']) ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</a>
            </td>
        </tr>
    <?php endforeach ?>
</table>
