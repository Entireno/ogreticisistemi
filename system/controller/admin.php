<?php

if(!route(1)){
    $route[1]='index';
}


if (!file_exists(admincontroller(route(1)))){
    $route[1]='index';
}
require admincontroller(route(1));