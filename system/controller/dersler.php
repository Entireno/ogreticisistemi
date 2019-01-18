<?php
if(!isset($_SESSION['ogroturum'])){
    header("Location:index");
    exit();
}
$sonuc=$crud->sec('*','uniteler');
require view('dersler');