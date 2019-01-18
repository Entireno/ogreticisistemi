<?php
if(!isset($_SESSION['ogroturum'])){
    header("Location:index");
    exit();
}
$sayac=1;
$id=$_SESSION['id'];
$sonuc=$crud->sec('*','ogrenci',"WHERE id=$id");
$puan=$crud->sec('Count(puan) as puan','egitim',"Where o_id='$id'");
$ogr_say=$crud->sec('Count(id) as ogrenci','ogrenci');
$siralama=$crud->sec('Count(puan) as sira','egitim','Group by o_id');

foreach ($siralama as $sira){
    if($puan[0]['puan']<$sira['sira']){
        $sayac++;
    }
}
require view('profil');