<?= $this->extend('layout/page_layout') ?>

<?= $this->section('content') ?>
<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center py-5">
        <h1 class="display-4 text-white animated slideInDown mb-4">Galeri</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <!-- <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item">
                    <a class="text-white" href="#">Home</a>
                </li>
                <li class="breadcrumb-item">
                    <a class="text-white" href="#">Pages</a>
                </li>
                <li class="breadcrumb-item text-primary active" aria-current="page">
                    About
                </li>
            </ol> -->
        </nav>
    </div>
</div>
<!-- Page Header End -->

<!-- Achievment Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5 align-items-end mb-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="border-start border-5 border-primary ps-4">
                    <!-- <h1 class="display-6 mb-0">Galeri</h1> -->
                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                <!-- <p class="mb-0">
                    Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu
                    diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet
                    lorem sit clita duo justo magna dolore erat amet
                </p> -->
            </div>
        </div>
        <div class="row g-4">
            <?php foreach ($galeri as $item) : ?>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item position-relative">
                        <img class="img-fluid" src="<?= base_url() ?>/uploads/gallery/<?= $item['foto'] ?>" alt="" style="width: 25rem; height:15rem" />
                        <div class="team-text bg-white p-4">
                            <h5><?= $item['judul'] ?></h5>
                            <span><?= $item['deskripsi'] ?></span>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</div>
<!-- Achievment End -->
<!-- About Start -->
<div class="container text-justify">
    Basket Nusantara adalah sebuah organisasi yang berfokus pada pengembangan bakat basket di kalangan pelajar di SMK Nusantara Ciputat. Kami menghadirkan program basket yang dinamis dan inspiratif bagi para siswa.

    Visi kami adalah menjadi wadah bagi para pecinta bola basket di SMK Nusantara Ciputat, membina atlet-atlet berbakat, dan menciptakan ikatan persahabatan yang kuat di antara para anggota. Kami percaya bahwa basket bukan hanya sekedar permainan, tetapi juga sarana untuk mengasah kemampuan, memupuk jiwa sportivitas, dan mengembangkan kepribadian yang kuat.

    Setiap langkah dan usaha kami selalu dilandasi oleh nilai-nilai yang ditanamkan oleh SMK Nusantara Ciputat, seperti kerja keras, disiplin, dan komitmen untuk menjadi yang terbaik. Kami menjunjung tinggi nama baik sekolah dan berusaha untuk menjadi teladan yang menginspirasi siswa-siswi lainnya.
    <br>
    Dengan penuh semangat,
    Tim Bola Basket Nusantara
</div>
<!-- About End -->

<?= $this->endSection() ?>