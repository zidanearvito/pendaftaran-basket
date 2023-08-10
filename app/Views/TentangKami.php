<?= $this->extend('layout/page_layout') ?>

<?= $this->section('content') ?>
<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center py-5">
        <h1 class="display-4 text-white animated slideInDown mb-4">About Us</h1>
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

<!-- About Start -->
<div class="container text-justify">
    Basketball Nusantara is an organization that focuses on developing basketball talents among students at SMK Nusantara Ciputat. We present a dynamic and inspiring basketball program for students.

    Our vision is to become a forum for basketball lovers at Nusantara Ciputat Vocational High School, nurture talented athletes, and create strong bonds of friendship among our members. We believe that basketball is more than just a game, it is a means to hone skills, cultivate a spirit of sportsmanship, and develop a strong personality.

    Each of our steps and efforts is always based on the values instilled by SMK Nusantara Ciputat, such as hard work, discipline and commitment to excellence. We uphold the good name of the school and strive to be an example that inspires other students.

    Excitedly,
    Nusantara Basketball Team
</div>
<!-- About End -->

<!-- Achievment Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5 align-items-end mb-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="border-start border-5 border-primary ps-4">
                    <h1 class="display-6 mb-0">Gallery</h1>
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
                    <img class="img-fluid" src="<?= base_url() ?>/uploads/gallery/<?= $item['foto'] ?>" alt="" style="width: 25rem; height:15rem"/>
                    <div class="team-text bg-white p-4">
                        <h5><?= $item ['judul'] ?></h5>
                        <span><?= $item ['deskripsi'] ?></span>
                    </div>
                </div>
            </div>
            <?php endforeach ?>
        </div>
    </div>
</div>
<!-- Achievment End -->

<?= $this->endSection() ?>