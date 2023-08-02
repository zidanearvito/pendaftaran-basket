<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Create Registrasi</title>
</head>
<body>
    <h1>Create Registrasi</h1>

    <?php if (isset($validation)): ?>
        <div class="validation_errors">
            <?= $validation->listErrors() ?>
        </div>
    <?php endif ?>

    <form action="/registrasi/store" method="post">
        <label for="nis">NIS</label>
        <input type="text" name="nis" id="nis"><br>
        
        <label for="nama_siswa">Nama Siswa</label>
        <input type="text" name="nama_siswa" id="nama_siswa"><br>

        <label for="jenis_kelamin">Jenis Kelamin</label>
        <select name="jenis_kelamin" id="jenis_kelamin">
            <option value="Laki-laki">Laki-laki</option>
            <option value="Perempuan">Perempuan</option>
        </select><br>

        <label for="umur">Umur</label>
        <input type="text" name="umur" id="umur"><br>

        <label for="agama">Agama</label>
        <input type="text" name="agama" id="agama"><br>

        <label for="alamat">Alamat</label>
        <textarea name="alamat" id="alamat"></textarea><br>

        <label for="kelas">Kelas</label>
        <input type="text" name="kelas" id="kelas"><br>

        <label for="hobi">Hobi</label>
        <input type="text" name="hobi" id="hobi"><br>

        <label for="tinggi_badan">Tinggi Badan</label>
        <input type="text" name="tinggi_badan" id="tinggi_badan"><br>

        <label for="berat_badan">Berat Badan</label>
        <input type="text" name="berat_badan" id="berat_badan"><br>

        <label for="alasan_basket">Alasan Basket</label>
        <textarea name="alasan_basket" id="alasan_basket"></textarea><br>

        <button type="submit">Submit</button>
    </form>

</body>
</html>