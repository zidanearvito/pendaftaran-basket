<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5 py-lg-0">
    <a class="navbar-brand" href="<?= base_url() ?>">
        <img src="<?= base_url('img') ?>/nusan.png" alt="" width="120" height="80">
    </a>
    <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto py-3 py-lg-0">
            <a href="<?= base_url() ?>" class="nav-item nav-link">Beranda</a>
            <a href="<?= base_url('jadwal') ?>" class="nav-item nav-link">Jadwal</a>
            <a href="<?= base_url('tentang-kami') ?>" class="nav-item nav-link">Galeri</a>
            <a href="<?= base_url('daftar') ?>" class="nav-item nav-link">Daftar</a>
        </div>
    </div>
</nav>
<!-- Navbar End -->