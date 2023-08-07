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
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top ">
        <div class="container d-flex align-items-center justify-content-between">
            <h1 class="logo"><a href="#hero">bdgd</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Beranda</a></li>
                    <!-- <li><a class="nav-link scrollto" href="#about">Tentang</a></li> -->
                    <!-- <li><a class="nav-link scrollto" href="#services">Struktur</a></li>
                    <li><a class="nav-link scrollto " href="#portfolio">Tugas & Fungsi</a></li>
                    <li><a class="nav-link scrollto " href="#portfolio">Pendonor</a></li> -->

                    <!-- <li><a class="nav-link scrollto" href="#team">Team</a></li> -->
                    <li class="dropdown"><a href="#about"><span>Tentang</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="#about">Alamat Kantor</a></li>
                            <li><a href="#services">Data Golongan Darah</a></li>
                            <li class="dropdown"><a href="#"><span>Profil Lembaga</span> <i class="bi bi-chevron-right"></i></a>
                                <ul>
                                    <li><a href="#portfolio">Struktur Organisasi</a></li>
                                    <li><a href="#testimonials">Tugas dan Fungsi</a></li>
                                    <li><a href="#features">Arti Logo</a></li>
                                </ul>
                            </li>
                            <!-- <li><a href="#">Drop Down 2</a></li>
                            <li><a href="#">Drop Down 3</a></li>
                            <li><a href="#">Drop Down 4</a></li> -->
                        </ul>
                    </li>
                    <li><a class="nav-link scrollto" href="#contact">Kontak</a></li>
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

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">

        <div class="container-fluid" data-aos="fade-up">
            <div class="row justify-content-center">
                <div class="col-xl-5 col-lg-6 pt-3 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
                    <h1>Bank Data Golongan Darah</h1>
                    <h2>Data Golongan Darah Direktorat Lalu Lintas Kepolisian Daerah Provinsi Lampung</h2>
                    <div><a href="#services" class="btn-get-started scrollto">Selengkapnya</a></div>
                </div>
                <div class="col-xl-3 col-lg-3 order-1 order-lg-2 hero-img text-center" data-aos="zoom-in" data-aos-delay="150">
                    <img src="<?= base_url('gambar/'); ?>logo.png" width="100%" class="img-fluid animated" alt="">
                </div>
                <div class="col-xl-3 col-lg-3 order-1 order-lg-2 hero-img text-center d-flex align-items-center justify-content-center" data-aos="zoom-in" data-aos-delay="150">
                    <img src="<?= base_url('gambar/'); ?>logodirlantas.png" width="100%" class="img-fluid animated" alt="">
                </div>
            </div>
        </div>

    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= Features Section ======= -->
        <section id="features" class="features">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Arti Logo Polda Lampung</h2>
                    <p>Berikut ini merupakan Arti dari logo Kepolisian Daerah Provinsi Lampung</p>
                </div>
                <br>
                <div class="row">
                    <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column align-items-lg-start">
                        <div class="icon-box mt-5 mt-lg-0" data-aos="fade-up" data-aos-delay="100">
                            <!-- <i class="bx bx-receipt"></i> -->
                            <h4>Siger</h4>
                            <p>Siger merupakan Mahkota adat Lampung, Khususnya untuk pengantin wanita</p>
                        </div>
                        <div class="icon-box mt-3" data-aos="fade-up" data-aos-delay="200">
                            <!-- <i class="bx bx-cube-alt"></i> -->
                            <h4>Payung</h4>
                            <p>Payung melambangkan Tempat masyarakat berlindung</p>
                        </div>
                        <div class="icon-box mt-3" data-aos="fade-up" data-aos-delay="300">
                            <!-- <i class="bx bx-images"></i> -->
                            <h4>Warna Merah</h4>
                            <p>Warna Merah melambangkan keberanian</p>
                        </div>
                        <div class="icon-box mt-3" data-aos="fade-up" data-aos-delay="400">
                            <!-- <i class="bx bx-shield"></i> -->
                            <h4>Warna Putih</h4>
                            <p>Warna Putih melambangkan kesucian</p>
                        </div>
                        <div class="icon-box mt-3" data-aos="fade-up" data-aos-delay="500">
                            <!-- <i class="bx bx-shield"></i> -->
                            <h4>Hijau</h4>
                            <p>Warna Hijau melambangkan kesejahteraan</p>
                        </div>
                    </div>
                    <div class="image col-lg-6 order-1 order-lg-2 text-center" data-aos="zoom-in" data-aos-delay="100">
                        <img src="<?= base_url('gambar/'); ?>logo.png" width="350" alt="logo" class="img-fluid img-thumbnail">
                    </div>
                </div>
                <br><br>
                <div class="section-title">
                    <h2>Arti Logo Dirlantas Polda Lampung</h2>
                    <p>Berikut ini merupakan Arti dari logo Direktorat Lalu Lintas Kepolisian Daerah Provinsi Lampung</p>
                </div>
                <div class="row">
                    <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column align-items-lg-start">
                        <div class="icon-box mt-5 mt-lg-0" data-aos="fade-up" data-aos-delay="100">
                            <!-- <i class="bx bx-receipt"></i> -->
                            <h4>Roda</h4>
                            <p>Roda adalah kesiap­siagaan dan ketanggapsegeraan setiap anggota Polantas dalam pengabdian sebagai aparat penegak Hukum.</p>
                        </div>
                        <div class="icon-box mt-3" data-aos="fade-up" data-aos-delay="200">
                            <!-- <i class="bx bx-cube-alt"></i> -->
                            <h4>Tameng/Perlindungan</h4>
                            <p>Tameng adalah setiap anggota Polantas wajib memiliki kemampuan dan ketrampilan serta ilmu pengetahuan yang dilandasi dengan mental kepribadian yang berjiwa Tri Brata dan Catur Prasetya.</p>
                        </div>
                        <div class="icon-box mt-3" data-aos="fade-up" data-aos-delay="300">
                            <!-- <i class="bx bx-images"></i> -->
                            <h4>Jari-Jari Tameng</h4>
                            <p>Berjumlah 22, Diartikan sebagai tanggal lahir polantas.</p>
                        </div>
                        <div class="icon-box mt-3" data-aos="fade-up" data-aos-delay="400">
                            <!-- <i class="bx bx-shield"></i> -->
                            <h4>Garis Marka</h4>
                            <p>Berjumlah 9, diartikan sebagai bulan september yang merupakan bulan lahirnya polantas.</p>
                        </div>
                        <div class="icon-box mt-3" data-aos="fade-up" data-aos-delay="500">
                            <!-- <i class="bx bx-shield"></i> -->
                            <h4>Sayap</h4>
                            <p>Sayap adalah lambang inisiatif, melindungi dan mempermudah gerakan pelaksanaan tugas dari polantas.
                                <br>
                                1. Sayap dengan lima helai berarti pancasila. <br>
                                2. Sayap dengan tiga helai berarti tri brata. <br>
                                3. Sayap dengan empat helai berarti catur prasetya.
                            </p>
                        </div>
                        <div class="icon-box mt-3" data-aos="fade-up" data-aos-delay="300">
                            <!-- <i class="bx bx-images"></i> -->
                            <h4>DHARMA KERTA MARGA RAKSYAKA</h4>
                            <p> Yang memiliki arti :
                                <br>
                                1. Dharma Kerta : Sebagai sasaran pengabdian. <br>
                                2. Marga : Jalan Raya dan setiap pengguna jalan. <br>
                                3. Raksyaka : Memberi perlindungan dan pelayanan terhadap pengguna jalan.
                            </p>
                        </div>
                    </div>
                    <div class="image col-lg-6 order-1 order-lg-2 text-center" data-aos="zoom-in" data-aos-delay="100">
                        <img src="<?= base_url('gambar/'); ?>logodirlantas.png" width="400" alt="logo" class="img-fluid img-thumbnail">
                    </div>
                </div>

            </div>
        </section><!-- End Features Section -->


        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container">

                <div class="row">
                    <div class="col-lg-6 order-1 order-lg-2 text-center" data-aos="zoom-in" data-aos-delay="150">
                        <img src="<?= base_url('gambar/'); ?>pic2.jpeg" width="450" class="img-fluid img-thumbnail" alt="">
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right">
                        <h3>Alamat Kantor</h3>
                        <p class="fst">
                            Kepolisian Daerah Lampung atau Polda Lampung, adalah pelaksana tugas Kepolisian RI di wilayah Provinsi Lampung. Polda Lampung karena tergolong Polda tipe A, dipimpin oleh seorang kepala kepolisian daerah yang berpangkat bintang dua atau Inspektur Jenderal Polisi. </p>
                        <ul>
                            <li><i class="bi bi-check-circle"></i> Kapolda Lampung : Irjen Pol Helmy Santika, SH., S.IK., M.Si.</li>
                            <li><i class="bi bi-check-circle"></i> Dirlantas Polda Lampung : Kombes Pol Medyanta, S.I.K
                            </li>
                            <!-- <li><i class="bi bi-check-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li> -->
                        </ul>
                        <p class="fst-italic">
                            Jalan Pramuka No. 21, Kemiling, Rajabasa, Kec. Rajabasa, Kota Bandar Lampung, Lampung 35151
                        </p>
                        <!-- <a href="#" class="read-more">Read More <i class="bi bi-long-arrow-right"></i></a> -->
                    </div>
                </div>

            </div>
        </section><!-- End About Section -->

        <!-- ======= Testimonials Section ======= -->
        <section id="testimonials" class="testimonials section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Tugas dan fungsi</h2>
                    <p>Berikut ini merupakan tugas dan fungsi organisasi dari Direktorat Lalu Lintas Kepolisian Daerah Provinsi Lampung.</p>
                </div>

                <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                    <!-- ======= Frequently Asked Questions Section ======= -->
                    <section id="faq" class="faq" style="background-color: #f9f8ff; background: #f9f8ff ; padding: 0;">
                        <div class="container" data-aos="fade-up" style="background-color: #f9f8ff;">
                            <div class="faq-list" style="background-color: #f9f8ff;">
                                <ul>
                                    <li data-aos="fade-up" data-aos="fade-up" data-aos-delay="100">
                                        <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1">Apa saja tugas dari Direktorat Lalu Lintas Kepolisian Daerah Provinsi Lampung? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                                        <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                                            <p>
                                                Ditlantas bertugas membina dan menyelenggarakan fungsi lalu lintas yang meliputi pendidikan masyarakat, penegakan hukum, pengkajian masalah lalu lintas, registrasi dan identifikasi pengemudi dan kendaraan bermotor serta patroli jalan raya yang didukung teknologi Informasi dan Komunikasi serta mewujudkan Keamanan Keselamatan Ketertiban dan Kelancaran Lalu Lintas di wilayah hukum Polda Lampung </p>
                                        </div>
                                    </li>

                                    <li data-aos="fade-up" data-aos-delay="200">
                                        <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-2" class="collapsed">Apa saja fungsi dari Direktorat Lalu Lintas Kepolisian Daerah Provinsi Lampung? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                                        <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                                            <p>
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item">1. Penyusunan rencana kerja dan anggaran, pengelolaan dan pembinaan manajemen personel dan logistik, administrasi dan ketatausahaan, serta pengelolaan keuangan; </li>
                                                <li class="list-group-item">2. Pembinaan manajemen operasional dan pelatihan, mengembangkan sistem teknologi informasi dan komunikasi lalu lintas, penyelenggaraan Anev serta pengelolaan informasi dan dokumentasi lalu lintas</li>
                                                <li class="list-group-item">3. Penyelenggaraan Dikmas Lantas, pengoperasionalan rekayasa lalu lintas dan angkutan jalan, penyelenggaraan standardisasi cegah dan tindak serta pelaksanaan audit dan inspeksi dibidang lalu lintas</li>
                                                <li class="list-group-item">4. Memberikan bantuan kepada Polres/ta jajaran Polda Lampung dalam penanganan Laka Lantas menonjol serta, melaksanakan penegakan hukum di bidang lalu lintas termasuk tata tertib berlalu lintas</li>
                                                <li class="list-group-item">5. Menyelenggarakan registrasi dan identifikasi kendaraan bermotor, memberikan pelayanan uji klinik mengemudi, pelayanan SIM, STNK, BPKB, TNKB, menyiapkan material pendukung dalam penyelenggaraan registrasi dan identifikasi kendaraan bermotor</li>
                                                <li class="list-group-item">6. Memberikan pelayanan penjagaan dan pengaturan lalu lintas serta pelayanan pengawalan yang dilaksanakan oleh satuan patroli jalan raya (SAT PJR)</li>
                                            </ul>
                                            </p>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </section><!-- End Frequently Asked Questions Section -->
                </div>

            </div>
        </section><!-- End Testimonials Section -->

        <!-- ======= Counts Section ======= -->
        <!-- <section id="counts" class="counts">
            <div class="container">

                <div class="row counters">

                    <div class="col-lg-3 col-6 text-center">
                        <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
                        <p>Clients</p>
                    </div>

                    <div class="col-lg-3 col-6 text-center">
                        <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
                        <p>Projects</p>
                    </div>

                    <div class="col-lg-3 col-6 text-center">
                        <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1" class="purecounter"></span>
                        <p>Hours Of Support</p>
                    </div>

                    <div class="col-lg-3 col-6 text-center">
                        <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
                        <p>Hard Workers</p>
                    </div>

                </div>

            </div>
        </section> -->
        <!-- End Counts Section -->

        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Struktur Organisasi</h2>
                    <p>Berikut ini merupakan struktur organisasi dari Direktorat Lalu Lintas Kepolisian Daerah Provinsi Lampung.</p>

                </div>
                <div class="row">
                    <img src="<?= base_url('gambar/'); ?>struktur.jpg" width="100%" alt="struktur organisasi">
                </div>
                <hr>
                <div class="row">
                    <img src="<?= base_url('gambar/'); ?>struktur2.jpg" width="100%" alt="struktur organisasi">
                </div>
                <hr>
                <div class="row">
                    <img src="<?= base_url('gambar/'); ?>struktur3.jpg" width="100%" alt="struktur organisasi">
                </div>
                <hr>
                <div class="row">
                    <img src="<?= base_url('gambar/'); ?>struktur4.jpg" width="100%" alt="struktur organisasi">
                </div>
                <hr>
                <div class="row">
                    <img src="<?= base_url('gambar/'); ?>struktur5.jpg" width="100%" alt="struktur organisasi">
                </div>
                <hr>
                <div class="row">
                    <img src="<?= base_url('gambar/'); ?>struktur6.jpg" width="100%" alt="struktur organisasi">
                </div>
                <hr>
                <div class="row">
                    <img src="<?= base_url('gambar/'); ?>struktur7.jpg" width="100%" alt="struktur organisasi">
                </div>
            </div>
        </section><!-- End Portfolio Section -->


        <!-- ======= Services Section ======= -->
        <section id="services" class="services section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Golongan Darah</h2>
                    <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> -->
                </div>

                <div class="row gy-4">
                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                        <a href="<?= base_url('home/kategori_gol_darah/a'); ?>">
                            <div class="icon-box iconbox-blue">
                                <div class="icon">
                                    <img src="<?= base_url('gambar/'); ?>gola.jpeg" class="img-fluid" alt="">
                                </div>
                                <h4 style="color: black;">A</h4>
                                <p style="color: black;">Data Peserta Golongan Darah A Dirlantas Polda Lampung</p>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="200">
                        <a href="<?= base_url('home/kategori_gol_darah/b'); ?>">
                            <div class="icon-box iconbox-orange ">
                                <div class="icon">
                                    <img src="<?= base_url('gambar/'); ?>golb.jpeg" class="img-fluid" alt="">
                                </div>
                                <h4 style="color: black;">B</h4>
                                <p style="color: black;">Data Peserta Golongan Darah B Dirlantas Polda Lampung</p>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="300">
                        <a href="<?= base_url('home/kategori_gol_darah/o'); ?>">
                            <div class="icon-box iconbox-pink">
                                <div class="icon">
                                    <img src="<?= base_url('gambar/'); ?>golo.jpeg" class="img-fluid" alt="">
                                </div>
                                <h4 style="color: black;">O</h4>
                                <p style="color: black;">Data Peserta Golongan Darah O Dirlantas Polda Lampung</p>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                        <a href="<?= base_url('home/kategori_gol_darah/ab'); ?>">
                            <div class="icon-box iconbox-yellow">
                                <div class="icon">
                                    <img src="<?= base_url('gambar/'); ?>golab.jpeg" class="img-fluid" alt="">
                                </div>
                                <h4 style="color: black;">AB</h4>
                                <p style="color: black;">Data Peserta Golongan Darah AB Dirlantas Polda Lampung</p>
                            </div>
                        </a>
                    </div>

                    <!--  <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="200">
                        <div class="icon-box iconbox-red">
                            <div class="icon">
                                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,532.3542879108572C369.38199826031484,532.3153073249985,429.10787420159085,491.63046689027357,474.5244479745417,439.17860296908856C522.8885846962883,383.3225815378663,569.1668002868075,314.3205725914397,550.7432151929288,242.7694973846089C532.6665558377875,172.5657663291529,456.2379748765914,142.6223662098291,390.3689995646985,112.34683881706744C326.66090330228417,83.06452184765237,258.84405631176094,53.51806209861945,193.32584062364296,78.48882559362697C121.61183558270385,105.82097193414197,62.805066853699245,167.19869350419734,48.57481801355237,242.6138429142374C34.843463184063346,315.3850353017275,76.69343916112496,383.4422959591041,125.22947124332185,439.3748458443577C170.7312796277747,491.8107796887764,230.57421082200815,532.3932930995766,300,532.3542879108572"></path>
                                </svg>
                                <i class="bx bx-slideshow"></i>
                            </div>
                            <h4><a href="">Dele Cardo</a></h4>
                            <p>Quis consequatur saepe eligendi voluptatem consequatur dolor consequuntur</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="300">
                        <div class="icon-box iconbox-teal">
                            <div class="icon">
                                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,566.797414625762C385.7384707136149,576.1784315230908,478.7894351017131,552.8928747891023,531.9192734346935,484.94944893311C584.6109503024035,417.5663521118492,582.489472248146,322.67544863468447,553.9536738515405,242.03673114598146C529.1557734026468,171.96086150256528,465.24506316201064,127.66468636344209,395.9583748389544,100.7403814666027C334.2173773831606,76.7482773500951,269.4350130405921,84.62216499799875,207.1952322260088,107.2889140133804C132.92018162631612,134.33871894543012,41.79353780512637,160.00259165414826,22.644507872594943,236.69541883565114C3.319112789854554,314.0945973066697,72.72355303640163,379.243833228382,124.04198916343866,440.3218312028393C172.9286146004772,498.5055451809895,224.45579914871206,558.5317968840102,300,566.797414625762"></path>
                                </svg>
                                <i class="bx bx-arch"></i>
                            </div>
                            <h4><a href="">Divera Don</a></h4>
                            <p>Modi nostrum vel laborum. Porro fugit error sit minus sapiente sit aspernatur</p>
                        </div>
                    </div> -->

                </div>

            </div>
        </section><!-- End Services Section -->


        <!-- ======= Testimonials Section ======= -->
        <section id="testimonials" class="testimonials section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Maksud dan Tujuan</h2>
                    <p>Berikut ini merupakan maksud dan tujuan dari pembuatan sistem informasi di Direktorat Lalu Lintas Kepolisian Daerah Provinsi Lampung.</p>
                </div>

                <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                    <!-- ======= Frequently Asked Questions Section ======= -->
                    <section id="faq" class="faq" style="background-color: #f9f8ff; background: #f9f8ff ; padding: 0;">
                        <div class="container" data-aos="fade-up" style="background-color: #f9f8ff;">
                            <div class="faq-list" style="background-color: #f9f8ff;">
                                <ul>
                                    <li data-aos="fade-up" data-aos="fade-up" data-aos-delay="100">
                                        <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1">TUJUAN <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                                        <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                                            <p>
                                                Pembuatan bank data golongan darah untuk memberikan gambaran jumlah personil ditlantas polda lampung baik anggota polri maupun pegawai negeri sipil polri yang memiliki golongan darah yang dibuat dalam bentuk data sistem informasi berbasis website</p>
                                        </div>
                                    </li>

                                    <li data-aos="fade-up" data-aos-delay="200">
                                        <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-2" class="collapsed">MAKSUD <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                                        <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                                        <p>
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item">1. untuk memudahkan pencarian data golongan darah yang dimiliki personil ditlantas polda lampung, jika membutuhkan transfusi darah bagi personil yang membutuhkan (bantuan donor darah) </li>
                                                <li class="list-group-item">2. Sebagai laporan pertanggungjawaban pelaksanaan tugas kerja praktikum di ditlantas polda lampung</li>
                                            </ul>
                                            </p>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </section><!-- End Frequently Asked Questions Section -->
                </div>

            </div>
        </section><!-- End Testimonials Section -->


        <!-- ======= Pricing Section ======= -->
        <!-- <section id="pricing" class="pricing section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Pricing</h2>
                    <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
                </div>

                <div class="row">

                    <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="box">
                            <h3>Free</h3>
                            <h4><sup>$</sup>0<span> / month</span></h4>
                            <ul>
                                <li>Aida dere</li>
                                <li>Nec feugiat nisl</li>
                                <li>Nulla at volutpat dola</li>
                                <li class="na">Pharetra massa</li>
                                <li class="na">Massa ultricies mi</li>
                            </ul>
                            <div class="btn-wrap">
                                <a href="#" class="btn-buy">Buy Now</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="200">
                        <div class="box featured">
                            <h3>Business</h3>
                            <h4><sup>$</sup>19<span> / month</span></h4>
                            <ul>
                                <li>Aida dere</li>
                                <li>Nec feugiat nisl</li>
                                <li>Nulla at volutpat dola</li>
                                <li>Pharetra massa</li>
                                <li class="na">Massa ultricies mi</li>
                            </ul>
                            <div class="btn-wrap">
                                <a href="#" class="btn-buy">Buy Now</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
                        <div class="box">
                            <h3>Developer</h3>
                            <h4><sup>$</sup>29<span> / month</span></h4>
                            <ul>
                                <li>Aida dere</li>
                                <li>Nec feugiat nisl</li>
                                <li>Nulla at volutpat dola</li>
                                <li>Pharetra massa</li>
                                <li>Massa ultricies mi</li>
                            </ul>
                            <div class="btn-wrap">
                                <a href="#" class="btn-buy">Buy Now</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="400">
                        <div class="box">
                            <span class="advanced">Advanced</span>
                            <h3>Ultimate</h3>
                            <h4><sup>$</sup>49<span> / month</span></h4>
                            <ul>
                                <li>Aida dere</li>
                                <li>Nec feugiat nisl</li>
                                <li>Nulla at volutpat dola</li>
                                <li>Pharetra massa</li>
                                <li>Massa ultricies mi</li>
                            </ul>
                            <div class="btn-wrap">
                                <a href="#" class="btn-buy">Buy Now</a>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section> -->
        <!-- End Pricing Section -->

        <!-- ======= Frequently Asked Questions Section ======= -->
        <!-- <section id="faq" class="faq">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Frequently Asked Questions</h2>
                    <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
                </div>

                <div class="faq-list">
                    <ul>
                        <li data-aos="fade-up" data-aos="fade-up" data-aos-delay="100">
                            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1">Non consectetur a erat nam at lectus urna duis? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                                <p>
                                    Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
                                </p>
                            </div>
                        </li>

                        <li data-aos="fade-up" data-aos-delay="200">
                            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-2" class="collapsed">Feugiat scelerisque varius morbi enim nunc? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                    Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                                </p>
                            </div>
                        </li>

                        <li data-aos="fade-up" data-aos-delay="300">
                            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-3" class="collapsed">Dolor sit amet consectetur adipiscing elit? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                    Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
                                </p>
                            </div>
                        </li>

                        <li data-aos="fade-up" data-aos-delay="400">
                            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-4" class="collapsed">Tempus quam pellentesque nec nam aliquam sem et tortor consequat? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                    Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in.
                                </p>
                            </div>
                        </li>

                        <li data-aos="fade-up" data-aos-delay="500">
                            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-5" class="collapsed">Tortor vitae purus faucibus ornare. Varius vel pharetra vel turpis nunc eget lorem dolor? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                    Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque.
                                </p>
                            </div>
                        </li>

                    </ul>
                </div>

            </div>
        </section> -->
        <!-- End Frequently Asked Questions Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Kontak</h2>
                    <p>Hubungi kami Direktorat Lalu Lintas Kepolisian Daerah Provinsi Lampung.</p>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="info-box mb-4">
                            <i class="bx bx-map"></i>
                            <h3>Alamat</h3>
                            <p>Jalan Pramuka No. 21, Kemiling, Kec. Rajabasa, Kota Bandar Lampung</p>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6">
                        <div class="info-box  mb-4">
                            <i class="bx bx-envelope"></i>
                            <h3>Email</h3>
                            <p>contact@example.com</p>
                        </div>
                    </div>

                    <!-- <div class="col-lg-3 col-md-6">
                        <div class="info-box  mb-4">
                            <i class="bx bx-phone-call"></i>
                            <h3>Telepon</h3>
                            <p>+1 5589 55488 55</p>
                        </div>
                    </div> -->

                </div>

                <div class="row">

                    <div class="col-lg-12 ">
                        <iframe class="mb-4 mb-lg-0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3972.279303138905!2d105.22014137370815!3d-5.374312553756515!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e40daa90ec48339%3A0xac24e1fb8fce6374!2sDitlantas%20Polisi%20Daerah%20Lampung!5e0!3m2!1sid!2sid!4v1688839883919!5m2!1sid!2sid" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
                    </div>

                    <!-- <div class="col-lg-6">
                        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                            </div>
                            <div class="form-group mt-3">
                                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                            </div>
                            <div class="my-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>
                            </div>
                            <div class="text-center"><button type="submit">Send Message</button></div>
                        </form>
                    </div> -->

                </div>

            </div>
        </section><!-- End Contact Section -->

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