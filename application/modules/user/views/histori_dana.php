<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Obsido - Histori Dana</title>
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
            .shadow{
                -webkit-box-shadow: 0px 0px 5px -2px #000000; 
                box-shadow: 0px 0px 5px -2px #000000;
            }
            input.form-control{
                height: 38px;
            }
            .switch.active{
                color: #0084ff;
            }
            .box-shadow {
                -webkit-box-shadow: 0px 0px 5px -2px #000000; 
                box-shadow: 0px 0px 5px -2px #000000;
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
                            <h1 class="col-12 bold text-center mt-2">Histori Dana</h1>
                            <div class="container-fluid" id="grad1">
                                <div class="row justify-content-center mt-0">
                                    <div class="col-12 p-3 mt-3 mb-2">
                                        <div class="card px-0 p-4 pb-0 mt-3 mb-3 shadow">
                                            <div class="row ml-3 mr-3 div-list-dana">
                                                <div class="col-12 box-shadow rounded pt-3 pb-3 pl-4 pr-4">
                                                    <div class="row">
                                                        <div class="col-12"><center><img class="loading-gif-image" src="<?php echo base_url("assets/images/loading-data.gif") ?>" alt="Loading ..."></center></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12 text-center">
                                                    <a class="btn btn-primary text-white bold mt-3 mb-3 btn-lihat-lebih-banyak-dana d-none">Lihat lebih banyak</a>
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
        <?php $this->load->view("penerbit/modal/dana"); ?>
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
        <script>
            var array_id_dana = [];
            var request_dana  = {"filter": {"kywd": ""}};
            request_dana["Sort"] = "created_at desc";
            request_dana["filter"]["kywd"] = "";
            $.ajax({
                type: "POST",
                url: base_url + "/penerbit/ajax_penerbit",
                data: {act:"listdatahtml_dana", req:request_dana},
                dataType: "JSON",
                tryCount: 0,
                retryLimit: 3,
                success: function(resp){
                    array_id_dana = resp.array_id;
                    if(resp.paging.IsNext == true){
                        $(".btn-lihat-lebih-banyak-dana").removeClass("d-none");
                    } else {
                        $(".btn-lihat-lebih-banyak-dana").addClass("d-none");
                    }
                    $(".div-list-dana").html(resp.lsdt);
                },
                error: function(xhr, textstatus, errorthrown) {
                    $(".div-list-dana").html("<div class='col-12 box-shadow rounded pt-3 pb-3 pl-4 pr-4'><div class='row'><div class='col-12 text-center'><span class='badge badge-pill badge-warning'>Check your internet connection again</span></div></div></div>");
                }
            });

            $(".btn-lihat-lebih-banyak-dana").click(function(){
                $(".btn-lihat-lebih-banyak-dana").addClass("disabled")
                var request_dana  = {"filter": {"kywd": ""}};
                request_dana["Sort"] = "created_at desc";
                request_dana["filter"]["kywd"] = "";
                request_dana["filter"]["array_id"] = array_id_dana;
                $.ajax({
                    type: "POST",
                    url: base_url + "/penerbit/ajax_penerbit",
                    data: {act:"listdatahtml_dana", req:request_dana},
                    dataType: "JSON",
                    tryCount: 0,
                    retryLimit: 3,
                    success: function(resp){
                        array_id_dana = resp.array_id;
                        if(resp.paging.IsNext == true){
                            $(".btn-lihat-lebih-banyak-dana").removeClass("d-none");
                        } else {
                            $(".btn-lihat-lebih-banyak-dana").addClass("d-none");
                        }
                        $(".div-list-dana").append(resp.lsdt);
                        $(".btn-lihat-lebih-banyak-dana").removeClass("disabled");
                    },
                    error: function(xhr, textstatus, errorthrown) {
                        $(".btn-lihat-lebih-banyak-dana").removeClass("disabled");
                    }
                });
            });

            function DetailDana(data){
                var html_data = "";
                var total_data = 0;
                $.each(data, function(index, item) {
                    var dokumen = "";
                    total_data += parseInt(item.jumlah.replace(/\./g,""));
                    if(item.dokumen == "" || item.dokumen == null){
                        
                    } else {
                        dokumen = "<a target='_blank' href='"+cdn_url+"/file_upload/"+item.dokumen+"' class='btn btn-sm btn-primary'>Lihat</a>";
                    }
                    html_data += "<tr><td>"+item.keterangan+"</td><td class='text-center'>"+dokumen+"</td><td class='text-right'>Rp"+item.jumlah+"</td></tr>";
                });
                $("#modal-dana").find("tbody").html(html_data);
                $("#modal-dana").find(".total").html("Rp" + rupiah(total_data));
                $("#modal-dana").modal("show");
            }
        </script>
    </body>
</html>