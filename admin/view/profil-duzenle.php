<?php require adminview("fix/header");?>
<?php require adminview("fix/sidebar");?>
<?php require adminview("fix/navbar");?>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-info">
                            <h4 class="card-title">Profili Düzenle</h4>
                        </div>
                        <div class="card-body">
                            <form method="post" action="" enctype="multipart/form-data" >
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Kullanıcı Adı   <span style="color: red;">*</span></label>
                                            <input name="k_ad" value="<?=$yonetici[0]['k_ad']?>" type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">E-posta Adresi   <span style="color: red;">*</span></label>
                                            <input name="eposta" value="<?=$yonetici[0]['email']?>" type="email" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Ad   <span style="color: red;">*</span></label>
                                            <input name="ad" value="<?=$yonetici[0]['ad']?>"  type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">

                                        <div class="form-group">
                                            <label class="bmd-label-floating">Soyad   <span style="color: red;">*</span></label>
                                            <input name="soyad" value="<?=$yonetici[0]['soyad']?>"  type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Hakkımda</label>
                                            <div class="form-group">
                                                <textarea name="hakkimda" placeholder="<?=$yonetici[0]['hakkimda']?>" class="form-control" rows="5" ></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <label>Profil Resmi</label><br>
                                        <input name="resim" type="file">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Facebook</label>
                                            <input name="facebook" value="<?=$yonetici[0]['facebook']?>"  type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Twitter</label>
                                            <input name="twitter" value="<?=$yonetici[0]['twitter']?>"  type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Instagram</label>
                                            <input name="instagram" value="<?=$yonetici[0]['instagram']?>"  type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" name="submit" class="btn btn-primary pull-right">Profili Güncelle</button>
                                <div class="clearfix"></div>
                            </form>
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
            </div>
        </div>
    </div>
<?php require adminview("fix/footer");?>