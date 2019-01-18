<?php require adminview("fix/header");?>
<?php require adminview("fix/sidebar");?>
<?php require adminview("fix/navbar");?>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-info">
                            <h4 class="card-title">Yeni Konu Ekleme</h4>
                        </div>
                        <div class="card-body">
                            <form action="" method="post">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Konunun Ekleneceği Ünite</label>
                                            <select name="unite" class="bootstrap-select custom-select"
                                                    style="color: white; border-color: #444444; background-color: #202940;">
                                                <?php
                                                $liste = $crud->sec('*', 'uniteler');
                                                if ($liste) {
                                                    foreach ($liste as $uniteler) {
                                                        ?>
                                                        <option value="<?= $uniteler['unite_id'] ?>"><?= $uniteler['unite_adi']?></option>
                                                        <?php
                                                    }
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Konu Başlığı</label>
                                            <input name="konu_basligi" type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Konu İçeriği</label>
                                            <div class="form-group">
                                                <textarea name="konu_icerigi" class="form-control" rows="5"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Video Linki</label>
                                            <input name="video_linki" type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" name="konu_ekle" class="btn btn-info pull-right">KONU EKLE</button>
                                <div class="clearfix"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 text-center">
                <div class="form-group text-center">
                    <label class="bmd-label-floating text-center"
                           style="color: red;"><?php echo @$kontrol; ?></label>
                </div>
            </div>
        </div>
    </div>
<?php require adminview("fix/footer");?>