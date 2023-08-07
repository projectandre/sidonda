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
    <script src="http://cdn.ckeditor.com/4.10.0/full-all/ckeditor.js"></script>

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
                                <strong> Detail Peserta Golongan Darah</strong>
                            </div>
                            <div class="card-body">
                                <br>
                                <form class="row g-3" action="<?= base_url('admin/update_pendonor/' . $gol_darah->id_donor_darah . '/' . $nama_gol_darah); ?>" method="POST">
                                    <div class="col-md-12">
                                        <label for="nama_pendonor" class="form-label">Nama</label>
                                        <input type="text" class="form-control" id="nama_pendonor" name="nama_pendonor" value="<?= $gol_darah->nama_pendonor; ?>" placeholder="Nama" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="pangkat_pendonor" class="form-label">Pangkat</label>
                                        <input type="text" class="form-control" id="pangkat_pendonor" name="pangkat_pendonor" placeholder="Pangkat" value="<?= $gol_darah->pangkat_pendonor; ?>" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="nrp_pendonor" class="form-label">NRP</label>
                                        <input type="text" class="form-control" id="nrp_pendonor" name="nrp_pendonor" placeholder="NRP" value="<?= $gol_darah->nrp_pendonor; ?>" required>
                                        <div id="hasil-nrp" style="color:red;"></div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="jabatan_pendonor" class="form-label">Jabatan</label>
                                        <input type="text" class="form-control" id="jabatan_pendonor" name="jabatan_pendonor" placeholder="NRP" value="<?= $gol_darah->jabatan_pendonor; ?>" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="golongan_darah" class="form-label">Golongan Darah</label>
                                        <select id="golongan_darah" class="form-select" name="golongan_darah">
                                            <option value="a" <?= ($gol_darah->golongan_darah == 'a') ? 'selected' : ''; ?>>A</option>
                                            <option value="b" <?= ($gol_darah->golongan_darah == 'b') ? 'selected' : ''; ?>>B</option>
                                            <option value="o" <?= ($gol_darah->golongan_darah == 'o') ? 'selected' : ''; ?>>O</option>
                                            <option value="ab" <?= ($gol_darah->golongan_darah == 'ab') ? 'selected' : ''; ?>>AB</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="kontak_pendonor" class="form-label">Kontak/WA</label>
                                        <input type="number" class="form-control" id="kontak_pendonor" name="kontak_pendonor" placeholder="Kontak ex (0821...)" value="0<?= $gol_darah->kontak_pendonor; ?>" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="keterangan" class="form-label">Keterangan</label>
                                        <select id="keterangan" class="form-select" name="keterangan">
                                            <option value="-" <?= ($gol_darah->keterangan == '-') ? 'selected' : ''; ?>>-</option>
                                            <option value="sakit" <?= ($gol_darah->keterangan == 'sakit') ? 'selected' : ''; ?>>Sakit</option>
                                            <option value="pasca donor" <?= ($gol_darah->keterangan == 'pasca donor') ? 'selected' : ''; ?>>Pasca Donor</option>
                                            <option value="cuti/izin" <?= ($gol_darah->keterangan == 'cuti/izin') ? 'selected' : ''; ?>>Cuti/Izin</option>
                                        </select>
                                    </div>
                                    <div class="col-12">
                                        <br>
                                        <button type="submit" class="btn btn-danger" id="submit">Simpan</button>
                                        <a href="<?= base_url('home/kategori_gol_darah/' . $nama_gol_darah); ?>" class="btn btn-secondary">Kembali</a>
                                    </div>
                                </form>
                                <br>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End Services Section -->




    </main><!-- End #main -->



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

    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>

    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>

    <script>
        $(document).ready(function() {
            selesai();
        });


        function selesai() {
            setTimeout(function() {
                selesai();
                nrp();
            }, 200);
        }

        function nrp() {
            $.getJSON("<?php echo site_url("auth/edit_cek_nrp/" . $gol_darah->nrp_pendonor); ?>", function(data) {
                $("#nrp_pendonor").empty();
                $('#nrp_pendonor').keyup(function() {
                    $.each(data.result, function() {
                        if (this['nrp_pendonor'] == $('#nrp_pendonor').val()) {
                            // $('#emailni').val($('#emailya').val());
                            var y = 'NRP ini telah terdaftar';
                            document.getElementById("hasil-nrp").innerHTML = y;
                            $("#submit").prop('disabled', true);
                        }
                    });
                });

            });
        }


        $('#nrp_pendonor').keyup(function() {
            // data span dan field
            var x = document.getElementById("nrp_pendonor").value;
            var y = document.getElementById("hasil-nrp").value;
            var z = ''
            if (x != y) {
                document.getElementById("hasil-nrp").innerHTML = z;
                $("#submit").prop('disabled', false);
            }
        });
    </script>

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