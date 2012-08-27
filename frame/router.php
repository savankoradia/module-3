<?php

ini_set('display_errors',0);

$url = $_GET['url'];
if ($url == '')
    $url = 'index/index';
if($url=='index')
    $url = 'index/index';
$url = explode('/', $url);
//print_r($url);


require 'controllers/' . $url[0] . '.php';
$controller = new $url[0];

if (isset($url[2])) {
    if (method_exists($controller, $url[1])) {

        $controller->{$url[1]}($url[2]);
    } else {
        echo '<b>Application Error</b>';
    }
} else {

   if(isset($url[1]))
   {
    if (method_exists($controller, $url[1])) {

        $controller->{$url[1]}();
    } else {
        echo '<b>Application Error</b>';
    }
   }
}



    
