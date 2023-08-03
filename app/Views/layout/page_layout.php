<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Nusan</title>

  <!-- Favicon -->
  <!-- <link href="img/favicon.ico" rel="icon" /> -->

  <!-- Google Web Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&family=Poppins:wght@600;700&display=swap" rel="stylesheet" />

  <!-- Icon Font Stylesheet -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />

  <!-- cdn bootstrap 4 buat form daftar -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

  <!-- cdn bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

  <!-- css buat form daftar -->
  <link rel="stylesheet" href="<?= base_url() ?>/css/form-css.css">

  <!-- Libraries Stylesheet -->
  <link href="<?= base_url() ?>/lib/animate/animate.min.css" rel="stylesheet" />
  <link href="<?= base_url() ?>/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />

  <!-- Customized Bootstrap Stylesheet -->
  <link href="<?= base_url() ?>/css/bootstrap.min.css" rel="stylesheet" />

  <!-- Template Stylesheet -->
  <link href="<?= base_url() ?>/css/style.css" rel="stylesheet" />

  <!-- css buat form daftar -->
  <!-- <link rel="stylesheet" href="<?= base_url() ?>/css/form-css.css"> -->

</head>

<body class="">
  <?= $this->include('layout/navbar') ?>

  <main class="">
    <?= $this->renderSection('content') ?>
  </main>

  <?= $this->include('layout/footer') ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url() ?>/lib/wow/wow.min.js"></script>
  <script src="<?= base_url() ?>/lib/easing/easing.min.js"></script>
  <script src="<?= base_url() ?>/lib/waypoints/waypoints.min.js"></script>
  <script src="<?= base_url() ?>/lib/owlcarousel/owl.carousel.min.js"></script>

  <!-- Template Javascript -->
  <script src="<?= base_url() ?>/js/main.js"></script>
</body>

</html>