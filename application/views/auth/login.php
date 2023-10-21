<!DOCTYPE html>
<head>
<link rel="icon" type="image/png" href="images/icons/favicon.ico" />
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="assets/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="assets/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="assets/vendor/animate/animate.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="assets/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="assets/vendor/select2/select2.min.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="assets/css/util.css">
<link rel="stylesheet" type="text/css" href="assets/css/main.css">

</head>

<body>
<!--<div class="linear">-->

<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-lg-6">

            <!-- <div class="card o-hidden border-0 shadow-lg my-5"> -->
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">

                    <div class="col-lg">
                        <div class="p-3">
                            <div class="text-center">

                                <div class="login-form-header">
                                    <div class="logo">
                                        <img src="assets/img/ag.png" alt="">
                                    </div>

                                </div>

                                <span class="login100-form-title p-t-20 p-b-45">
                                    abadi group
                                </span>
                            </div>
                            <?= $this->session->flashdata('message'); ?>
                            <form class="user" method="POST" action="<?= base_url('auth'); ?>">
                                <div class="wrap-input100 validate-input m-b-10">
                                    <input type="text" class="input100" id="email" placeholder="Alamat email...." name="email" value="<?= set_value('email'); ?>">
                                    <span class="focus-input100"></span>
                                    <span class="symbol-input100">
                                        <i class="fa fa-user"></i>
                                    </span>
                                </div>
                                <?= form_error('email', '<small class="text-white pl-3">', '</small>'); ?>
                                <div class="wrap-input100 validate-input m-b-10">
                                    <input type="password" class="input100" id="password" placeholder="Password...." name="password">
                                    <span class="focus-input100"></span>
                                    <span class="symbol-input100">
                                        <i class="fa fa-lock"></i>
                                    </span>
                                </div>
                                <?= form_error('password', '<small class="text-white pl-3">', '</small>'); ?>

                                <button type="submit" class="login100-form-btn">
                                    Login
                                </button>


                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="forgot-password.html" hidden>Lupa Password</a>
                            </div>
                            <div class="text-center w-full">
                                <a class="txt1" href="<?= base_url('auth/registration'); ?>">Buat akun</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>

        </div>

    </div>

<!--</div>-->

<script src="assets/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="assets/vendor/bootstrap/js/popper.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="assets/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
<script src="assets/js/main.js"></script>
</body>
</html>