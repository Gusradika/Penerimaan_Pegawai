<?php

$conn = mysqli_connect("localhost", "root", "", "rekrutmen");


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Tambah Data Calon Dosen </title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="index.php">
            <center> Aplikasi Penerimaan <br>Dosen </center>
        </a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i
                class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            <div class="input-group">
                <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..."
                    aria-describedby="btnNavbarSearch" />
                <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i
                        class="fas fa-search"></i></button>
            </div>
        </form>
        <!-- Navbar-->
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#!">Settings</a></li>
                    <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                    <li>
                        <hr class="dropdown-divider" />
                    </li>
                    <li><a class="dropdown-item" href="#!">Logout</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Core</div>
                        <a class="nav-link" href="index.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Dashboard
                        </a>
                        <div class="sb-sidenav-menu-heading">Master</div>
                        <a class="nav-link" href="calon_dosen.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                            Calon Dosen
                        </a>
                        <a class="nav-link" href="tables.html">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            Tables
                        </a>
                        <div class="sb-sidenav-menu-heading">Addons</div>
                        <a class="nav-link" href="charts.html">
                            <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                            Charts
                        </a>
                        <a class="nav-link" href="tables.html">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            Tables
                        </a>
                    </div>
                </div>

                <div class="sb-sidenav-footer">
                    <div class="small">Logged in as:</div>
                    Start Bootstrap
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Tambah Data Calon Dosen </h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                        <li class="breadcrumb-item active">Tambah Calon Dosen </li>
                    </ol>

                    <!-- Simpan -->

                    <form action="" method="post">
                        <?php
                        $nama = "";
                        $tempat_lahir = "";
                        $tanggal_lahir = "";
                        $jenis_kelamin = "";
                        $alamat = "";
                        $no_telepon = "";
                        $agama = "";
                        $status = "";
                        $pendidikan_terakhir = "";
                        $query = "";
                        ?>
                        <?php
                        include 'database/koneksi.php';

                        // echo ("SEBELUM " . var_dump($_POST));

                        if (isset($_POST['simpan'])) {
                            $nama = $_POST['nama'];
                            $tempat_lahir = $_POST['tempat_lahir'];
                            $tanggal_lahir = $_POST['tanggal_lahir'];
                            $jenis_kelamin = $_POST['jenis_kelamin'];
                            $alamat = $_POST['alamat'];
                            $no_telepon = $_POST['no_telepon'];
                            $agama = $_POST['agama'];
                            $status = $_POST['status'];
                            $pendidikan_terakhir = $_POST['pendidikan_terakhir'];
                            // echo ("SESUDAH " . var_dump($_POST));
                            //Query Insert
                            $sql = "Insert into calon_dosen
                        (nama,tempat_lahir,tanggal_lahir,jenis_kelamin,alamat,no_telepon,agama,status
                        ,pendidikan_terakhir)VALUES('$nama','$tempat_lahir','$tanggal_lahir','$jenis_kelamin','$alamat','$no_telepon','$agama','$status','$pendidikan_terakhir')";
                            mysqli_query($conn, $sql);
                            echo "
            <script>
            alert('New record created successfully');
                document.location.href='calon_dosen.php';
            </script>
        ";
                        }

                        // if ($koneksi->query($sql) === TRUE) {
                        // echo "New record created successfully";
                        // } else {
                        // echo "Error: " . $sql . "<br>" . $koneksi->error;
                        // }

                        ?>

                        <div class="col-md-4">
                            <label for="validationCustom01" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" required>
                            <br>
                        </div>


                        <div class="col-md-4">
                            <label for="validationCustom02" class="form-label">Tempat dan Tanggal Lahir</label>

                        </div>

                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Tempat Lahir" id="tempat_lahir"
                                name="tempat_lahir" required>
                            <input type="date" class="form-control" id="date" placeholder="Tanggal_lahir"
                                name="tanggal_lahir">
                        </div>


                        <div class="col-md-4">
                            <label for="validationCustom03" class="form-label" id="jenis_kelamin"
                                name="jenis_kelamin">Jenis Kelamin </label>

                        </div>
                        <div class="form-check-inline">
                            <input class="form-check-input" type="radio" name="jenis_kelamin" id="laki-laki"
                                value="Laki-laki">
                            <label class="form-check-label" for="Pilihan1"></label>
                            Laki-laki
                        </div>

                        <div class="form-check-inline">
                            <input class="form-check-input" type="radio" name="jenis_kelamin" id="perepmpuan"
                                value="Perempuan">
                            <label class="form-check-label" for="Pilihan2"></label>
                            Perempuan
                        </div>
                        <br><br>
                        <div class="col-md-4">
                            <label for="validationCustom04" class="form-label" id="alamat" name="alamat">Alamat </label>
                        </div>

                        <div class="form-floating">
                            <textarea class="form-control" placeholder="Tuliskan Alamat Anda Disini" id="alamat"
                                name="alamat"></textarea>
                        </div>
                        <br>
                        <div class="col-md-4">
                            <label for="validationCustom05" class="form-label" id="no_telepon" name="no_telepon">Nomor
                                Telepon</label>
                            <input type="text" class="form-control" id="no_telepon" name="no_telepon" required>

                        </div>
                        <br>
                        <div class="cold-md-4">
                            <label for="validationCustom06" class="form-label" id="agama">Agama</label>
                            <input type="hidden" name="agama" id="">
                            <select class="form-select" aria-label="Default Select Example" name="agama">
                                <option value="1">Silahkan Pilih Agama Masing-Masing</option>
                                <option value="Islam">Islam</option>
                                <option value="Kristen">Kristen Protestan</option>
                                <option value="Katholik">Katholik </option>
                                <option value="Hindu">Hindu</option>
                                <option value="Budha">Budha</option>
                                <option value="Konghucu">Konghucu</option>
                            </select>
                            </input>
                        </div>
                        <br>
                        <div class="col-md-4">
                            <label for="validationCustom7" class="form-label" id="status">Status</label>
                            <select class="form-select" aria-label="Default-Select-Example" name="status">
                                <option value="null">Siahkan Pilih Status Anda</option>
                                <option value="Belum Menikah">Belum Menikah</option>
                                <option value="Sudah Menikah">Sudah Menikah</option>
                            </select>
                        </div>
                        <br>
                        <div class="cold-md-4">
                            <label for="validationCustom08" class="form-label" id="pendidikan_terakhir"
                                name="pendidikan_terakhir">Pendidikan_Terakhir</label>
                            <select class="form-select" aria-label="Default Select=Example" name="pendidikan_terakhir">
                                <option value="null">Silahkan Pilih Pendidikan Terakhir Anda</option>
                                <option value="S2">S2(Magister)</option>
                                <option value="S3">S3(Doktor)</option>
                            </select>
                        </div>
                        <br>
                        <div class="btn-group">
                            <button class="btn btn-primary" type="submit" name="simpan">Simpan</button>
                            &nbsp;&nbsp; &nbsp;
                            <a href="index.php" class="btn btn-dark">Cancel</a>
                        </div>

                        <!-- Form tutup -->
                    </form>



            </main>

            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Your Website 2022</div>
                        <div>
                            <a href="#">Privacy Policy</a>
                            &middot;
                            <a href="#">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="js/scripts.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>
</body>

</html>