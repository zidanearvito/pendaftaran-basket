<?= $this->extend('layout/page_layout') ?>

<?= $this->section('content') ?>

<!-- form template -->
<div class="container pt-3 pb-5">
    <div class="wow fadeInUp py-4" data-wow-delay="0.1s">
        <div class="border-start border-5 border-primary ps-4">
            <h1 class="display-6 mb-0">Daftar</h1>
        </div>
    </div>

    <div class="row ">
        <div class="col-lg-7 mx-auto">
            <div class="card mt-2 mx-auto p-4 bg-light">
                <div class="card-body bg-light">

                    <div class="container">
                        <form id="contact-form" role="form" method="POST" enctype="multipart/form-data">

                            <div class="controls">

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="nama">Nama Lengkap *</label>
                                            <input id="nama" type="text" name="nama_siswa" class="form-control" placeholder="Masukkan Nama Lengkap anda *" required="required" data-error="Firstname is required.">

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="nis">NIS *</label>
                                            <input id="nis" type="number" name="nis" class="form-control" placeholder="Masukkan NIS anda *" required="required">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="kelas">Kelas *</label>
                                            <select id="kelas" name="kelas" class="form-control" required="required">
                                                <option value="" selected disabled>--Pilih Kelas--</option>
                                                <option>10</option>
                                                <option>11</option>
                                                <option>12</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="jurusan">Pilih Jurusan *</label>
                                            <select id="jurusan" name="jurusan" class="form-control" required="required">
                                                <option value="" selected disabled>--Pilih Jurusan--</option>
                                                <option>Akuntansi</option>
                                                <option>Pemasaran</option>
                                                <option>Perhotelan</option>
                                                <option>Multimedia</option>
                                                <option>TKJ</option>
                                                <option>RPL</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="umur">Umur *</label>
                                            <input id="umur" type="number" name="umur" class="form-control" placeholder="Masukkan umur anda *" required="required">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="jenis_kelamin">Jenis Kelamin *</label>
                                            <select id="jenis_kelamin" name="jenis_kelamin" class="form-control" required="required">
                                                <option value="" selected disabled>--Pilih Jenis Kelamin--</option>
                                                <option value="Laki-Laki">Laki - Laki</option>
                                                <option value="Perempuan">Perempuan</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="agama">Agama *</label>
                                            <select id="agama" name="agama" class="form-control" required="required">
                                                <option value="" selected disabled>--Pilih Agama--</option>
                                                <option>Islam</option>
                                                <option>Kristen</option>
                                                <option>Katolik</option>
                                                <option>Hindu</option>
                                                <option>Budha</option>
                                                <option>Konghucu</option>
                                                <!-- <option>Lainnya...</option> -->
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="hobi">Hobi *</label>
                                            <input id="hobi" type="text" name="hobi" class="form-control" placeholder="Masukkan hobi anda *" required="required">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="tinggi_badan">Tinggi Badan *</label>
                                            <input id="tinggi_badan" type="number" name="tinggi_badan" class="form-control" placeholder="Masukkan tinggi badan anda *" required="required">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="berat_badan">Berat Badan *</label>
                                            <input id="berat_badan" type="number" name="berat_badan" class="form-control" placeholder="Masukkan berat badan anda *" required="required">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="foto">foto</label>
                                            <input type="file" class="form-control" name="foto" id="foto">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="alamat">Alamat *</label>
                                            <textarea id="alamat" name="alamat" class="form-control" placeholder="Masukkan Alamat anda.." rows="4" required="required"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="alasan_basket">Alasan Basket *</label>
                                            <textarea id="alasan_basket" name="alasan_basket" class="form-control" placeholder="Masukkan Alasan anda ingin bergabung dengan ekskul basket.." rows="4" required="required"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <input type="submit" class="btn btn-warning btn-send pt-2 btn-block
                            " value="Daftar">

                                    </div>

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    <?php if (session()->getFlashdata('success')) : ?>
        Swal.fire({
            icon: 'success',
            title: 'Success!',
            text: '<?= session()->getFlashdata('success') ?>',
        });
    <?php endif ?>
    <?php if (session()->getFlashdata('error')) : ?>
        Swal.fire({
            icon: 'error',
            title: 'Error!',
            text: '<?= session()->getFlashdata('error') ?>',
        });
    <?php endif ?>
</script>
<?= $this->endSection() ?>