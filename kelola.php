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

<body class="bg-primary">
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

    <section class="page-section mt-5">
        <!-- form -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4">
                    <div class="card bg-secondary text-light">
                        <div class="card-body">
                            <h3 class="mb-4 pb-2">Tambah Stock Barang</h3>
                            <!-- input form -->
                            <form id="myForm" method="POST" action="process_form.php">
                                <div class="row mb-4">
                                    <div class="col-lg-7">
                                        <input type="text" class="form-control" id="nama_brg" placeholder="Nama Barang" name="nama_brg">
                                    </div>
                                    <div class="col-lg-3">
                                        <input type="number" class="form-control" id="jumlah" placeholder="Jumlah" name="jumlah"
                                            min="1">
                                    </div>

                                    <div class="col-lg-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="berat" name="berat">
                                            <label class="form-check-label" for="berat">
                                                Kg
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-lg-7 d-flex">
                                        <div class="form-check mx-2">
                                            <input class="form-check-input" type="radio" name="jenisBarang" id="barang"
                                                value="barang">
                                            <label class="form-check-label" for="barang">
                                                Barang
                                            </label>
                                        </div>
                                        <div class="form-check mx-2">
                                            <input class="form-check-input" type="radio" name="jenisBarang" id="bahan"
                                                value="bahan">
                                            <label class="form-check-label" for="bahan">
                                                Bahan
                                            </label>
                                        </div>
                                        <div class="form-check mx-2">
                                            <input class="form-check-input" type="radio" name="jenisBarang" id="lainnya"
                                                value="lainnya">
                                            <label class="form-check-label" for="lainnya">
                                                Lainnya
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 ml-auto">
                                        <input type="date" class="form-control" id="tgl_masuk" name="tgl_masuk"
                                            placeholder="Tanggal Masuk">
                                    </div>
                                </div>
                                <!-- submit -->
                                <div class="border-top border-light"></div>
                                <div class="d-flex justify-content-center mt-3">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                                <!-- /submit -->
                            </form>
                            <!-- /input form -->
                        </div>
                    </div>
                </div>
                <!-- /form -->

                <!-- table -->
                <div class="col-lg-8">
                    <table class="table table-striped" id="dataTable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Barang</th>
                                <th>Kode Barang</th>
                                <th>Jumlah</th>
                                <th>Jenis</th>
                                <th>Tanggal Masuk</th>
                            </tr>
                        </thead>
                        <tbody class="text-white">
                            <!-- pengisian melalui js -->
                        </tbody>
                    </table>
                </div>
                <!-- /table -->
            </div>
        </div>
    </section>

    <!-- script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>