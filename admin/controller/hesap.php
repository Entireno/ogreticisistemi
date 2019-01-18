<?php
if(!isset($_SESSION['oturum'])){
    header("Location:index");
    exit();
}
if(isset($_POST['guncelle'])){
    array_map('filtrele',$_POST);

    $eski_sifre = md5($_POST['eski_sifre']);
    $yeni_sifre = md5($_POST['yeni_sifre']);
    $yeni_sifre_tekrar = md5($_POST['yeni_sifre_tekrar']);

    $kullanici_id = $_SESSION['id'];

    if($yeni_sifre != $yeni_sifre_tekrar){
        $error = 'Yeni Şifreler Birbiriyle Uyuşmuyor';
    }else{
        $sifre_kontrol = $crud->sec('sifre','yonetici',"WHERE id=$kullanici_id");
        if($sifre_kontrol[0]['sifre'] != $eski_sifre){
            $error = 'Eski Şifrenizi Hatalı Girdiniz';
        }else{
            $guncelle = $crud->guncelle('yonetici',"sifre='$yeni_sifre'","id=$kullanici_id");
            if($guncelle){
                $success= 'Şifreniz Başarıyla Değiştirilmiştir';
                der('Refresh:1; url=anasayfa');
            }
        }
    }
}
require  adminview('hesap');