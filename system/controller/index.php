<?php
if (isset($_POST['submit'])) {
    array_map('filtrele', $_POST);
    $k_ad = $_POST['k_ad'];
    $sifre = md5($_POST['sifre']);
    if($_POST['k_ad'] && $_POST['sifre']){
        $sonuc=$crud->sec('id,ad,soyad','ogrenci',"Where sifre='$sifre' && k_ad='$k_ad'");
        if($sonuc){
            $success='Giriş Başarılı';
            $_SESSION['ad']=$sonuc[0]['ad'];
            $_SESSION['soyad']=$sonuc[0]['soyad'];
            $_SESSION['id']=$sonuc[0]['id'];
            $_SESSION['ogroturum']=true;
            header('Refresh:1; url=profil');
        }
        else{
            $error='Kullanıcı Adı veya Şifre Hatalı';
        }

    }
    else{
        $error='Kullanıcı adı veya şifre boş olamaz';
    }
}
require view('index');


