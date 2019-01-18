<?php
if(!isset($_SESSION['ogroturum'])){
    header("Location:index");
    exit();
}
if (isset($_GET['sayfa']))
{
$parcalanan=$_GET['sayfa'];
}
$sonuc=$crud->sec('*','konular',"WHERE konu_unitesi='$parcalanan'");
require view('unite');