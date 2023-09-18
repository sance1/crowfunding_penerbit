<?php
    $latitude_longitude = explode(", ", $properti->latitude_longitude, 2);
    $persen_terkumpul = round($properti->total_saham_terkumpul/$properti->total_per_lembar*100);
    if(!empty($this->session->userdata("user"))) {
        if(empty($bookmark)){
            $btn_bookmark = "<a class='add-bookmark' data-id='".$properti->id."'><i class='far fa-star' style='font-size: 14px;'></i> Tandai</a>";
        } else {
            if($bookmark->status_delete == 0){
                $btn_bookmark = "<a class='add-bookmark' data-id='".$properti->id."'><i class='fas fa-star' style='font-size: 14px;'></i> Tandai</a>";
            } else {
                $btn_bookmark = "<a class='add-bookmark' data-id='".$properti->id."'><i class='far fa-star' style='font-size: 14px;'></i> Tandai</a>";
            }
        }
    } else {
        $btn_bookmark = "<a class='btn-login'><i class='far fa-star' style='font-size: 14px;'></i> Tandai</a>";
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Obsido</title>
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
            <?php $this->load->view("other/header_landing"); ?>
            <div id="main" class="main">
                <div class="home">
                    <div class="container">
                        <div class="row row-resize-item pt-5 pb-3 font-default text-primary">
                            <div class="col-12">
                                <label class="bold mb-2" style="font-size: 24px;"><?php echo $properti->nama ?></label><br>
                                <label><?php echo $properti->alamat ?></label>
                            </div>
                        </div>
                        <div class="row font-default text-primary">
                            <div class="col-lg-7">
                                <div id="foto-slider" class="carousel slide" data-ride="carousel">
                                    <ul class="carousel-indicators">
                                        <?php
                                            foreach(json_decode($properti->foto) as $key => $item) {
                                                if($key == 0){
                                                    echo "<li data-target='#foto-slider' data-slide-to='".$key."' class='active'></li>";
                                                } else {
                                                    echo "<li data-target='#foto-slider' data-slide-to='".$key."'></li>";
                                                }
                                            }
                                        ?>
                                    </ul>
                                    <div class="carousel-inner">
                                        <?php
                                            foreach(json_decode($properti->foto) as $key => $item) {
                                                if($key == 0){
                                                    echo "<div class='carousel-item active'>
                                                                <img src='".$this->config->item("cdn_url")."/".$item."' style='width: 100%;'/>
                                                            </div>";
                                                } else {
                                                    echo "<div class='carousel-item'>
                                                                <img src='".$this->config->item("cdn_url")."/".$item."' style='width: 100%;'/>
                                                            </div>";
                                                }
                                            }
                                        ?>
                                    </div>
                                    <a class="carousel-control-prev" href="#foto-slider" data-slide="prev">
                                        <span class="carousel-control-prev-icon"></span>
                                    </a>
                                    <a class="carousel-control-next" href="#foto-slider" data-slide="next">
                                        <span class="carousel-control-next-icon"></span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-5 div-detail-properti">
                                <a onclick="window.print();"><i class="las la-print" style="font-size: 20px;"></i> Cetak</a>&nbsp;
                                <a><i class="las la-share" style="font-size: 20px;"></i> Bagikan</a>&nbsp;
                                <?php echo $btn_bookmark; ?>&nbsp;
                                <label><i class="las la-eye" style="font-size: 20px;"></i> <?php echo $properti->total_view ?> dilihat</label><br><br>
                                <label class="bold mb-2" style="font-size: 24px;">Peluang Investasi</label><br>
                                <div class="row">
                                    <div class="col-12 mb-4 text-left bold text-primary font-default font-custom-14">
                                        Terkumpul <?php echo $persen_terkumpul; ?>% dari <?php echo $properti->total_investor; ?> investor
                                        <div class="progress mt-1">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $persen_terkumpul; ?>" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $persen_terkumpul; ?>%">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <label class="bold mb-2">Durasi Project</label><br>
                                <label><i class="las la-calendar" style="font-size: 20px;"></i> Mulai <?php echo date("d M Y", strtotime($properti->tgl_mulai)) ?></label>&nbsp;&nbsp;&nbsp;&nbsp;
                                <label><i class="las la-calendar-check" style="font-size: 20px;"></i> Selesai <?php echo date("d M Y", strtotime($properti->tgl_selesai)) ?></label><br><br>
                                <table style="width: 100%;">
                                    <tr>
                                        <td style="width: 50%;">Jumlah Dana</td>
                                        <td style="width: 50%;" class="text-right bold"><?php echo $this->foglobal->rupiah($properti->jumlah_dana, true) ?></td>
                                    </tr>
                                    <tr>
                                        <td style="width: 50%;">Harga Per Lembar</td>
                                        <td style="width: 50%;" class="text-right bold"><?php echo $this->foglobal->rupiah($properti->harga_per_lembar, true) ?></td>
                                    </tr>
                                    <tr>
                                        <td style="width: 50%;">Total Saham</td>
                                        <td style="width: 50%;" class="text-right bold"><?php echo $this->foglobal->rupiah($properti->total_per_lembar) ?></td>
                                    </tr>
                                    <tr>
                                        <td style="width: 50%;">ROI</td>
                                        <td style="width: 50%;" class="text-right bold"><?php echo $this->foglobal->persen($properti->roi) ?>%</td>
                                    </tr>
                                    <tr>
                                        <td style="width: 50%;">Periode Dividen</td>
                                        <td style="width: 50%;" class="text-right bold"><?php echo $properti->dividen_period; ?></td>
                                    </tr>
                                </table>
                                <a class="btn btn-block btn-primary text-white bold mt-3 <?php if($this->session->userdata("user")){ echo "btn-investasi"; } ?>">Investasi</a>
                            </div>
                            <div class="col-lg-12 mt-2">
                                <ul class="nav nav-tabs font-default bold text-center" role="tablist">
                                    <li class="nav-item nav-login">
                                        <a class="nav-link p-3 active" href="#tab-deskripsi" role="tab" data-toggle="tab">Deskripsi</a>
                                    </li>
                                    <li class="nav-item nav-laporan-dokumen">
                                        <a class="nav-link p-3" href="#tab-laporan-dokumen" role="tab" data-toggle="tab">Laporan Dokumen</a>
                                    </li>
                                    <li class="nav-item nav-laporan-dokumen">
                                        <a class="nav-link p-3" href="#tab-progres" role="tab" data-toggle="tab">Progres</a>
                                    </li>
                                    <li class="nav-item nav-laporan-dokumen">
                                        <a class="nav-link p-3" href="#tab-lihat-peta" role="tab" data-toggle="tab">Lihat Peta</a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane fade active show pt-3" id="tab-deskripsi">
                                        <label class="text-primary bold" style="font-size: 22px;">Deskripsi - <?php echo $properti->nama ?></label>
                                        <br>
                                        <ul class="mt-3">
                                            <?php
                                                foreach(json_decode($properti->overview) as $key => $item) {
                                                    echo "<li class='mt-2'><i class='fa fa-circle' style='font-size: 13px;'></i> ".$item."</li>";
                                                }
                                            ?>
                                        </ul>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade pt-3" id="tab-laporan-dokumen">
                                        <label class="text-primary bold" style="font-size: 22px;">Laporan Dokumen - <?php echo $properti->nama ?></label>
                                        <br>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade pt-3" id="tab-progres">
                                        <label class="text-primary bold" style="font-size: 22px;">Progres - <?php echo $properti->nama ?></label>
                                        <br>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade pt-3" id="tab-lihat-peta">
                                        <div id="maps_properti" class="col-12" style="height: 80vh;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php $this->load->view("other/footer"); ?>
            </div>
        </div>
        <?php $this->load->view("properti/modal/properti_pembelian"); ?>
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
        <script type="text/javascript" src="<?php echo base_url("assets/js/proses.js?n=").$this->config->item("tahun_assets"); ?>"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBRBgpvLaa_dw83y-Q06dklBhL0UOPD6_o"></script>
        <script>
            initMap("<?php echo $latitude_longitude[0]; ?>", "<?php echo $latitude_longitude[1]; ?>");
            function initMap(location_latitude, location_longitude) {
                var map;
                var myLatLng = {lat: Number(location_latitude), lng: Number(location_longitude)};
                map = new google.maps.Map(document.getElementById("maps_properti"), {
                    center: myLatLng,
                    zoom: 16
                });
                var marker = new google.maps.Marker({
                    position: myLatLng,
                    map: map
                });
            }


            function SimpanPropertiPembelian(){
                $("#FrmPropertiPembelian").submit();
            }

            var properti_pembelian = $("#modal-properti-pembelian");
            $(".btn-investasi").click(function(){
                $("#modal-properti-pembelian").modal("show");
                properti_pembelian.find("input[name='form[id_properti]']").val("<?php echo $_GET["id"]; ?>");
                properti_pembelian.find("input[name='form[total_saham]']").val("0").attr("max", "<?php echo $properti->total_per_lembar; ?>").trigger("change");
                properti_pembelian.find(".total-pembayaran").val("0");
                var sisa_saldo = properti_pembelian.find(".sisa-saldo").val();
                sisa_saldo = parseInt(sisa_saldo.replace(/\./g, "", sisa_saldo))-parseInt("<?php echo $this->session->userdata("biaya_admin"); ?>");
                var limit_pembelian_saham = Math.floor(sisa_saldo/parseInt("<?php echo $properti->harga_per_lembar; ?>"));
                if(limit_pembelian_saham < parseInt("<?php echo $properti->total_per_lembar; ?>")){
                    properti_pembelian.find("input[name='form[total_saham]']").val("0").attr("max", limit_pembelian_saham).trigger("change");
                }
            });
            properti_pembelian.find("input[name='form[total_saham]']").change(function(){
                if($(this).val() == ""){

                } else {
                    properti_pembelian.find("input[name='form[nominal]']").val(rupiah(parseInt(properti_pembelian.find("input[name='form[total_saham]']").val())*parseInt("<?php echo $properti->harga_per_lembar; ?>")));
                    properti_pembelian.find(".total-pembayaran").val(rupiah(parseInt(properti_pembelian.find("input[name='form[total_saham]']").val())*parseInt("<?php echo $properti->harga_per_lembar; ?>")+parseInt("<?php echo $this->session->userdata("biaya_admin"); ?>")));
                }
            });
            var FrmPropertiPembelian = $("#FrmPropertiPembelian").validate({
                submitHandler: function(form) {
                    laddasubmit = properti_pembelian.find(".ladda-button-submit");
                    UpdateData(form, function(resp) {
                        window.location.href = base_url + "/portofolio.html";
                    }, "", "insert_transaksi");
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

            $(".div-detail-properti").on("click", ".add-bookmark", function() {
                var data_id = $(this).attr("data-id");
                var data_element = $(this);
                $.ajax({
                    type: "POST",
                    url: base_url + "/pemodal/ajax_pemodal",
                    data: {act:"insert_bookmark", req:data_id},
                    dataType: "JSON",
                    tryCount: 0,
                    retryLimit: 3,
                    beforeSend: function() {
                        data_element.html("<i class='fa fa-spin fa-sync-alt' style='font-size: 14px;'></i> Tandai");
                    },
                    success: function(resp){
                        if(resp == 1){
                            data_element.html("<i class='fas fa-star' style='font-size: 14px;'></i> Tandai");
                        } else {
                            data_element.html("<i class='far fa-star' style='font-size: 14px;'></i> Tandai");
                        }
                    },
                    error: function(xhr, textstatus, errorthrown) {
                        toastrshow("warning", "Periksa koneksi internet anda kembali", "Warning");
                    }
                });
            });
        </script>
    </body>
</html>
