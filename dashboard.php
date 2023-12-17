<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>UAS PemWeb</title>

    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Font Awesome icons -->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet"
        type="text/css" />
    <!-- Core theme CSS -->
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://code.iconify.design/iconify-icon/1.0.8/iconify-icon.min.js"></script>
</head>

<body id="page-top">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="#page-top">PENGELOLA INVENTORY</a>
            <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button"
                data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive"
                aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded"
                            href="index.php">Home</a>
                    </li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded"
                            href="kelola.php">Stock
                            Barang</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- /Navbar -->
    
    <!-- Masthead-->
    <header class="masthead bg-primary text-white text-center">
        <div class="container d-flex align-items-center flex-column">

            <img class="masthead-avatar mb-5" src="assets/img/avataaars.svg" alt="..." />
            <h1 class="masthead-heading text-uppercase mb-0">UAS Pemrograman Web</h1>

            <div class="divider-custom divider-light">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <p class="masthead-subheading font-weight-light mb-0">120140181 - Fatkhan Aziez Suffi</p>
        </div>
    </header>
    <!-- /Masthead -->

    <!-- About Section-->
    <section class="page-section" id="about">
        <div class="container">
            <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Pengelola Inventory</h2>
            <div class="row my-5 ">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title text-start">Stock Barang</h5>
                            <p class="card-text">Kelola Barang pada daftar barang yang dapat menambah, mengedit, dan
                                menghapus daftar barang
                            </p>
                            <div class="d-flex justify-content-end">
                                <a href="form.html" class="btn btn-primary d-flex">
                                    <iconify-icon icon="material-symbols:tv-options-edit-channels-rounded" width="25"
                                        height="25"></iconify-icon>
                                    <span class="text-center align-middle mx-1">Stock</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /About -->

    <!-- Footer-->
    <footer class="footer text-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <h4 class="text-uppercase mb-4">creator</h4>
                    <p class="lead mb-0">
                        Fatkhan Aziez Suffi
                        <br />
                        120140181
                    </p>
                </div>

                <div class="col-lg-4 mb-5 mb-lg-0">
                    <h4 class="text-uppercase mb-4">my social media</h4>
                    <a class="btn btn-outline-light btn-social mx-1"
                        href="https://www.facebook.com/profile.php?id=100014273409156&mibextid=ZbWKwL"><i
                            class="fab fa-fw fa-facebook-f"></i></a>
                    <a class="btn btn-outline-light btn-social mx-1"
                        href="https://x.com/beban_rt?t=6muTCKK-Wp91FYX4QgZk3A&s=09"><i
                            class="fab fa-fw fa-twitter"></i></a>
                    <a class="btn btn-outline-light btn-social mx-1" href="https://instagram.com/@fatkhanas"><i
                            class="fab fa-fw fa-instagram"></i></a>
                    <a class="btn btn-outline-light btn-social mx-1"
                        href="https://www.tiktok.com/@brokenheart.clinic?_t=8gjPrqMUm6U&_r=1"><i
                            class="fab fa-fw fa-tiktok"></i></a>
                </div>

                <div class="col-lg-4">
                    <h4 class="text-uppercase mb-4">About creator</h4>
                    <p class="lead mb-0">
                        Mahasiswa teknik informatika, di Institut Teknologi Sumatera
                    </p>
                </div>
            </div>
        </div>
    </footer>
    <div class="copyright py-4 text-center text-white">
        <div class="container"><small>Copyright &copy; UTS Pemweb 2023</small></div>
    </div>
    <!-- /Footer -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>