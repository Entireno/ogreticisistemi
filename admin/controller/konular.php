<?php
if (!isset($_SESSION['oturum'])) {
    header("Location:index");
    exit();
}
if (isset($_POST['konu_ekle'])) {
    array_map('filtrele', $_POST);

    $konu_unitesi = $_POST['unite'];
    $konu_basligi = $_POST['konu_basligi'];
    $konu_icerigi = $_POST['konu_icerigi'];
    $video_linki = $_POST['video_linki'];

    $konu_ekle = $crud->ekle('konular', 'konu_unitesi,konu_basligi,konu_icerigi,video_linki', "'$konu_unitesi','$konu_basligi','$konu_icerigi','$video_linki'");

    if ($konu_ekle == 'Basarıyla Eklendi') {
        $kontrol = "Konu Başarıyla Eklenmiştir";
        header('Refresh:1; url=anasayfa');
    } else {
        $error = 'Sistemsel bir hata oluştu lütfen ilgili kişilere bildiriniz.';
    }
}
require adminview('konular');