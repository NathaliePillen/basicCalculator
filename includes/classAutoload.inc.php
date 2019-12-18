<?php
spl_autoload_register('myAutoLoader');

function myAutoLoader($className){
    $url = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

    if (strpos($url, 'includes')) {
        $path="../classes/";
    }

    else {
        $path="classes/";
    }
    
    $extension = '.class.php';
    $fullPath = $path.$className.$extension;
    require_once $fullPath;
}