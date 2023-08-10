<?= $this->extend('layout/page_layout') ?>

<?= $this->section('content') ?>

<!-- Carousel Start -->
<div class="container-fluid p-0 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="w-100" src="img/hero1.jpg" alt="Image" />
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-12 col-lg-10">
                                <h5 class="text-light text-uppercase mb-3 animated slideInDown">

                                </h5>
                                <h1 class="display-2 text-light mb-3 animated slideInDown">
                                    Nusantara Basketball
                                </h1>

                                <a href="<?= base_url('daftar') ?>" class="btn btn-primary py-3 px-5">Daftar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="w-100" src="img/hero2.jpg" alt="Image" />
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-12 col-lg-10">
                                <h5 class="text-light text-uppercase mb-3 animated slideInDown">

                                </h5>
                                <h1 class="display-2 text-light mb-3 animated slideInDown">
                                    Nusantara Basketball
                                </h1>

                                <a href="" class="btn btn-primary py-3 px-5">More Details</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
<!-- Carousel End -->

<!-- Captain section Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="position-relative overflow-hidden ps-5 h-100" style="min-height: 400px">
                    <img class="position-absolute w-100 h-100" src="<?php base_url() ?>/img/kapten.jpg" alt="" style="object-fit: cover" />

                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp " data-wow-delay="0.5s">
                <div class="h-100">
                    <div class="border-start border-5 border-primary ps-4 mb-5">
                        <h6 class="text-body text-uppercase mb-2">Kapten</h6>
                        <h1 class="display-6 mb-0">
                            Leanna Narasnama
                        </h1>
                    </div>
                    “All the successful teams I’ve ever seen have three characteristics: They play unselfish, they play together, and they play hard.“
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Captain section End -->

<!-- Facts Start -->
<div class="container-fluid my-5 p-0">
    <div class="row g-0">
        <div class="col-xl-3 col-sm-6 wow fadeIn" data-wow-delay="0.1s">
            <div class="position-relative">
                <img class="img-fluid w-100" src="<?= base_url() ?>/img/1.jpg" alt="" style="height: 38rem;" />
                <div class="facts-overlay">
                    <h1 class="display-1"></h1>

                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 wow fadeIn" data-wow-delay="0.3s">
            <div class="position-relative">
                <img class="img-fluid w-100" src="<?= base_url() ?>/img/2.jpg" alt="" style="height: 38rem;" />
                <div class="facts-overlay">
                    <h1 class="display-1"></h1>

                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 wow fadeIn" data-wow-delay="0.5s">
            <div class="position-relative">
                <img class="img-fluid w-100" src="<?= base_url() ?>/img/3s.jpg" alt="" style="height: 38rem;" />
                <div class="facts-overlay">
                    <h1 class="display-1"></h1>

                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 wow fadeIn" data-wow-delay="0.7s">
            <div class="position-relative">
                <img class="img-fluid w-100" src="<?= base_url() ?>/img/4s.jpg" alt="" style="height: 38rem;" />
                <div class="facts-overlay">
                    <h1 class="display-1"></h1>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- Facts End -->

<!-- Features Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="border-start border-5 border-primary ps-4 mb-5">
                    <h6 class="text-body text-uppercase mb-2">Pelatih</h6>
                    <h1 class="display-6 mb-0">
                        RIYO ANDHIKA
                    </h1>
                </div>
                <p class="mb-5">
                    “You can’t stop people from trying to limit your dreams, but you can stop it from becoming a reality. Your dreams are up to you. I encourage you to always be curious, always seek out things you love and always work hard once you find it.”
                </p>
                
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="position-relative overflow-hidden ps-5 pt-5 h-100" style="min-height: 400px">
                    <img class="position-absolute w-100 h-100" src="img/coach.jpg" alt="" style="object-fit: cover" />
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Features End -->

<?= $this->endSection() ?>