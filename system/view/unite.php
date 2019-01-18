<?php require view('fix/header')?>
<?php require view('fix/sidebar')?>
<?php require view('fix/navbar')?>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <?php if($sonuc){ ?>
                <?php foreach ($sonuc as $ders):?>
                <?php $id=$ders['konu_id']?>
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header card-header-warning card-header-icon">
                            <div class="card-icon">
                                <i class="material-icons"></i>
                            </div>
                            <h3 class="card-title"><?=$ders['konu_basligi']?></h3>
                        </div>
                        <div class="card-footer">
                            <div class="stats">
                                <a href="<?=trim(site_url('dersizle').'/?sayfa='.$ders['konu_id'])?>"><i class="fa fa-arrow-right" style="color:whitesmoke;"> Konuya Git</i></a>
                            </div>
                        </div>
                    </div>
                </div>
          <? endforeach;?>
    <?php }else{ ?>
        <div class="col-12"> <h3 style="color:lawngreen;">Üniteye ait konu bulunmamaktadır.</h3><</div>
                <?php }?>



            </div>
        </div>
    </div>
<?php require view('fix/footer')?>