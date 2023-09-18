<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Obsido - Masuk</title>
        <link rel="icon" href="<?php echo base_url("assets/icons/favicon.png"); ?>" type="image/png" sizes="16x16" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="description" content="Obsido" />
        <meta name="keywords" content="Obsido Keywords">
        <meta name="author" content="Web-Izul" />
        <link href="<?php echo base_url("assets/css/bootstrap.min.css"); ?>" rel="stylesheet" type="text/css" media="all" />
        <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700" rel="stylesheet" />
        <link rel="stylesheet" href="<?php echo base_url("assets/css/animate.css"); ?>" />
        <link rel="stylesheet" href="<?php echo base_url("assets/css/owl.carousel.css"); ?>" />
        <link rel="stylesheet" href="<?php echo base_url("assets/css/owl.theme.css"); ?>" />
        <link rel="stylesheet" href="<?php echo base_url("assets/css/ionicons.min.css"); ?>" />
        <link rel="stylesheet" href="<?php echo base_url("assets/plugins/@fortawesome/fontawesome-free/css/all.min.css"); ?>">
        <link rel="stylesheet" href="<?php echo base_url("assets/plugins/@line-awesome/css/line-awesome.css"); ?>">
        <link rel="stylesheet" href="<?php echo base_url("assets/plugins/select2/select2.min.css"); ?>">
        <link rel="stylesheet" href="<?php echo base_url("assets/plugins/select2/select2-bootstrap.min.css"); ?>">
        <link rel="stylesheet" href="<?php echo base_url("assets/plugins/ladda/ladda-themeless.min.css"); ?>">
        <link rel="stylesheet" href="<?php echo base_url("assets/plugins/toastr/toastr.min.css"); ?>">
        <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap-datepicker.min.css"); ?>">
        <link href="<?php echo base_url("assets/css/style.css"); ?>" rel="stylesheet" type="text/css" media="all" />
        <link rel="stylesheet" href="<?php echo base_url("assets/css/custom.css?n=").$this->config->item("tahun_assets"); ?>">
        <style>
        </style>
    </head>
    <body>
        <div class="wrapper">
            <div id="main" class="main">
                <div class="home" style="padding: 0px;">
                    <div>
                        <div class="row row-resize-item">
                            <!-- MultiStep Form -->
                            <div class="container-fluid" id="grad1">
                                <div class="row mt-0">
                                    <div class="col-lg-6" style="height: 100vh; background: #E7F3FF;">
                                        <a href="<?php echo base_url(); ?>"><img src="<?php echo base_url("assets/images/logo.png"); ?>" style="position: absolute; top: 20px; left: 40px; max-height: 60px;"></a>
                                        <a href="<?php echo $this->config->item("home_url"); ?>" style="color: black; position: absolute; top: 30px; right: 20px;"><i class="fa fa-arrow-left"></i> <u>Laman Obsido</u></a>
                                        <center>
                                            <img src="<?php echo base_url("assets/images/penerbit.svg"); ?>" style="width: 75%; margin: 10vw auto;">
                                        </center>
                                    </div>
                                    <div class="col-lg-6 text-center p-3 mt-3 mb-2">
                                        <div style="max-width: 450px; margin: 0px auto;">
                                            <div class="row" style="margin-top: 15vh;">
                                                <div class="col-12">
                                                    <h1 class="bold mb-3 text-primary" style="text-align: left;">&nbsp;Laman Penerbit</h1>
                                                    <label class="mb-5 float-left" style="max-width: 735px; padding: 0px 10px; text-align: left;">Selamat datang! Silahkan masuk sebagai penerbit</label>
                                                </div>
                                            </div>
                                            <div class="row ml-0 mr-0">
                                                <div class="col-md-12 mx-0">
                                                    <form class="subscribe-form form-user-login" action="/user/auth_email" method="post" accept-charset="UTF-8" autocomplete="off" style="visibility: visible;">
                                                        <div class="form-group">
                                                            <div class="input-email">
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <span class="input-group-text" style="border: 1px solid #ced4da;"><i class="la la-envelope"></i></span>
                                                                    </div>
                                                                    <input type="email" required class="form-control form-control-input-group-prepend" target-form="form-user-login" placeholder="Email address" maxlength="30" name="form[email]" style="min-width: 100px;">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="input-password">
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <span class="input-group-text" style="border: 1px solid #ced4da;"><i class="la la-lock"></i></span>
                                                                    </div>
                                                                    <input type="password" required class="form-control form-control-input-group-prepend" target-form="form-user-login" placeholder="Password" maxlength="30" name="form[password]" style="min-width: 100px;">
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-sm-6 pt-2" style="text-align: left;">
                                                                    Belum punya akun? <a class="font-default text-primary mt-2 bold btn-daftar-penerbit">Daftar Sekarang</a>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <a href="<?php echo base_url("user/lupa_password.html"); ?>" class="float-right font-default text-primary mt-2 mb-3 bold">Lupa Password?</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <button type="button" class="btn btn-primary btn-lg ladda-button ladda-button-submit btn-submit bold float-left" style="width: 200px;" data-style="slide-up">Masuk</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php $this->load->view("other/footer"); ?>
            </div>
        </div>
        <div class="modal no-scroll fade" id="modal-daftar-penerbit" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body p-0">
                        <ul class="nav nav-tabs font-default bold text-center" role="tablist">
                            <li class="nav-item nav-daftar-penerbit" style="width: 100%;">
                                <a class="nav-link p-3 active" href="#tab-daftar-penerbit" role="tab" data-toggle="tab" style="color: #0084ff; border: 4px solid #0084ff; background-color: #fff; border-color: #0084ff #0084ff #fff; font-weight: bold;">Daftar Penerbit</a>
                            </li>
                        </ul>
                        <div class="tab-content" style="border-left: 4px solid #0084ff; border-right: 4px solid #0084ff; border-bottom: 4px solid #0084ff;">
                            <div role="tabpanel" class="tab-pane fade active show form pt-2 pl-5 pr-5 pb-5 mt-0" id="tab-daftar-penerbit">
                                <form class="subscribe-form form-user-daftar-penerbit" action="/user/auth_email" method="post" accept-charset="UTF-8" autocomplete="off" style="visibility: visible;">
                                    <div class="form-group">
                                        <div class="input-email">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="la la-envelope"></i></span>
                                                </div>
                                                <input type="email" required class="form-control form-control-input-group-prepend email" target-form="form-user-daftar-penerbit" placeholder="Alamat Email" maxlength="50" name="form[email]" style="min-width: 100px;">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-password">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="la la-lock"></i></span>
                                                </div>
                                                <input type="password" required class="form-control form-control-input-group-prepend" target-form="form-user-daftar-penerbit" placeholder="Kata Sandi" maxlength="30" name="form[password]" style="min-width: 100px;">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-password">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="la la-lock"></i></span>
                                                </div>
                                                <input type="password" required class="form-control form-control-input-group-prepend" target-form="form-user-daftar-penerbit" placeholder="Konfirmasi Kata Sandi" maxlength="30" name="form[password2]" style="min-width: 100px;">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group form-group-checkbox">
                                        <label class="container font-default pt-1" style="font-size: 14px;">Saya mengerti dan membaca syarat & ketentuan
                                            <input type="checkbox" class="checkbox-terms-daftar-penerbit">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <button type="button" class="btn btn-primary btn-lg btn-block ladda-button ladda-button-submit btn-submit disabled bold" disabled data-style="slide-up">Daftar</button>
                                </form>
                                <form class="subscribe-form form-user-verify-daftar-penerbit d-none" action="/user/auth_email" method="post" accept-charset="UTF-8" autocomplete="off" style="visibility: visible;">
                                    <center>
                                        <img style="max-width: 100%;" src="<?php echo base_url("assets/images/xxx_xxx_xxx/verifikasi_signin.png") ?>">
                                    </center>
                                    <h3 style="font-size: 18px;" class="text-center text-primary mt-3 mb-3">Masukkan Kode OTP</h3>
                                    <div class="form-group">
                                        <input type="text" required class="form-control text-center" target-form="form-user-verify-daftar-penerbit" placeholder="0 0 0 0 0 0" maxlength="11" name="form[otp]" style="font-size: 30px;">
                                    </div>
                                    <h3 style="font-size: 18px;" class="text-center mb-3">Kode dikirim melalui email</h3>
                                    <button type="button" class="btn btn-primary btn-lg btn-block ladda-button ladda-button-submit btn-submit bold" data-style="slide-up">Verifikasi</button>
                                    <input type="hidden" class="email" name="form[email]">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript" src="<?php echo base_url("assets/js/moment.min.js"); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url("assets/js/jquery-2.1.1.js"); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url("assets/js/popper.min.js"); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.min.js"); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url("assets/js/jquery.validate.min.js"); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url("assets/js/plugins.js"); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url("assets/js/custom.js"); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap-datepicker.js"); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url("assets/plugins/validate/jquery.validate.min.js"); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url("assets/plugins/select2/select2.full.js"); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url("assets/plugins/toastr/toastr.min.js"); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url("assets/plugins/ladda/spin.min.js"); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url("assets/plugins/ladda/ladda.min.js"); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url("assets/plugins/ladda/ladda.jquery.min.js"); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url("assets/plugins/Inputmask-5.x/dist/jquery.inputmask.js"); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url("assets/plugins/webcamjs/webcam.min.js"); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url("assets/js/proses.js?n=").$this->config->item("tahun_assets"); ?>"></script>
        <script>

        </script>
    </body>
</html>