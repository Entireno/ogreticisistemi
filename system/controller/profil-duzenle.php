<?php
if(!isset($_SESSION['ogroturum'])){
    header("Location:index");
    exit();
}
$id=$_SESSION['id'];
$ogrenci= $crud->sec('*','ogrenci',"Where id='$id'");
chmod('./public/img/ogrenci/', 0755);
if(isset($_POST['submit'])){
    array_map('filtrele',$_POST);
    $ad=$_POST['ad'];
    $soyad=$_POST['soyad'];
    $k_ad=$_POST['k_ad'];
    $eposta=$_POST['eposta'];
    $hakkimda=$_POST['hakkimda'];
    $twitter=$_POST['twitter'];
    $facebook=$_POST['facebook'];
    $instagram=$_POST['instagram'];



    $maks_boyut=2097152;
    $foto_dosya_uzantisi=substr($_FILES["resim"]["name"],-4,4);
    $foto_dosya_adi =$id.$foto_dosya_uzantisi;
    $foto_dosya_yolu ='./public/img/ogrenci/';
    $foto_dosya_type=$_FILES["resim"]["type"];

    if ($_FILES["resim"]["size"]>$maks_boyut){
        $error='Dosya boyutu maksimum 2 MB olabilir';
    }else {
        if ($foto_dosya_type == "image/png" || "image/jpeg") {
            if (is_uploaded_file($_FILES["resim"]["tmp_name"])) {
                if (isset($foto_dosya_yolu)) {

                }
                $tasima = move_uploaded_file($_FILES["resim"]["tmp_name"], $foto_dosya_yolu.$foto_dosya_adi);

                if (!$tasima) {
                    $error='Resim kaydedilirken bir hata oluştu';
                }
            }
        }
    }

    if($_POST['ad']&&$_POST['soyad']&&$_POST['k_ad']&&$_POST['eposta']){
        if(!turkcekarakterkontrol($_POST['k_ad'])){
            $error='Kullanıcı adınız türkçe karakter içeremez';
        }
        else if(!filter_var($_POST['eposta'],FILTER_VALIDATE_EMAIL)){
            $error='Lütfen geçerli bir eposta adresini giriniz';
        }
        else  if (($crud->varmi('ogrenci',"eposta='$eposta'")) && !($eposta==$ogrenci[0]['eposta'])){
            $error='Bu epostaya ait bir kisi zaten bulunmakta';
        }

        else{
            $guncelle= $crud->guncelle('ogrenci',"ad='$ad' ,soyad='$soyad' ,k_ad='$k_ad',eposta='$eposta',hakkimda='$hakkimda',facebook='$facebook',twitter='$twitter',instagram='$instagram',resim='$foto_dosya_adi'","id=$id");
            if($guncelle){
                $success=$guncelle;
                header('Refresh:1; url=profil');
            }
        }
    }
    else{
        $error='Kırmızı alanlar dolu olmak zorundadır.';
    }
}

require view('profil-duzenle');