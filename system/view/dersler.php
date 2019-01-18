<?php require view('fix/header')?>
<?php require view('fix/sidebar')?>
<?php require view('fix/navbar')?>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
        <?php foreach ($sonuc as $ders):?>
            <?php $id=$ders['unite_id']?>
                <div class="col-xl-4 col-lg-12">
                    <div class="card card-chart">
                        <a href="<?=trim(site_url('unite').'/?sayfa='.$ders['unite_id'])?>">
                            <div class="card-header card-header-success">
                                <div class="ct-chart" id="dailySalesChart">
                                    <?=$ders['unite_adi']?>
                                </div>
                            </div>
                        </a>
                        <div class="card-body">
                            <h4 class="card-title"><?=$ders['Baslik']?></h4>

                        </div>
                    </div>
                </div>
        <? endforeach;?>


            </div>
        </div>
    </div>
<?php require view('fix/footer')?>