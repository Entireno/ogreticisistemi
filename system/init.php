<?php
session_start();
ob_start();


/** Yardımcı fonksiyonları yüklemek için*/
foreach (glob(__DIR__.'/helper/*.php') as $helper){
    require  $helper;
}

/** Class dosyaları otomatik yüklenecek*/
function ClassLoader($className){
 require  __DIR__.'/classes/'.strtolower($className).'.php';
}
spl_autoload_register('ClassLoader');
$config=require 'config.php';

$crud=new DB($config['db']['host'],$config['db']['name'],$config['db']['user'],$config['db']['pass']);
