<?php
if (!isset($_SESSION['oturum'])) {
    header("Location:index");
    exit();
}

/**ÜNİTE EKLEME POSTU*/
if (isset($_POST['unite_ekle'])) {
    array_map('filtrele', $_POST);
    $unite_adi = $_POST['unite_adi'];
    $unite_basligi= $_POST['unite_basligi'];

    $kontrol = $crud->sec('unite_adi','uniteler',"WHERE unite_adi = '$unite_adi'");

    if($kontrol){
        $unite_kontrol = "Bu Ünite Zaten Mevcut";
    }else{
        $sonuc = $crud->ekle('uniteler', 'unite_adi,Baslik', "'$unite_adi','$unite_basligi'");
        if ($sonuc == 'Basarıyla Eklendi') {
            $unite_kontrol = "Ünite Başarıyla Eklendi";
             header('Refresh:1; url=anasayfa');
        } else {
            $error = 'Sistemsel bir hata oluştu lütfen ilgili kişilere bildiriniz.';
        }
    }
}

/**ÜNİTE SİLME POSTU*/
if (isset($_POST['unite_sil'])) {
    array_map('filtrele', $_POST);
    $silinecek_unite = $_POST['silinecek_unite'];

    $sil_sonuc = $crud->sil('uniteler',"unite_id = $silinecek_unite");
    if ($sil_sonuc == 'Basarıyla Silindi') {
        $unite_kontrol2 = "Ünite Başarıyla Silindi";
        header('Refresh:1; url=anasayfa');
    } else {
        $error = 'Sistemsel bir hata oluştu lütfen ilgili kişilere bildiriniz.';
    }
}

require adminview('uniteler');