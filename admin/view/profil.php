<?php require adminview("fix/header");?>
<?php require adminview("fix/sidebar");?>
<?php require adminview("fix/navbar");?>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-profile">
                        <div class="card-avatar">
                            <a>
                                <img class="img" src="<?=public_url('img/yonetici/').$sonuc[0]['resim'].'.jpg'?>" />
                            </a>
                        </div>
                        <div class="card-body">

                            <h4 class="card-title"><?=$sonuc[0]['ad'].' '.$sonuc[0]['soyad']?></h4>
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
                <div class="col-12">
                    <a href="profil-duzenle" class="btn btn-block btn-info">Profili Düzenle</a>
                </div>
            </div>
        </div>
    </div>
<?php require adminview("fix/footer");?>