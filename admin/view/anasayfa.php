<?php require adminview("fix/header");?>
<?php require adminview("fix/sidebar");?>
<?php require adminview("fix/navbar");?>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-6 col-lg-12 text-center">
                    <div class="card card-chart">
                        <a>
                            <div class="card-header card-header-success">
                                <div class="ct-chart">
                                    En İyi Öğrenci
                                </div>
                            </div>
                        </a>
                        <div class="card-body">
                            <h4 class="card-title"><?=$adsoyad?></h4>
                            <p class="card-category">
                                <span class="text-success">
                                </span> PUAN : <?=$eniyipuan[0]['puan']?>
                            </p>
                        </div>
                        <div class="card-footer"></div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-12 text-center">
                    <div class="card card-chart">
                        <a>
                            <div class="card-header card-header-success">
                                <div class="ct-chart" id="dailySalesChart">
                                    Toplam Kayıtlı Öğrenci Sayısı
                                </div>
                            </div>
                        </a>
                        <div class="card-body">
                            <h4 class="card-title"><?=$sonuc[0]['ogrencisay']?> Öğrenci</h4>
                            <p class="card-category">
                                <span class="text-success">
                                </span> <br>
                            </p>
                        </div>
                        <div class="card-footer"></div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">Ünite Listesi</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class=" text-primary">
                                    <th>
                                        ID
                                    </th>
                                    <th>
                                      ÜNİTE ADI
                                    </th>

                                    </thead>
                                    <tbody>
                                    <?php foreach ($unite as $ders):?>
                                    <tr>

                                        <td>
                                            <?=$ders['unite_id']?>
                                        </td>
                                        <td>
                                            <?=$ders['unite_adi']?>
                                        </td>

                                    </tr>
                                    <? endforeach;?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php require adminview("fix/footer");?>