<?php require adminview("fix/header"); ?>
<?php require adminview("fix/sidebar"); ?>
<?php require adminview("fix/navbar"); ?>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-info">
                            <h4 class="card-title">Yeni Ünite Ekle</h4>
                        </div>
                        <div class="card-body">
                            <form action="" method="post">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Ünite Adı</label>
                                            <input type="text" name="unite_adi" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Ünite Baslığı</label>
                                            <input type="text" name="unite_basligi" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" name="unite_ekle" class="btn btn-info pull-right">ÜNİTEYİ EKLE
                                </button>
                                <div class="clearfix"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 text-center">
                <div class="form-group text-center">
                    <label class="bmd-label-floating text-center"
                           style="color: red;"><?php echo @$unite_kontrol; ?></label>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-info">
                            <h4 class="card-title">Üniteyi Kaldır</h4>
                        </div>
                        <div class="card-body">
                            <form action="" method="post">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <select name="silinecek_unite" class="bootstrap-select custom-select"
                                                    style="color: white; border-color: #444444; background-color: #202940;">

                                                <?php
                                                $liste = $crud->sec('*', 'uniteler');
                                                if ($liste) {
                                                    foreach ($liste as $uniteler) {
                                                        ?>
                                                        <option value="<?= $uniteler['unite_id'] ?>"><?= $uniteler['unite_adi'] ?></option>
                                                        <?php
                                                    }
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" name="unite_sil" class="btn btn-info pull-right">ÜNİTEYİ SİL
                                </button>
                                <div class="clearfix"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 text-center">
                <div class="form-group text-center">
                    <label class="bmd-label-floating text-center"
                           style="color: red;"><?php echo @$unite_kontrol2; ?></label>
                </div>
            </div>
        </div>
    </div>
<?php require adminview("fix/footer"); ?>