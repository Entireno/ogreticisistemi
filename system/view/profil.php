<?php require view('fix/header')?>
<?php require view('fix/sidebar')?>
<?php require view('fix/navbar')?>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-profile">
                        <div class="card-avatar">
                            <a>
                                <img class="img" src="<?php if ($sonuc[0]['resim']){ echo public_url('img/ogrenci/').$sonuc[0]['resim'].'.jpg';}else {echo public_url('img/ogrenci/ogrenci.jpg');}?>"> />
                            </a>
                        </div>
                        <div class="card-body">
                            <h6 class="card-category">Yazılım Mühendisi</h6>
                            <h4 class="card-title"><?=$sonuc[0]['ad'].''.$sonuc[0]['soyad']?></h4>
                            <p class="card-description">
                                <?=$sonuc[0]['hakkimda']?>
                            </p>
                            <a href="<?php if ($sonuc[0]['facebook']){ echo 'http://www.facebook.com/'.$sonuc[0]['facebook'];}else {echo '#';}?>" target="_blank" class="btn btn-round btn-info fa fa-facebook"></a>
                            <a href="<?php if ($sonuc[0]['twitter']){ echo 'http://www.twitter.com/'.$sonuc[0]['twitter'];}else {echo '#';}?>"  target="_blank" class="btn btn-round btn-info fa fa-twitter"></a>
                            <a href="<?php if ($sonuc[0]['instagram']){ echo 'http://www.instagram.com/'.$sonuc[0]['instagram'];}else {echo '#';}?>" target="_blank" class="btn btn-round btn-info fa fa-instagram"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-12">
                    <div class="card card-chart">
                        <a>
                            <div class="card-header card-header-success">
                                <div class="ct-chart" id="dailySalesChart">
                                    Puan
                                </div>
                            </div>
                        </a>
                        <div class="card-body">
                            <h4 class="card-title"><?=$puan[0]['puan']?></h4>

                        </div>
                        <div class="card-footer"></div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-12">
                    <div class="card card-chart">
                        <a>
                            <div class="card-header card-header-info">
                                <div class="ct-chart" id="dailySalesChart">
                                    Genel Başarı Oranı
                                </div>
                            </div>
                        </a>
                        <div class="card-body">
                            <h4 class="card-title">Toplam <?=$ogr_say[0]['ogrenci']?>  Öğrenciden</h4>
                            <p class="card-category">
                                <span class="text-success">
                                    <?=$sayac?>. Sırada
                                </span>
                            </p>
                        </div>
                        <div class="card-footer"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <a href="profil-duzenle" class="btn btn-block btn-success">Profili Düzenle</a>
                </div>
            </div>
        </div>
    </div>
<?php require view('fix/footer')?>