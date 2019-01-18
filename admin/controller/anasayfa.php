<?php
if(!isset($_SESSION['oturum'])){
    header("Location:index");
    exit();
}
  $sonuc=$crud->sec('COUNT(id)as ogrencisay','ogrenci');
  $unite=$crud->sec('*','uniteler');
  $siralama=$crud->sec('Count(puan) as sira,o_id','egitim','Group by o_id ORDER BY sira DESC LIMIT 1');
  $eniyi=$siralama[0]['o_id'];
  $eniyiogrenci=$crud->sec('ad,soyad','ogrenci',"WHERE id=$eniyi");
  $adsoyad=$eniyiogrenci[0]['ad'].' '.$eniyiogrenci[0]['soyad'];
  $eniyipuan=$crud->sec('count(puan) as puan','egitim',"WHERE o_id='$eniyi'");
require adminview('anasayfa');