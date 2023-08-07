<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Bank Data Golongan Darah</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="<?= base_url('gambar/') ?>logo.png" rel="icon">
    <link href="<?= base_url('gambar/') ?>logo.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?= base_url('techie/'); ?>assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="<?= base_url('techie/'); ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url('techie/'); ?>assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?= base_url('techie/'); ?>assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="<?= base_url('techie/'); ?>assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="<?= base_url('techie/'); ?>assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?= base_url('techie/'); ?>assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Techie
  * Updated: May 30 2023 with Bootstrap v5.3.0
  * Template URL: https://bootstrapmade.com/techie-free-skin-bootstrap-3/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

    <link rel="stylesheet" href="<?= base_url('tempApp/') ?>assets/extensions/datatables.net-bs5/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="<?= base_url('tempApp/') ?>assets/css/pages/datatables.css">
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top " style="background-color: rgba(255, 33, 113, 0.8);">
        <div class="container d-flex align-items-center justify-content-between">
            <h1 class="logo"><a href="<?= base_url('home'); ?>">bdgd</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto" href="<?= base_url('home'); ?>">Beranda</a></li>
                    <li><a class="nav-link scrollto" href="#services">Data Golongan Darah</a></li>
                    <li>
                        <?php if ($this->session->userdata('email')) { ?>
                    <li class="dropdown"><a href="#"><span>Lainnya</span> <i class="bi bi-chevron-right"></i></a>
                        <ul>
                            <li><a href="<?= base_url('admin/edit_password'); ?>">Ubah Passowrd</a></li>
                            <li><a href="<?= base_url('auth/logout'); ?>">Logout</a></li>
                            <!-- <li><a href="#features">Arti Logo</a></li> -->
                        </ul>
                    </li>
                    <!-- <a class="getstarted scrollto" href="<?= base_url('auth/logout'); ?>">Logout</a> -->
                <?php } else { ?>
                    <a class="getstarted scrollto" href="<?= base_url('auth'); ?>">Login</a>
                <?php }  ?>
                </li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->


    <main id="main">


        <!-- ======= Services Section ======= -->
        <br>
        <section id="services" class="services section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Golongan Darah</h2>
                    <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> -->
                </div>

                <?php
                // Notif gagal input
                echo validation_errors('<div class="alert alert-danger alert-dismissible fade show" role="alert">', '  <button type="button" style="color: #fff;" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
                // notif data masuk db
                if ($this->session->flashdata('pesan')) {
                    echo $this->session->flashdata('pesan');
                }
                ?>
                <div class="row gy-4">
                    <div class="col-lg-12 col-md-12 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                        <div class="card col-lg-12" style="margin: 0; padding: 0;">
                            <div class="card-header" style="background-color: #FF2171; color: white; padding: 20px; display: flex; justify-content: space-between;">
                                <strong> Tabel Peserta Golongan Darah</strong>
                                <?php if ($this->session->userdata('email')) { ?>
                                    <span>
                                        <a href="#!" class="btn btn-sm btn-outline-light" data-bs-toggle="modal" data-bs-target="#Tambah" role="button"><i data-feather="plus"></i>Tambah</a>
                                    </span>
                                <?php }  ?>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped" id="table1">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama</th>
                                                <th>Pangkat/NRP</th>
                                                <th>Jabatan</th>
                                                <th>Golongan Darah</th>
                                                <th>Kontak/WA</th>
                                                <th>Keterangan</th>
                                                <?php if ($this->session->userdata('email')) { ?>
                                                    <th>Aksi</th>
                                                <?php }  ?>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $i = 1;
                                            foreach ($gol_darah as $gd) :
                                            ?>
                                                <tr>
                                                    <td><?= $i++; ?></td>
                                                    <td><?= ucwords($gd['nama_pendonor']); ?></td>
                                                    <td><?= $gd['pangkat_pendonor']; ?>/<?= $gd['nrp_pendonor']; ?></td>
                                                    <td><?= $gd['jabatan_pendonor']; ?></td>
                                                    <td><?= strtoupper($gd['golongan_darah']); ?></td>
                                                    <td>
                                                        <a href="https://wa.me/62<?= $gd['kontak_pendonor']; ?>" target="_blank">0<?= $gd['kontak_pendonor']; ?></a>
                                                    </td>
                                                    <td><?= ucwords($gd['keterangan']); ?></td>
                                                    <?php if ($this->session->userdata('email')) { ?>
                                                        <td>
                                                            <a href="<?= base_url('admin/edit_pendonor/' . $gd['id_donor_darah'] . '/' . $gd['golongan_darah']);  ?>" onclick='return confirm("Apakah anda yakin mengedit data ini?")' class="btn btn-sm btn-outline-primary">Edit</a>
                                                            <a href="<?= base_url('admin/hapus_pendonor/' . $gd['id_donor_darah'] . '/' . $gd['golongan_darah']);  ?>" onclick='return confirm("Apakah anda yakin menghapus data ini?")' class="btn btn-sm btn-outline-danger">Hapus</a>
                                                        </td>
                                                    <?php }  ?>
                                                </tr>
                                            <?php endforeach; ?>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End Services Section -->




    </main><!-- End #main -->


    <div class="modal fade" id="Tambah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="<?= base_url('admin/tambah_pendonor'); ?>" method="POST">
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama" required>
                            <input type="hidden" name="jenis_gol_darah" value="<?= $nama_gol_darah; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="pangkat" class="form-label">Pangkat</label>
                            <input type="text" class="form-control" id="pangkat" name="pangkat" placeholder="Pangkat">
                        </div>
                        <div class="mb-3">
                            <label for="nrp" class="form-label">NRP</label>
                            <input type="number" class="form-control" id="nrp" name="nrp" placeholder="NRP">
                        </div>
                        <div class="mb-3">
                            <label for="jabatan" class="form-label">Jabatan</label>
                            <input type="text" class="form-control" id="jabatan" name="jabatan" placeholder="Jabatan" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Golongan Darah</label>
                            <select class="form-select" aria-label="Default select example" id="gol_darah" name="gol_darah" required>
                                <option disabled selected>Silahkan Pilih</option>
                                <option value="a">A</option>
                                <option value="b">B</option>
                                <option value="o">O</option>
                                <option value="ab">AB</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="kontak" class="form-label">Kontak/WA </label>
                            <input type="number" class="form-control" id="kontak" minlength="13" name="kontak" placeholder="Kontak ex (0821...)" required>
                        </div>
                        <div class="mb-3">
                            <label for="keterangan" class="form-label">Keterangan</label>
                            <select class="form-select" id="keterangan" name="keterangan" required>
                                <option disabled selected>Silahkan Pilih</option>
                                <option value="-">-</option>
                                <option value="sakit">Sakit</option>
                                <option value="pasca donor">Pasca Donor</option>
                                <option value="cuti/izin">Cuti/Izin</option>
                            </select>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" id="submit" class="btn btn-danger">Tambah</button>
                </div>
                </form>
            </div>
        </div>
    </div>

    <!-- ======= Footer ======= -->
    <footer id="footer">

        <!-- <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h3>BDGD</h3>
                        <p>
                            Jalan Pramuka No. 21 <br>
                            Kemiling, Kec. Rajabasa<br>
                            Kota Bandar Lampung <br><br>
                            <strong>Telepon:</strong> +1 5589 55488 55<br>
                            <strong>Email:</strong> info@example.com<br>
                        </p>
                    </div>

                    <div class="col-lg-2 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Our Services</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-4 col-md-6 footer-newsletter">
                        <h4>Join Our Newsletter</h4>
                        <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
                        <form action="" method="post">
                            <input type="email" name="email"><input type="submit" value="Subscribe">
                        </form>
                    </div>

                </div>
            </div>
        </div> -->

        <div class="container">

            <div class="copyright-wrap d-md-flex py-4">
                <div class="me-md-auto text-center text-md-start">
                    <div class="copyright">
                        &copy; <strong><span>Direktorat Lalu Lintas Kepolisian Daerah Provinsi Lampung</span></strong>.
                    </div>
                    <div class="credits">
                        <!-- All the links in the footer should remain intact. -->
                        <!-- You can delete the links only if you purchased the pro version. -->
                        <!-- Licensing information: https://bootstrapmade.com/license/ -->
                        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/techie-free-skin-bootstrap-3/ -->
                        Designed by <a href="#">Tsaniya Putri Anjani</a>
                    </div>
                </div>
                <div class="social-links text-center text-md-right pt-3 pt-md-0">
                    <!-- <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a> -->
                    <a href="https://youtu.be/GjQBYVDXboA" class="youtube"><i class="bx bxl-youtube"></i></a>
                    <a href="https://www.instagram.com/ditlantaspoldalampung" class="instagram"><i class="bx bxl-instagram"></i></a>
                    <!-- <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                    <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a> -->
                </div>
            </div>

        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
    <div id="preloader"></div>

    <!-- Vendor JS Files -->

    <script src="<?= base_url('tempApp/') ?>assets/js/bootstrap.js"></script>
    <script src="<?= base_url('tempApp/') ?>assets/js/app.js"></script>

    <script src="<?= base_url('tempApp/') ?>assets/extensions/jquery/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/v/bs5/dt-1.12.1/datatables.min.js"></script>
    <script src="<?= base_url('tempApp/') ?>assets/js/pages/datatables.js"></script>

    <script src="<?= base_url('techie/'); ?>assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="<?= base_url('techie/'); ?>assets/vendor/aos/aos.js"></script>
    <script src="<?= base_url('techie/'); ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url('techie/'); ?>assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="<?= base_url('techie/'); ?>assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="<?= base_url('techie/'); ?>assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="<?= base_url('techie/'); ?>assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="<?= base_url('techie/'); ?>assets/js/main.js"></script>

</body>

</html>