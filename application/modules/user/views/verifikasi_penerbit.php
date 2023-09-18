<?php
    $userlogin = $this->session->userdata("user");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Obsido - Verifikasi</title>
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
            .file-upload {
              background-color: #ffffff;
              width: 300px;
              margin: 0 auto;
              padding: 20px;
            }

            .file-upload-btn {
              width: 100%;
              margin: 0;
              color: #fff;
              background: #2B8FED;
              border: none;
              padding: 10px;
              border-radius: 4px;
              border-bottom: 4px solid #0084FF;
              transition: all .2s ease;
              outline: none;
              text-transform: uppercase;
              font-weight: 700;
            }

            .file-upload-btn:hover {
              background: #0084FF;
              color: #ffffff;
              transition: all .2s ease;
              cursor: pointer;
            }

            .file-upload-btn:active {
              border: 0;
              transition: all .2s ease;
            }

            .file-upload-content {
              display: none;
              text-align: center;
            }

            .file-upload-input {
              position: absolute;
              margin: 0;
              padding: 0;
              width: 100%;
              height: 100%;
              outline: none;
              opacity: 0;
              cursor: pointer;
            }

            .image-upload-wrap {
              margin-top: 20px;
              border: 4px dashed #2B8FED;
              position: relative;
            }

            .image-dropping,
            .image-upload-wrap:hover {
              background-color: #c4e2ff;
              border: 4px dashed #ffffff;
            }

            .image-title-wrap {
              padding: 0 15px 15px 15px;
              color: #222;
            }

            .drag-text {
              text-align: center;
            }

            .drag-text h3 {
              font-weight: 100;
              text-transform: uppercase;
              color: #0084FF;
              padding: 60px 0;
            }

            .file-upload-image {
              max-height: 200px;
              max-width: 200px;
              margin: auto;
              padding: 20px;
            }

            .remove-image {
              width: 200px;
              margin: 0;
              color: #fff;
              background: #cd4535;
              border: none;
              padding: 10px;
              border-radius: 4px;
              border-bottom: 4px solid #b02818;
              transition: all .2s ease;
              outline: none;
              text-transform: uppercase;
              font-weight: 700;
            }

            .remove-image:hover {
              background: #c13b2a;
              color: #ffffff;
              transition: all .2s ease;
              cursor: pointer;
            }

            .remove-image:active {
              border: 0;
              transition: all .2s ease;
            }

            #grad1 {
                background-color: : #9C27B0;
                background-image: none;
            }

            #msform {
                text-align: center;
                position: relative;
                margin-top: 20px
            }

            #msform fieldset .form-card {
                background: white;
                border: 0 none;
                border-radius: 0px;
                padding: 20px 40px 30px 40px;
                box-sizing: border-box;
                width: 94%;
                margin: 0 3% 20px 3%;
                position: relative
            }

            #msform fieldset {
                background: white;
                border: 0 none;
                border-radius: 0.5rem;
                box-sizing: border-box;
                width: 100%;
                margin: 0;
                padding-bottom: 20px;
                position: relative
            }

            #msform fieldset:not(:first-of-type) {
                display: none
            }

            #msform fieldset .form-card {
                text-align: left;
                color: #9E9E9E
            }
            .card {
                z-index: 0;
                border: none;
                border-radius: 0.5rem;
                position: relative
            }

            .fs-title {
                font-size: 25px;
                color: #2C3E50;
                margin-bottom: 10px;
                font-weight: bold;
                text-align: left
            }

            #progressbar {
                margin-bottom: 30px;
                overflow: hidden;
                color: lightgrey
            }

            #progressbar .active {
                color: #000000
            }

            #progressbar li {
                list-style-type: none;
                font-size: 12px;
                width: 33.33%;
                float: left;
                position: relative
            }

            #progressbar #personal_information:before {
                font-family: "Font Awesome 5 Free";
                content: "\f007"
            }

            #progressbar #data_bank:before {
                font-family: "Font Awesome 5 Free";
                content: "\f007"
            }

            #progressbar #foto_ktp:before {
                font-family: "Font Awesome 5 Free";
                content: "\f007"
            }

            #progressbar #selfie_ktp:before {
                font-family: "Font Awesome 5 Free";
                content: "\f007"
            }

            #progressbar #foto_npwp:before {
                font-family: "Font Awesome 5 Free";
                content: "\f007"
            }

            #progressbar #selfie_npwp:before {
                font-family: "Font Awesome 5 Free";
                content: "\f007"
            }

            #progressbar #upload_data:before {
                font-family: "Font Awesome 5 Free";
                content: "\f09d"
            }

            #progressbar li:before {
                width: 50px;
                height: 50px;
                line-height: 45px;
                display: block;
                font-size: 18px;
                color: #ffffff;
                background: lightgray;
                border-radius: 50%;
                margin: 0 auto 10px auto;
                padding: 2px
            }

            #progressbar li:after {
                content: '';
                width: 100%;
                height: 2px;
                background: lightgray;
                position: absolute;
                left: 0;
                top: 25px;
                z-index: -1
            }

            #progressbar li.active:before,
            #progressbar li.active:after {
                background: skyblue
            }

            .radio-group {
                position: relative;
                margin-bottom: 25px
            }

            .radio {
                display: inline-block;
                width: 204;
                height: 104;
                border-radius: 0;
                background: lightblue;
                box-shadow: 0 2px 2px 2px rgba(0, 0, 0, 0.2);
                box-sizing: border-box;
                cursor: pointer;
                margin: 8px 2px
            }

            .radio:hover {
                box-shadow: 2px 2px 2px 2px rgba(0, 0, 0, 0.3)
            }

            .radio.selected {
                box-shadow: 1px 1px 2px 2px rgba(0, 0, 0, 0.1)
            }

            .fit-image {
                width: 100%;
                object-fit: cover
            }
            .shadow{
                -webkit-box-shadow: 0px 0px 15px -2px #000000; 
                box-shadow: 0px 0px 15px -2px #000000;
            }
            input.form-control{
                height: 38px;
            }
            @media only screen and (max-width: 550px) {
                .form-card{
                    padding-left: 10px !important;
                    padding-right: 10px !important;
                }
            }
        </style>
    </head>
    <body>
        <div class="wrapper">
            <?php $this->load->view("other/header_landing"); ?>
            <div id="main" class="main">
                <div class="home mt-3">
                    <div class="container">
                        <div class="row row-resize-item">
                            <!-- MultiStep Form -->
                            <div class="container-fluid" id="grad1">
                                <div class="row justify-content-center mt-0">
                                    <div class="col-12 text-center p-3 mt-3 mb-2">
                                        <div class="card px-0 pt-4 pb-0 mt-3 mb-3 shadow">
                                            <h1 class="bold">Verifikasi Identitas Penerbit</h1>
                                            <p style="max-width: 735px; margin: 0px auto; padding: 0px 10px;">Sesuai dengan peraturan & ketentuan OJK, kami membutuhkan perusahaan anda. Kami menjamin data dan identitas anda tidak akan kami sebarluaskan. Apabila saat mengaakanu kendala, anda dapat menghubungi kami melalui live chat</p>
                                            <div class="row ml-0 mr-0">
                                                <div class="col-md-12 mx-0">
                                                    <form id="msform" class="font-default form-penerbit" method="POST" action="/penerbit/ajax_penerbit">
                                                        <ul id="progressbar" class="d-none d-md-block">
                                                            <li class="active" id="personal_information"><strong>Personal Information</strong></li>
                                                            <li id="data_bank"><strong>Data Bank</strong></li>
                                                            <li id="upload_data"><strong>Unggah Data</strong></li>
                                                        </ul>
                                                        <fieldset>
                                                            <div class="form-card fieldset-1">
                                                                <h2 class="fs-title mb-3">Personal Information</h2>
                                                                <div class="row">
                                                                    <div class="col-xl-4 col-lg-6">
                                                                        <div class="form-group">
                                                                            <label class="form-control-label <?php if($userlogin->status_verify == 2 && isset($penerbit[0]->nama_perusahaan) && $penerbit[0]->nama_perusahaan == 0){ echo 'text-danger'; } else { echo 'text-dark'; } ?>">Nama Perusahaan</label>
                                                                            <input type="text" class="form-control input-uppercase" placeholder="Nama Perusahaan" maxlength="100" name="form[nama_perusahaan]" value="<?php echo $userlogin->nama_perusahaan ?>">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label class="form-control-label <?php if($userlogin->status_verify == 2 && isset($penerbit[0]->data_npwp_perusahaan) && $penerbit[0]->data_npwp_perusahaan == 0){ echo 'text-danger'; } else { echo 'text-dark'; } ?>">NPWP Perusahaan</label>
                                                                            <input type="text" class="form-control" placeholder="NPWP (Nomor Pokok Wajib Pajak)" maxlength="30" name="form[npwp]" value="<?php echo $userlogin->npwp ?>">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label class="form-control-label <?php if($userlogin->status_verify == 2 && isset($penerbit[0]->nama_penanggung_jawab) && $penerbit[0]->nama_penanggung_jawab == 0){ echo 'text-danger'; } else { echo 'text-dark'; } ?>">Nama Penanggung Jawab</label>
                                                                            <input type="text" class="form-control input-uppercase" placeholder="Nama (Sesuai KTP)" maxlength="100" name="form[nama_penanggung_jawab]" value="<?php echo $userlogin->nama_penanggung_jawab ?>">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label class="form-control-label <?php if($userlogin->status_verify == 2 && isset($penerbit[0]->nik_penanggung_jawab) && $penerbit[0]->nik_penanggung_jawab == 0){ echo 'text-danger'; } else { echo 'text-dark'; } ?>">NIK Penanggung Jawab</label>
                                                                            <input type="text" class="form-control" placeholder="NIK (Nomor Induk KTP)" maxlength="16" name="form[nik_penanggung_jawab]" onkeypress="return validatedata(event);"  value="<?php echo $userlogin->nik_penanggung_jawab ?>">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xl-4 col-lg-6">
                                                                        <div class="form-group">
                                                                            <label class="form-control-label <?php if($userlogin->status_verify == 2 && isset($penerbit[0]->provinsi) && $penerbit[0]->provinsi == 0){ echo 'text-danger'; } else { echo 'text-dark'; } ?>">Provinsi</label>
                                                                            <select style="width: 100%;" class="form-control select2 dropdown-provinsi" name="form[id_provinsi]">
                                                                                <option value="">Pilih Provinsi</option>
                                                                            </select>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label class="form-control-label <?php if($userlogin->status_verify == 2 && isset($penerbit[0]->kota) && $penerbit[0]->kota == 0){ echo 'text-danger'; } else { echo 'text-dark'; } ?>">Kota/Kabupaten</label>
                                                                            <select style="width: 100%;" class="form-control select2 dropdown-kota" name="form[id_kota]">
                                                                                <option value="">Pilih Kota</option>
                                                                            </select>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label class="form-control-label <?php if($userlogin->status_verify == 2 && isset($penerbit[0]->no_telepon) && $penerbit[0]->no_telepon == 0){ echo 'text-danger'; } else { echo 'text-dark'; } ?>">No Telepon Perusahaan</label>
                                                                            <div class="input-group">
                                                                                <div class="input-group-prepend">
                                                                                    <span class="input-group-text kode-telepon" id="basic-addon1" style="border: 1px solid #ced4da; padding-top: 6px;">-</span>
                                                                                </div>
                                                                                <input type="hidden" name="form[kode_telepon]">
                                                                                <input type="text" class="form-control" placeholder="No Telepon Perusahaan" aria-label="No Telepon Perusahaan" aria-describedby="basic-addon1" maxlength="20" name="form[no_telepon]" onkeypress="return validatedata(event);" value="<?php echo $userlogin->no_telepon ?>">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label class="form-control-label <?php if($userlogin->status_verify == 2 && isset($penerbit[0]->kecamatan) && $penerbit[0]->kecamatan == 0){ echo 'text-danger'; } else { echo 'text-dark'; } ?>">Kecamatan</label>
                                                                            <select style="width: 100%;" class="form-control select2 dropdown-kecamatan" name="form[id_kecamatan]">
                                                                                <option value="">Pilih Kecamatan</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xl-4 col-lg-6">
                                                                        <div class="form-group">
                                                                            <label class="form-control-label <?php if($userlogin->status_verify == 2 && isset($penerbit[0]->kelurahan) && $penerbit[0]->kelurahan == 0){ echo 'text-danger'; } else { echo 'text-dark'; } ?>">Kelurahan</label>
                                                                            <input type="text" class="form-control input-uppercase" placeholder="Kelurahan" maxlength="30" name="form[kelurahan]" value="<?php echo $userlogin->kelurahan ?>">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label class="form-control-label <?php if($userlogin->status_verify == 2 && isset($penerbit[0]->alamat_lengkap) && $penerbit[0]->alamat_lengkap == 0){ echo 'text-danger'; } else { echo 'text-dark'; } ?>">Alamat Lengkap</label>
                                                                            <textarea type="text" class="form-control input-uppercase" placeholder="Alamat Lengkap" maxlength="255" name="form[alamat_lengkap]" style="padding-top: 5px !important;"><?php echo $userlogin->alamat_lengkap ?></textarea>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label class="form-control-label <?php if($userlogin->status_verify == 2 && isset($penerbit[0]->jabatan) && $penerbit[0]->jabatan == 0){ echo 'text-danger'; } else { echo 'text-dark'; } ?>">Jabatan</label>
                                                                            <select style="width: 100%;" class="form-control select" name="form[jabatan]">
                                                                                <option value="DIREKTUR">DIREKTUR</option>
                                                                                <option value="KOMISARIS">KOMISARIS</option>
                                                                                <option value="MANAJER">MANAJER</option>
                                                                                <option value="LAINNYA">LAINNYA</option>
                                                                            </select>
                                                                            <input type="text" class="form-control input-uppercase mt-1 input-jabatan-lainnya d-none" placeholder="Jabatan" maxlength="30" name="form[jabatan_lainnya]">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <a class="btn btn-primary bold next action-button text-white disabled" disabled>Lanjut</a>
                                                        </fieldset>
                                                        <fieldset>
                                                            <div class="form-card fieldset-2">
                                                                <h2 class="fs-title mb-3">Data Bank</h2>
                                                                <div class="row">
                                                                    <div class="col-xl-4 col-lg-6">
                                                                        <div class="form-group">
                                                                            <label class="form-control-label <?php if($userlogin->status_verify == 2 && isset($penerbit[0]->nomor_rekening_perusahaan) && $penerbit[0]->nomor_rekening_perusahaan == 0){ echo 'text-danger'; } else { echo 'text-dark'; } ?>">Nomor Rekening Perusahaan</label>
                                                                            <input type="text" class="form-control input-uppercase" placeholder="Nomor Rekening Perusahaan" maxlength="100" name="form[nomor_rekening_bank]" onkeypress="return validatedata(event);" value="<?php echo $userlogin->nomor_rekening_bank ?>">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label class="form-control-label <?php if($userlogin->status_verify == 2 && isset($penerbit[0]->nama_pemilik_rekening_bank) && $penerbit[0]->nama_pemilik_rekening_bank == 0){ echo 'text-danger'; } else { echo 'text-dark'; } ?>">Nama Pemilik Rekening Bank</label>
                                                                            <input type="text" class="form-control input-uppercase" placeholder="Nama Pemilik Rekening Bank" maxlength="100" name="form[nama_pemilik_rekening_bank]" value="<?php echo $userlogin->nama_pemilik_rekening_bank ?>">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label class="form-control-label <?php if($userlogin->status_verify == 2 && isset($penerbit[0]->nama_bank) && $penerbit[0]->nama_bank == 0){ echo 'text-danger'; } else { echo 'text-dark'; } ?>">Nama Bank</label>
                                                                            <select style="width: 100%;" class="form-control select" name="form[nama_bank]">
                                                                                <option value="BRI">BRI</option>
                                                                                <option value="MANDIRI">MANDIRI</option>
                                                                                <option value="BCA">BCA</option>
                                                                                <option value="BNI">BNI</option>
                                                                                <option value="BTN">BTN</option>
                                                                            </select>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label class="form-control-label <?php if($userlogin->status_verify == 2 && isset($penerbit[0]->nama_cabang_bank) && $penerbit[0]->nama_cabang_bank == 0){ echo 'text-danger'; } else { echo 'text-dark'; } ?>">Nama Cabang Bank</label>
                                                                            <input type="text" class="form-control input-uppercase" placeholder="Nama Cabang Bank" maxlength="100" name="form[nama_cabang_bank]" value="<?php echo $userlogin->nama_cabang_bank ?>">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-6 d-none d-xl-block offset-xl-2">
                                                                        <center>
                                                                            <img src="<?php echo base_url("assets/images/email_kyc_bank.png"); ?>" style="max-width: 320px;">
                                                                        </center>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <a class="btn btn-default bold previous action-button-previous">Kembali</a>
                                                            <a class="btn btn-primary bold next action-button text-white disabled" disabled>Lanjut</a>
                                                        </fieldset>
                                                        <fieldset>
                                                            <div class="form-card fieldset-3">
                                                                <h2 class="fs-title mb-3">Unggah Data</h2>
                                                                <div class="row">
                                                                    <div class="col-lg-6">
                                                                        <div class="form-group">
                                                                            <label class="form-control-label <?php if($userlogin->status_verify == 2 && isset($penerbit[0]->siup) && $penerbit[0]->siup == 0){ echo 'text-danger'; } else { echo 'text-dark'; } ?>">Unggah Siup</label>
                                                                            <?php if($userlogin->status_verify == 2){ ?>
                                                                                <?php if($userlogin->unggah_siup == ""){ ?>
                                                                                    <input type="file" class="unggah-siup">
                                                                                    <br class="strip-unggah-siup d-none">
                                                                                    <label class="loading-unggah-siup d-none"><i class="fa fa-spin fa-sync-alt"></i> </label><button style="margin:2px;" type="button" class="btn btn-sm btn-primary detail-unggah-siup d-none"><i class="fa fa-external-link-alt"></i> Lihat File</button><button style="margin:2px;" type="button" class="btn btn-sm btn-danger hapus-unggah-siup d-none"><i class="fa fa-trash"></i> Hapus File</button>
                                                                                    <input class="unggah_siup_hidden" type="hidden" name="form[unggah_siup]" value="">
                                                                                <?php } else { ?>
                                                                                    <input type="file" class="unggah-siup d-none">
                                                                                    <br class="strip-unggah-siup">
                                                                                    <label class="loading-unggah-siup"><i class="fa fa-spin fa-sync-alt d-none"></i> </label><button style="margin:2px;" type="button" class="btn btn-sm btn-primary detail-unggah-siup"><i class="fa fa-external-link-alt"></i> Lihat File</button><button style="margin:2px;" type="button" class="btn btn-sm btn-danger hapus-unggah-siup"><i class="fa fa-trash"></i> Hapus File</button>
                                                                                    <input class="unggah_siup_hidden" type="hidden" name="form[unggah_siup]" value="<?php echo $userlogin->unggah_siup; ?>">
                                                                                <?php } ?>
                                                                            <?php } else { ?>
                                                                                <input type="file" class="unggah-siup">
                                                                                <br class="strip-unggah-siup d-none">
                                                                                <label class="loading-unggah-siup d-none"><i class="fa fa-spin fa-sync-alt"></i> </label><button style="margin:2px;" type="button" class="btn btn-sm btn-primary detail-unggah-siup d-none"><i class="fa fa-external-link-alt"></i> Lihat File</button><button style="margin:2px;" type="button" class="btn btn-sm btn-danger hapus-unggah-siup d-none"><i class="fa fa-trash"></i> Hapus File</button>
                                                                                <input class="unggah_siup_hidden" type="hidden" name="form[unggah_siup]" value="">
                                                                            <?php } ?>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label class="form-control-label <?php if($userlogin->status_verify == 2 && isset($penerbit[0]->nib) && $penerbit[0]->nib == 0){ echo 'text-danger'; } else { echo 'text-dark'; } ?>">Unggah NIB</label>
                                                                            <?php if($userlogin->status_verify == 2){ ?>
                                                                                <?php if($userlogin->unggah_nib == ""){ ?>
                                                                                    <input type="file" class="unggah-nib">
                                                                                    <br class="strip-unggah-nib d-none">
                                                                                    <label class="loading-unggah-nib d-none"><i class="fa fa-spin fa-sync-alt"></i> </label><button style="margin:2px;" type="button" class="btn btn-sm btn-primary detail-unggah-nib d-none"><i class="fa fa-external-link-alt"></i> Lihat File</button><button style="margin:2px;" type="button" class="btn btn-sm btn-danger hapus-unggah-nib d-none"><i class="fa fa-trash"></i> Hapus File</button>
                                                                                    <input class="unggah_nib_hidden" type="hidden" name="form[unggah_nib]" value="">
                                                                                <?php } else { ?>
                                                                                    <input type="file" class="unggah-nib d-none">
                                                                                    <br class="strip-unggah-nib">
                                                                                    <label class="loading-unggah-nib"><i class="fa fa-spin fa-sync-alt d-none"></i> </label><button style="margin:2px;" type="button" class="btn btn-sm btn-primary detail-unggah-nib"><i class="fa fa-external-link-alt"></i> Lihat File</button><button style="margin:2px;" type="button" class="btn btn-sm btn-danger hapus-unggah-nib"><i class="fa fa-trash"></i> Hapus File</button>
                                                                                    <input class="unggah_nib_hidden" type="hidden" name="form[unggah_nib]" value="<?php echo $userlogin->unggah_nib; ?>">
                                                                                <?php } ?>
                                                                            <?php } else { ?>
                                                                                <input type="file" class="unggah-nib">
                                                                                <br class="strip-unggah-nib d-none">
                                                                                <label class="loading-unggah-nib d-none"><i class="fa fa-spin fa-sync-alt"></i> </label><button style="margin:2px;" type="button" class="btn btn-sm btn-primary detail-unggah-nib d-none"><i class="fa fa-external-link-alt"></i> Lihat File</button><button style="margin:2px;" type="button" class="btn btn-sm btn-danger hapus-unggah-nib d-none"><i class="fa fa-trash"></i> Hapus File</button>
                                                                                <input class="unggah_nib_hidden" type="hidden" name="form[unggah_nib]" value="">
                                                                            <?php } ?>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label class="form-control-label <?php if($userlogin->status_verify == 2 && isset($penerbit[0]->npwp_perusahaan) && $penerbit[0]->npwp_perusahaan == 0){ echo 'text-danger'; } else { echo 'text-dark'; } ?>">Unggah NPWP Perusahaan</label>
                                                                            <?php if($userlogin->status_verify == 2){ ?>
                                                                                <?php if($userlogin->unggah_npwp_perusahaan == ""){ ?>
                                                                                    <input type="file" class="unggah-npwp-perusahaan">
                                                                                    <br class="strip-unggah-npwp-perusahaan d-none">
                                                                                    <label class="loading-unggah-npwp-perusahaan d-none"><i class="fa fa-spin fa-sync-alt"></i> </label><button style="margin:2px;" type="button" class="btn btn-sm btn-primary detail-unggah-npwp-perusahaan d-none"><i class="fa fa-external-link-alt"></i> Lihat File</button><button style="margin:2px;" type="button" class="btn btn-sm btn-danger hapus-unggah-npwp-perusahaan d-none"><i class="fa fa-trash"></i> Hapus File</button>
                                                                                    <input class="unggah_npwp_perusahaan_hidden" type="hidden" name="form[unggah_npwp_perusahaan]" value="">
                                                                                <?php } else { ?>
                                                                                    <input type="file" class="unggah-npwp-perusahaan d-none">
                                                                                    <br class="strip-unggah-npwp-perusahaan">
                                                                                    <label class="loading-unggah-npwp-perusahaan"><i class="fa fa-spin fa-sync-alt d-none"></i> </label><button style="margin:2px;" type="button" class="btn btn-sm btn-primary detail-unggah-npwp-perusahaan"><i class="fa fa-external-link-alt"></i> Lihat File</button><button style="margin:2px;" type="button" class="btn btn-sm btn-danger hapus-unggah-npwp-perusahaan"><i class="fa fa-trash"></i> Hapus File</button>
                                                                                    <input class="unggah_npwp_perusahaan_hidden" type="hidden" name="form[unggah_npwp_perusahaan]" value="<?php echo $userlogin->unggah_npwp_perusahaan; ?>">
                                                                                <?php } ?>
                                                                            <?php } else { ?>
                                                                                <input type="file" class="unggah-npwp-perusahaan">
                                                                                <br class="strip-unggah-npwp-perusahaan d-none">
                                                                                <label class="loading-unggah-npwp-perusahaan d-none"><i class="fa fa-spin fa-sync-alt"></i> </label><button style="margin:2px;" type="button" class="btn btn-sm btn-primary detail-unggah-npwp-perusahaan d-none"><i class="fa fa-external-link-alt"></i> Lihat File</button><button style="margin:2px;" type="button" class="btn btn-sm btn-danger hapus-unggah-npwp-perusahaan d-none"><i class="fa fa-trash"></i> Hapus File</button>
                                                                                <input class="unggah_npwp_perusahaan_hidden" type="hidden" name="form[unggah_npwp_perusahaan]" value="">
                                                                            <?php } ?>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label class="form-control-label <?php if($userlogin->status_verify == 2 && isset($penerbit[0]->ktp_penanggung_jawab) && $penerbit[0]->ktp_penanggung_jawab == 0){ echo 'text-danger'; } else { echo 'text-dark'; } ?>">Unggah KTP Penganggung Jawab</label>
                                                                            <?php if($userlogin->status_verify == 2){ ?>
                                                                                <?php if($userlogin->unggah_ktp_penanggung_jawab == ""){ ?>
                                                                                    <input type="file" class="unggah-ktp-penanggung-jawab">
                                                                                    <br class="strip-unggah-ktp-penanggung-jawab d-none">
                                                                                    <label class="loading-unggah-ktp-penanggung-jawab d-none"><i class="fa fa-spin fa-sync-alt"></i> </label><button style="margin:2px;" type="button" class="btn btn-sm btn-primary detail-unggah-ktp-penanggung-jawab d-none"><i class="fa fa-external-link-alt"></i> Lihat File</button><button style="margin:2px;" type="button" class="btn btn-sm btn-danger hapus-unggah-ktp-penanggung-jawab d-none"><i class="fa fa-trash"></i> Hapus File</button>
                                                                                    <input class="unggah_ktp_penanggung_jawab_hidden" type="hidden" name="form[unggah_ktp_penanggung_jawab]" value="">
                                                                                <?php } else { ?>
                                                                                    <input type="file" class="unggah-ktp-penanggung-jawab d-none">
                                                                                    <br class="strip-unggah-ktp-penanggung-jawab">
                                                                                    <label class="loading-unggah-ktp-penanggung-jawab"><i class="fa fa-spin fa-sync-alt  d-none"></i> </label><button style="margin:2px;" type="button" class="btn btn-sm btn-primary detail-unggah-ktp-penanggung-jawab"><i class="fa fa-external-link-alt"></i> Lihat File</button><button style="margin:2px;" type="button" class="btn btn-sm btn-danger hapus-unggah-ktp-penanggung-jawab"><i class="fa fa-trash"></i> Hapus File</button>
                                                                                    <input class="unggah_ktp_penanggung_jawab_hidden" type="hidden" name="form[unggah_ktp_penanggung_jawab]" value="<?php echo $userlogin->unggah_ktp_penanggung_jawab; ?>">
                                                                                <?php } ?>
                                                                            <?php } else { ?>
                                                                                <input type="file" class="unggah-ktp-penanggung-jawab">
                                                                                <br class="strip-unggah-ktp-penanggung-jawab d-none">
                                                                                <label class="loading-unggah-ktp-penanggung-jawab d-none"><i class="fa fa-spin fa-sync-alt"></i> </label><button style="margin:2px;" type="button" class="btn btn-sm btn-primary detail-unggah-ktp-penanggung-jawab d-none"><i class="fa fa-external-link-alt"></i> Lihat File</button><button style="margin:2px;" type="button" class="btn btn-sm btn-danger hapus-unggah-ktp-penanggung-jawab d-none"><i class="fa fa-trash"></i> Hapus File</button>
                                                                                <input class="unggah_ktp_penanggung_jawab_hidden" type="hidden" name="form[unggah_ktp_penanggung_jawab]" value="">
                                                                            <?php } ?>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label class="form-control-label <?php if($userlogin->status_verify == 2 && isset($penerbit[0]->ktp_direksi) && $penerbit[0]->ktp_direksi == 0){ echo 'text-danger'; } else { echo 'text-dark'; } ?>">Unggah KTP Direksi</label>
                                                                            <br><i style="font-style: italic; font-size: 13px;">Harap mengunggah seluruh KTP Direksi dalam 1 file yang sama</i>
                                                                            <?php if($userlogin->status_verify == 2){ ?>
                                                                                <?php if($userlogin->unggah_ktp_direksi == ""){ ?>
                                                                                    <input type="file" class="unggah-ktp-direksi">
                                                                                    <br class="strip-unggah-ktp-direksi d-none">
                                                                                    <label class="loading-unggah-ktp-direksi d-none"><i class="fa fa-spin fa-sync-alt"></i> </label><button style="margin:2px;" type="button" class="btn btn-sm btn-primary detail-unggah-ktp-direksi d-none"><i class="fa fa-external-link-alt"></i> Lihat File</button><button style="margin:2px;" type="button" class="btn btn-sm btn-danger hapus-unggah-ktp-direksi d-none"><i class="fa fa-trash"></i> Hapus File</button>
                                                                                    <input class="unggah_ktp_direksi_hidden" type="hidden" name="form[unggah_ktp_direksi]" value="">
                                                                                <?php } else { ?>
                                                                                    <input type="file" class="unggah-ktp-direksi d-none">
                                                                                    <br class="strip-unggah-ktp-direksi">
                                                                                    <label class="loading-unggah-ktp-direksi"><i class="fa fa-spin fa-sync-alt  d-none"></i> </label><button style="margin:2px;" type="button" class="btn btn-sm btn-primary detail-unggah-ktp-direksi"><i class="fa fa-external-link-alt"></i> Lihat File</button><button style="margin:2px;" type="button" class="btn btn-sm btn-danger hapus-unggah-ktp-direksi"><i class="fa fa-trash"></i> Hapus File</button>
                                                                                    <input class="unggah_ktp_direksi_hidden" type="hidden" name="form[unggah_ktp_direksi]" value="<?php echo $userlogin->unggah_ktp_direksi; ?>">
                                                                                <?php } ?>
                                                                            <?php } else { ?>
                                                                                <input type="file" class="unggah-ktp-direksi">
                                                                                <br class="strip-unggah-ktp-direksi d-none">
                                                                                <label class="loading-unggah-ktp-direksi d-none"><i class="fa fa-spin fa-sync-alt"></i> </label><button style="margin:2px;" type="button" class="btn btn-sm btn-primary detail-unggah-ktp-direksi d-none"><i class="fa fa-external-link-alt"></i> Lihat File</button><button style="margin:2px;" type="button" class="btn btn-sm btn-danger hapus-unggah-ktp-direksi d-none"><i class="fa fa-trash"></i> Hapus File</button>
                                                                                <input class="unggah_ktp_direksi_hidden" type="hidden" name="form[unggah_ktp_direksi]" value="">
                                                                            <?php } ?>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label class="form-control-label <?php if($userlogin->status_verify == 2 && isset($penerbit[0]->ktp_komisaris) && $penerbit[0]->ktp_komisaris == 0){ echo 'text-danger'; } else { echo 'text-dark'; } ?>">Unggah KTP Komisaris</label>
                                                                            <br><i style="font-style: italic; font-size: 13px;">Harap mengunggah seluruh KTP Komisaris dalam 1 file yang sama</i>
                                                                            <?php if($userlogin->status_verify == 2){ ?>
                                                                                <?php if($userlogin->unggah_ktp_komisaris == ""){ ?>
                                                                                    <input type="file" class="unggah-ktp-komisaris">
                                                                                    <br class="strip-unggah-ktp-komisaris d-none">
                                                                                    <label class="loading-unggah-ktp-komisaris d-none"><i class="fa fa-spin fa-sync-alt"></i> </label><button style="margin:2px;" type="button" class="btn btn-sm btn-primary detail-unggah-ktp-komisaris d-none"><i class="fa fa-external-link-alt"></i> Lihat File</button><button style="margin:2px;" type="button" class="btn btn-sm btn-danger hapus-unggah-ktp-komisaris d-none"><i class="fa fa-trash"></i> Hapus File</button>
                                                                                    <input class="unggah_ktp_komisaris_hidden" type="hidden" name="form[unggah_ktp_komisaris]" value="">
                                                                                <?php } else { ?>
                                                                                    <input type="file" class="unggah-ktp-komisaris d-none">
                                                                                    <br class="strip-unggah-ktp-komisaris">
                                                                                    <label class="loading-unggah-ktp-komisaris"><i class="fa fa-spin fa-sync-alt  d-none"></i> </label><button style="margin:2px;" type="button" class="btn btn-sm btn-primary detail-unggah-ktp-komisaris"><i class="fa fa-external-link-alt"></i> Lihat File</button><button style="margin:2px;" type="button" class="btn btn-sm btn-danger hapus-unggah-ktp-komisaris"><i class="fa fa-trash"></i> Hapus File</button>
                                                                                    <input class="unggah_ktp_komisaris_hidden" type="hidden" name="form[unggah_ktp_komisaris]" value="<?php echo $userlogin->unggah_ktp_komisaris; ?>">
                                                                                <?php } ?>
                                                                            <?php } else { ?>
                                                                                <input type="file" class="unggah-ktp-komisaris">
                                                                                <br class="strip-unggah-ktp-komisaris d-none">
                                                                                <label class="loading-unggah-ktp-komisaris d-none"><i class="fa fa-spin fa-sync-alt"></i> </label><button style="margin:2px;" type="button" class="btn btn-sm btn-primary detail-unggah-ktp-komisaris d-none"><i class="fa fa-external-link-alt"></i> Lihat File</button><button style="margin:2px;" type="button" class="btn btn-sm btn-danger hapus-unggah-ktp-komisaris d-none"><i class="fa fa-trash"></i> Hapus File</button>
                                                                                <input class="unggah_ktp_komisaris_hidden" type="hidden" name="form[unggah_ktp_komisaris]" value="">
                                                                            <?php } ?>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label class="form-control-label <?php if($userlogin->status_verify == 2 && isset($penerbit[0]->akta_pendirian_perusahaan) && $penerbit[0]->akta_pendirian_perusahaan == 0){ echo 'text-danger'; } else { echo 'text-dark'; } ?>">Akta Pendirian Perusahaan</label>
                                                                            <?php if($userlogin->status_verify == 2){ ?>
                                                                                <?php if($userlogin->unggah_akta_pendirian_perusahaan == ""){ ?>
                                                                                    <input type="file" class="unggah-akta-pendirian-perusahaan">
                                                                                    <br class="strip-unggah-akta-pendirian-perusahaan d-none">
                                                                                    <label class="loading-unggah-akta-pendirian-perusahaan d-none"><i class="fa fa-spin fa-sync-alt"></i> </label><button style="margin:2px;" type="button" class="btn btn-sm btn-primary detail-unggah-akta-pendirian-perusahaan d-none"><i class="fa fa-external-link-alt"></i> Lihat File</button><button style="margin:2px;" type="button" class="btn btn-sm btn-danger hapus-unggah-akta-pendirian-perusahaan d-none"><i class="fa fa-trash"></i> Hapus File</button>
                                                                                    <input class="unggah_akta_pendirian_perusahaan_hidden" type="hidden" name="form[unggah_akta_pendirian_perusahaan]" value="">
                                                                                <?php } else { ?>
                                                                                    <input type="file" class="unggah-akta-pendirian-perusahaan d-none">
                                                                                    <br class="strip-unggah-akta-pendirian-perusahaan">
                                                                                    <label class="loading-unggah-akta-pendirian-perusahaan"><i class="fa fa-spin fa-sync-alt d-none"></i> </label><button style="margin:2px;" type="button" class="btn btn-sm btn-primary detail-unggah-akta-pendirian-perusahaan"><i class="fa fa-external-link-alt"></i> Lihat File</button><button style="margin:2px;" type="button" class="btn btn-sm btn-danger hapus-unggah-akta-pendirian-perusahaan"><i class="fa fa-trash"></i> Hapus File</button>
                                                                                    <input class="unggah_akta_pendirian_perusahaan_hidden" type="hidden" name="form[unggah_akta_pendirian_perusahaan]" value="<?php echo $userlogin->unggah_akta_pendirian_perusahaan; ?>">
                                                                                <?php } ?>
                                                                            <?php } else { ?>
                                                                                <input type="file" class="unggah-akta-pendirian-perusahaan">
                                                                                <br class="strip-unggah-akta-pendirian-perusahaan d-none">
                                                                                <label class="loading-unggah-akta-pendirian-perusahaan d-none"><i class="fa fa-spin fa-sync-alt"></i> </label><button style="margin:2px;" type="button" class="btn btn-sm btn-primary detail-unggah-akta-pendirian-perusahaan d-none"><i class="fa fa-external-link-alt"></i> Lihat File</button><button style="margin:2px;" type="button" class="btn btn-sm btn-danger hapus-unggah-akta-pendirian-perusahaan d-none"><i class="fa fa-trash"></i> Hapus File</button>
                                                                                <input class="unggah_akta_pendirian_perusahaan_hidden" type="hidden" name="form[unggah_akta_pendirian_perusahaan]" value="">
                                                                            <?php } ?>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label class="form-control-label <?php if($userlogin->status_verify == 2 && isset($penerbit[0]->akta_perubahan_anggaran_dasar_terakhir) && $penerbit[0]->akta_perubahan_anggaran_dasar_terakhir == 0){ echo 'text-danger'; } else { echo 'text-dark'; } ?>">Akta Perubahan Anggaran Dasar Terakhir</label>
                                                                            <?php if($userlogin->status_verify == 2){ ?>
                                                                                <?php if($userlogin->unggah_akta_perubahan_anggaran_dasar_terakhir == ""){ ?>
                                                                                    <input type="file" class="unggah-akta-perubahan-anggaran-dasar-terakhir">
                                                                                    <br class="strip-unggah-akta-perubahan-anggaran-dasar-terakhir d-none">
                                                                                    <label class="loading-unggah-akta-perubahan-anggaran-dasar-terakhir d-none"><i class="fa fa-spin fa-sync-alt"></i> </label><button style="margin:2px;" type="button" class="btn btn-sm btn-primary detail-unggah-akta-perubahan-anggaran-dasar-terakhir d-none"><i class="fa fa-external-link-alt"></i> Lihat File</button><button style="margin:2px;" type="button" class="btn btn-sm btn-danger hapus-unggah-akta-perubahan-anggaran-dasar-terakhir d-none"><i class="fa fa-trash"></i> Hapus File</button>
                                                                                    <input class="unggah_akta_perubahan_anggaran_dasar_terakhir_hidden" type="hidden" name="form[unggah_akta_perubahan_anggaran_dasar_terakhir]" value="">
                                                                                <?php } else { ?>
                                                                                    <input type="file" class="unggah-akta-perubahan-anggaran-dasar-terakhir d-none">
                                                                                    <br class="strip-unggah-akta-perubahan-anggaran-dasar-terakhir">
                                                                                    <label class="loading-unggah-akta-perubahan-anggaran-dasar-terakhir"><i class="fa fa-spin fa-sync-alt d-none"></i> </label><button style="margin:2px;" type="button" class="btn btn-sm btn-primary detail-unggah-akta-perubahan-anggaran-dasar-terakhir"><i class="fa fa-external-link-alt"></i> Lihat File</button><button style="margin:2px;" type="button" class="btn btn-sm btn-danger hapus-unggah-akta-perubahan-anggaran-dasar-terakhir"><i class="fa fa-trash"></i> Hapus File</button>
                                                                                    <input class="unggah_akta_perubahan_anggaran_dasar_terakhir_hidden" type="hidden" name="form[unggah_akta_perubahan_anggaran_dasar_terakhir]" value="<?php echo $userlogin->unggah_akta_perubahan_anggaran_dasar_terakhir; ?>">
                                                                                <?php } ?>
                                                                            <?php } else { ?>
                                                                                <input type="file" class="unggah-akta-perubahan-anggaran-dasar-terakhir">
                                                                                <br class="strip-unggah-akta-perubahan-anggaran-dasar-terakhir d-none">
                                                                                <label class="loading-unggah-akta-perubahan-anggaran-dasar-terakhir d-none"><i class="fa fa-spin fa-sync-alt"></i> </label><button style="margin:2px;" type="button" class="btn btn-sm btn-primary detail-unggah-akta-perubahan-anggaran-dasar-terakhir d-none"><i class="fa fa-external-link-alt"></i> Lihat File</button><button style="margin:2px;" type="button" class="btn btn-sm btn-danger hapus-unggah-akta-perubahan-anggaran-dasar-terakhir d-none"><i class="fa fa-trash"></i> Hapus File</button>
                                                                                <input class="unggah_akta_perubahan_anggaran_dasar_terakhir_hidden" type="hidden" name="form[unggah_akta_perubahan_anggaran_dasar_terakhir]" value="">
                                                                            <?php } ?>
                                                                        </div>
                                                                        <!-- <center>
                                                                            <div class="file-upload">
                                                                                <button class="file-upload-btn" type="button" onclick="$('.file-upload-input').trigger( 'click' )">Add Image</button>

                                                                                <div class="image-upload-wrap">
                                                                                    <input class="file-upload-input" type="file" onchange="readURL(this);" accept="image/*" />
                                                                                    <div class="drag-text">
                                                                                        <h3>Drag and drop a file or select add Image</h3>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="file-upload-content">
                                                                                    <img class="file-upload-image" src="#" alt="your image" />
                                                                                    <div class="image-title-wrap">
                                                                                        <button type="button" onclick="removeUpload()" class="remove-image">Remove <span class="image-title">Uploaded Image</span></button>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </center> -->
                                                                    </div>
                                                                    <div class="col-lg-6 d-none d-xl-block">
                                                                        <center>
                                                                            <img src="<?php echo base_url("assets/images/upload.png"); ?>" style="max-width: 320px;">
                                                                        </center>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <a class="btn btn-default bold previous action-button-previous">Kembali</a>
                                                            <a class="btn btn-primary bold btn-finish text-white ladda-button ladda-button-submit disabled" disabled data-style="slide-up">Kirim Verifikasi</a>
                                                            <input type="hidden" name="form[id]" value="<?php echo $this->session->userdata("user")->id; ?>">
                                                        </fieldset>
                                                        <input type="hidden" name="form[status_verify]" value="0">
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
        <?php if($userlogin->status_verify == 2 && isset($penerbit[0]->alasan_penolakan)){ ?>
        <div class="modal" id="modal-ditolak">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title bold">Alasan Penolakan</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <label><?php echo $penerbit[0]->alasan_penolakan; ?></label>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
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
            <?php if($userlogin->status_verify == 2 && isset($penerbit[0]->alasan_penolakan)){ ?>
                $("#modal-ditolak").modal("show");
            <?php } ?>
            var post_gambar  = {"form": {"Base64": ""}};

            $(".select2.dropdown-kota").select2({
                disabled: true,
                placeholder: "Pilih Provinsi terlebih dahulu",
            }).val("").trigger("change");
            $(".select2.dropdown-kecamatan").select2({
                disabled: true,
                placeholder: "Pilih Kota/Kabupaten terlebih dahulu",
            }).val("").trigger("change");
            GetDropdownProvinsi("<?php echo $userlogin->id_provinsi ?>");
            $(".dropdown-provinsi").on("select2:select", function(e) {
                if($(this).val()==""){
                    $(".select2.dropdown-kota").select2({
                        disabled: true,
                        placeholder: "Pilih Provinsi terlebih dahulu",
                    }).val("").trigger("change");
                    $(".select2.dropdown-kecamatan").select2({
                        disabled: true,
                        placeholder: "Pilih Kota/Kabupaten terlebih dahulu",
                    }).val("").trigger("change");
                } else {
                    $(".select2.dropdown-kota").select2({
                        disabled: true,
                        placeholder: "Loading...",
                    }).val("").trigger("change");
                    GetDropdownKota("", $(this).val(),"");
                }
                $(".select2.dropdown-kecamatan").select2({
                    disabled: true,
                    placeholder: "Pilih Kota/Kabupaten terlebih dahulu",
                }).val("").trigger("change");
            });
            $(".dropdown-kota").on("select2:select", function(e) {
                if($(this).val()==""){
                    $(".select2.dropdown-kecamatan").select2({
                        disabled: true,
                        placeholder: "Pilih Kota/Kabupaten terlebih dahulu",
                    }).val("").trigger("change");
                    $(".kode-telepon").text("-");
                    $("[name='form[kode_telepon]']").val("");
                } else {
                    $(".select2.dropdown-kecamatan").select2({
                        disabled: true,
                        placeholder: "Loading...",
                    }).val("").trigger("change");
                    GetDropdownKecamatan("", $(this).val(),"");
                    $(".kode-telepon").text($("option:selected", this).attr("kode-telepon"));
                    $("[name='form[kode_telepon]']").val($("option:selected", this).attr("kode-telepon"));
                }
                $(".select2.dropdown-kecamatan").select2({
                    disabled: true,
                    placeholder: "Pilih Kota/Kabupaten terlebih dahulu",
                }).val("").trigger("change");
            });

            $("[name='form[npwp]']").inputmask({"mask": "99.999.999.9-999.999"});
            $(".datepicker-tgl-lahir").datepicker({
                    autoclose: true,
                    format: 'dd M yyyy'
                });
            $(document).ready(function(){
                var current_fs, next_fs, previous_fs; //fieldsets
                var opacity;

                $(".next").click(function(){

                current_fs = $(this).parent();
                next_fs = $(this).parent().next();

                //Add Class Active
                $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

                //show the next fieldset
                next_fs.show();
                //hide the current fieldset with style
                current_fs.animate({opacity: 0}, {
                step: function(now) {
                // for making fielset appear animation
                opacity = 1 - now;

                current_fs.css({
                'display': 'none',
                'position': 'relative'
                });
                next_fs.css({'opacity': opacity});
                },
                duration: 600
                });
                });

                $(".previous").click(function(){

                current_fs = $(this).parent();
                previous_fs = $(this).parent().prev();

                //Remove class active
                $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

                //show the previous fieldset
                previous_fs.show();

                //hide the current fieldset with style
                current_fs.animate({opacity: 0}, {
                step: function(now) {
                // for making fielset appear animation
                opacity = 1 - now;

                current_fs.css({
                'display': 'none',
                'position': 'relative'
                });
                previous_fs.css({'opacity': opacity});
                },
                duration: 600
                });
                });

                $('.radio-group .radio').click(function(){
                $(this).parent().find('.radio').removeClass('selected');
                $(this).addClass('selected');
                });

                $(".submit").click(function(){
                return false;
                })

            });


            function readURL(input) {
              if (input.files && input.files[0]) {

                var reader = new FileReader();

                reader.onload = function(e) {
                  $('.image-upload-wrap').hide();

                  $('.file-upload-image').attr('src', e.target.result);
                  $('.file-upload-content').show();

                  $('.image-title').html(input.files[0].name);
                };

                reader.readAsDataURL(input.files[0]);

              } else {
                removeUpload();
              }
            }

            function removeUpload() {
                $(".file-upload-input").val("");
                $('.file-upload-input').replaceWith($('.file-upload-input').clone());
                $('.file-upload-content').hide();
                $('.image-upload-wrap').show();
                $(".fieldset-3").parent().find(".btn-finish").attr("disabled", "disabled").addClass("disabled");
            }
            $('.image-upload-wrap').bind('dragover', function () {
                $('.image-upload-wrap').addClass('image-dropping');
            });
            $('.image-upload-wrap').bind('dragleave', function () {
                $('.image-upload-wrap').removeClass('image-dropping');
            });


            $(".btn-finish").click(function(){
                $(".form-penerbit").submit()
            })
            var FrmPemodal = $(".form-penerbit").validate({
                submitHandler: function(form) {
                    laddasubmit = $("html").find(".ladda-button-submit");
                    UpdateData(form, function(resp) {
                        window.location.href = "https://penerbit.obsido.co.id";
                    });
                },
                errorPlacement: function (error, element) {
                    if (element.parent(".input-group").length) { 
                        error.insertAfter(element.parent());      // radio/checkbox?
                    } else if (element.hasClass("select2") || element.hasClass("select")) {
                        error.insertAfter(element.next("span"));  // select2
                    } else {                                      
                        error.insertAfter(element);               // default
                    }
                }
            });

            $(".penghasilan-per-tahun").focus(function(){
                var penghasilan_per_tahun = $(this).val().replace(/\./g,"");
                $(this).val(penghasilan_per_tahun);
            }).blur(function(){
                if($(this).val() <= 0){
                    $(this).val("0");
                }
                if($.isNumeric($(this).val()) == false){
                    $(this).val("0");
                } else {
                    $(this).val(rupiah(parseFloat($(this).val())));
                }
            });


            $(".fieldset-1").on("change", "input, select, textarea", function() {
                $(".fieldset-1").parent().find(".action-button").attr("disabled", "disabled").addClass("disabled");
                // admin_password.find("input[name='form[password]']").val("");
                if($("[name='form[nama_perusahaan]']").val() == "" || $("[name='form[npwp]']").val() == "" || $("[name='form[nama_penanggung_jawab]']").val() == "" || $("[name='form[nik_penanggung_jawab]']").val() == "" || $("[name='form[alamat_lengkap]']").val() == "" || $("[name='form[jabatan]']").val() == "" || $("[name='form[id_provinsi]']").val() == "" || $("[name='form[id_kota]']").val() == "" || $("[name='form[id_kecamatan]']").val() == "" || $("[name='form[kelurahan]']").val() == "" || $("[name='form[no_telepon]']").val() == ""){
                    $(".fieldset-1").parent().find(".action-button").attr("disabled", "disabled").addClass("disabled");
                } else {
                    if($("[name='form[npwp]']").val().replace(/\./g,"").replace(/\-/g,"").replace(/\_/g,"").length < 15){
                        toastrshow("warning", "Mohon periksa NPWP kembali", "Peringatan");
                    } else {
                        $(".fieldset-1").parent().find(".action-button").removeAttr("disabled").removeClass("disabled");
                    }
                }
            });
            $(".fieldset-2").on("change", "input, select", function() {
                if($("[name='form[nomor_rekening_bank]']").val() == "" || $("[name='form[nama_pemilik_rekening_bank]']").val() == "" || $("[name='form[nama_cabang_bank]']").val() == "" || $("[name='form[nama_bank]']").val() == ""){
                    $(".fieldset-2").parent().find(".action-button").attr("disabled", "disabled").addClass("disabled");
                } else {
                    $(".fieldset-2").parent().find(".action-button").removeAttr("disabled").removeClass("disabled");
                }
            });
            $(".fieldset-3").on("change", "input", function() {
                if($("[name='form[unggah_siup]']").val() && $("[name='form[unggah_nib]']").val() && $("[name='form[unggah_npwp_perusahaan]']").val() && $("[name='form[unggah_ktp_penanggung_jawab]']").val() && $("[name='form[unggah_ktp_direksi]']").val() && $("[name='form[unggah_ktp_komisaris]']").val() && $("[name='form[unggah_akta_pendirian_perusahaan]']").val() && $("[name='form[unggah_akta_perubahan_anggaran_dasar_terakhir]']").val()){
                    $(".fieldset-3").parent().find(".btn-finish").removeAttr("disabled").removeClass("disabled");
                } else {
                    $(".fieldset-3").parent().find(".btn-finish").attr("disabled", "disabled").addClass("disabled");
                }
            });
            $(".action-button").click(function(){
                $("html").scrollTop(0);
            });
            $(".action-button-previous").click(function(){
                $("html").scrollTop(0);
            });

            $("[name='form[jabatan]']").change(function(){
                $("[name='form[jabatan_lainnya]']").val("");
                if($(this).val() == "LAINNYA"){
                    $(".input-jabatan-lainnya").removeClass("d-none");
                } else {
                    $(".input-jabatan-lainnya").addClass("d-none");
                }
            });

            // unggah siup
            var form_verifikasi = $("html");
            form_verifikasi.find(".unggah-siup").change(function() {
                var selector = $(this);
                if (this.files && this.files[0]) {
                    var tipefile = this.files[0].type.toString();
                    var filename = this.files[0].name.toString();
                    var tipe = ['application/x-rar', 'application/rar', 'application/x-rar-compressed'];
                    /*if(tipe.indexOf(tipefile) == -1) {
                        $(this).val("");
                        toastrshow("warning", "Format salah, format .rar tidak tersedia", "Peringatan");
                        return;
                    }*/
                    if((this.files[0].size / 1024) < 5120){
                        var FR = new FileReader();
                        FR.addEventListener("load", function(e) {
                            //var base64 = e.target.result;
                            var base64 = e.target.result.replace("data:"+tipefile+";base64,", '');
                            var ext = filename.split(".").pop();
                            post_gambar["form"]["Base64"] = base64;
                            post_gambar["form"]["Ext"] = ext;
                            console.log(post_gambar);
                            $.ajax({
                                type: "POST",
                                url: base_url + "/tool/ajax_tool",
                                data: {act:"upload_file", form:post_gambar},
                                dataType: "JSON",
                                tryCount: 0,
                                retryLimit: 3,
                                beforeSend: function(){
                                    form_verifikasi.find(".unggah_siup_hidden").val("");
                                    form_verifikasi.find(".unggah-siup").addClass("d-none");
                                    form_verifikasi.find(".loading-unggah-siup").removeClass("d-none");
                                },
                                success: function(respon_file){
                                    if(respon_file.IsError != undefined) {
                                        if(respon_file.ErrorMessage[0].error != undefined) {
                                            toastrshow("warning", respon_file.ErrorMessage[0].error, "Peringatan");
                                        } else {
                                            toastrshow("warning", respon_file.ErrorMessage, "Peringatan");
                                        }
                                    } else {
                                        form_verifikasi.find(".unggah_siup_hidden").val(respon_file.Output).trigger("change");
                                        form_verifikasi.find(".detail-unggah-siup, .strip-unggah-siup, .hapus-unggah-siup").removeClass("d-none");
                                        form_verifikasi.find(".unggah-siup").addClass("d-none");
                                        form_verifikasi.find(".loading-unggah-siup").addClass("d-none");
                                    }
                                },
                                error: function(xhr, textstatus, errorthrown) {
                                    toastrshow("warning", "Periksa koneksi internet anda kembali", "Peringatan");
                                    form_verifikasi.find(".hapus-unggah-siup").click();
                                    form_verifikasi.find(".loading-unggah-siup").addClass("d-none");
                                }
                            });
                        }); 
                        FR.readAsDataURL(this.files[0]);
                    } else {
                        $(this).val("");
                        toastrshow("warning", "Ukuran file maksimum adalah 5 MB", "Warning");
                    }
                }
            });
            form_verifikasi.find(".hapus-unggah-siup").click(function(){
                form_verifikasi.find(".unggah_siup_hidden").val("").trigger("change");
                form_verifikasi.find(".detail-unggah-siup, .strip-unggah-siup, .hapus-unggah-siup").addClass("d-none");
                form_verifikasi.find(".unggah-siup").val("").trigger("change");
                form_verifikasi.find(".unggah-siup").removeClass("d-none");
            });
            form_verifikasi.find(".detail-unggah-siup").click(function(){
                window.open(cdn_url+"/"+form_verifikasi.find(".unggah_siup_hidden").val(), "", "width=800,height=400");
            });

            // unggah nib
            form_verifikasi.find(".unggah-nib").change(function() {
                var selector = $(this);
                if (this.files && this.files[0]) {
                    var tipefile = this.files[0].type.toString();
                    var filename = this.files[0].name.toString();
                    var tipe = ['application/x-rar', 'application/rar', 'application/x-rar-compressed'];
                    /*if(tipe.indexOf(tipefile) == -1) {
                        $(this).val("");
                        toastrshow("warning", "Format salah, format .rar tidak tersedia", "Peringatan");
                        return;
                    }*/
                    if((this.files[0].size / 1024) < 5120){
                        var FR = new FileReader();
                        FR.addEventListener("load", function(e) {
                            //var base64 = e.target.result;
                            var base64 = e.target.result.replace("data:"+tipefile+";base64,", '');
                            var ext = filename.split(".").pop();
                            post_gambar["form"]["Base64"] = base64;
                            post_gambar["form"]["Ext"] = ext;
                            console.log(post_gambar);
                            $.ajax({
                                type: "POST",
                                url: base_url + "/tool/ajax_tool",
                                data: {act:"upload_file", form:post_gambar},
                                dataType: "JSON",
                                tryCount: 0,
                                retryLimit: 3,
                                beforeSend: function(){
                                    form_verifikasi.find(".unggah_nib_hidden").val("");
                                    form_verifikasi.find(".unggah-nib").addClass("d-none");
                                    form_verifikasi.find(".loading-unggah-nib").removeClass("d-none");
                                },
                                success: function(respon_file){
                                    if(respon_file.IsError != undefined) {
                                        if(respon_file.ErrorMessage[0].error != undefined) {
                                            toastrshow("warning", respon_file.ErrorMessage[0].error, "Peringatan");
                                        } else {
                                            toastrshow("warning", respon_file.ErrorMessage, "Peringatan");
                                        }
                                    } else {
                                        form_verifikasi.find(".unggah_nib_hidden").val(respon_file.Output).trigger("change");
                                        form_verifikasi.find(".detail-unggah-nib, .strip-unggah-nib, .hapus-unggah-nib").removeClass("d-none");
                                        form_verifikasi.find(".unggah-nib").addClass("d-none");
                                        form_verifikasi.find(".loading-unggah-nib").addClass("d-none");
                                    }
                                },
                                error: function(xhr, textstatus, errorthrown) {
                                    toastrshow("warning", "Periksa koneksi internet anda kembali", "Peringatan");
                                    form_verifikasi.find(".hapus-unggah-nib").click();
                                    form_verifikasi.find(".loading-unggah-nib").addClass("d-none");
                                }
                            });
                        }); 
                        FR.readAsDataURL(this.files[0]);
                    } else {
                        $(this).val("");
                        toastrshow("warning", "Ukuran file maksimum adalah 5 MB", "Warning");
                    }
                }
            });
            form_verifikasi.find(".hapus-unggah-nib").click(function(){
                form_verifikasi.find(".unggah_nib_hidden").val("").trigger("change");
                form_verifikasi.find(".detail-unggah-nib, .strip-unggah-nib, .hapus-unggah-nib").addClass("d-none");
                form_verifikasi.find(".unggah-nib").val("").trigger("change");
                form_verifikasi.find(".unggah-nib").removeClass("d-none");
            });
            form_verifikasi.find(".detail-unggah-nib").click(function(){
                window.open(cdn_url+"/"+form_verifikasi.find(".unggah_nib_hidden").val(), "", "width=800,height=400");
            });

            // unggah npwp-perusahaan
            form_verifikasi.find(".unggah-npwp-perusahaan").change(function() {
                var selector = $(this);
                if (this.files && this.files[0]) {
                    var tipefile = this.files[0].type.toString();
                    var filename = this.files[0].name.toString();
                    var tipe = ['application/x-rar', 'application/rar', 'application/x-rar-compressed'];
                    /*if(tipe.indexOf(tipefile) == -1) {
                        $(this).val("");
                        toastrshow("warning", "Format salah, format .rar tidak tersedia", "Peringatan");
                        return;
                    }*/
                    if((this.files[0].size / 1024) < 5120){
                        var FR = new FileReader();
                        FR.addEventListener("load", function(e) {
                            //var base64 = e.target.result;
                            var base64 = e.target.result.replace("data:"+tipefile+";base64,", '');
                            var ext = filename.split(".").pop();
                            post_gambar["form"]["Base64"] = base64;
                            post_gambar["form"]["Ext"] = ext;
                            console.log(post_gambar);
                            $.ajax({
                                type: "POST",
                                url: base_url + "/tool/ajax_tool",
                                data: {act:"upload_file", form:post_gambar},
                                dataType: "JSON",
                                tryCount: 0,
                                retryLimit: 3,
                                beforeSend: function(){
                                    form_verifikasi.find(".unggah_npwp_perusahaan_hidden").val("");
                                    form_verifikasi.find(".unggah-npwp-perusahaan").addClass("d-none");
                                    form_verifikasi.find(".loading-unggah-npwp-perusahaan").removeClass("d-none");
                                },
                                success: function(respon_file){
                                    if(respon_file.IsError != undefined) {
                                        if(respon_file.ErrorMessage[0].error != undefined) {
                                            toastrshow("warning", respon_file.ErrorMessage[0].error, "Peringatan");
                                        } else {
                                            toastrshow("warning", respon_file.ErrorMessage, "Peringatan");
                                        }
                                    } else {
                                        form_verifikasi.find(".unggah_npwp_perusahaan_hidden").val(respon_file.Output).trigger("change");
                                        form_verifikasi.find(".detail-unggah-npwp-perusahaan, .strip-unggah-npwp-perusahaan, .hapus-unggah-npwp-perusahaan").removeClass("d-none");
                                        form_verifikasi.find(".unggah-npwp-perusahaan").addClass("d-none");
                                        form_verifikasi.find(".loading-unggah-npwp-perusahaan").addClass("d-none");
                                    }
                                },
                                error: function(xhr, textstatus, errorthrown) {
                                    toastrshow("warning", "Periksa koneksi internet anda kembali", "Peringatan");
                                    form_verifikasi.find(".hapus-unggah-npwp-perusahaan").click();
                                    form_verifikasi.find(".loading-unggah-npwp-perusahaan").addClass("d-none");
                                }
                            });
                        }); 
                        FR.readAsDataURL(this.files[0]);
                    } else {
                        $(this).val("");
                        toastrshow("warning", "Ukuran file maksimum adalah 5 MB", "Warning");
                    }
                }
            });
            form_verifikasi.find(".hapus-unggah-npwp-perusahaan").click(function(){
                form_verifikasi.find(".unggah_npwp_perusahaan_hidden").val("").trigger("change");
                form_verifikasi.find(".detail-unggah-npwp-perusahaan, .strip-unggah-npwp-perusahaan, .hapus-unggah-npwp-perusahaan").addClass("d-none");
                form_verifikasi.find(".unggah-npwp-perusahaan").val("").trigger("change");
                form_verifikasi.find(".unggah-npwp-perusahaan").removeClass("d-none");
            });
            form_verifikasi.find(".detail-unggah-npwp-perusahaan").click(function(){
                window.open(cdn_url+"/"+form_verifikasi.find(".unggah_npwp_perusahaan_hidden").val(), "", "width=800,height=400");
            });

            // unggah ktp-penanggung-jawab
            form_verifikasi.find(".unggah-ktp-penanggung-jawab").change(function() {
                var selector = $(this);
                if (this.files && this.files[0]) {
                    var tipefile = this.files[0].type.toString();
                    var filename = this.files[0].name.toString();
                    var tipe = ['application/x-rar', 'application/rar', 'application/x-rar-compressed'];
                    /*if(tipe.indexOf(tipefile) == -1) {
                        $(this).val("");
                        toastrshow("warning", "Format salah, format .rar tidak tersedia", "Peringatan");
                        return;
                    }*/
                    if((this.files[0].size / 1024) < 5120){
                        var FR = new FileReader();
                        FR.addEventListener("load", function(e) {
                            //var base64 = e.target.result;
                            var base64 = e.target.result.replace("data:"+tipefile+";base64,", '');
                            var ext = filename.split(".").pop();
                            post_gambar["form"]["Base64"] = base64;
                            post_gambar["form"]["Ext"] = ext;
                            console.log(post_gambar);
                            $.ajax({
                                type: "POST",
                                url: base_url + "/tool/ajax_tool",
                                data: {act:"upload_file", form:post_gambar},
                                dataType: "JSON",
                                tryCount: 0,
                                retryLimit: 3,
                                beforeSend: function(){
                                    form_verifikasi.find(".unggah_ktp_penanggung_jawab_hidden").val("");
                                    form_verifikasi.find(".unggah-ktp-penanggung-jawab").addClass("d-none");
                                    form_verifikasi.find(".loading-unggah-ktp-penanggung-jawab").removeClass("d-none");
                                },
                                success: function(respon_file){
                                    if(respon_file.IsError != undefined) {
                                        if(respon_file.ErrorMessage[0].error != undefined) {
                                            toastrshow("warning", respon_file.ErrorMessage[0].error, "Peringatan");
                                        } else {
                                            toastrshow("warning", respon_file.ErrorMessage, "Peringatan");
                                        }
                                    } else {
                                        form_verifikasi.find(".unggah_ktp_penanggung_jawab_hidden").val(respon_file.Output).trigger("change");
                                        form_verifikasi.find(".detail-unggah-ktp-penanggung-jawab, .strip-unggah-ktp-penanggung-jawab, .hapus-unggah-ktp-penanggung-jawab").removeClass("d-none");
                                        form_verifikasi.find(".unggah-ktp-penanggung-jawab").addClass("d-none");
                                        form_verifikasi.find(".loading-unggah-ktp-penanggung-jawab").addClass("d-none");
                                    }
                                },
                                error: function(xhr, textstatus, errorthrown) {
                                    toastrshow("warning", "Periksa koneksi internet anda kembali", "Peringatan");
                                    form_verifikasi.find(".hapus-unggah-ktp-penanggung-jawab").click();
                                    form_verifikasi.find(".loading-unggah-ktp-penanggung-jawab").addClass("d-none");
                                }
                            });
                        }); 
                        FR.readAsDataURL(this.files[0]);
                    } else {
                        $(this).val("");
                        toastrshow("warning", "Ukuran file maksimum adalah 5 MB", "Warning");
                    }
                }
            });
            form_verifikasi.find(".hapus-unggah-ktp-penanggung-jawab").click(function(){
                form_verifikasi.find(".unggah_ktp_penanggung_jawab_hidden").val("").trigger("change");
                form_verifikasi.find(".detail-unggah-ktp-penanggung-jawab, .strip-unggah-ktp-penanggung-jawab, .hapus-unggah-ktp-penanggung-jawab").addClass("d-none");
                form_verifikasi.find(".unggah-ktp-penanggung-jawab").val("").trigger("change");
                form_verifikasi.find(".unggah-ktp-penanggung-jawab").removeClass("d-none");
            });
            form_verifikasi.find(".detail-unggah-ktp-penanggung-jawab").click(function(){
                window.open(cdn_url+"/"+form_verifikasi.find(".unggah_ktp_penanggung_jawab_hidden").val(), "", "width=800,height=400");
            });

            // unggah ktp-direksi
            form_verifikasi.find(".unggah-ktp-direksi").change(function() {
                var selector = $(this);
                if (this.files && this.files[0]) {
                    var tipefile = this.files[0].type.toString();
                    var filename = this.files[0].name.toString();
                    var tipe = ['application/x-rar', 'application/rar', 'application/x-rar-compressed'];
                    /*if(tipe.indexOf(tipefile) == -1) {
                        $(this).val("");
                        toastrshow("warning", "Format salah, format .rar tidak tersedia", "Peringatan");
                        return;
                    }*/
                    if((this.files[0].size / 1024) < 5120){
                        var FR = new FileReader();
                        FR.addEventListener("load", function(e) {
                            //var base64 = e.target.result;
                            var base64 = e.target.result.replace("data:"+tipefile+";base64,", '');
                            var ext = filename.split(".").pop();
                            post_gambar["form"]["Base64"] = base64;
                            post_gambar["form"]["Ext"] = ext;
                            console.log(post_gambar);
                            $.ajax({
                                type: "POST",
                                url: base_url + "/tool/ajax_tool",
                                data: {act:"upload_file", form:post_gambar},
                                dataType: "JSON",
                                tryCount: 0,
                                retryLimit: 3,
                                beforeSend: function(){
                                    form_verifikasi.find(".unggah_ktp_direksi_hidden").val("");
                                    form_verifikasi.find(".unggah-ktp-direksi").addClass("d-none");
                                    form_verifikasi.find(".loading-unggah-ktp-direksi").removeClass("d-none");
                                },
                                success: function(respon_file){
                                    if(respon_file.IsError != undefined) {
                                        if(respon_file.ErrorMessage[0].error != undefined) {
                                            toastrshow("warning", respon_file.ErrorMessage[0].error, "Peringatan");
                                        } else {
                                            toastrshow("warning", respon_file.ErrorMessage, "Peringatan");
                                        }
                                    } else {
                                        form_verifikasi.find(".unggah_ktp_direksi_hidden").val(respon_file.Output).trigger("change");
                                        form_verifikasi.find(".detail-unggah-ktp-direksi, .strip-unggah-ktp-direksi, .hapus-unggah-ktp-direksi").removeClass("d-none");
                                        form_verifikasi.find(".unggah-ktp-direksi").addClass("d-none");
                                        form_verifikasi.find(".loading-unggah-ktp-direksi").addClass("d-none");
                                    }
                                },
                                error: function(xhr, textstatus, errorthrown) {
                                    toastrshow("warning", "Periksa koneksi internet anda kembali", "Peringatan");
                                    form_verifikasi.find(".hapus-unggah-ktp-direksi").click();
                                    form_verifikasi.find(".loading-unggah-ktp-direksi").addClass("d-none");
                                }
                            });
                        }); 
                        FR.readAsDataURL(this.files[0]);
                    } else {
                        $(this).val("");
                        toastrshow("warning", "Ukuran file maksimum adalah 5 MB", "Warning");
                    }
                }
            });
            form_verifikasi.find(".hapus-unggah-ktp-direksi").click(function(){
                form_verifikasi.find(".unggah_ktp_direksi_hidden").val("").trigger("change");
                form_verifikasi.find(".detail-unggah-ktp-direksi, .strip-unggah-ktp-direksi, .hapus-unggah-ktp-direksi").addClass("d-none");
                form_verifikasi.find(".unggah-ktp-direksi").val("").trigger("change");
                form_verifikasi.find(".unggah-ktp-direksi").removeClass("d-none");
            });
            form_verifikasi.find(".detail-unggah-ktp-direksi").click(function(){
                window.open(cdn_url+"/"+form_verifikasi.find(".unggah_ktp_direksi_hidden").val(), "", "width=800,height=400");
            });

            // unggah ktp-komisaris
            form_verifikasi.find(".unggah-ktp-komisaris").change(function() {
                var selector = $(this);
                if (this.files && this.files[0]) {
                    var tipefile = this.files[0].type.toString();
                    var filename = this.files[0].name.toString();
                    var tipe = ['application/x-rar', 'application/rar', 'application/x-rar-compressed'];
                    /*if(tipe.indexOf(tipefile) == -1) {
                        $(this).val("");
                        toastrshow("warning", "Format salah, format .rar tidak tersedia", "Peringatan");
                        return;
                    }*/
                    if((this.files[0].size / 1024) < 5120){
                        var FR = new FileReader();
                        FR.addEventListener("load", function(e) {
                            //var base64 = e.target.result;
                            var base64 = e.target.result.replace("data:"+tipefile+";base64,", '');
                            var ext = filename.split(".").pop();
                            post_gambar["form"]["Base64"] = base64;
                            post_gambar["form"]["Ext"] = ext;
                            console.log(post_gambar);
                            $.ajax({
                                type: "POST",
                                url: base_url + "/tool/ajax_tool",
                                data: {act:"upload_file", form:post_gambar},
                                dataType: "JSON",
                                tryCount: 0,
                                retryLimit: 3,
                                beforeSend: function(){
                                    form_verifikasi.find(".unggah_ktp_komisaris_hidden").val("");
                                    form_verifikasi.find(".unggah-ktp-komisaris").addClass("d-none");
                                    form_verifikasi.find(".loading-unggah-ktp-komisaris").removeClass("d-none");
                                },
                                success: function(respon_file){
                                    if(respon_file.IsError != undefined) {
                                        if(respon_file.ErrorMessage[0].error != undefined) {
                                            toastrshow("warning", respon_file.ErrorMessage[0].error, "Peringatan");
                                        } else {
                                            toastrshow("warning", respon_file.ErrorMessage, "Peringatan");
                                        }
                                    } else {
                                        form_verifikasi.find(".unggah_ktp_komisaris_hidden").val(respon_file.Output).trigger("change");
                                        form_verifikasi.find(".detail-unggah-ktp-komisaris, .strip-unggah-ktp-komisaris, .hapus-unggah-ktp-komisaris").removeClass("d-none");
                                        form_verifikasi.find(".unggah-ktp-komisaris").addClass("d-none");
                                        form_verifikasi.find(".loading-unggah-ktp-komisaris").addClass("d-none");
                                    }
                                },
                                error: function(xhr, textstatus, errorthrown) {
                                    toastrshow("warning", "Periksa koneksi internet anda kembali", "Peringatan");
                                    form_verifikasi.find(".hapus-unggah-ktp-komisaris").click();
                                    form_verifikasi.find(".loading-unggah-ktp-komisaris").addClass("d-none");
                                }
                            });
                        }); 
                        FR.readAsDataURL(this.files[0]);
                    } else {
                        $(this).val("");
                        toastrshow("warning", "Ukuran file maksimum adalah 5 MB", "Warning");
                    }
                }
            });
            form_verifikasi.find(".hapus-unggah-ktp-komisaris").click(function(){
                form_verifikasi.find(".unggah_ktp_komisaris_hidden").val("").trigger("change");
                form_verifikasi.find(".detail-unggah-ktp-komisaris, .strip-unggah-ktp-komisaris, .hapus-unggah-ktp-komisaris").addClass("d-none");
                form_verifikasi.find(".unggah-ktp-komisaris").val("").trigger("change");
                form_verifikasi.find(".unggah-ktp-komisaris").removeClass("d-none");
            });
            form_verifikasi.find(".detail-unggah-ktp-komisaris").click(function(){
                window.open(cdn_url+"/"+form_verifikasi.find(".unggah_ktp_komisaris_hidden").val(), "", "width=800,height=400");
            });

            // unggah akta-pendirian-perusahaan
            form_verifikasi.find(".unggah-akta-pendirian-perusahaan").change(function() {
                var selector = $(this);
                if (this.files && this.files[0]) {
                    var tipefile = this.files[0].type.toString();
                    var filename = this.files[0].name.toString();
                    var tipe = ['application/x-rar', 'application/rar', 'application/x-rar-compressed'];
                    /*if(tipe.indexOf(tipefile) == -1) {
                        $(this).val("");
                        toastrshow("warning", "Format salah, format .rar tidak tersedia", "Peringatan");
                        return;
                    }*/
                    if((this.files[0].size / 1024) < 5120){
                        var FR = new FileReader();
                        FR.addEventListener("load", function(e) {
                            //var base64 = e.target.result;
                            var base64 = e.target.result.replace("data:"+tipefile+";base64,", '');
                            var ext = filename.split(".").pop();
                            post_gambar["form"]["Base64"] = base64;
                            post_gambar["form"]["Ext"] = ext;
                            console.log(post_gambar);
                            $.ajax({
                                type: "POST",
                                url: base_url + "/tool/ajax_tool",
                                data: {act:"upload_file", form:post_gambar},
                                dataType: "JSON",
                                tryCount: 0,
                                retryLimit: 3,
                                beforeSend: function(){
                                    form_verifikasi.find(".unggah_akta_pendirian_perusahaan_hidden").val("");
                                    form_verifikasi.find(".unggah-akta-pendirian-perusahaan").addClass("d-none");
                                    form_verifikasi.find(".loading-unggah-akta-pendirian-perusahaan").removeClass("d-none");
                                },
                                success: function(respon_file){
                                    if(respon_file.IsError != undefined) {
                                        if(respon_file.ErrorMessage[0].error != undefined) {
                                            toastrshow("warning", respon_file.ErrorMessage[0].error, "Peringatan");
                                        } else {
                                            toastrshow("warning", respon_file.ErrorMessage, "Peringatan");
                                        }
                                    } else {
                                        form_verifikasi.find(".unggah_akta_pendirian_perusahaan_hidden").val(respon_file.Output).trigger("change");
                                        form_verifikasi.find(".detail-unggah-akta-pendirian-perusahaan, .strip-unggah-akta-pendirian-perusahaan, .hapus-unggah-akta-pendirian-perusahaan").removeClass("d-none");
                                        form_verifikasi.find(".unggah-akta-pendirian-perusahaan").addClass("d-none");
                                        form_verifikasi.find(".loading-unggah-akta-pendirian-perusahaan").addClass("d-none");
                                    }
                                },
                                error: function(xhr, textstatus, errorthrown) {
                                    toastrshow("warning", "Periksa koneksi internet anda kembali", "Peringatan");
                                    form_verifikasi.find(".hapus-unggah-akta-pendirian-perusahaan").click();
                                    form_verifikasi.find(".loading-unggah-akta-pendirian-perusahaan").addClass("d-none");
                                }
                            });
                        }); 
                        FR.readAsDataURL(this.files[0]);
                    } else {
                        $(this).val("");
                        toastrshow("warning", "Ukuran file maksimum adalah 5 MB", "Warning");
                    }
                }
            });
            form_verifikasi.find(".hapus-unggah-akta-pendirian-perusahaan").click(function(){
                form_verifikasi.find(".unggah_akta_pendirian_perusahaan_hidden").val("").trigger("change");
                form_verifikasi.find(".detail-unggah-akta-pendirian-perusahaan, .strip-unggah-akta-pendirian-perusahaan, .hapus-unggah-akta-pendirian-perusahaan").addClass("d-none");
                form_verifikasi.find(".unggah-akta-pendirian-perusahaan").val("").trigger("change");
                form_verifikasi.find(".unggah-akta-pendirian-perusahaan").removeClass("d-none");
            });
            form_verifikasi.find(".detail-unggah-akta-pendirian-perusahaan").click(function(){
                window.open(cdn_url+"/"+form_verifikasi.find(".unggah_akta_pendirian_perusahaan_hidden").val(), "", "width=800,height=400");
            });

            // unggah akta-perubahan-anggaran-dasar-terakhir
            form_verifikasi.find(".unggah-akta-perubahan-anggaran-dasar-terakhir").change(function() {
                var selector = $(this);
                if (this.files && this.files[0]) {
                    var tipefile = this.files[0].type.toString();
                    var filename = this.files[0].name.toString();
                    var tipe = ['application/x-rar', 'application/rar', 'application/x-rar-compressed'];
                    /*if(tipe.indexOf(tipefile) == -1) {
                        $(this).val("");
                        toastrshow("warning", "Format salah, format .rar tidak tersedia", "Peringatan");
                        return;
                    }*/
                    if((this.files[0].size / 1024) < 5120){
                        var FR = new FileReader();
                        FR.addEventListener("load", function(e) {
                            //var base64 = e.target.result;
                            var base64 = e.target.result.replace("data:"+tipefile+";base64,", '');
                            var ext = filename.split(".").pop();
                            post_gambar["form"]["Base64"] = base64;
                            post_gambar["form"]["Ext"] = ext;
                            console.log(post_gambar);
                            $.ajax({
                                type: "POST",
                                url: base_url + "/tool/ajax_tool",
                                data: {act:"upload_file", form:post_gambar},
                                dataType: "JSON",
                                tryCount: 0,
                                retryLimit: 3,
                                beforeSend: function(){
                                    form_verifikasi.find(".unggah_akta_perubahan_anggaran_dasar_terakhir_hidden").val("");
                                    form_verifikasi.find(".unggah-akta-perubahan-anggaran-dasar-terakhir").addClass("d-none");
                                    form_verifikasi.find(".loading-unggah-akta-perubahan-anggaran-dasar-terakhir").removeClass("d-none");
                                },
                                success: function(respon_file){
                                    if(respon_file.IsError != undefined) {
                                        if(respon_file.ErrorMessage[0].error != undefined) {
                                            toastrshow("warning", respon_file.ErrorMessage[0].error, "Peringatan");
                                        } else {
                                            toastrshow("warning", respon_file.ErrorMessage, "Peringatan");
                                        }
                                    } else {
                                        form_verifikasi.find(".unggah_akta_perubahan_anggaran_dasar_terakhir_hidden").val(respon_file.Output).trigger("change");
                                        form_verifikasi.find(".detail-unggah-akta-perubahan-anggaran-dasar-terakhir, .strip-unggah-akta-perubahan-anggaran-dasar-terakhir, .hapus-unggah-akta-perubahan-anggaran-dasar-terakhir").removeClass("d-none");
                                        form_verifikasi.find(".unggah-akta-perubahan-anggaran-dasar-terakhir").addClass("d-none");
                                        form_verifikasi.find(".loading-unggah-akta-perubahan-anggaran-dasar-terakhir").addClass("d-none");
                                    }
                                },
                                error: function(xhr, textstatus, errorthrown) {
                                    toastrshow("warning", "Periksa koneksi internet anda kembali", "Peringatan");
                                    form_verifikasi.find(".hapus-unggah-akta-perubahan-anggaran-dasar-terakhir").click();
                                    form_verifikasi.find(".loading-unggah-akta-perubahan-anggaran-dasar-terakhir").addClass("d-none");
                                }
                            });
                        }); 
                        FR.readAsDataURL(this.files[0]);
                    } else {
                        $(this).val("");
                        toastrshow("warning", "Ukuran file maksimum adalah 5 MB", "Warning");
                    }
                }
            });
            form_verifikasi.find(".hapus-unggah-akta-perubahan-anggaran-dasar-terakhir").click(function(){
                form_verifikasi.find(".unggah_akta_perubahan_anggaran_dasar_terakhir_hidden").val("").trigger("change");
                form_verifikasi.find(".detail-unggah-akta-perubahan-anggaran-dasar-terakhir, .strip-unggah-akta-perubahan-anggaran-dasar-terakhir, .hapus-unggah-akta-perubahan-anggaran-dasar-terakhir").addClass("d-none");
                form_verifikasi.find(".unggah-akta-perubahan-anggaran-dasar-terakhir").val("").trigger("change");
                form_verifikasi.find(".unggah-akta-perubahan-anggaran-dasar-terakhir").removeClass("d-none");
            });
            form_verifikasi.find(".detail-unggah-akta-perubahan-anggaran-dasar-terakhir").click(function(){
                window.open(cdn_url+"/"+form_verifikasi.find(".unggah_akta_perubahan_anggaran_dasar_terakhir_hidden").val(), "", "width=800,height=400");
            });
        </script>
        <?php if($userlogin->status_verify == 2){ ?>
            <script>
                GetDropdownKota("<?php echo $userlogin->id_kota ?>", "<?php echo $userlogin->id_provinsi ?>","");
                GetDropdownKecamatan("<?php echo $userlogin->id_kecamatan ?>", "<?php echo $userlogin->id_kota ?>","");
                $(".dropdown-kota").change(function(){
                    $(".kode-telepon").text($("option:selected", this).attr("kode-telepon"));
                    $("[name='form[kode_telepon]']").val($("option:selected", this).attr("kode-telepon"));
                });
                $(".dropdown-kota").trigger("change");
                $("select[name='form[jabatan]']").val("<?php echo $userlogin->jabatan; ?>").trigger("change");
                $("input[name='form[jabatan_lainnya]']").val("<?php echo $userlogin->jabatan; ?>");
                $("select[name='form[nama_bank]']").val("<?php echo $userlogin->nama_bank; ?>").trigger("change");
                $("[name='form[unggah_siup]']").trigger("change")
            </script>
        <?php } ?>
    </body>
</html>