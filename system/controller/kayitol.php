<?php
if (isset($_POST['submit'])){
    array_map('filtrele',$_POST);
    $ad=$_POST['ad'];
    $soyad=$_POST['soyad'];
    $k_ad=$_POST['k_ad'];
    $sifre=md5($_POST['sifre']);
    $eposta=$_POST['eposta'];
    $tarih = date('H:i:s', time());
    if($_POST['ad']&&$_POST['soyad']&&$_POST['k_ad']&&$_POST['sifre']&&$_POST['eposta']){
        if(!turkcekarakterkontrol($_POST['k_ad'])){
            $error='Kullanıcı adınız türkçe karakter içeremez';
        }
        else if( !turkcekarakterkontrol($_POST['sifre'])){
            $error='Şifreniz türkçe karakter içeremez';
        }
        else if(!filter_var($_POST['eposta'],FILTER_VALIDATE_EMAIL)){
            $error='Lütfen geçerli bir eposta adresini giriniz';
        }
        else  if ($crud->varmi('ogrenci',"eposta='$eposta'")){
            $error='Bu epostaya ait bir kisi zaten bulunmakta';
        }
        else {
            $sonuc = $crud->ekle('ogrenci', 'ad,soyad,eposta,k_ad,sifre,tarih', "'$ad','$soyad','$eposta','$k_ad','$sifre','$tarih'");

            if ($sonuc == 'Basarıyla Eklendi') {
                $success=$sonuc;

                header('Refresh:1; url=index');
            }else {
                $error='Sistemsel bir hata oluştu lütfen ilgili kisilere bildiriniz';
            }
        }
    }
    else{
        $error='Lütfen eksik bilgileri tamamlayınız';
    }

}
require view('kayitol');