<?php require view('fix/header')?>
<?php require view('fix/sidebar')?>
<?php require view('fix/navbar')?>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">Hesap Ayarları</h4>
                        </div>
                        <div class="card-body">
                            <form method="post" action="">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Eski Şifrenizi Giriniz</label>
                                            <input name="eski_sifre" type="password" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Yeni Şifrenizi Giriniz</label>
                                            <input name="yeni_sifre" type="password" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Yeni Şifrenizi Tekrar Giriniz</label>
                                            <input name="yeni_sifre_tekrar"  type="password" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" name="guncelle" class="btn btn-primary btn-block pull-right">Güncelle</button>
                                <div class="clearfix"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <?php if ($err= error()):?>
                <div class="col-12 text-center">
                    <h4 style="color: red;"><?=$err?></h4>
                </div>
            <?php endif; ?>
            <?php if ($succ= success()):?>
                <div class="col-12 text-center">
                    <h4 style="color: Green;"><?=$succ?></h4>
                </div>
            <?php endif; ?>
        </div>
    </div>
<?php require view('fix/footer')?>