<?php
function controller($contollerName){
$contollerName= strtolower($contollerName);
return PATH.'/system/controller/'.$contollerName.'.php';
}
function view($viewName){
    $viewName= strtolower($viewName);
    return PATH.'/system/view/'.$viewName.'.php';
}
function route($index){
    global  $route;
    return isset($route[$index]) ? $route[$index] : false;

}
function  filtrele($post){
    return htmlspecialchars(trim($post));
}
function tel($tel){
    $no=ltrim($tel,'0');
    $say= strlen($no);
    if($say!=10){
        return true;
    }
    else{
        return false;
    }
}
function turkcekarakterkontrol ($post){
    $tr = array('ş','Ş','ı','İ','ğ','Ğ','ü','Ü','ö','Ö','Ç','ç');
    $eng = array('s','s','i','i','g','g','u','u','o','o','c','c');
    $s = str_replace($tr,$eng,$post);
    if($s !=$post){
        return false;
    }
    else{
        return true;
    }

}
function getparcala($get){
    $parcalanan=explode('_',$get);
    return $parcalanan;
}
function post ($post){
    if($_POST[$post]){
        return $_POST[$post];
    }else{
        return false;
    }

}