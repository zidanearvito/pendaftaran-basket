<?= $this->extend('layout/page_layout') ?>

<?= $this->section('content') ?>
<!-- app/Views/jadwal/index.php -->
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="text-center">Jadwal Latihan</h1>
            <table border="1">
                <tr>
                    <th>ID</th>
                    <th>Judul</th>
                    <th>Foto</th>
                    <th>Deskripsi</th>
                    <th>Aksi</th>
                </tr>
                <?php foreach ($jadwal as $item) : ?>
                    <tr>
                        <td><?= $item['id'] ?></td>
                        <td><?= $item['judul'] ?></td>
                        <td>
                            <?php if (!empty($item['foto'])) : ?>
                                <img src="<?= base_url('public/uploads/' . $item['foto']) ?>" width="100" alt="<?= $item['judul'] ?>">
                            <?php endif ?>
                        </td>
                        <td><?= $item['deskripsi'] ?></td>
                        <td>
                            <a href="<?= base_url('jadwal/edit/' . $item['id']) ?>">Edit</a>
                            <a href="<?= base_url('jadwal/delete/' . $item['id']) ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus jadwal ini?')">Hapus</a>
                        </td>
                    </tr>
                <?php endforeach ?>
            </table>
        </div>
    </div>
</div>


<?= $this->endSection() ?>