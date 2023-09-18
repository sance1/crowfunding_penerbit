<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Obsido - Beranda</title>
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
        <link rel="stylesheet" href="<?php echo base_url("assets/plugins/chart-morris/css/morris.css"); ?>">
        <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap-datepicker.min.css"); ?>">
        <link href="<?php echo base_url("assets/css/style.css"); ?>" rel="stylesheet" type="text/css" media="all" />
        <link rel="stylesheet" href="<?php echo base_url("assets/css/custom.css?n=").$this->config->item("tahun_assets"); ?>">
        <style>
            .shadow{
                -webkit-box-shadow: 0px 0px 15px -2px #000000; 
                box-shadow: 0px 0px 15px -2px #000000;
            }
            input.form-control{
                height: 38px;
            }
            .switch.active{
                color: #0084ff;
            }
            .btn-chart.active{
                border: 1px solid #0084ff !important;
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
                            <h1 class="col-12 bold text-center mt-2">Beranda</h1>
                            <div class="container-fluid" id="grad1">
                                <div class="row justify-content-center mt-0">
                                    <div class="col-lg-12 p-3 mt-3 mb-0">
                                        <div class="card px-0 p-4 pb-0 shadow mb-0" style="background-image: url('<?php echo base_url("assets/images/portofolio_dana.png"); ?>'); background-size: 100%; margin: 30px auto;">
                                            <div class="row">
                                                <div class="col-xl-1 col-md-2">
                                                    <center>
                                                        <i class="las la-briefcase text-primary" style="font-size: 50px; border: 3px solid #707070; border-radius: 50px; padding: 5px;"></i>
                                                    </center>
                                                </div>
                                                <div class="col-xl-11 col-md-10 pt-2">
                                                    <h1 class="bold" style="font-size: 20px;"><?php echo $this->session->userdata("user")->nama_perusahaan; ?></h1>
                                                    <span class="bold">Penerbit</span><br><br>
                                                </div>
                                                <div class="col-md-6 mt-2">
                                                    <div class="p-2" style="border: 1px solid #707070; border-radius: 6px; background: white;">
                                                        <h1 class="bold mb-1" style="font-size: 16px; text-align: center;">Dana yang Terkumpul</h1>
                                                        <h1 class="bold text-primary text-dana-terkumpul" style="font-size: 16px; background: #e3e3e3; padding: 5px; text-align: center;">Rp 0</h1>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mt-2">
                                                    <div class="p-2" style="border: 1px solid #707070; border-radius: 6px; background: white;">
                                                        <h1 class="bold mb-1" style="font-size: 16px; text-align: center;">Dana yang terpakai</h1>
                                                        <h1 class="bold text-success text-dana-terpakai" style="font-size: 16px; background: #e3e3e3; padding: 5px; text-align: center;">Rp 0</h1>
                                                    </div>
                                                </div>
                                                <!-- <a class="bold" style="position: absolute; right: 5px; top: 5px;">Laporan <i class="fa fa-chevron-right"></i></a> -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 p-3 mt-0 mb-2">
                                        <div class="card px-0 p-4 pb-0 shadow mt-0" style="margin: 30px auto; padding-bottom: 0px !important;">
                                            <div class="row">
                                                <div class="col-12">
                                                    <span class="bold">Grafik Pemasukan</span>
                                                    <a class="btn btn-sm btn-outline-primary float-right ml-1 bold btn-chart btn-tahun" style="border: 1px solid #7a8489;">Pertahun</a>
                                                    <a class="btn btn-sm btn-outline-primary float-right ml-1 bold btn-chart btn-minggu" style="border: 1px solid #7a8489;">Perminggu</a>
                                                    <a class="btn btn-sm btn-outline-primary float-right ml-1 bold btn-chart active btn-hari" style="border: 1px solid #7a8489;">Perhari</a>
                                                    <div class="card-body card-chart card-hari pl-0 pr-0">
                                                        <div class="row">
                                                            <div class="col-lg-12 text-right">
                                                            	<select class="select dropdown-bulan-perhari" style="width: 150px;">
                                                            		<option <?php if((int)date("m") == 1){ echo "selected"; } ?> value="1">January</option>
                                                            		<option <?php if((int)date("m") == 2){ echo "selected"; } ?> value="2">February</option>
                                                            		<option <?php if((int)date("m") == 3){ echo "selected"; } ?> value="3">March</option>
                                                            		<option <?php if((int)date("m") == 4){ echo "selected"; } ?> value="4">April</option>
                                                            		<option <?php if((int)date("m") == 5){ echo "selected"; } ?> value="5">May</option>
                                                            		<option <?php if((int)date("m") == 6){ echo "selected"; } ?> value="6">Juni</option>
                                                            		<option <?php if((int)date("m") == 7){ echo "selected"; } ?> value="7">July</option>
                                                            		<option <?php if((int)date("m") == 8){ echo "selected"; } ?> value="8">August</option>
                                                            		<option <?php if((int)date("m") == 9){ echo "selected"; } ?> value="9">September</option>
                                                            		<option <?php if((int)date("m") == 10){ echo "selected"; } ?> value="10">October</option>
                                                            		<option <?php if((int)date("m") == 11){ echo "selected"; } ?> value="11">November</option>
                                                            		<option <?php if((int)date("m") == 12){ echo "selected"; } ?> value="12">December</option>
                                                            	</select>
                                                                <select class="select dropdown-tahun-perhari" style="width: 80px;">
                                                                    <?php
                                                                        for($x = (int)date("Y"); $x >= (int)date("Y", strtotime($properti[0]->created_at)); $x--){
                                                                    ?>
                                                                    <option value="<?php echo $x ?>"><?php echo $x ?></option>
                                                                    <?php } ?>
                                                                </select>
                                                                <div id="morris-line-data-hari" style="height: 0px;"></div>
                                                            </div>
                                                            <div class="col-12 loading-div-data-hari">
                                                                <center><img class="loading-gif-image" src="<?php echo base_url("assets/images/loading-data.gif") ?>" alt="Loading ..."></center>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-body card-chart card-minggu pl-0 pr-0">
                                                        <div class="row">
                                                            <div class="col-lg-12 text-right">
                                                            	<select class="select dropdown-bulan-perminggu" style="width: 150px;">
                                                                    <option <?php if((int)date("m") == 1){ echo "selected"; } ?> value="1">January</option>
                                                                    <option <?php if((int)date("m") == 2){ echo "selected"; } ?> value="2">February</option>
                                                                    <option <?php if((int)date("m") == 3){ echo "selected"; } ?> value="3">March</option>
                                                                    <option <?php if((int)date("m") == 4){ echo "selected"; } ?> value="4">April</option>
                                                                    <option <?php if((int)date("m") == 5){ echo "selected"; } ?> value="5">May</option>
                                                                    <option <?php if((int)date("m") == 6){ echo "selected"; } ?> value="6">Juni</option>
                                                                    <option <?php if((int)date("m") == 7){ echo "selected"; } ?> value="7">July</option>
                                                                    <option <?php if((int)date("m") == 8){ echo "selected"; } ?> value="8">August</option>
                                                                    <option <?php if((int)date("m") == 9){ echo "selected"; } ?> value="9">September</option>
                                                                    <option <?php if((int)date("m") == 10){ echo "selected"; } ?> value="10">October</option>
                                                                    <option <?php if((int)date("m") == 11){ echo "selected"; } ?> value="11">November</option>
                                                                    <option <?php if((int)date("m") == 12){ echo "selected"; } ?> value="12">December</option>
                                                            	</select>
                                                            	<select class="select dropdown-tahun-perminggu" style="width: 80px;">
                                                                    <?php
                                                                        for($x = (int)date("Y"); $x >= (int)date("Y", strtotime($properti[0]->created_at)); $x--){
                                                                    ?>
                                                                    <option value="<?php echo $x ?>"><?php echo $x ?></option>
                                                                    <?php } ?>
                                                            	</select>
                                                                <div id="morris-line-data-minggu" style="height: 0px;"></div>
                                                            </div>
                                                            <div class="col-12 loading-div-data-minggu d-none">
                                                                <center><img class="loading-gif-image" src="<?php echo base_url("assets/images/loading-data.gif") ?>" alt="Loading ..."></center>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-body card-chart card-tahun pl-0 pr-0">
                                                        <div class="row">
                                                            <div class="col-lg-12 text-right">
                                                            	<select class="select dropdown-tahun-pertahun" style="width: 80px;">
                                                                    <?php
                                                                        for($x = (int)date("Y"); $x >= (int)date("Y", strtotime($properti[0]->created_at)); $x--){
                                                                    ?>
                                                                    <option value="<?php echo $x ?>"><?php echo $x ?></option>
                                                                    <?php } ?>
                                                            	</select>
                                                                <div id="morris-line-data-tahun" style="height: 0px;"></div>
                                                            </div>
                                                            <div class="col-12 loading-div-data-tahun d-none">
                                                                <center><img class="loading-gif-image" src="<?php echo base_url("assets/images/loading-data.gif") ?>" alt="Loading ..."></center>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <style type="text/css">
                                button.btn.btn-disable.btn-tambah-proyek.float-right.mb-3 {
                                        color: #5F5F5F;
                                        background-color: #e6ecf2;
                                        border-color: #e6ecf2;
                                    }
                            </style>
                            <div class="col-12">
                                <div class="card p-3">
                                    <div class="row">
                                        <div class="col-12">
                                        
                                            <?php if(($this->session->userdata("user")->status_verify == 0 || $this->session->userdata("user")->status_verify == 2) && $this->session->userdata("user")->status_verify_send == 0) { ?>
                                                    <button class="btn btn-disable btn-tambah-proyek float-right mb-3"><i class="fa fa-plus"></i> Daftar Proyek</button>
                                                <?php }else{ ?>
                                                    <a href="<?php echo base_url("properti/tambah.html"); ?>" class="btn btn-primary btn-tambah-proyek float-right mb-3"><i class="fa fa-plus"></i> Daftar Proyek</a>
                                               <?php } ?>  

                                            <div class="table-responsive font-default">
                                                <table class="table datatable-properti table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th style="min-width: 200px; width: 200px;" class="text-center bold"></th>
                                                            <th style="min-width: 280px;" class="bold">Alamat</th>
                                                            <th style="min-width: 220px;" class="bold">Investors</th>
                                                            <th style="min-width: 175px;" class="bold"></th>
                                                            <th style="min-width: 190px;" class="text-right bold">Harga</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td colspan="5" style="padding: 10px !important;">
                                                                <center>
                                                                    <img class="loading-gif-image" src="<?php echo base_url("assets/images/loading-data.gif") ?>" alt="Loading ...">
                                                                </center>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <center>
                                                    <a class="btn btn-primary text-white bold mt-3 mb-3 btn-lihat-lebih-banyak d-none">Lihat lebih banyak</a>
                                                </center>
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
        <?php $this->load->view("properti/modal/properti_kelola_dana_tambah"); ?>
        <script type="text/javascript" src="<?php echo base_url("assets/js/moment.min.js"); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url("assets/js/jquery-2.1.1.js"); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url("assets/js/popper.min.js"); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.min.js"); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url("assets/js/jquery.validate.min.js"); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url("assets/js/plugins.js"); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url("assets/js/custom.js"); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap-datepicker.js"); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url("assets/plugins/chart-morris/js/raphael.min.js"); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url("assets/plugins/chart-morris/js/morris.min.js"); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url("assets/plugins/jquery-repeater/jquery.repeater.js"); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url("assets/plugins/validate/jquery.validate.min.js"); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url("assets/plugins/select2/select2.full.js"); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url("assets/plugins/toastr/toastr.min.js"); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url("assets/plugins/ladda/spin.min.js"); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url("assets/plugins/ladda/ladda.min.js"); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url("assets/plugins/ladda/ladda.jquery.min.js"); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url("assets/plugins/Inputmask-5.x/dist/jquery.inputmask.js"); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url("assets/js/proses.js?n=").$this->config->item("tahun_assets"); ?>"></script>
        <script>
            var post_gambar  = {"form": {"Base64": ""}};
            var total_transaksi = <?php echo json_encode($transaksi); ?>;
            console.log(total_transaksi);

            $.ajax({
                type: "POST",
                url: base_url + "/transaksi/ajax_transaksi",
                data: {act:"getdata_all"},
                dataType: "JSON",
                tryCount: 0,
                retryLimit: 3,
                success: function(resp){
                    var total_dana_terkumpul = 0;
                    var total_dana_terpakai = 0;
                    if(resp.data == ""){

                    } else {
                        $.each(resp.data, function(index, item) {
                            if(item.jenis == "Pembelian"){
                                total_dana_terkumpul += parseInt(item.nominal);
                            }
                        });
                    }
                    $(".text-dana-terkumpul").html("Rp "+rupiah(total_dana_terkumpul));
                    $(".text-dana-terpakai").html("Rp "+rupiah(resp.dana_terpakai));
                },
                error: function(xhr, textstatus, errorthrown) {
                }
            });

            var array_id = [];
            var request_properti  = {"filter": {"kywd": ""}};
            request_properti["Sort"] = "id desc";
            $.ajax({
                type: "POST",
                url: base_url + "/properti/ajax_properti",
                data: {act:"listdatahtml", req:request_properti},
                dataType: "JSON",
                tryCount: 0,
                retryLimit: 3,
                success: function(resp){
                    array_id = resp.array_id;
                    if(array_id.length >= 1){
                        $(".btn-tambah-proyek").addClass("d-none");
                    }
                    if(resp.paging.IsNext == true){
                        $(".btn-lihat-lebih-banyak").removeClass("d-none");
                    } else {
                        $(".btn-lihat-lebih-banyak").addClass("d-none");
                    }
                    $(".datatable-properti tbody").html(resp.lsdt);
                },
                error: function(xhr, textstatus, errorthrown) {
                    $(".datatable-properti tbody").html("<tr><td style='padding: 20px !important;' colspan='5' class='text-center'><span class='badge badge-pill badge-warning'>Check your internet connection again</span></td></tr>");
                }
            });

            $(".btn-lihat-lebih-banyak").click(function(){
                $(".btn-lihat-lebih-banyak").addClass("disabled")
                var request_properti  = {"filter": {"kywd": ""}};
                request_properti["filter"]["kywd"] = "";
                request_properti["filter"]["array_id"] = array_id;
                request_properti["Sort"] = "id desc";
                $.ajax({
                    type: "POST",
                    url: base_url + "/properti/ajax_properti",
                    data: {act:"listdatahtml", req:request_properti},
                    dataType: "JSON",
                    tryCount: 0,
                    retryLimit: 3,
                    success: function(resp){
                        array_id = resp.array_id;
                        if(resp.paging.IsNext == true){
                            $(".btn-lihat-lebih-banyak").removeClass("d-none");
                        } else {
                            $(".btn-lihat-lebih-banyak").addClass("d-none");
                        }
                        $(".datatable-properti tbody").append(resp.lsdt);
                        $(".btn-lihat-lebih-banyak").removeClass("disabled");
                    },
                    error: function(xhr, textstatus, errorthrown) {
                        $(".btn-lihat-lebih-banyak").removeClass("disabled");
                    }
                });
            });


            var kola_dana_baru = $("#modal-tambah-properti-kelola-dana");

            function KelolaDana(id_properti){
                kola_dana_baru.find(".mt-repeater-delete-deskripsi").click();
                kola_dana_baru.find("input").val("");
                kola_dana_baru.find("input[name='form[id_properti]']").val(id_properti);
                $("#modal-tambah-properti-kelola-dana").modal("show");
            }

            $(".mt-repeater-deskripsi").each(function(){
                $(this).repeater({
                    show: function () {
                        $(this).slideDown();
                    },
                    hide: function (deleteElement) {
                        $(this).slideUp(deleteElement);
                        setTimeout(function(){
                            var tot_frm = $(".mt-repeater-item").length;
                            if(tot_frm <= 0){
                                $(".btnTambahProgres").click();
                            }
                            HitungUlangKelolaDana();
                        }, 500);
                    },

                    ready: function (setIndexes) {

                    }

                });
            });

            $("#modal-tambah-properti-kelola-dana").on("focus", ".jumlah", function() {
                var nominal_convert = $(this).val().replace(/\./g,"");
                $(this).val(nominal_convert);
            });
            $("#modal-tambah-properti-kelola-dana").on("blur", ".jumlah", function() {
                if($(this).val() <= 0){
                    $(this).val("0");
                }
                if($.isNumeric($(this).val()) == false){
                    $(this).val("0");
                } else {
                    $(this).val(rupiah(parseFloat($(this).val())));
                }
            });
            $("#modal-tambah-properti-kelola-dana").on("change", ".jumlah", function() {
                HitungUlangKelolaDana();
            });

            function HitungUlangKelolaDana(){
                var total_kelola_dana = 0;
                $(".mt-repeater-deskripsi .mt-repeater-item").each(function(i){
                    total_kelola_dana += parseInt($(this).find(".jumlah").val().replace(/\./g,""));
                });
                kola_dana_baru.find(".total-kelola-dana").text("Total : Rp "+rupiah(total_kelola_dana));
                kola_dana_baru.find("input[name='form[total]']").val(total_kelola_dana);
            }

            $("#modal-tambah-properti-kelola-dana").on("change", ".foto", function() {
                var selector = $(this);
                var selector_td = $(this).parent().parent();
                if (this.files && this.files[0]) {
                    var tipefile = this.files[0].type.toString();
                    var filename = this.files[0].name.toString();
                    var tipefile_array = filename.split(".");
                    var tipefile_data = "."+tipefile_array[tipefile_array.length-1];
                    var real_filename = filename.replace(tipefile_data, "", filename);
                    var tipe = ['text/x-comma-separated-values', 'text/comma-separated-values', 'application/octet-stream', 'application/x-csv', 'text/x-csv', 'text/csv', 'application/csv', 'application/vnd.msexcel', 'text/plain', 'application/msexcel', 'application/x-msexcel', 'application/x-ms-excel', 'application/x-excel', 'application/x-dos_ms_excel', 'application/xls', 'application/x-xls', 'application/excel', 'application/download', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet', 'application/vnd.ms-excel', 'application/x-zip', 'application/vnd.ms-office', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', 'application/zip', 'application/msword', 'application/pdf', 'application/force-download', 'application/x-download', 'binary/octet-stream'];
                    if(filename.indexOf("'") >= 0 || filename.indexOf('"') >= 0){
                        $(this).val("");
                        toastrshow("warning", "Nama file tidak boleh mengandung ' atau \"", "Peringatan");
                        return;
                    }
                    if(tipe.indexOf(tipefile) == -1) {
                        $(this).val("");
                        toastrshow("warning", "Format salah, pilih file excel/word/pdf", "Peringatan");
                        return;
                    }
                    if((this.files[0].size / 1024) < 5210){
                        var FR = new FileReader();
                        FR.addEventListener("load", function(e) {
                            //var base64 = e.target.result;
                            var base64 = e.target.result.replace("data:"+tipefile+";base64,", '');
                            var ext = filename.split(".").pop();
                            post_gambar["form"]["Base64"] = base64;
                            post_gambar["form"]["Ext"] = ext;
                            post_gambar["form"]["NameFile"] = real_filename;
                            $.ajax({
                                type: "POST",
                                url: base_url + "/tool/ajax_tool",
                                data: {act:"upload_file_name", form:post_gambar},
                                dataType: "JSON",
                                tryCount: 0,
                                retryLimit: 3,
                                beforeSend: function(){
                                    selector_td.find(".foto_hidden").val("");
                                    selector_td.find(".foto").addClass("d-none");
                                    selector_td.find(".loading-foto").removeClass("d-none");
                                    selector_td.find(".btn-unggah").addClass("disabled").attr("disabled", "disabled");
                                },
                                success: function(respon_file){
                                    if(respon_file.IsError != undefined) {
                                        if(respon_file.ErrorMessage[0].error != undefined) {
                                            toastrshow("warning", respon_file.ErrorMessage[0].error, "Peringatan");
                                        } else {
                                            toastrshow("warning", respon_file.ErrorMessage, "Peringatan");
                                        }
                                    } else {
                                        selector_td.find(".foto_hidden").val(respon_file.Output);
                                        selector_td.find(".detail-foto, .hapus-foto").removeClass("d-none");
                                        selector_td.find(".foto").addClass("d-none");
                                        selector_td.find(".loading-foto").addClass("d-none");
                                        selector_td.find(".btn-unggah").removeClass("disabled").removeAttr("disabled");
                                    }
                                },
                                error: function(xhr, textstatus, errorthrown) {
                                    toastrshow("warning", "Periksa koneksi internet anda kembali", "Peringatan");
                                    selector_td.find(".hapus-foto").click();
                                    selector_td.find(".loading-foto").addClass("d-none");
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
            $("#modal-tambah-properti-kelola-dana").on("click", ".hapus-foto", function() {
                $(this).parent().parent().find(".foto_hidden").val("");
                $(this).parent().parent().find(".detail-foto, .hapus-foto").addClass("d-none");
                $(this).parent().parent().find(".foto").val("").trigger("change");
                $(this).parent().parent().find(".foto").removeClass("d-none");
            });
            $("#modal-tambah-properti-kelola-dana").on("click", ".detail-foto", function() {
                window.open(cdn_url+"/file_upload/"+$(this).parent().parent().find(".foto_hidden").val(), "", "width=800,height=400");
            });
            function SimpanTambahKelolaDana(){
                var uraian_kelola_dana = [];
                var status_start = true;
                $("#mt-repeater-tbody-deskripsi tr").each(function(index) {
                    uraian_kelola_dana.push({
                        keterangan : $(this).find(".keterangan").val(), 
                        dokumen : $(this).find(".foto_hidden").val(), 
                        jumlah : $(this).find(".jumlah").val()
                    });
                    if($(this).find(".keterangan").val() == ""){
                        toastrshow("warning", "Keterangan wajib diisi", "Peringatan");
                        status_start = false;
                        return;
                    }
                    if($(this).find(".foto_hidden").val() == ""){
                        toastrshow("warning", "Dokumen wajib diisi", "Peringatan");
                        status_start = false;
                        return;
                    }
                    if($(this).find(".jumlah").val() == ""){
                        toastrshow("warning", "Jumlah wajib diisi", "Peringatan");
                        status_start = false;
                        return;
                    }
                });
                if(status_start == false){
                    return;
                }
                $("input[name='form[uraian]']").val(JSON.stringify(uraian_kelola_dana));
                $("#FrmTambahKelolaDana").submit();
            }
            var FrmTambahKelolaDana = $("#FrmTambahKelolaDana").validate({
                submitHandler: function(form) {
                    laddasubmit = $(".ladda-button-submit");
                    InsertData(form, function(resp) {
                        window.location.href = base_url;
                    }, "", "insert_kelola_dana");
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


            $(".btn-hari").click(function(){
                $(".btn-chart").removeClass("active");
                $(this).addClass("active");
                $(".card-chart").addClass("d-none");
                $(".card-hari").removeClass("d-none");
                $(".dropdown-bulan-perhari").trigger("change");
            });
            $(".btn-minggu").click(function(){
                $(".btn-chart").removeClass("active");
                $(this).addClass("active");
                $(".card-chart").addClass("d-none");
                $(".card-minggu").removeClass("d-none");
                $(".dropdown-bulan-perminggu").trigger("change");
            });
            $(".btn-tahun").click(function(){
                $(".btn-chart").removeClass("active");
                $(this).addClass("active");
                $(".card-chart").addClass("d-none");
                $(".card-tahun").removeClass("d-none");
                $(".dropdown-tahun-pertahun").trigger("change");

            });
            setTimeout(function(){
                $(".btn-hari").click();
            }, 500);





            $(".dropdown-bulan-perhari, .dropdown-tahun-perhari").change(function(){
                total_transaksi = <?php echo json_encode($transaksi); ?>;
                var data_bulan = $(".dropdown-bulan-perhari").val();
                var data_tahun = $(".dropdown-tahun-perhari").val();
                var last_day = parseInt(moment(new Date(data_tahun, parseInt(data_bulan), 0)).format("DD"));
                var data_array = [];
                for(var x = 1; x <= last_day; x++){
                    var total_per_tanggal = 0;
                    $.each(total_transaksi, function(index, item) {
                        if(moment(item.tgl).format("DD MMM YYYY") == moment(data_tahun+"-"+data_bulan.toString().slice(-2)+"-"+x.toString().slice(-2)).format("DD MMM YYYY")){
                            total_per_tanggal += parseInt(item.nominal);
                        }
                    });
                    data_array.push({
                        "day" : x,
                        "total" : total_per_tanggal
                    });
                }
                $("#morris-line-data-hari").attr("style", "height: 0px;");
                $("#morris-line-data-hari").empty();
                $("#morris-line-data-hari").attr("style", "height: 250px;")
                $("#morris-line-data-hari").empty();
                Morris.Line({
                    element: "morris-line-data-hari",
                    data: data_array,
                    lineColors: ["#4680ff"],
                    xkey: "day",
                    pointSize: 5,
                    parseTime: false,
                    ykeys: ["total"],
                    labels: ["Total"],
                    xLabels: "year",
                    resize: true,
                    xLabelMargin: -150,
                    hoverCallback: function(index, options, content) {
                        var data = options.data[index];
                        return "<div class='morris-hover-row-label'>"+data.day+"</div><div class='morris-hover-point' style='color: #4680ff'>Total : "+rupiah(data.total)+"</div>";
                    }
                });
                $(".loading-div-data-hari").addClass("d-none");
            });
            $(".dropdown-bulan-perminggu, .dropdown-tahun-perminggu").change(function(){
                total_transaksi = <?php echo json_encode($transaksi); ?>;
                var data_bulan = $(".dropdown-bulan-perminggu").val();
                var data_tahun = $(".dropdown-tahun-perminggu").val();
                var last_day = parseInt(moment(new Date(data_tahun, parseInt(data_bulan), 0)).format("DD"));
                var total_minggu = Math.ceil(last_day/7);
                var data_array = [];

                for(var x = 1; x <= total_minggu; x++){
                    var total_per_minggu = 0;
                    $.each(total_transaksi, function(index, item) {
                        if(moment(item.tgl).valueOf() >= moment(data_tahun+"-"+data_bulan.toString().slice(-2)+"-"+((7*x)-6).toString().slice(-2)).valueOf() && moment(item.tgl).valueOf() <= moment(data_tahun+"-"+data_bulan.toString().slice(-2)+"-"+(7*x).toString().slice(-2)).valueOf() && moment(item.tgl).valueOf() <= moment(data_tahun+"-"+data_bulan.toString().slice(-2)+"-"+last_day.toString().slice(-2)).valueOf()){
                            total_per_minggu += parseInt(item.nominal);
                        }
                    });
                    if(x <= 4){
                        data_array.push({
                            "day" : "Minggu ke-"+x,
                            "total" : total_per_minggu,
                            "date_label" : moment(data_tahun+"-"+data_bulan.toString().slice(-2)+"-"+((7*x)-6).toString().slice(-2)).format("DD MMM YYYY") + " - " + moment(data_tahun+"-"+data_bulan.toString().slice(-2)+"-"+(7*x).toString().slice(-2)).format("DD MMM YYYY")
                        });
                    } else {
                        data_array.push({
                            "day" : "Minggu ke-"+x,
                            "total" : total_per_minggu,
                            "date_label" : moment(data_tahun+"-"+data_bulan.toString().slice(-2)+"-"+((7*x)-6).toString().slice(-2)).format("DD MMM YYYY") + " - " + moment(new Date(data_tahun, parseInt(data_bulan), 0)).format("DD MMM YYYY")
                        });
                    }
                }
                $("#morris-line-data-minggu").attr("style", "height: 0px;");
                $("#morris-line-data-minggu").empty();
                $("#morris-line-data-minggu").attr("style", "height: 250px;")
                $("#morris-line-data-minggu").empty();
                Morris.Line({
                    element: "morris-line-data-minggu",
                    data: data_array,
                    lineColors: ["#4680ff"],
                    xkey: "day",
                    pointSize: 5,
                    parseTime: false,
                    ykeys: ["total"],
                    labels: ["Total"],
                    xLabels: "year",
                    resize: true,
                    xLabelMargin: -150,
                    hoverCallback: function(index, options, content) {
                        var data = options.data[index];
                        return "<div class='morris-hover-row-label'>"+data.day+"</div><div class='morris-hover-point' style='color: grey'>"+data.date_label+"</div><div class='morris-hover-point' style='color: #4680ff'>Total : "+rupiah(data.total)+"</div>";
                    }
                });
                $(".loading-div-data-minggu").addClass("d-none");
            });
            $(".dropdown-tahun-pertahun").change(function(){
                total_transaksi = <?php echo json_encode($transaksi); ?>;
                var data_tahun = $(".dropdown-tahun-pertahun").val();
                var total_bulan = 12;
                var data_array = [];

                for(var x = 1; x <= total_bulan; x++){
                    var last_day_per_bulan = parseInt(moment(new Date(data_tahun, x, 0)).format("DD"));
                    var total_per_bulan = 0;
                    $.each(total_transaksi, function(index, item) {
                        if(moment(item.tgl).valueOf() >= moment(data_tahun+"-"+(x).toString().slice(-2)+"-01").valueOf() && moment(item.tgl).valueOf() <= moment(data_tahun+"-"+(x).toString().slice(-2)+"-"+(last_day_per_bulan).toString().slice(-2)).valueOf()){
                            total_per_bulan += parseInt(item.nominal);
                            /*total_transaksi = total_transaksi.filter(function(elem) {  
                                return elem.id !== item.id; 
                            });
                            console.log(total_transaksi);*/
                        }
                    });
                    data_array.push({
                        "day" : moment(new Date(data_tahun, parseInt(x), 0)).format("MMM"),
                        "total" : total_per_bulan
                    });
                    $("#morris-line-data-tahun").attr("style", "height: 0px;");
                    $("#morris-line-data-tahun").empty();
                    $("#morris-line-data-tahun").attr("style", "height: 250px;")
                    $("#morris-line-data-tahun").empty();
                    Morris.Line({
                        element: "morris-line-data-tahun",
                        data: data_array,
                        lineColors: ["#4680ff"],
                        xkey: "day",
                        pointSize: 5,
                        parseTime: false,
                        ykeys: ["total"],
                        labels: ["Total"],
                        xLabels: "year",
                        resize: true,
                        xLabelMargin: -150,
                        hoverCallback: function(index, options, content) {
                            var data = options.data[index];
                            return "<div class='morris-hover-row-label'>"+data.day+"</div><div class='morris-hover-point' style='color: #4680ff'>Total : "+rupiah(data.total)+"</div>";
                        }
                    });
                    $(".loading-div-data-tahun").addClass("d-none");
                }
            });
        </script>
    </body>
</html>