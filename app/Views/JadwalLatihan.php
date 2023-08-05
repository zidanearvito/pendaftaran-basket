<?= $this->extend('layout/page_layout') ?>

<?= $this->section('content') ?>
<!-- app/Views/jadwal/index.php -->
<div class="container">
    <div class="row">
        <div class="wow fadeInUp py-4" data-wow-delay="0.1s">
            <div class="border-start border-5 border-primary ps-4">
                <h1 class="display-6 mb-0">Schedule</h1>
            </div>
        </div>
        <div class="col-lg-12">
            <?php foreach ($jadwal as $item) : ?>
                <div class="d-flex justify-content-between">
                    <p class="card-text"> </p>
                    <p class="card-text small">updated at : <?= $item['created_at'] ?> </p>
                </div>
                <img src="<?= base_url('uploads/' . $item['foto']) ?>" alt="Foto Jadwal" width="1200px" class="pt-3">
                <div class="card-body offset-2">
                    <hr style="width: 800px;">
                    <h2 class="card-title m-0"> <?= $item['judul'] ?> </h2>
                    <p class="card-text "><?= $item['deskripsi'] ?> </p>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</div>
</div>


<?= $this->endSection() ?>