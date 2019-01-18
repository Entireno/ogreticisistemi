<?php
if(!isset($_SESSION['ogroturum'])){
    header("Location:index");
    exit();
}

$sayfa=$_GET['sayfa'];
if(!$sayfa){
    header("Location:".site_url('profil')."");
}
$sonuc=$crud->sec('*','konular',"WHERE konu_id='$sayfa'");
$id=$_SESSION['id'];

$son=$crud->sec('*','egitim',"WHERE o_id='$id' ORDER BY id DESC LIMIT 1");
$sonzaman=$son[0]['zaman'];
$simdikizaman=time();
$zaman=$simdikizaman-strtotime($sonzaman);


    if($simdikizaman-strtotime($sonzaman)>300){
    $ekle=$crud->ekle("egitim","o_id,puan,seviye","$id,1,$sayfa");
    }
$ileri;
$geri;

$siralama=$crud->sec('konu_id','konular',"ORDER BY konu_id ASC");
    foreach ($siralama as $sira){
        if ($sira['konu_id']<$sayfa){
            $geri=$sira['konu_id'];
        }
    }
foreach ($siralama as $sira){
    if ($sira['konu_id']>$sayfa){
        $ileri=$sira['konu_id'];
        break;
    }
}

require view('dersizle');