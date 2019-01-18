<?php
if(!isset($_SESSION['oturum'])){
    header("Location:index");
    exit();
}
$id=$_SESSION['id'];
$sonuc=$crud->sec('*','yonetici',"WHERE id='$id'");
require  adminview('profil');