<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title><?= $judul; ?></title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="<?= base_url('assets/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="<?= base_url('assets/'); ?>css/styles.css" rel="stylesheet" />
</head>

<body class="d-flex flex-column h-100">
    <main class="flex-shrink-0">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container px-5">
                <a class="navbar-brand " href="<?= base_url('home'); ?>"><i class="fas fa-fw fa-solid fa-palette"></i> Graphic Class</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link" href="<?= base_url('home'); ?>">Beranda</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?= base_url('kelas'); ?>">Kelas</a></li>
                        <li class="nav-item"><a class="nav-link" href="about.html">Tentang Kami</a></li>
                        <li class="nav-item"><a class="nav-link" href="pricing.html">Syarat & Ketentuan</a></li>
                        <li class="nav-item"><a class="nav-link" href="faq.html">FAQ</a></li>
                        <div class="navbar">
                            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                                <li>
                                    <?php
                                    $keranjang = 'Keranjang : ' . $this->cart->total_items() . ' items'
                                    ?>
                                    <?= anchor('kelas/detail_keranjang', $keranjang); ?>
                                </li>
                            </ul>
                        </div>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="<?= base_url('user'); ?>">My Profile</a></li>
                                <li><a class="dropdown-item" href="#!">Kelas Terdaftar</a></li>
                                <li>
                                    <hr class="dropdown-divider" />
                                </li>
                                <li><a class="dropdown-item" href="<?= base_url('auth/logout'); ?>">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>