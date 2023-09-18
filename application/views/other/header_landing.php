<?php
    // $nomor_rekening_bank = "";
    if($this->session->userdata("user")){
        // $nomor_rekening_bank = $this->session->userdata("user")->nomor_rekening_bank;
    }
?>
<nav class="navbar navbar-expand-md navbar-light bg-light fixed-top" style="box-shadow: 0 2px 3px 0 rgb(96 96 96 / 10%);">
    <div class="container container-s container-custom">
        <a class="navbar-brand" href="<?php echo base_url(); ?>" style="position: absolute;">
            <img src="<?php echo base_url("assets/images/logo.png"); ?>" style="max-height: 60px;">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto navbar-right">
                <?php 
                    if($this->session->userdata("user")){
                ?>
                    <?php if(($this->session->userdata("user")->status_verify == 0 || $this->session->userdata("user")->status_verify == 2) && $this->session->userdata("user")->status_verify_send == 0) { ?>

                    <li class="nav-item"><a class="nav-link js-scroll-trigger bold text-white" style="border: 2px solid #0084FF; border-radius: 8px; background: #0084FF;" href="<?php echo base_url("/user/verifikasi_penerbit.html"); ?>">Verifikasi</a></li>
                    
                    <?php } ?>
                <li class="nav-item"><a class="nav-link js-scroll-trigger bold text-primary btn-custom-padding">&nbsp;</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger bold text-primary btn-custom-padding" href="<?php echo base_url(); ?>">Beranda</a></li>
                <!-- <li class="nav-item"><a class="nav-link js-scroll-trigger bold text-primary btn-custom-padding" href="<?php echo $this->config->item("home_url")."/faq.html" ?>">FAQs</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger bold text-primary btn-custom-padding" href="<?php echo $this->config->item("home_url")."/daftar_penerbit.html" ?>">Daftar Penerbit</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger bold text-primary btn-custom-padding" href="<?php echo $this->config->item("home_url")."/hubungi_kami.html" ?>">Hubungi Kami</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle js-scroll-trigger bold text-primary" style="border: 2px solid #0084FF; border-radius: 8px;" href="#" data-toggle="dropdown">Tentang Kami</a>
                    <ul class="dropdown-menu dropdown-menu-right">
                        <li><a class="dropdown-item text-primary" href="<?php echo $this->config->item("home_url")."/syarat_dan_ketentuan.html" ?>"> Syarat dan Ketentuan</a></li>
                        <li><a class="dropdown-item text-primary" href="<?php echo $this->config->item("home_url")."/kebijakan_dan_privasi.html" ?>"> Kebijakan dan Privasi</a></li>
                        <li><a class="dropdown-item text-primary" href="<?php echo $this->config->item("home_url")."/tentang_kami.html" ?>"> Tim Obsido</a></li>
                        <li><a class="dropdown-item text-primary" href="<?php echo $this->config->item("home_url")."/risiko.html" ?>"> Risiko</a></li>
                    </ul>
                </li> -->
                <?php if($this->session->userdata("user")->status_verify == 1) { ?>
                <!-- <li class="nav-item"><a class="nav-link js-scroll-trigger bold text-primary btn-custom-padding pb-0 btn-topup" href="#"><i class="las la-wallet" style="font-size: 32px; line-height: 12px;"></i></a></li> -->
                <?php } ?>
                <li class="nav-item"><a class="nav-link js-scroll-trigger bold text-primary btn-custom-padding pb-0" href="#"><i class="las la-bell" style="font-size: 32px; line-height: 12px;"></i></a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle js-scroll-trigger bold text-primary" style="border: 2px solid #0084FF; border-radius: 8px;" href="#" data-toggle="dropdown"><?php echo $this->session->userdata("user")->nama_perusahaan; ?></a>
                    <ul class="dropdown-menu dropdown-menu-right" style="left: auto; right: 0px;">
                        <!-- <li><a class="dropdown-item text-primary" href="<?php echo $this->config->item("home_url")."/portofolio.html" ?>"> Portofolio</a></li>
                        <li><a class="dropdown-item text-primary" href="<?php echo $this->config->item("home_url")."/daftar_keinginan.html" ?>"> Daftar Keinginan</a></li>
                        <li><a class="dropdown-item text-primary" href="<?php echo $this->config->item("home_url")."/histori_saldo.html" ?>"> Histori Saldo</a></li>
                        <li><a class="dropdown-item text-primary" href="<?php echo $this->config->item("home_url")."/profil_pengguna.html" ?>"> Profil Pengguna</a></li> -->
                        <li><a class="dropdown-item text-primary" href="<?php echo base_url("profil_pengguna.html") ?>"> Profil Pengguna</a></li>
                        <li><a class="dropdown-item text-primary" href="<?php echo base_url("user/histori_dana.html") ?>"> Histori Dana</a></li>
                        <li><a class="dropdown-item text-danger" href="<?php echo base_url()."/login/logout.html" ?>"> Keluar</a></li>
                    </ul>
                </li>
                <?php } else { ?>
                <li class="nav-item"><a class="nav-link js-scroll-trigger bold text-primary btn-custom-padding">&nbsp;</a></li>
                <!-- <li class="nav-item"><a class="nav-link js-scroll-trigger bold text-primary btn-custom-padding" href="<?php echo $this->config->item("home_url")."/faq.html" ?>">FAQs</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger bold text-primary btn-custom-padding" href="<?php echo $this->config->item("home_url")."/daftar_penerbit.html" ?>">Daftar Penerbit</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger bold text-primary btn-custom-padding" href="<?php echo $this->config->item("home_url")."/hubungi_kami.html" ?>">Hubungi Kami</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle js-scroll-trigger bold text-primary" style="border: 2px solid #0084FF; border-radius: 8px;" href="#" data-toggle="dropdown">Tentang Kami</a>
                    <ul class="dropdown-menu dropdown-menu-right">
                        <li><a class="dropdown-item text-primary" href="<?php echo $this->config->item("home_url")."/syarat_dan_ketentuan.html" ?>"> Syarat dan Ketentuan</a></li>
                        <li><a class="dropdown-item text-primary" href="<?php echo $this->config->item("home_url")."/kebijakan_dan_privasi.html" ?>"> Kebijakan dan Privasi</a></li>
                        <li><a class="dropdown-item text-primary" href="<?php echo $this->config->item("home_url")."/tentang_kami.html" ?>"> Tim Obsido</a></li>
                        <li><a class="dropdown-item text-primary" href="<?php echo $this->config->item("home_url")."/risiko.html" ?>"> Risiko</a></li>
                    </ul>
                </li> -->
                <!-- <li class="nav-item"><a class="nav-link js-scroll-trigger bold text-primary btn-login" style="border: 2px solid #0084FF; border-radius: 8px;" href="#">Masuk</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger bold text-white btn-signup" style="border: 2px solid #0084FF; border-radius: 8px; background: #0084FF;" href="#">Daftar</a></li> -->
                <?php } ?>
            </ul>
        </div>
    </div>
</nav>