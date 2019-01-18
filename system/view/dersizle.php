<?php require view('fix/header')?>
<?php require view('fix/sidebar')?>
<div class="sidebar" data-color="azure" data-background-color="black" data-image="assets/img/sidebar-2.jpg">
    <div class="logo">
        <a href="#" class="simple-text logo-normal">
            <?=$sonuc[0]['konu_basligi']?>
        </a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="nav-item active  ">
                <div class="container" style="color:white; font-size: small;">
                    <?=$sonuc[0]['konu_icerigi']?>
                </div>
            </li>
            <!-- your sidebar here -->
        </ul>
    </div>
</div>
<div class="main-panel">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
            <div class="navbar-wrapper">
                <a class="navbar-brand" href="javascript:void(0)">Konu Anlatımı</a>
            </div>
            <div class="collapse navbar-collapse justify-content-end">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="<?=site_url('profil')?>">
                            <i class="fa fa-user"></i> Profil
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?=site_url('dersler')?>">
                            <i class="fa fa-home"></i> Üniteler
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?=site_url('cikis')?>">
                            <i class="fa fa-close"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->
    <div class="content">
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-1">

                    </div>
                    <div class="col-10">
                        <?=$sonuc[0]['video_linki']?>
                    </div>
                    <div class="col-1">

                    </div>
                    <div class="col-12  row text-center " >
                        <div class="col-6" style="margin-top: 20px;">
                            <a href="<?php if($geri){echo site_url('dersizle/?sayfa=').$geri ;}?>"><i class="fa fa-arrow-circle-left fa-3x"></i></a>
                        </div>
                        <div class="col-6" style="margin-top: 20px;">
                            <a href="<?php if($ileri){echo site_url('dersizle/?sayfa=').$ileri ;}?>"><i class="fa fa-arrow-circle-right fa-3x"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php require view('fix/footer')?>