<!DOCTYPE html>
<html lang="en">

<head>
    <title>Lupa Password</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicons -->
    <link href="<?= base_url('gambar/') ?>logo.png" rel="icon">
    <link href="<?= base_url('gambar/') ?>logo.png" rel="apple-touch-icon">

    <!--===============================================================================================-->
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('templogin/') ?>vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('templogin/') ?>fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('templogin/') ?>fonts/iconic/css/material-design-iconic-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('templogin/') ?>vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('templogin/') ?>vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('templogin/') ?>vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('templogin/') ?>vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('templogin/') ?>vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('templogin/') ?>css/util.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('templogin/') ?>css/main.css">
    <!--===============================================================================================-->
    <style>
        #subBtn:hover {
            background-color: #FF5899;

        }

        #subBtn {
            width: 100%;
            padding: 12px;
            color: aliceblue;
            background-color: #FF2171;
        }
    </style>
</head>

<body>

    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">

                <span class="login100-form-title p-b-48" style="color: #FF2171;">
                    <!-- <img src="<?= base_url('gambar/') ?>logo1.png" alt="logo" height="50"> -->
                    Reset Password
                </span>

                <?= $this->session->flashdata('message'); ?>


                <form method="POST" action="<?= base_url('auth/email_lupa_password'); ?>">
                    <div class="wrap-input100 validate-input" data-validate="Valid email is: a@b.c">
                        <input class="input100" type="email" name="email" required>
                        <span class="focus-input100" data-placeholder="Email"></span>
                    </div> <?= form_error('email', '<small class="text-danger">', '</small>'); ?>

                    <div class="container-login100-form-btn">
                        <div class="wrap-login100-form-btn">

                            <button id="subBtn" class="" type="submit">
                                Kirim Email
                            </button>
                        </div>
                    </div>
                </form>

                <div class="text-center p-t-40">
                    <span class="txt1">
                        Klik link ini untuk
                    </span><br>

                    <a class="txt2" href="<?= base_url('auth') ?>">
                        Kembali |
                    </a>
                </div>

            </div>
        </div>
    </div>


    <div id="dropDownSelect1"></div>

    <!--===============================================================================================-->
    <script src="<?= base_url('templogin/') ?>vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="<?= base_url('templogin/') ?>vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
    <script src="<?= base_url('templogin/') ?>vendor/bootstrap/js/popper.js"></script>
    <script src="<?= base_url('templogin/') ?>vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="<?= base_url('templogin/') ?>vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="<?= base_url('templogin/') ?>vendor/daterangepicker/moment.min.js"></script>
    <script src="<?= base_url('templogin/') ?>vendor/daterangepicker/daterangepicker.js"></script>
    <!--===============================================================================================-->
    <script src="<?= base_url('templogin/') ?>vendor/countdowntime/countdowntime.js"></script>
    <!--===============================================================================================-->
    <script src="<?= base_url('templogin/') ?>js/main.js"></script>

</body>

</html>