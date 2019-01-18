<?php
function admincontroller($contollerName){
    $contollerName= strtolower($contollerName);
    return PATH.'/admin/controller/'.$contollerName.'.php';
}
function adminview($viewName){
    $viewName= strtolower($viewName);
    return PATH.'/admin/view/'.$viewName.'.php';
}
function admin_url($url=false){
    return URL.'/admin/'.$url;
}
function admin_public_url($url=false){
    return URL.'/admin/public/'.$url;
}
