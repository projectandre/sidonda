<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Bank Data Golongan Darah</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <!-- <link href="<?= base_url('techie/'); ?>assets/img/favicon.png" rel="icon"> -->
    <!-- <link href="<?= base_url('techie/'); ?>assets/img/apple-touch-icon.png" rel="apple-touch-icon"> -->

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
                    <h2>Akun Admin</h2>
                    <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> -->
                </div>

                <?php
                // Notif gagal input
                echo validation_errors('<div class="alert alert-danger alert-dismissible fade show" role="alert">', '  <button type="button" style="color: #fff;" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
                // notif data masuk db
                if ($this->session->flashdata('message')) {
                    echo $this->session->flashdata('message');
                }
                ?>
                <div class="row gy-4">
                    <div class="col-lg-12 col-md-12 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                        <div class="card col-lg-12" style="margin: 0; padding: 0;">
                            <div class="card-header" style="background-color: #FF2171; color: white; padding: 20px; display: flex; justify-content: space-between;">
                                <strong> Ganti Password</strong>
                            </div>
                            <div class="card-body">
                                <br>
                                <form class="row g-3" action="<?= base_url('admin/update_password/'); ?>" method="POST">
                                    <div class="col-md-12">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" class="form-control" value="<?= $this->session->userdata('email'); ?>" placeholder="Email" readonly>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="password_lama" class="form-label">Password Lama</label>
                                        <input type="password" class="form-control" id="password_lama" name="password_lama" placeholder="Password Lama" required>
                                        <?= form_error('password_lama', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="password_baru" class="form-label">Password Baru</label>
                                        <input type="password" class="form-control" id="password_baru" name="password_baru" placeholder="Password Baru" required>
                                        <?= form_error('password_baru', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="password_baru2" class="form-label">Konfirmasi Password</label>
                                        <input type="password" class="form-control" id="password_baru2" name="password_baru2" placeholder="Konfirmasi Password" required>
                                    </div>

                                    <div class="col-12">
                                        <br>
                                        <button type="submit" class="btn btn-danger">Simpan Password</button>
                                    </div>
                                </form>
                                <br>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End Services Section -->

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